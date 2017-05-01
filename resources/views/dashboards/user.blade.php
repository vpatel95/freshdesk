@extends('layouts.dashboard')

@section('title','FreshDesk - Hospital')

@section('breadcrumbs')         
<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="#">FreshDesk</a></li>
            <li><span>User Dashboard</span></li>                        
        </ul>
    </div>
</section>
@endsection

@section('content')
content
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
                    <li><a href="#">Dashboard</a></li>
                    <li class="link_active"><a href="#">Drag &amp; Drop Dashboard</a></li>
                    <li>
                        <a href="javascript:void(0)">Navigations</a>
                        <ul>
                            <li><a href="#">Accordion Navigation</a></li>
                            <li><a href="#">Icon Navigation</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-th-list"></span>Forms</a>
                <ul>
                    <li><a href="#">Regular elements</a></li>
                    <li><a href="#">Extended elements</a></li>
                    <li><a href="#">Multiupload</a></li>
                    <li><a href="#">Form validation</a></li>
                    <li><a href="#">Wizard</a></li>
                    <li><a href="#">WYSIWG Editor</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-puzzle-piece"></span>Components</a>
                <ul>
                    <li><a href="##endar</a></li>
                    <li><a href="##rts</a></li>
                    <li><a href="##tact List</a></li>
                    <li><a href="##table Elements</a></li>
                    <li><a href="##e manager</a></li>
                    <li><a href="##lery</a></li>
                    <li><a href="##gle Maps</a></li>
                    <li>
                        <a href="javascript:void(0)">Tables</a>
                        <ul>
                            <li><a href="##atables</a></li>
                            <li><a href="##ular</a></li>
                            <li><a href="##ck Grid</a></li>
                            <li><a href="##ponsive Table</a></li>
                        </ul>
                    </li>
                    <li><a href="##e Plugin</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-beaker"></span>UI Elements</a>
                <ul>
                    <li><a href="#">Alerts, Buttons</a></li>
                    <li><a href="#">Grid</a></li>
                    <li><a href="#">Icons</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li><a href="#">Panels</a></li>
                    <li><a href="#">Tabs, Accordions</a></li>
                    <li><a href="#">Tooltips, Popovers</a></li>
                    <li><a href="typography.html">Typography</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-leaf"></span>Other Pages</a>
                <ul>
                    <li><a href="#">Blank page</a></li>
                    <li><a href="#">Chat</a></li>
                    <li><a href="#">Contact Page</a></li>
                    <li><a href="#">Error 404</a></li>
                    <li><a href="#">Help/Faq</a></li>
                    <li><a href="#">Invoices</a></li>
                    <li><a href="#">Landing Page</a></li>
                    <li><a href="#">Login Page</a></li>
                    <li><a href="#">Mailbox</a></li>
                    <li><a href="#">Pricing Table</a></li>
                    <li><a href="#">Search Page</a></li>
                    <li><a href="#">Site Settings</a></li>
                    <li><a href="#">User profile</a></li>
                </ul>
            </li>               
        </ul>
    </div>
</nav>
@endsection

@push('scripts')
    <script type="text/javascript">
        Echo.private(`user`)
            .listen('UserLoggedIn', (e) => {
                console.log(e);
            });
    </script>
@endpush