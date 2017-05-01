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

@section('content')
<section class="container clearfix main_section">
	<div id="main_content_outer" class="clearfix">
		<div id="main_content">
			<div class="row">
				<div class="col-sm-5 dd_column" id="dd_column_01">
					<div class="row">
						<center>
							<h4>EMERGENCY</h4>
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
					<div class="panel panel-danger dd_widget" id="dd_panel_03">
						<div class="panel-heading">
							<h4 class="panel-title">Lorem ipsum&hellip;</h4>
						</div>
						<div class="panel-body-narrow dd_content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam non dignissimos sapiente libero deleniti officia eos enim ad beatae laudantium quia mollitia perspiciatis reprehenderit soluta aperiam alias vel cum quam.
						</div>
					</div>
					<div class="panel panel-success dd_widget" id="dd_panel_03">
						<div class="panel-heading">
							<h4 class="panel-title">Lorem ipsum&hellip;</h4>
						</div>
						<div class="panel-body-narrow dd_content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam non dignissimos sapiente libero deleniti officia eos enim ad beatae laudantium quia mollitia perspiciatis reprehenderit soluta aperiam alias vel cum quam.
						</div>
					</div>
					<div class="panel panel-success dd_widget" id="dd_panel_03">
						<div class="panel-heading">
							<h4 class="panel-title">Lorem ipsum&hellip;</h4>
						</div>
						<div class="panel-body-narrow dd_content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam non dignissimos sapiente libero deleniti officia eos enim ad beatae laudantium quia mollitia perspiciatis reprehenderit soluta aperiam alias vel cum quam.
						</div>
					</div>
					<div class="panel panel-success dd_widget" id="dd_panel_03">
						<div class="panel-heading">
							<h4 class="panel-title">Lorem ipsum&hellip;</h4>
						</div>
						<div class="panel-body-narrow dd_content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam non dignissimos sapiente libero deleniti officia eos enim ad beatae laudantium quia mollitia perspiciatis reprehenderit soluta aperiam alias vel cum quam.
						</div>
					</div>
				</div>
				<div class="col-sm-7 dd_column" id="dd_column_02">
					<div class="row">
						<center>
							<h4>NORMAL</h4>
						</center>
					</div>
					<div class="panel panel-default dd_widget" id="dd_panel_05">
						<div class="panel-heading">
							<h4 class="panel-title">Box with pagination</h4>
						</div>
						<div class="dd_content">
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam non dignissimos sapiente libero deleniti officia eos enim ad beatae laudantium quia mollitia perspiciatis reprehenderit soluta aperiam alias vel cum quam.
							</div>
							<div class="panel-footer text-center">
								<ul class="pagination pagination-sm">
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel panel-default dd_widget" id="dd_panel_06">
						<div class="panel-heading">
							<h4 class="panel-title">Users</h4>
						</div>
						<div class="dd_content">
							<table class="table">
								<tbody>
									<tr>
										<td>
											<img src="img/avatars/avatar_1.jpg" alt="" class="img-thumbnail">
										</td>
										<td>
											<strong>
												<a href="#">Lorem ipsum dolor sit</a>
											</strong>
											<br>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</td>
										<td><span class="label label-info">23 Nov</span></td>
									</tr>
									<tr class="success">
										<td>
											<img src="img/avatars/avatar_1.jpg" alt="" class="img-thumbnail">
										</td>
										<td>
											<strong>
												<a href="#">Lorem ipsum dolor sit</a>
											</strong>
											<br>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</td>
										<td><span class="label label-info">23 Nov</span></td>
									</tr><tr>
										<td>
											<img src="img/avatars/avatar_1.jpg" alt="" class="img-thumbnail">
										</td>
										<td>
											<strong>
												<a href="#">Lorem ipsum dolor sit</a>
											</strong>
											<br>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</td>
										<td><span class="label label-info">23 Nov</span></td>
									</tr><tr>
										<td>
											<img src="img/avatars/avatar_1.jpg" alt="" class="img-thumbnail">
										</td>
										<td>
											<strong>
												<a href="#">Lorem ipsum dolor sit</a>
											</strong>
											<br>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</td>
										<td><span class="label label-info">23 Nov</span></td>
									</tr><tr>
										<td>
											<img src="img/avatars/avatar_1.jpg" alt="" class="img-thumbnail">
										</td>
										<td>
											<strong>
												<a href="#">Lorem ipsum dolor sit</a>
											</strong>
											<br>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
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
	<script src="{{ URL::to('js/lib/jquery_ui/jquery-ui-1.10.3.custom.min.js') }}"></script>

	<script type="text/javascript">
		Echo.private('emergencyOther.' + {{ $user->id }})
		    .listen('HospitalEmergencyOthers', (e) => {
		        console.log(e);
		    });
	</script>
@endpush