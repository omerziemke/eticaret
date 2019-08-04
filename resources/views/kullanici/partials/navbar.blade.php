 <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
             <div class="header__logo"><a class="ps-logo" href="index.html"><img src="{{asset('images/logo.png')}}" alt=""></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                 <li class="menu-item"><a href="{{route('kullanici.anasayfa')}}">Anasayfa</a></li>
                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Erkek</a>
                    <div class="mega-menu">
                      <div class="mega-wrap">
                        <div class="mega-column">
                          <ul class="mega-item mega-features">
                            <li><a href="{{route('kullanici.yenisezon')}}">Yeni Sezon</a></li>
                            <li><a href="{{route('kullanici.yenisezon')}}">FEATURES SHOES</a></li>
                            <li><a href="{{route('kullanici.yenisezon')}}">BEST SELLERS</a></li>
                            <li><a href="{{route('kullanici.yenisezon')}}">NOW TRENDING</a></li>
                            <li><a href="{{route('kullanici.yenisezon')}}">SUMMER ESSENTIALS</a></li>
                            <li><a href="{{route('kullanici.yenisezon')}}">MOTHER'S DAY COLLECTION</a></li>
                            <li><a href="{{route('kullanici.yenisezon')}}">FAN GEAR</a></li>
                          </ul>
                        </div>
                        <div class="mega-column">
                          <h4 class="mega-heading">Shoes</h4>
                          <ul class="mega-item">
                            <li><a href="product-listing.html">All Shoes</a></li>
                            <li><a href="product-listing.html">Running</a></li>
                            <li><a href="product-listing.html">Training & Gym</a></li>
                            <li><a href="product-listing.html">Basketball</a></li>
                            <li><a href="product-listing.html">Football</a></li>
                            <li><a href="product-listing.html">Soccer</a></li>
                            <li><a href="product-listing.html">Baseball</a></li>
                          </ul>
                        </div>
                        <div class="mega-column">
                          <h4 class="mega-heading">CLOTHING</h4>
                          <ul class="mega-item">
                            <li><a href="product-listing.html">Compression & Nike Pro</a></li>
                            <li><a href="product-listing.html">Tops & T-Shirts</a></li>
                            <li><a href="product-listing.html">Polos</a></li>
                            <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>
                            <li><a href="product-listing.html">Jackets & Vests</a></li>
                            <li><a href="product-listing.html">Pants & Tights</a></li>
                            <li><a href="product-listing.html">Shorts</a></li>
                          </ul>
                        </div>
                        <div class="mega-column">
                          <h4 class="mega-heading">Accessories</h4>
                          <ul class="mega-item">
                            <li><a href="product-listing.html">Compression & Nike Pro</a></li>
                            <li><a href="product-listing.html">Tops & T-Shirts</a></li>
                            <li><a href="product-listing.html">Polos</a></li>
                            <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>
                            <li><a href="product-listing.html">Jackets & Vests</a></li>
                            <li><a href="product-listing.html">Pants & Tights</a></li>
                            <li><a href="product-listing.html">Shorts</a></li>
                          </ul>
                        </div>
                        <div class="mega-column">
                          <h4 class="mega-heading">BRAND</h4>
                          <ul class="mega-item">
                            <li><a href="product-listing.html">NIKE</a></li>
                            <li><a href="product-listing.html">Adidas</a></li>
                            <li><a href="product-listing.html">Dior</a></li>
                            <li><a href="product-listing.html">B&G</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="menu-item"><a href="#">Kadın</a></li>
                  <li class="menu-item"><a href="#">Çocuk</a></li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Yeni</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.html">Blog-grid</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="blog-grid.html">Blog Grid 1</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                </ul>
                          </li>
                          <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Contact</a>
                        <ul class="sub-menu">
                          <li class="menu-item"><a href="contact-us.html">Contact Us #1</a></li>
                          <li class="menu-item"><a href="contact-us.html">Contact Us #2</a></li>
                        </ul>
                  </li>
                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="{{route('urun_arama')}}" method="get">
              {{csrf_field()}}
              <input class="form-control" type="text" name="aranan" placeholder="Ürün a.." value="{{old('aranan')}}">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon-shopping-cart"></i></a>
              <div class="ps-cart__listing">
                <div class="ps-cart__content">
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"><img src="{{asset('images/cart-preview/1.jpg')}}" alt=""></a></div> 
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Amazin’ Glazin’</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>images/cart-preview/2.jpg
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"><img src="{{asset('images/cart-preview/2.jpg')}}" alt=""></a></div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">The Crusty Croissant</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="{{asset('images/cart-preview/3.jpg') }}" alt=""></div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">The Rolling Pin</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                </div>
                <div class="ps-cart__total">
                  <p>Number of items:<span>36</span></p>
                  <p>Item Total:<span>£528.00</span></p>
                </div>
                <div class="ps-cart__footer"><a class="ps-btn" href="cart.html">Check out<i class="ps-icon-arrow-left"></i></a></div>
              </div>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>