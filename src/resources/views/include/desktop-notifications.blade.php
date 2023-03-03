    <!-- main-header -->
    <div class="main-header sticky side-header nav nav-item">
        <div class="container-fluid">
            <div class="main-header-left ">
                <div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
                    <a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
                    <a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
                </div>

            </div>
            <div class="main-header-center">
                <div class="responsive-logo">
                    <a href="/">
                        <img src="{{ asset('logo/logo.png') }}" class="mobile-logo" alt="logo">
                        <img src="{{ asset('logo/logo.png') }}" class="dark-mobile-logo" alt="logo">
                    </a>
                </div>
            </div>

            <div class="main-header-right">
                <div class="nav nav-item  navbar-nav-right ml-auto">


                    <div class="dropdown  nav-item main-header-message ">

                        <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp ">
                            <div class="main-dropdown-header  d-sm-none">
                                <a class="main-header-arrow" href="">
                                    <i class="icon ion-md-arrow-back"></i></a>
                            </div>

                        </div>
                    </div>



                    <button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fe fe-more-vertical "></span>
                    </button>

                    <div class="dropdown main-profile-menu nav nav-item nav-link">
                        <a class="profile-user" href=""><img alt=""
                                src="{{ asset('imgs/profile.png') }}"></a>
                        <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                            <div class="main-header-profile header-img">
                                <div class="main-img-user"><img alt=""
                                        src="{{ asset('imgs/profile.png') }}"></div>
                                <h6> home </h6><span>verified Member</span>
                            </div>


                            <form method="POST" action="{{ url('/logout') }}">
                                @csrf

                                <button type="submit" class="dropdown-item btn btn-sm btn-outline-danger">
                                    <i class="fas fa-sign-out-alt"></i>   Sign Out
                                </button>
                              </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /main-header -->
