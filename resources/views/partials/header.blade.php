<!-- Header -->
            <div class="header">
		
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa-solid fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
			
				

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<span>{{ auth()->user()->name }}</span>
						</a>
						<div class="dropdown-menu">
					
							<form method="POST" action="{{ route('logout') }}">
								@csrf
	
								<x-dropdown-link :href="route('logout')"
										onclick="event.preventDefault();
													this.closest('form').submit();">
									{{ __('Log Out') }}
								</x-dropdown-link>
							</form>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						
						<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">

					<div class="menu-title">
                <a href="{{ route('home') }}">
				<i class="fa-solid fa-house "></i>
                    <span > Dashboard</span>
                </a>
            </div>
						<ul class="sidebar-vertical">
							
						
					
							<li class="submenu">
								<a ><i class="las la-users"></i> <span> Employee</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a  href="/create-employee">Create Employee</a></li>
									<li><a  href="/manage-employee">Manage Employee</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a ><i class="las la-building"></i> <span> Department</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a  href="/create-department">Create Department</a></li>
									<li><a  href="/manage-department">Manage Department</a></li>
								</ul>
							</li>
														
						</ul>
					</div>
				</div>
			</div>
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">