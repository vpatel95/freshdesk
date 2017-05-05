			<header id="top_header">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-2">
							<a href="dashboard1.html" class="logo_main" title="Ebro Admin Template:"><img src="img/logo_main.png" alt=""></a>
						</div>
						<div class="col-sm-push-4 col-sm-3 text-right hidden-xs">
							<div class="notification_dropdown dropdown">
								<a href="#" class="notification_icon dropdown-toggle" data-toggle="dropdown">
									<span class="label label-danger">12</span>
									<i class="icon-envelope-alt icon-2x"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-wide">
									<li>
										<div class="dropdown_heading">Messages</div>
										<div class="dropdown_content">
											<ul class="dropdown_items">
												<li>
													<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
													<p class="large_info">Sean Walter, 24.05.2014</p>
													<i class="icon-exclamation-sign indicator"></i>
												</li>
												<li>
													<h3><a href="#">Lorem ipsum dolor&hellip;</a></h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aliquam assumenda&hellip;</p>
													<p class="large_info">Sean Walter, 24.05.2014</p>
												</li>
												<li>
													<h3><a href="#">Lorem ipsum dolor&hellip;</a></h3>
													<p>Lorem ipsum dolor sit amet, consectetur&hellip;</p>
													<p class="large_info">Sean Walter, 24.05.2014</p>
													<i class="icon-exclamation-sign indicator"></i>
												</li>
											</ul>
										</div>
										<div class="dropdown_footer">
											<a href="#" class="btn btn-sm btn-default">Show all</a>
											<div class="pull-right dropdown_actions">
												<a href="#"><i class="icon-refresh"></i></a>
												<a href="#"><i class="icon-cog"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-6 col-sm-push-4 col-sm-3">
							<div class="pull-right dropdown">
								<a href="#" class="user_info dropdown-toggle" title="Jonathan Hay" data-toggle="dropdown">
									<img src="img/user_avatar.png" alt="">
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-pull-6 col-sm-4">
							<form class="main_search">
								<input type="text" id="search_query" name="search_query" class="typeahead form-control">
								<button type="submit" class="btn btn-primary btn-xs"><i class="icon-search icon-white"></i></button>
							</form> 
						</div>
					</div>
				</div>
			</header>						
			@yield('top_nav')
			<!-- mobile navigation -->
			<nav id="mobile_navigation"></nav>