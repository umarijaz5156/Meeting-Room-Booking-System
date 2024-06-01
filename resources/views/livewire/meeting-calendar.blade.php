<div>

    {{-- tui links --}}
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <!-- If you use the default popups, use this. -->
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.css" />
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css" />
    {{-- end tui links --}}
    <!-- /* Font Awsome Cdn */ -->
    <link href="https://cdn.jsdelivr.net/gh/duyplus/fontawesome-pro/css/all.min.css" rel="stylesheet" type="text/css" />

    <style>
        .red-border {
            border-color: red !important;
        }

        ul {
            padding-left: 0rem !important;
        }

        .main_wrapper {
            padding: 32px 20px;
        }

        .primar_color {
            color: #5271ff;
        }

        /*======== Tabs Css =========*/
        .custom_tabs_case {
            margin-top: 71px;
        }

        .case_tabs_btn.active {
            border-radius: 5px !important;
            color: white;
        }

        .case_tabs_btn {
            width: 160px;
            color: rgba(0, 0, 0, 0.8);
            font-size: 16px;
            font-weight: 500;
        }



        .case_tab_content {
            border-radius: 10px;
            background: rgba(213, 216, 220, 0.16);
            padding-block: 59px;
            padding-inline: 62px;
            position: relative;
        }



        .case_information_box_title {
            position: relative;
            padding-left: 16px;
        }


        .case_information_box_title h3 {
            color: rgba(0, 0, 0, 0.8);
            font-size: 20px;
            font-weight: 600;
        }

        .case_information_box_list ul {
            text-decoration: none;
            list-style: none;
            margin-top: 32px;
        }

        .list_Info p {
            color: rgba(0, 0, 0, 0.8);
            font-size: 17px;
            font-weight: 600;
        }

        .list_Info span {
            width: 60%;
            color: rgba(0, 0, 0, 0.6);
            font-size: 18px;
            font-weight: 400;

        }

        .list_Info_other span {
            width: 60%;
            color: rgba(0, 0, 0, 0.6);
            font-size: 18px;
            font-weight: 400;
            text-align: end;
        }

        .list_Info_setting span {
            text-align: center;
        }

        .list_Info_setting_2 span {
            text-align: end;
            padding-right: 20%;
        }

        .active-scroll span {
            border-radius: 5px;
            background: #f8f9f9;
            padding: 16px;
            height: 120px;
            overflow-y: auto;
            scrollbar-gutter: stable;
        }

        .active-scroll span::-webkit-scrollbar {
            width: 7px;
        }

        .active-scroll span::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.04);
            border-radius: 5px;
        }

        .active-scroll span::-webkit-scrollbar-thumb {
            background: rgb(217, 217, 217);
            border-radius: 5px;
        }

        .custom-scroll::-webkit-scrollbar {
            width: 7px;
        }

        .custom-scroll::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.04);
            border-radius: 5px;
        }

        .custom-scroll::-webkit-scrollbar-thumb {
            background: rgb(217, 217, 217);
            border-radius: 5px;
        }

        .case_opponents_box {
            border-radius: 10px;
            background: #fff;
            padding-block: 34px;
            padding-inline: 26px;
            height: 100%;
            margin-block: 1rem;
            height: 520px;
            overflow-x: hidden;
            overflow-y: auto;

        }

        .chevron-thin {
            border-color: black !important;
        }



        .Opponents_title h3 {
            color: rgba(0, 0, 0, 0.8);
            font-size: 20px;
            font-weight: 600;
        }

        .Opponents_list h4 {
            color: rgba(0, 0, 0, 0.8);
            font-size: 16px;
            font-weight: 600;
        }

        .Opponents_list ul {
            text-decoration: none;
            list-style: none;
            margin-top: 32px;
        }

        .Opponents_list ul li {
            padding: 16px;
            background: #f8f9f9;
            border-radius: 10px;
            margin-bottom: 16px;
        }

        .Opponents_list .Opponents_list_info span {
            width: 65%;
            color: rgba(0, 0, 0, 0.6);
            font-size: 16px;
            font-weight: 400;
        }

        .action_btn {
            color: rgba(0, 0, 0, 0.30);
        }

        .custom_table .table td,
        .table th {
            padding: 0.5rem;
        }

        .thead_light {
            border-radius: 10px !important;
            background: #F8F9F9;
        }

        @media screen and (max-width: 767px) {
            .case_tab_content {
                padding: 16px;
            }

            .list_Info_other span {

                text-align: left !important;
            }

            .list_Info_setting span {
                text-align: left !important;
            }

            .list_Info_setting_2 span {
                text-align: left !important;
                padding-right: 0% !important;
            }

            .custom_table {
                overflow-x: auto;
            }

            .custom_table table {
                width: 400px;
            }

            .list_Info {
                flex-direction: column;
                margin-top: 1rem;
            }

            .list_Info span {
                width: 100%;
            }

            .list_Info p {
                margin-bottom: 0.5rem;
            }
        }

        ul li {
            padding: 3px;
        }

        .edit_btn_view {
            float: right;
            position: absolute;
            top: 0;
            right: 0;
        }

        @media only screen and (max-width: 600px) {
            ul {
                padding: 0px !important;
            }

            .edit_btn_view {
                top: -14px !important;
            }
        }

        .table td,
        .table th {
            white-space: initial !important;
        }

        /*======== Tabs Css =========*/
        /* timeline and calendar css */
        .color-calendar.basic {
            --cal-color-primary: white;
            --cal-font-family-header: "Poppins", sans-serif;
            --cal-font-family-weekdays: "Poppins", sans-serif;
            --cal-font-family-body: "Poppins", sans-serif;
            --cal-drop-shadow: 0 7px 30px -10px rgba(150, 170, 180, 0.5);
            --cal-border: none;
            --cal-border-radius: 0.5rem;
            --cal-header-color: white;
            --cal-weekdays-color: black;
            border-radius: var(--cal-border-radius);
            box-shadow: none;
            color: var(--cal-color-primary);
            background-color: transparent;
            border: var(--cal-border);
        }

        .color-calendar.basic .calendar__weekdays .calendar__weekday {
            color: var(--cal-color-primary);
            opacity: 0.2;
        }

        .color-calendar.basic .calendar__days .calendar__day-today .calendar__day-box {
            border-radius: 99rem;
        }

        .color-calendar.basic .calendar__days .calendar__day-box {
            border-radius: 99rem;
        }

        .color-calendar.basic .calendar__days .calendar__day-selected .calendar__day-box {
            border-radius: 99rem;
            background-color: #5271ff;
            opacity: 1;
            box-shadow: none;
        }

        .color-calendar.basic .calendar__arrow-inner::before {
            border-width: 0.2em 0.2em 0 0;
        }

        .calendar__month {
            font-size: 1.5rem;
            color: white;
            font-weight: 600;
        }

        .calendar__year {
            color: #5271ff;
            font-size: 1.5rem;
            font-weight: 400;
        }

        .myaccordion {
            margin-top: 80px;
        }

        .myaccordion .timeline_tabs {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: start;
        }

        .timeline_tabs .content_area {
            flex: 1;
        }

        .timeline_tabs .card {
            width: 100%;
            border-radius: 10px;
            background: rgba(141, 195, 19, 0.08);
            box-shadow: none;
            border: none;
            position: relative;
            margin-bottom: 30px;
        }

        .content_area {
            position: relative;
            padding-left: 40px;
        }

        .timeline_wrapper_content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            /* background-color: #8dc313; */
            width: 26px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .timeline_wrapper_content_mid::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            /* background-color: #8dc313; */
            width: 26px;
        }

        .timeline_wrapper_content_bottom::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            /* background-color: #8dc313; */
            width: 26px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .timeline_wrapper_one::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            /* background-color: #8dc313; */
            width: 26px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .timeline_tabs .card .card-header {
            border-bottom: none;
            background-color: transparent;
            padding: 17px;
        }

        .timeline_tabs .card .card-header h2 .timeline_tabs_title {
            font-size: 1.2rem;
            border-bottom: 2px solid #8dc313;
            padding-bottom: 4px;
        }

        .myaccordion .btn-link:hover,
        .myaccordion .btn-link:focus {
            text-decoration: none;
            box-shadow: none;
        }

        .myaccordion .btn-link {
            width: 48px;
            height: 48px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgba(0, 0, 0, 0.8);
            font-weight: 500;
            font-size: 1rem;
            border-radius: 5px;
            border: 2px solid #8dc313;
        }

        .myaccordion .fa-stack {
            font-size: 18px;
        }

        .timeline_tabs .timeline_date {
            /* position: absolute;
                                          top: 0;
                                          left: 0; */
            border: 1px dashed #8dc313;
            border-radius: 999px;
            width: 84px;
            height: 84px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 6px;
        }

        .timeline_tabs .timeline_date .timeline_date_inner {
            border: 1px solid #d9d9d9;
            border-radius: 999px;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .timeline_tabs .timeline_date .timeline_date_inner h4 {
            font-weight: 400;
            font-size: 1rem;
            margin-bottom: 0;
        }

        .timeline_tabs .timeline_date .timeline_date_inner h4 span {
            font-weight: 700;
            font-size: 1.3rem;
        }

        .timeline_date_inner_calander {
            position: absolute;
            top: -14px;
            right: -14px;
            border-radius: 999px;
            fill: #fff;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.05));
            width: 32px;
            height: 32px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            color: #8dc313;
        }

        .changes_log_detail ul li {
            margin-bottom: 0.8rem;
        }

        /* Calendar Events Css */
        .calendar_wrapper {
            margin-top: 80px;
            display: flex;
            gap: 0.5rem;
        }

        @media screen and (max-width: 767px) {
            .calendar_wrapper {
                flex-direction: column;
            }

            .has-search {
                margin-right: auto;
                margin-left: 0 !important;
            }
        }

        .tui_calendar_wrapper {
            flex: 1;
        }

        .toastui-calendar-panel.toastui-calendar-time {
            height: 91% !important;
        }

        /* @media screen and (max-width: 1200px) {
                                          .calendar_wrapper {
                                            max-width: 1580px;
                                            width: 100%;
                                            flex-direction: column;
                                          }
                                          .toastui-calendar-panel.toastui-calendar-time{
                                            height: 600px !important;
                                          }
                                         } */
        .calendar_wrapper .mini_calendar_wrapper {
            background-color: #373c45;
            grid-column: span 3;
            padding: 1rem;
        }

        #calendar-a {
            width: max-content;
            margin: auto;
        }

        .Today_todo_list .todo_list_title h6 {
            color: #5271ff;
            text-align: center;
            font-weight: 700;
        }

        .All_day_meeting_list .meeting_list_title {
            display: inline-flex;
            padding: 0px 6px;
            align-items: flex-start;
            gap: 10px;
            border-radius: 6px;
            background: #5271ff;
            color: white;
            font-weight: 500;
            padding: 4px;
        }

        .all_day_meeting_list_details ul {
            list-style-type: none;
            margin-top: 1rem;
        }

        .all_day_meeting_list_details ul li {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .all_day_meeting_list_details ul li::before {
            content: '';
            position: absolute;
            top: 3px;
            left: 0;
            background-color: #8dc313;
            width: 0.7rem;
            height: 0.7rem;
            border-radius: 999px;
        }

        .all_day_meeting_list_details ul li .allday_meeting_time {
            color: #a1a1aa;
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 0.5rem;
        }

        .all_day_meeting_list_details ul li .allday_meeting_time span {
            background-color: #a1a1aa;
            border-radius: 999px;
            width: 1.2rem;
            height: 1.2rem;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
        }

        .has-search {
            max-width: 285px;
            width: 100%;
            margin-left: auto;
            padding: 10px;
            position: relative;
        }

        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }

        .has-search .form-control {
            background-color: #F4F4F5;
        }

        .tui-full-calendar-vlayout-area.tui-view-48.tui-full-calendar-vlayout-container>div:nth-child(1),
        .tui-full-calendar-vlayout-area.tui-view-48.tui-full-calendar-vlayout-container>div:nth-child(2),
        .tui-full-calendar-vlayout-area.tui-view-48.tui-full-calendar-vlayout-container>div:nth-child(3) {
            display: none;
        }

        .color-calendar .calendar__picker .calendar__picker-year-selected,
        .color-calendar .calendar__picker .calendar__picker-month-selected {
            background-color: #5271ff;
        }

        @media screen and (min-width: 768px) and (max-width: 1200px) {
            #calendar {
                width: 850px;
            }

            .tui_calendar_wrapper {
                overflow-x: scroll;
            }

            .has-search {
                margin-right: auto;
                margin-left: 0;
            }
        }



        .tui-full-calendar-section-state {
            display: none;
        }

        .tui-full-calendar-popup-section:nth-child(4) {
            margin-bottom: 10px;
        }

        @media screen and (max-width: 640px) {
            .tui-full-calendar-popup-container {
                min-width: 100%;
                display: flex;
                justify-content: start;
                align-items: start;
                flex-direction: column;
            }

            .tui-full-calendar-popup-section {
                width: 100%;
                display: flex;
                justify-content: start;
                align-items: start;
            }

            .tui-full-calendar-section-title input {
                width: 100%
            }

            .tui-full-calendar-popup-section-item.tui-full-calendar-section-title,
            .tui-full-calendar-popup-section-item.tui-full-calendar-section-location {
                display: flex;
                justify-content: start;
                align-items: center;
            }

            .tui-full-calendar-popup-section-item.tui-full-calendar-section-location input {
                width: 100%
            }

            .tui-full-calendar-section-date-dash {
                display: none;
            }

            .tui-full-calendar-popup-section:nth-child(4) {
                flex-direction: column;
                gap: 0.5rem;
                margin-bottom: 0px;
            }

            .tui-full-calendar-popup-section.tui-full-calendar-dropdown.tui-full-calendar-close.tui-full-calendar-section-state {
                display: none;
            }
        }

        .card-drag:hover {
            box-shadow: 0px 4px 15px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
            cursor: grab;
        }
    </style>
    <style>
        @media (max-width: 850px) {
            .nav-title {
                width: 70%;
            }

            .middel__footer {
                margin-right: 9%;
            }
        }

        @media (min-width: 1200px) {

            .navbar-expand-xl,
            .navbar-collapse {
                justify-content: end;
            }

            .navbar {
                display: flex !important;
            }

            .navbar-nav {
                gap: 28px;
                margin-right: 28px;
            }
        }

        @media (min-width: 1400px) {
            .navbar-nav {
                gap: 38px;
                margin-right: 38px;
            }
        }

        @media screen and (max-width: 1200px) {
            .navbar-nav {
                flex-direction: row;
                gap: 1rem;
                height: max-content;
            }

            .header .navbar-nav .nav-item a {
                font-size: 1.5rem;
            }
        }

        @media screen and (max-width: 767px) {
            .cardReviews {
                font-size: 0.8rem;
            }

            .cardFooter span {
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 767px) {
            .hideBreadCrumb {
                display: none;
            }
        }
    </style>

    <style>
        .calendar_wrapper .mini_calendar_wrapper {
            background-color: #373c45;
            grid-column: span 3;
            padding: 1rem;
        }

        /*======== Tabs Css =========*/
        /* timeline and calendar css */
        .color-calendar.basic {
            --cal-color-primary: white;
            --cal-font-family-header: "Poppins", sans-serif;
            --cal-font-family-weekdays: "Poppins", sans-serif;
            --cal-font-family-body: "Poppins", sans-serif;
            --cal-drop-shadow: 0 7px 30px -10px rgba(150, 170, 180, 0.5);
            --cal-border: none;
            --cal-border-radius: 0.5rem;
            --cal-header-color: white;
            --cal-weekdays-color: black;
            border-radius: var(--cal-border-radius);
            box-shadow: none;
            color: var(--cal-color-primary);
            background-color: transparent;
            border: var(--cal-border);
        }

        .color-calendar.basic .calendar__weekdays .calendar__weekday {
            color: var(--cal-color-primary);
            opacity: 0.2;
        }

        .color-calendar.basic .calendar__days .calendar__day-today .calendar__day-box {
            border-radius: 99rem;
        }

        .color-calendar.basic .calendar__days .calendar__day-box {
            border-radius: 99rem;
        }

        .color-calendar.basic .calendar__days .calendar__day-selected .calendar__day-box {
            border-radius: 99rem;
            background-color: #5271ff;
            opacity: 1;
            box-shadow: none;
        }

        .color-calendar.basic .calendar__arrow-inner::before {
            border-width: 0.2em 0.2em 0 0;
        }

        .calendar__month {
            font-size: 1.5rem;
            color: white;
            font-weight: 600;
        }

        .calendar__year {
            color: #5271ff;
            font-size: 1.5rem;
            font-weight: 400;
        }

        /* css */
        * {
            padding: 0;
            margin: 0;
        }

        .sideBar {
            display: none;
        }

        @media screen and (min-width: 1024px) {
            .sideBar {
                display: block;
            }
        }

        .welcome_text {
            color: #18181B;
            font-size: 1.2rem;
        }

        .welcome_text span {
            color: #71717A;
        }

        .dashboard_cards {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1rem;
            margin-top: 4rem;
        }

        @media screen and (min-width: 768px) {
            .dashboard_cards {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 1rem;
                margin-top: 4rem;
            }
        }

        @media screen and (min-width: 1200px) {
            .dashboard_cards {
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                gap: 1rem;
                margin-top: 4rem;
            }
        }

        .dashboard_main_wrapper {
            padding: 46px 18px;
        }

        .dashboard_cards .cards_box {
            border: 1px solid #5271FF;
            border-radius: 0.5rem;
            padding: 20px 15px 16px 15px;
            display: flex;
            justify-content: space-between;
            gap: 0.6rem;
            align-items: start;
            flex-direction: column;
        }


        .cards_box .card_title {
            color: rgba(0, 0, 0, 0.50);
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .cards_box .card_info {
            color: rgba(0, 0, 0, 0.80);
            font-size: 21px;
            font-weight: 700;
            line-height: 32px;
        }

        .widget_wrapper {
            margin-top: 2rem;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1rem;
        }



        @media screen and (min-width:1200px) {
            .widget_wrapper {
                grid-template-columns: repeat(12, 1fr);
            }

            .case_task_holder {
                grid-column: span 5 / span 4;
            }

            .activity_logged_holder {
                grid-column: span 4 / span 4;
            }

            .calendar_widget_holder {
                grid-column: span 3 / span 4;
            }

        }


        .mini_calendar_wrapper {
            border-radius: 10px;
            border: 0.5px solid #D9D9D9;
        }

        .widget_holder_in {
            width: 100%;
            padding: 28px 20px;
            border-radius: 10px;
            border: 0.5px solid #D9D9D9;
            background: #FFF;
        }

        .widget_title {
            color: rgba(0, 0, 0, 0.80);
            font-size: 16px;
            font-weight: 700;
            line-height: 18px;
            /* 112.5% */
        }

        .line-clamp-1 {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            overflow: hidden;
        }

        .Priority_table_text {
            color: #818181;
        }

        .widget_holder_in.recent_activity {
            flex: 1;
            display: flex;
            justify-content: start;
            align-items: start;
            flex-direction: column;
        }

        .activities_log_status {
            margin-top: 26px;
            width: 100%;
            flex: 1;
            overflow-y: auto;
            /* overflow-y: scroll; */
        }

        .recent_activity_links {
            text-decoration: none;

        }

        .recent_activity_links:hover {
            color: inherit;
            text-decoration: underline;
            padding-left: 2px !important;

        }

        .recent_activity_time {
            color: #4CAF50;
            font-size: 13px;
            font-style: italic;
            font-weight: 700;
            line-height: normal;
            text-wrap: nowrap;

        }

        #chart_types {
            width: max-content !important;
            padding-right: 2rem !important;
        }

        #time_range {
            width: max-content !important;
            padding-right: 2rem !important;
        }

        .sortable-inner-container {
            height: 100%;
            display: flex;
            justify-content: start;
            align-items: start;
            flex-direction: column;
            gap: 2rem;
        }

        /* calendar-acalendar-a */
        #calendar-a .color-calendar {
            box-shadow: none;
        }

        #calendar-stats {
            padding: 1rem;

        }

        .todo_list_title h6 {
            color: #5271FF;
        }

        .color-calendar.basic .calendar__days .calendar__day-selected .calendar__day-box {
            background-color: #5271FF !important;
        }

        .calendar__day-bullet {
            background-color: #5271FF !important;

        }

        .calendar__day.calendar__day-active.calendar__day-event.calendar__day-selected .calendar__day-bullet {
            background-color: white !important;

        }

        .calendar__month {
            color: black;
        }

        .allday_meeting_time {
            color: #818181;
        }

        /* #818181 */
    </style>

    <div class="responsive_calander">
        <div class="calendar_wrapper mt-0">
            <div class="mini_calendar_wrapper">
                <div id="calendar-a"></div>
                <div id="calendar-stats"></div>
            </div>

            <div class="tui_calendar_wrapper">
                <div>
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div id="calendar" style="height: 100%"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js"></script>
    <script src="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.min.js"></script>
    <script src="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.min.js"></script>
    <script src="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
    <!-- Add this line before any scripts that use jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx-populate/1.21.0/xlsx-populate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.5.0/mammoth.browser.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>




    <script>
        var isUpdate = false;
        $(document).on('click', '.tui-full-calendar-popup-save', function() {
            isUpdate = true;
        });
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
            useCreationPopup: true,
            useFormPopup: true,
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
            timezone: {
                zones: [{
                    timezoneName: 'Asia/Karachi',
                }, ],
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
        calendar.on('beforeCreateSchedule', (eventData) => {

            const startDateISO = eventData.start._date;

            // const startSetDate = resetDateTime(startDateISO);
            const startDate = new Date(startDateISO);

            // console.log(formattedStartDate); return false;
            eventData.start = startDate;

            const endDateISO = eventData.end._date;
            // const endSetDate = resetDateTime(endDateISO);

            const endDate = new Date(endDateISO);


            eventData.end = endDate;
            // caseId
            const userTimezoneOffset = new Date().getTimezoneOffset(); // Time zone offset in minutes
            const gmtOffsetMinutes = -startDateISO.getTimezoneOffset();
            var utcmint = utcOffsetToMinutes(userTimeZoneUTC);
            const date = new Date(eventData.start);

            const addedMinutes = (gmtOffsetMinutes) - (utcmint);
            const newDate = new Date(date.getTime() + addedMinutes * 60 * 1000);


            let url = '{{ route('google.calendar.create-event') }}';
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    eventData: eventData,
                    _token: $('meta[name="csrf-token"]').attr('content')

                },
                success: function(response) {
                    if (response) {
                        updateCalender();
                        // .alert-success to show success message
                        if (response.message) {
                            $('.alert-success').show();
                            $('.alert-success').html(response.message);
                        } else {

                            $('.alert-danger').show();
                            $('.alert-danger').html(response.error);
                        }
                    } else {
                        console.log('swdwouehyw');
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })
        });

        calendar.on('beforeUpdateSchedule', (eventData) => {

            setTimeout(function() {
                const updatedEvent = {
                    id: eventData.schedule.id,
                    calendarId: eventData.schedule.calendarId,
                    title: eventData.changes.title || eventData.schedule.title,
                    category: eventData.changes.category || eventData.schedule.category,
                    start: eventData.changes.start ? eventData.changes.start : eventData.schedule.start,
                    end: eventData.changes.end ? eventData.changes.end : eventData.schedule.end,
                };

                // Format start date if changes are provided
                if (eventData.changes.start) {
                    const startDateISO = eventData.changes.start._date;
                    var multiple = isUpdate ? 2 : 1;

                    const startSetDate = resetDateTime(startDateISO, multiple);
                    const startDate = new Date(startSetDate);
                    const formattedStartDate = startDate.toLocaleString('en-US', {
                        timeZone: userTimezone
                    });
                    updatedEvent.start = formattedStartDate;
                } else {

                    const startDateISO = eventData.schedule.start._date;
                    const startSetDate = resetDateTime(startDateISO, 1);
                    const startDate = new Date(startSetDate);
                    const formattedStartDate = startDate.toLocaleString('en-US', {
                        timeZone: userTimezone
                    });
                    updatedEvent.start = formattedStartDate;
                }

                // Format end date if changes are provided
                if (eventData.changes.end) {
                    const endDateISO = eventData.changes.end._date;
                    var multiple = isUpdate ? 2 : 1;

                    const endSetDate = resetDateTime(endDateISO, multiple);

                    const endDate = new Date(endSetDate);
                    const formattedEndDate = endDate.toLocaleString('en-US', {
                        timeZone: userTimezone
                    });

                    updatedEvent.end = formattedEndDate;
                } else {
                    const endDateISO = eventData.schedule.end._date;
                    const endSetDate = resetDateTime(endDateISO, 1);
                    const endDate = new Date(endSetDate);
                    const formattedEndDate = endDate.toLocaleString('en-US', {
                        timeZone: userTimezone
                    });

                    updatedEvent.end = formattedEndDate;
                }
                multiple = 1;
                isUpdate = false;

                // console.log(updatedEvent); return false;
                let url = '{{ route('google.calendar.update-event') }}';

                // Perform an AJAX request to update the event on the server
                $.ajax({
                    url: url, // Replace with your update event route
                    method: 'POST',
                    dataType: 'json',
                    data: updatedEvent,
                    success: function(response) {
                        if (response) {
                            updateCalender();
                            // .alert-success to show success message
                            if (response.message) {
                                $('.alert-success').show();
                                $('.alert-success').html(response.message);
                            } else {

                                $('.alert-danger').show();
                                $('.alert-danger').html(response.error);
                            }
                        } else {
                            console.error('Error updating event on the server');
                        }
                    },
                    error: function(error) {
                        console.error('AJAX error:', error);
                    }
                });
            }, 1000);
        });


        calendar.on('beforeDeleteSchedule', (eventData) => {
            console.log(eventData.schedule.id);
            // url 
            let url = '{{ route('google.calendar.delete-event') }}';
            // Perform an AJAX request to delete the event on the server
            $.ajax({
                url: url, // Replace with your delete event route
                method: 'POST',
                dataType: 'json',
                data: {
                    id: eventData.schedule.id,
                    calendarId: eventData.schedule.calendarId,
                },
                success: function(response) {
                    if (response) {
                        updateCalender();
                        // .alert-success to show success message
                        if (response.message) {
                            $('.alert-success').show();
                            $('.alert-success').html(response.message);
                        } else {

                            $('.alert-danger').show();
                            $('.alert-danger').html(response.error);
                        }
                    } else {
                        console.error('Error deleting event on the server');
                    }
                },
                error: function(error) {
                    console.error('AJAX error:', error);
                }
            });

        });




        function updateCalender() {
            var url = '/cases/getEvents';
            $.ajax({
                url: url, // Replace with your actual route URL
                type: 'GET',
                dataType: 'json',
                success: function(events) {


                    if (events.redirectTo) {
                        window.location.href = events.redirectTo;
                        return;
                    }
                    const processedEvents = events.map(event => {
                        const startDay = new Date(event.start.dateTime).getDay();
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
                            title: event.summary,
                            category: 'time',
                            start: new Date(event.start.dateTime),
                            end: new Date(event.end.dateTime),
                            color: '#FFFFFF',
                            bgColor: backgroundColor,
                            // Add other properties as needed
                        };
                    });
                    const miniCalEventData = events.map(event => ({
                        id: event.id,
                        name: event.summary,
                        start: new Date(event.start.dateTime.toLocaleString('en-US', {
                            timeZone: userTimezone
                        })),
                        end: new Date(event.end.dateTime.toLocaleString('en-US', {
                            timeZone: userTimezone
                        })),
                        // Add other properties as needed
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
                        var date = new Date(eventData.start.dateTime);
                        var formattedDate = date.toISOString().substring(0,
                            10); // Extract YYYY-MM-DD

                        if (!groupedEvents[formattedDate]) {
                            groupedEvents[formattedDate] = [];
                        }

                        groupedEvents[formattedDate].push({
                            "id": index,
                            "title": eventData.summary || 'Untitled Event',
                            "start_time": eventData.start.dateTime,
                            "end_time": eventData.end.dateTime,
                            "meeting_link": eventData.hangoutLink,
                            // Add other properties as needed
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
                        .getDate()); // Set time to midnight
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
                                    ${events.map(function(event, index) {
                                        var startTime = new Date(event.start_time).toLocaleTimeString('en-US', { timeZone: userTimezone }, { hour: 'numeric', minute: '2-digit' });
                                        var endTime = new Date(event.end_time).toLocaleTimeString('en-US', { timeZone: userTimezone }, { hour: 'numeric', minute: '2-digit' });
                                        return ` <
                                li >
                                <
                                h6 class = "allday_meeting_time" > $ {
                                    startTime
                                } - $ {
                                    endTime
                                } < /h6> <
                            p class = "allday_meeting_info mb-0"
                            style = "color: white;" > $ {
                                event.title
                            } < /p> < /
                            li > `;
                        }).join('')
                } <
                /ul> <
                /div> <
                /div> <
                /div>`;


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

        // Function to update calendar view based on screen width
        function updateCalendarView() {
            var screenWidth = window.innerWidth;
            if (screenWidth < 767) {
                calendar.changeView('day', true) // Switch to day view
            } else {
                calendar.changeView('week', true) // Switch back to week view or any other view you prefer
            }
        }
        // Initial call to set calendar view based on current screen width
        updateCalendarView();
        // Attach event listener to window resize event
        window.addEventListener('resize', function() {
            updateCalendarView();
            // calendar.changeView('day', true)
        });
    </script>




</div>
