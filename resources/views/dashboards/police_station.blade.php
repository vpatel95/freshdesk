@extends('layouts.dashboard')

@section('title','FreshDesk - Hospital')

@section('breadcrumbs')         
<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="#">FreshDesk</a></li>
            <li><span>Police Station Dashboard</span></li>                        
        </ul>
    </div>
</section>
@endsection

@section('top_nav')
<nav id="top_navigation">
    <div class="container">
        <ul id="icon_nav_h" class="top_ico_nav clearfix">
            <li>
                <a href="{{ route('home') }}">
                    <i class="icon-home icon-2x"></i>
                    <span class="menu_label">Home</span>
                </a>
            </li>
            <li>             
                <a href="{{ route('hospital.appointments') }}">
                    <i class="icon-group icon-2x"></i>
                    <span class="menu_label">Appointment Report</span>
                </a>
            </li>
            <li>             
                <a href="#">
                    <i class="icon-wrench icon-2x"></i>
                    <span class="menu_label">Emergency Accident</span>
                </a>
            </li>
            <li>             
                <a href="#">
                    <i class="icon-wrench icon-2x"></i>
                    <span class="menu_label">Emergency Personal</span>
                </a>
            </li>
            <li>             
                <a href="#">
                    <i class="icon-wrench icon-2x"></i>
                    <span class="menu_label">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
@endsection

