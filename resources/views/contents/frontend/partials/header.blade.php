 <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="left d-flex align-items-center">
              <a target="_blank" href="http://wa.me/584160540985"><i class="fab fa-whatsapp"></i> Tienes dudas?</a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="right">
              <div class="product__cart">
                <a href="cart.html"  class="amount__btn">
                  <i class="las la-shopping-basket"></i>
                  <span class="cart__num">08</span>
                </a>
              </div>
              <a class="user__btn nav-link hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"><i class="las la-user"></i></a>
               <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online"> 
                                    <i class="las la-user"></i>                                  
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-medium d-block">Luis Rojas</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        {{-- Admin --}}
                  
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
     
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>

                </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!-- header__top end -->
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="index.html"><img src="assets/page/images/logo.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ms-auto">
              <li class="menu_has_children">
                <a href="{{ route('/page') }}">Inicio</a>
              </li>
              <li class="menu_has_children">
                <a href="#0">Contest</a>
                <ul class="sub-menu">
                  <li><a href="contest.html">All contest</a></li>
                  <li><a href="contest-details-one.html">Contest Details One</a></li>
                  <li><a href="contest-details-two.html">Contest Details Two</a></li>
                  <li><a href="lottery-details.html">Lottery Details One</a></li>
                  <li><a href="lottery-details-two.html">Lottery Details Two</a></li>
                </ul>
              </li>
              <li><a href="winner.html">Winners</a></li>
              <li class="menu_has_children">
                <a href="{{ route('about-us') }}">Nosotros</a>
              </li>
              <li><a href="contact.html">contact</a></li>
            </ul>
            <div class="nav-right">
              <a href="{{ route('buy-tickets') }}" class="cmn-btn style--three btn--sm"><img src="assets/page/images/icon/btn/tag.png" alt="icon" class="me-2"> Comprar Tickets</a>
            </div>
          </div>
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>