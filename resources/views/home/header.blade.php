<header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Biz bilan bog'lanish:</span><a href="#">(+998) 90 939 27 07</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <li>
                                            <span class="currency-selector-wrapper">Unus Marketda :</span>
                                            <div class="ht-currency-trigger"><span>Sotish</span></div>
                                            <div class="currency ht-currency">
                                                <ul class="ht-setting-list">
                                                    <li><a href="#">Takliflar</a></li>
                                                    <li class="active"><a href="#">Sotish</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="language-selector-wrapper">Language :</span>
                                            <div class="ht-language-trigger"><span>English</span></div>
                                            <div class="language ht-language">
                                                <ul class="ht-setting-list">
                                                    <li class="active"><a href="#"><img src="home/images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                                    <li><a href="#"><img src="home/images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ht-setting-trigger"><span>My Account</span></div>
                                            <div class="setting ht-setting">
                                                <ul class="ht-setting-list">
                                                    <li><a href="login-register.html">My Account</a></li>
                                                    @if (Route::has('login'))
                                                    @auth
                                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                                    @else
                                                    <li><a href="{{route('register')}}">Register</a></li>
                                                    <li><a href="{{route('login')}}">Login</a></li> 
                                                    @endauth
                                                    @endif                                                  
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.html">
                                        <img src="#" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">All</option>                         
                                        <option value="10">Erkaklar kiyimi</option>                     
                                        <option value="17">- -  Oyoq kiyim</option>                    
                                        <option value="20">- - - -  Jensi shim</option>                     
                                        <option value="21">- - - -  Futbolka</option>                        
                                        <option value="22">- - - -  Kurtka</option>                
                                        <option value="23">- - - -  Kastyum Shim</option>                     
                                        <option value="24">- - - -  Shortik</option>                       
                                        <option value="25">- - - -  Ichki kiyim</option>                        
                                        <option value="26">- - - -  Klassik kiyim</option>                                      
                                        <option value="11">Ayollar kiyimi</option>                  
                                        <option value="42">- -  Oyoq kiyim</option>                        
                                        <option value="45">- - - -  Yubka</option>                     
                                        <option value="47">- - - -  Ko'ylak</option>                 
                                        <option value="48">- - - -  Xalat</option>                     
                                        <option value="49">- - - -  Tufli</option>                                                    
                                        <option value="12">O'g'il bolalar kiyimi</option>                  
                                        <option value="66">- -  Oyoq kiyim</option>                     
                                        <option value="68">- - - -  Shim</option>                      
                                        <option value="69">- - - -  Futbolka</option>                  
                                        <option value="70">- - - -  Sho'rtik</option>                      
                                        <option value="71">- - - -  Shalvar</option>                     
                                        <option value="72">- - - -  Ichki kiyim</option>                                
                                        <option value="13">Qiz bolalar kiyimi</option>
                                        <option value="66">- -  Oyoq kiyim</option>                     
                                        <option value="68">- - - -  Shim</option>                      
                                        <option value="69">- - - -  Futbolka</option>                  
                                        <option value="70">- - - -  Sho'rtik</option>                      
                                        <option value="71">- - - -  Yubka</option>                     
                                        <option value="72">- - - -  Ichki kiyim</option>                          
                                        
                                    </select>
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="wishlist.html">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">£80.00
                                                    <span class="cart-item-count">2</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="home/images/product/small-size/5.jpg" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class="close" title="Remove">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="home/images/product/small-size/6.jpg" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class="close" title="Remove">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                                <div class="minicart-button">
                                                    <a href="shopping-cart.html" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    <a href="checkout.html" class="li-button li-button-fullwidth">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class="dropdown-holder"><a href="index.html">Bosh sahifa</a></li>
                                            <li class="megamenu-holder"><a href="shop-left-sidebar.html">Erkaklar kiyimlari</a></li>
                                            <li class="dropdown-holder"><a href="blog-left-sidebar.html">Ayollar kiyimlari</a></li>
                                            <li class="megamenu-static-holder"><a href="index.html">Bolalar kiyimlari</a></li>
                                            <li class="megamenu-static-holder"><a href="index.html">Sport kiyimlari</a></li>
                                            <li><a href="about-us.html">Biz haqimizda</a></li>
                                            <li><a href="contact.html">Aloqa</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>