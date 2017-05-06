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
					<div class="col-sm-12">
						<a href="javascript:void(0)" class="btn btn-default btn-lg" id="invoice_print"><span class="glyphicon glyphicon-print sepV_b"></span> Print Appointment</a>
					</div>
				</div>
				<div class="row invoice_top">
					<div class="col-sm-10">
						<h2 class="heading_lg">Appointment #12023/12/R1</h2>
						<h2 class="heading_lg_sub">Order  #16328</h2>
						<p>Date: <span class="text-muted">12/11/2013</span></p>
						<p>Due By: <span class="text-danger">26/11/2013</span></p>
					</div>
					<div class="col-sm-2">
						<div id="invoice_qrcode"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<h3 class="heading_a">From</h3>
						<address>
							<p class="addres_name">Ebro Admin HQ</p>
							<p>Av Almozara, 79</p>
							<p>50003 Zaragoza</p>
							<p class="sepH_b">Spain</p>
							<p><small><span class="text-muted">Phone:</span> (+321) 123 456 789</small></p>
							<p><small><span class="text-muted">E-mail:</span> <a href="mailto:example.com">ebro@example.com</a></small></p>
						</address>
					</div>
					<div class="col-sm-6">
						<h3 class="heading_a">To</h3>
						<address>
							<p class="addres_name">Ruecker-Hessel</p>
							<p>Robb Lodge 722</p>
							<p>53380 Cummeratabury</p>
							<p>North Rowan</p>
						</address>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-striped invoice_table">
							<thead>
								<tr>
									<th>Product</th>
									<th>Sku</th>
									<th>Price</th>
									<th>Qty</th>
									<th>Tax</th>
									<th>Subtotal</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Digital Camera</td>
									<td>dc_1</td>
									<td>$641.27</td>
									<td>1</td>
									<td>$26.00</td>
									<td>$641.27</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="4"></td>
									<td class="col_total text-right">Subtotal</td>
									<td class="col_total"><strong>$2394.27</strong></td>
								</tr>
								<tr>
									<td colspan="4"></td>
									<td class="col_total text-right">Tax</td>
									<td class="col_total"><strong>$126.00</strong></td>
								</tr>
								<tr>
									<td colspan="4"></td>
									<td class="col_total text-right">Shipping</td>
									<td class="col_total"><strong>$21.49</strong></td>
								</tr>
								<tr class="grand_total">
									<td colspan="4"></td>
									<td class="col_total text-right">Grand Total</td>
									<td class="col_total"><strong>$2639.99</strong></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="invoice_info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt ducimus ex quam fuga dolor. Deleniti sapiente ipsam mollitia blanditiis dolorem saepe amet fugit. Nostrum incidunt impedit officia illum ipsa eius?</div>
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

@push('styles')
	<link  rel="stylesheet" href="{{ URL::to('js/lib/multiple-select/multiple-select.css') }}">
	<link rel="stylesheet" href="{{ URL::to('js/lib/magnific-popup/magnific-popup.css') }}">
@endpush

@push('scripts')
	<script src="{{ URL::to('js/lib/mixitup/jquery.mixitup.min.js') }}"></script>
	<script src="{{ URL::to('js/lib/multiple-select/jquery.multiple.select.js') }}"></script>
	<script src="{{ URL::to('js/lib/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ URL::to('js/pages/ebro_gallery.js') }}"></script>

	<script type="text/javascript">
		$(document).load(function() {
			$('#gal_toList').click();
		});
	</script>
@endpush