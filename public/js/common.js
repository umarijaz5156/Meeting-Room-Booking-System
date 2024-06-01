var isUpdate = false;

var userTimezone = 'Asia/Karachi';
var userTimeZoneUTC = 'Asia/Karachi';

var Calendar2 = window.tui.Calendar;
var calendar = new Calendar2('#calendar', {
    defaultView: 'week',
    taskView: true,
    scheduleView: true,
    template: {
        milestone: function(schedule) {
            return '<span style="color:red;"><i class="fa fa-flag"></i> ' + schedule.title + '</span>';
        },
        task: function(schedule) {
            return '&nbsp;&nbsp;#' + schedule.title;
        },
        allday: function(schedule) {
            return schedule.title + ' <i class="fa fa-refresh"></i>';
        },

    },
    useDetailPopup: true,
    // Set the timezone for TUI Calendar
    timezones: [{
        timezoneName: userTimezone,
    }],
    usageStatistics: false,

    template: {
        // Customize the add event popup
        popupDetailBody: function() {
            // Customize the content of the add event popup
            const content = `
        <p class='button-bg-color'>Update</p>`;
            return content;
        }
    },

});


function utcOffsetToMinutes(utcOffsetString) {
    const sign = utcOffsetString.charAt(0) === '-' ? -1 : 1;
    const [hours, minutes] = utcOffsetString.substr(1).split(':').map(Number);

    return sign * (hours * 60 + minutes);
}

function resetDateTime(date, multi = 2) {
    const gmtOffsetMinutes = -date.getTimezoneOffset();
    var utcmint = utcOffsetToMinutes(userTimeZoneUTC);

    const date2 = new Date(date);
    addedMinutes = multi * ((gmtOffsetMinutes) - (utcmint));
    return new Date(date2.getTime() + addedMinutes * 60 * 1000);

}



updateCalender();

