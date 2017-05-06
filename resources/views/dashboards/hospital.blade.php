@extends('layouts.dashboard')

@section('title','FreshDesk - Hospital')

@section('breadcrumbs')			
<section id="breadcrumbs">
	<div class="container">
		<ul>
			<li><a href="#">FreshDesk</a></li>
			<li><span>Hospital Dashboard</span></li>						
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
					@foreach($data['hea'] as $hea)
						<div class="panel panel-danger dd_widget" id="dd_panel_{{ $hea->id }}">
							<div class="panel-heading">
								<h4 class="panel-title">Emergency : {{ $hea->type === 'personal' ? 'Personal' : 'Accident' }}</h4>
							</div>
							<div class="panel-body-narrow dd_content">
								<p><b>Address</b> : {{ $hea->address }}</p>
								@if($hea->type === 'accident')
									<p><b>Police Informed</b> : {{ $hea->policeStation->address_line_1 . ', ' . $hea->policeStation->address_line_2 . ', ' . $hea->policeStation->city }}</p>
									<p><b>Police Contact</b> : {{ $hea->policeStation->contact }}</p>
								@endif
								<p><b>Notifier</b> : {{ App\UserDetail::find($hea->u_id)->name }}</p>
								<p><b>Notifier Contact</b> : {{ App\UserDetail::find($hea->u_id)->phone_no }}</p>
								<p><b>Self</b> : {{ $hea->self }}</p>
							</div>
						</div>
					@endforeach
				</div>
				<div class="col-sm-6 dd_column" id="dd_column_02">
					<div class="row">
						<center>
							<h4>NORMAL</h4>
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
									@foreach($data['hnb'] as $hnb)
										<tr>
											<td>
												<strong>
													<a href="{{ route('hospital.appointment', $hnb->u_id) }}">{{ App\UserDetail::find($hnb->u_id)->name }}</a>
												</strong>
												<p>Disease : {{ $hnb->disease }}</p>
												<p>Description : {{ $hnb->description }}</p>
												<p>Appointment Date : {{ $hnb->appointment_date }}</p>
											</td>
											<td><span class="label label-info">23 Nov</span></td>
										</tr>
									@endforeach
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
		function returnGeoCodeHEA(type, address, user, lat, lon, ps_id, self, h_id) {
			
		}

		function returnGeoCodeHEP(type, address, user, lat, lon, self, h_id) {
			
		}

		function getGeoCode(type, latitude, longitude, user, h_id, ps_id, self) {
			var geocoder;
			var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
			geocoder = new google.maps.Geocoder();
			geocoder.geocode({'location': latlng}, function(results, status) {
			    if (results[0]) {
			       	var location = results[0].formatted_address;
			    } else {
			       	var location = 'N/A';
			    }
			    if(type === 'accident'){
			    	returnGeoCodeHEA(type, location, user, latitude, longitude, ps_id, self, h_id);
			    } else if(type === 'personal') {
			    	returnGeoCodeHEP(type, location, user, latitude, longitude, self, h_id);
			    }
			});
		}
	</script>
	<script type="text/javascript">
		Echo.private('hospitalEmergencyAccident.' + {{ $user->id }})
		    .listen('HospitalEmergencyAccident', (e) => {
		        console.log(e);
		        $.ajax({
					type : 'POST',
					url : '{{ route('hospital.emergency.accident') }}',
					data : {
						address : address,
						user : user,
						h_id : h_id,
						ps_id : ps_id
					},
					success : function(response) {
						if(response.address === 'N/A')
							toastr['warning']('Please call the Notifier Immediately','Empty Address');
						$('#dd_column_01').append('<div class="panel panel-danger dd_widget" id="dd_panel_03"><div class="panel-heading"><h4 class="panel-title">Emergency : Accident</h4></div><div class="panel-body-narrow dd_content"><p><b>Address</b> : ' + response.address +'</p><p><b>Police Informed</b> : ' + response.police + '</p><p><b>Police Contact</b> : ' + response.ps_contact + '</p><p><b>Notifier</b> : ' + response.user + '</p><p><b>Notifier Contact</b> : ' + response.user_contact + '</p><p></div></div>');
					}
				});
		    });
		Echo.private('hospitalEmergencyPersonal.' + {{ $user->id }})
			.listen('HospitalEmergencyPersonal', (e) => {
				console.log(e);
				$.ajax({
					type : 'POST',
					url : '{{ route('hospital.emergency.personal') }}',
					data : {
						address : e.address,
						user : e.user,
						h_id : e.h_id
					},
					success : function(response) {
						$('#dd_column_01').append('<div class="panel panel-danger dd_widget" id="dd_panel_03"><div class="panel-heading"><h4 class="panel-title">Emergency : Personal</h4></div><div class="panel-body-narrow dd_content"><p><b>Address</b> : ' + response.address +'</p><p><b>Notifier</b> : ' + response.user + '</p><p><b>Notifier Contact</b> : ' + response.user_contact + '</p></div></div>');
					}
				});
			});
		Echo.private('hospitalNearBy.' + {{ $user->id }})
			.listen('HospitalNearBy', (e) => {
				console.log(e);
				$.ajax({
					type : 'POST',
					url : '{{ route('hospital.emergency.personal') }}',
					data : {
						user : e.user,
						h_id : e.h_id,
						disease : e.disease,
						description : e.description
					},
					success : function(response) {
						$('#nearby').append('<tr><td><strong><a href="hospital/appointment/' + response.id +'">' + response.user + '</a></strong><p>Disease : ' + response.disease
						 + '</p><p>Appointment Date : ' + response.appointment + '</p></td><td><span class="label label-info">23 Nov</span></td></tr>');
					}
				});
				
			});
	</script>
@endpush