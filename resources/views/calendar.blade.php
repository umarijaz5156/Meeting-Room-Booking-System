@extends('layouts.app')

@section('content')
    <div class="container">

        <div>

            <div class="responsive_calander">
                <div class="calendar_wrapper mt-0">
                    <div class="mini_calendar_wrapper">
                        <div id="calendar-a"></div>
                        <div id="calendar-stats"></div>
                    </div>

                    <div class="tui_calendar_wrapper">
                        <div>

                            <div id="calendar" style="height: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <!-- If you use the default popups, use this. -->
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.css" />
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css" />
    {{-- end tui links --}}
    <!-- /* Font Awsome Cdn */ -->
    <link href="https://cdn.jsdelivr.net/gh/duyplus/fontawesome-pro/css/all.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/common.css') }}">

    <!-- In your Blade file -->
    <script></script>
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


    <script src="{{ asset('js/common.js') }}"></script>
@endsection