function updateCalender() {

    var url = '/getEvents';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function(events) {

            const eventsMeetings = events;
           
            const processedEvents = events.map(event => {
                const startDay = new Date(event.start_time).getDay();
                let backgroundColor = '';
                let textColor = '#000000'; // Default text color

                switch (startDay) {
                    case 0: // Sunday
                        backgroundColor = '#808080'; // White background
                        break;
                    case 1: // Monday
                        backgroundColor = '#0074D9'; // Blue background
                        break;
                    case 2: // Tuesday
                        backgroundColor = '#FF4136'; // Red background
                        break;
                    case 3: // Wednesday
                        backgroundColor = '#2ECC40'; // Green background
                        break;
                    case 4: // Thursday
                        backgroundColor = '#FF851B'; // Orange background
                        break;
                    case 5: // Friday
                        backgroundColor = '#FFDC00'; // Yellow background
                        break;
                    case 6: // Saturday
                        backgroundColor = '#B10DC9'; // Purple background
                        break;
                    default:
                        break;
                }
                return {
                    id: event.id,
                    calendarId: 'primary',
                    title: event.title,
                    category: 'time',
                    start: new Date(event.start_time),
                    end: new Date(event.end_time),
                    color: '#FFFFFF',
                    bgColor: backgroundColor,
                };
            });
            const miniCalEventData = events.map(event => ({
                id: event.id,
                name: event.summary,
                start: new Date(event.start_time.toLocaleString('en-US', {
                    timeZone: userTimezone
                })),
                end: new Date(event.end_time.toLocaleString('en-US', {
                    timeZone: userTimezone
                })),
            }));
            let calA = new Calendar({
                id: "#calendar-a",
                theme: "basic",
                weekdayType: "long-upper",
                monthDisplayType: "long",
                calendarSize: "small",
                layoutModifiers: ["month-left-align"],
                eventsData: miniCalEventData,
                dateChanged: (currentDate, events) => {
                    console.log("date change", currentDate, events);
                    calendar.setDate(currentDate);
                },
                monthChanged: (currentDate, events) => {
                    console.log("month change", currentDate, events);
                    calendar.setDate(currentDate);
                }
            });
            // SET  TIME ZONE 
            // calA.setTimezone("{{ $userDetail->timezone ?? 'UTC' }}");
            const formattedEvents = processedEvents.map(event => ({
                ...event,
                start: event.start.toLocaleString(),
                end: event.end.toLocaleString(),

            }));
            var groupedEvents = {};

            events.forEach(function(eventData, index) {
                var date = new Date(eventData.start_time);
                var formattedDate = date.toISOString().substring(0,
                    10); // Extract YYYY-MM-DD

                if (!groupedEvents[formattedDate]) {
                    groupedEvents[formattedDate] = [];
                }
                groupedEvents[formattedDate].push({
                    "id": index,
                    "title": eventData.title || 'Untitled Event',
                    "start_time": eventData.start_time,
                    "end_time": eventData.end_time,
                    "meeting_link": eventData.hangoutLink,
                });
            });
            var calendarStats = $('#calendar-stats');
            calendarStats.empty();

            function formatDate(date, format) {
                return new Intl.DateTimeFormat('en-US', {
                    weekday: format
                }).format(date);
            }

            function isSameDay(date1, date2) {
                return (
                    date1.getDate() === date2.getDate() &&
                    date1.getMonth() === date2.getMonth() &&
                    date1.getFullYear() === date2.getFullYear()
                );
            }

            function isTomorrow(date1, date2) {
                var tomorrow = new Date(date2);
                tomorrow.setDate(tomorrow.getDate() + 1);
                return isSameDay(date1, tomorrow);
            }

            var now = new Date();
            var today = new Date(now.getFullYear(), now.getMonth(), now
                .getDate()); 
            var endDate = new Date(today);
            endDate.setDate(endDate.getDate() + 3);

            $.each(groupedEvents, function(date, events) {
                var carbonDate = new Date(date);

                if (carbonDate >= today && carbonDate <= endDate) {
                    var dayLabel = (isSameDay(carbonDate, now)) ?
                        'Today' :
                        (isTomorrow(carbonDate, now)) ?
                        'Tomorrow' :
                        formatDate(carbonDate, 'long');

                    var formattedDate = carbonDate.toLocaleDateString('en-US', {
                        month: 'numeric',
                        day: 'numeric',
                        year: 'numeric'
                    });



                    var eventsHtml = `
                <div class="Today_todo_list">
                    <div class="todo_list_title">
                        <h6>${dayLabel.toUpperCase()} <span style="font-weight: 400;">${formattedDate}</span></h6>
                    </div>
                    <div class="All_day_meeting_list mt-3">
                        <div class="all_day_meeting_list_details">
                            <ul>
                                ${eventsMeetings.map(function(event, index) {
                                    var startTime = new Date(event.start_time).toLocaleTimeString('en-US', { timeZone: userTimezone, hour: 'numeric', minute: '2-digit' });
                                    var endTime = new Date(event.end_time).toLocaleTimeString('en-US', { timeZone: userTimezone, hour: 'numeric', minute: '2-digit' });
                                    var organizerName = event.organizer.name;
                                    var participantsList = event.participants.map(function(participant) {
                                        return participant.name;
                                    }).join(', ');
                                    return `
                                        <li>
                                            <h6 class="allday_meeting_time">${startTime} - ${endTime}</h6>
                                            <p class="allday_meeting_info mb-0" style="color: white;">${event.title}</p>
                                            <p class="allday_meeting_info mb-0" style="color: white;">Organizer: ${organizerName}</p>
                                            <p class="allday_meeting_info mb-0" style="color: white;">Participants: ${participantsList}</p>
                                        </li>`;
                                }).join('')}
                            </ul>
                        </div>
                    </div>
                </div>`;




                    calendarStats.append(eventsHtml);
                }
            });
            calendar.clear();
            calendar.createSchedules(formattedEvents);


        },
        error: function(error) {
            console.error('Error fetching events:', error);
        }
    });
}

function updateCalendarView() {
    var screenWidth = window.innerWidth;
    if (screenWidth < 767) {
        calendar.changeView('day', true)
    } else {
        calendar.changeView('week', true) 
    }
}
updateCalendarView();
window.addEventListener('resize', function() {
    updateCalendarView();
});
