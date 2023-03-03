<!-- mobile-header -->
<div class="responsive main-header collapse" id="navbarSupportedContent-4">
    <div
        class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark d-sm-none ">
        <div class="navbar-collapse">
            <div class="d-flex order-lg-2 ml-auto">



                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user" href=""><img alt=""
                            src="{{ asset('imgs/profile.png') }}"></a>
                    <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                        <div class="main-header-profile header-img">
                            <div class="main-img-user"><img alt=""
                                    src="{{ asset('imgs/profile.png') }}"></div>
                            <h6>g</h6><span>verified Member</span>
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
<!-- mobile-header -->
