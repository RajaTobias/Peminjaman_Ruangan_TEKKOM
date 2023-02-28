<section class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-transparent">
                <!-- Navbar Search-->
                <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="bx bx-search icon"></i></button>
                    </div>
                </form> -->
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                {{ Auth::user()->name }}
                    <li class="w3-dropdown-click">
                        <a class="w3-button w3-black" id="navbarDropdown" href="#" role="button" onclick="myFunction()"><i class="bx bx-user icon"></i></a>
                        <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
                            <a href="{{ route('logout') }}" class="w3-bar-item w3-button" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                          </div>
                        </ul>
                    </li>
                    
                </ul>
                
            </nav>
    </section>