@section('content')
<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">
        <div id="main_content">
            <div class="row">
                <div class="col-sm-6 dd_column" id="dd_column_01">
                    <div class="row">
                        <center>
                            <h4>EMERGENCY</h4>
                        </center>
                    </div>
                    @foreach($data['pea'] as $pea)
                        <div class="panel panel-danger dd_widget" id="dd_panel_1">
                            <div class="panel-heading">
                                <h4 class="panel-title">Emergency : Accident</h4>
                            </div>
                            <div class="panel-body-narrow dd_content">
                                <p><b>Notifier</b> : {{ App\UserDetail::find($pea->u_id)->name }}</p>
                                <p><b>Notifier Contact</b> : {{ App\UserDetail::find($pea->u_id)->phone_no }}</p>
                                <p><b>Hospital</b> : {{ App\Hospital::find($pea->h_id)->name }}</p>
                                <p><b>Hospital Contact</b> : {{ App\Hospital::find($pea->h_id)->contact }}</p>
                                <p><b>Hospital Address</b> : {{ App\Hospital::find($pea->h_id)->address_line_1 . ', ' . App\Hospital::find($pea->h_id)->address_line_2 . ', ' . App\Hospital::find($pea->h_id)->city }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-sm-6 dd_column" id="dd_column_02">
                    <div class="row">
                        <center>
                            <h4>FIRST INFORMTION REPORTS</h4>
                        </center>
                    </div>
                    <div class="panel panel-primary dd_widget" id="dd_panel_01">
                        <div class="panel-heading">
                            <h4 class="panel-title">Quick Contacts</h4>
                        </div>
                        <div class="dd_content">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Police</td>
                                        <td>91xxxxxx91</td>
                                    </tr>
                                    <tr>
                                        <td>Ambulance</td>
                                        <td>91xxxxxx91</td>
                                    </tr>
                                    <tr>
                                        <td>ABC</td>
                                        <td>91xxxxxx91</td>
                                    </tr>
                                    <tr>
                                        <td>XYZ</td>
                                        <td>91xxxxxx91</td>
                                    </tr>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="panel panel-default dd_widget" id="dd_panel_06">
                        <div class="panel-heading">
                            <h4 class="panel-title">Personal</h4>
                        </div>
                        <div class="dd_content">
                            <table class="table">
                                <tbody id="nearby">
                                    
                                        <tr>
                                            <td>
                                                <strong>
                                                    <a href="#">Name</a>
                                                </strong>
                                                <p>Disease : disease</p>
                                                <p>Appointment Date : app date</p>
                                            </td>
                                            <td><span class="label label-info">23 Nov</span></td>
                                        </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="footer_space"></div>
@endsection

@section('side-nav')    
<nav id="side_fixed_nav">
            <div class="slim_scroll">
                <div class="side_nav_actions">
                    <a href="javascript:void(0)" id="side_fixed_nav_toggle"><span class="icon-align-justify"></span></a>
                    <div id="toogle_nav_visible" class="make-switch switch-mini" data-on="success" data-on-label="<i class='icon-lock'></i>" data-off-label="<i class='icon-unlock-alt'></i>">
                        <input id="nav_visible_input" type="checkbox">
                    </div>
                </div>
                <ul id="text_nav_side_fixed">
                    <li>
                        <a href="javascript:void(0)"><span class="icon-dashboard"></span>Dashboard</a>
                        <ul>
                            <li><a href="dashboard.html">Dashboard</a></li>
                            <li class="link_active"><a href="dashboard_drag_drop.html">Drag & Drop Dashboard</a></li>
                            <li>
                                <a href="javascript:void(0)">Navigations</a>
                                <ul>
                                    <li><a href="nav_side_accordion.html">Accordion Navigation</a></li>
                                    <li><a href="nav_side_icons.html">Icon Navigation</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="icon-th-list"></span>Forms</a>
                        <ul>
                            <li><a href="form_regular_elements.html">Regular elements</a></li>
                            <li><a href="form_extended_elements.html">Extended elements</a></li>
                            <li><a href="form_multiupload.html">Multiupload</a></li>
                            <li><a href="form_validation.html">Form validation</a></li>
                            <li><a href="wizard.html">Wizard</a></li>
                            <li><a href="wysiwg.html">WYSIWG Editor</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="icon-puzzle-piece"></span>Components</a>
                        <ul>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="charts.html">Charts</a></li>
                            <li><a href="contact_list.html">Contact List</a></li>
                            <li><a href="editable_elements.html">Editable Elements</a></li>
                            <li><a href="file_manager.html">File manager</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="gmaps.html">Google Maps</a></li>
                            <li>
                                <a href="javascript:void(0)">Tables</a>
                                <ul>
                                    <li><a href="datatables.html">Datatables</a></li>
                                    <li><a href="regular_tables.html">Regular</a></li>
                                    <li><a href="slick_grid.html">Slick Grid</a></li>
                                    <li><a href="table_responsive.html">Responsive Table</a></li>
                                </ul>
                            </li>
                            <li><a href="tree_plugin.html">Tree Plugin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="icon-beaker"></span>UI Elements</a>
                        <ul>
                            <li><a href="alerts_buttons.html">Alerts, Buttons</a></li>
                            <li><a href="grid.html">Grid</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="notifications.html">Notifications</a></li>
                            <li><a href="panels.html">Panels</a></li>
                            <li><a href="tabs_accordions.html">Tabs, Accordions</a></li>
                            <li><a href="tooltips_popovers.html">Tooltips, Popovers</a></li>
                            <li><a href="typography.html">Typography</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="icon-leaf"></span>Other Pages</a>
                        <ul>
                            <li><a href="blank.html">Blank page</a></li>
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="contact_page.html">Contact Page</a></li>
                            <li><a href="error_404.html">Error 404</a></li>
                            <li><a href="help_faq.html">Help/Faq</a></li>
                            <li><a href="invoices.html">Invoices</a></li>
                            <li><a href="landing_page.html">Landing Page</a></li>
                            <li><a href="login_page.html">Login Page</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li><a href="pricing_table.html">Pricing Table</a></li>
                            <li><a href="search_page.html">Search Page</a></li>
                            <li><a href="settings.html">Site Settings</a></li>
                            <li><a href="user_profile.html">User profile</a></li>
                        </ul>
                    </li>               
                </ul>
            </div>
        </nav>
@endsection

@push('scripts')
    <script src="{{ URL::to('js/lib/jquery_ui/jquery-ui-1.10.3.custom.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key={{ config('app.google_api') }}"></script>

    <script type="text/javascript">
        function returnGeoCodePEA(address, notifier, hospital, lat, lon, ps_id) {
            $.ajax({
                type : 'POST',
                url : '{{ route('police.emergency.accident') }}',
                data : {
                    address : address,
                    notifier : notifier,
                    hospital : hospital,
                    ps_id : ps_id,
                    lat : lat,
                    lon : lon
                },
                success : function(response) {
                    $('#dd_column_01').append('<div class="panel panel-danger dd_widget" id="dd_panel_1"><div class="panel-heading"><h4 class="panel-title">Emergency : Accident</h4></div><div class="panel-body-narrow dd_content"><p><b>Notifier</b> :' + response.notifier + '</p><p><b>Notifier Contact</b> : '+ response.notifier_contact +'</p><p><b>Hospital</b> : ' + response.hospital +'</p><p><b>Hospital Contact</b> : ' + response.hospital_contact + '</p><p><b>Hospital Address</b> : ' + response.hospital_address + '</p></div></div>');
                }
            });
        }

        function getGeoCode(latitude, longitude, notifier, h_id, ps_id) {
            var geocoder;
            var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({'location': latlng}, function(results, status) {
                if (results[0]) {
                    var location = results[0].formatted_address;
                } else {
                    var location = 'N/A';
                }
                returnGeoCodePEA(location, notifier, h_id, latitude, longitude, ps_id);
            });
        }
    </script>
    <script type="text/javascript">
        Echo.private('policeEmergencyAccident.' + {{ $user->id }})
            .listen('PoliceEmergencyAccident', (e) => {
                console.log(e.id);
                getGeoCode(e.lat, e.lon, e.notifier, e.hospital, e.id);
            });
    </script>
@endpush