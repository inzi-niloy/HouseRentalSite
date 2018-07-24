<header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('/front/')}}/images/phone.png" alt=""></div>+8801719612680</div>
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('/front/')}}/images/mail.png" alt=""></div><a href="{{asset('/front/')}}/{{asset('/front/')}}/mailto:inzi141@gmail.com">inzi141@gmail.com</a></div>
                    <div class="top_bar_content ml-auto">
                        <div class="top_bar_menu">
                            <ul class="standard_dropdown top_bar_dropdown">
                                <li>
                                    <a href="{{asset('/front/')}}/#">English<i class="fas fa-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="{{asset('/front/')}}/#">Bangla</a></li>
                                        <li><a href="{{asset('/front/')}}/#">Spanish</a></li>
                                        <li><a href="{{asset('/front/')}}/#">Japanese</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="top_bar_user">
                            <div class="user_icon"><img src="{{asset('/front/')}}/images/user.svg" alt=""></div>
                            <div><a href="{{asset('/front/')}}/#">Register</a></div>
                            <div><a href="{{asset('/front/')}}/#">Sign in</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Main -->

    <div class="header_main">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-lg-3  col-sm-3 col-2 order-1 ">
                    <div class="logo_container">
                        <div class="logo"><a href="{{asset('/front/')}}/#">BariBhara.com</a></div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right ">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="#" class="header_search_form clearfix">
                                    <input type="search" required="required" class="header_search_input" placeholder="Search for properties...">
                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list">
                                            <span class="custom_dropdown_placeholder clc">All Categories</span>
                                            <i class="fas fa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                <li><a class="clc" href="{{asset('/front/')}}/#">All Categories</a></li>
                                                <li><a class="clc" href="{{asset('/front/')}}/#">Computers</a></li>
                                                <li><a class="clc" href="{{asset('/front/')}}/#">Laptops</a></li>
                                                <li><a class="clc" href="{{asset('/front/')}}/#">Cameras</a></li>
                                                <li><a class="clc" href="{{asset('/front/')}}/#">Hardware</a></li>
                                                <li><a class="clc" href="{{asset('/front/')}}/#">Smartphones</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('/front/')}}/images/search.png" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wishlist -->
                <div class="col-lg-3 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist_icon"><img src="{{asset('/front/')}}/images/heart.png" alt=""></div>
                            <div class="wishlist_content">
                                <div class="wishlist_text"><a href="{{asset('/front/')}}/#">Wishlist</a></div>
                                <div class="wishlist_count">115</div>
                            </div>
                        </div>

                        <!-- Cart -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="main_nav_content d-flex flex-row">

                        <!-- Categories Menu -->

                        <div class="cat_menu_container">
                            <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                <div class="cat_burger"><span></span><span></span><span></span></div>
                                <div class="cat_menu_text">categories</div>
                            </div>


                            <ul class="cat_menu"  >
                                @foreach( $advertisement as $category)
                                <li><a href="#">{{$category->type}}<i class="fas fa-chevron-right ml-auto"></i></a></li>
                                @endforeach

                            </ul>
                        </div>

                        <!-- Main Nav Menu -->



                        <!-- Menu Trigger -->

                        <div class="menu_trigger_container ml-auto">
                            <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                <div class="menu_burger">
                                    <div class="menu_trigger_text">menu</div>
                                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu -->

    <div class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page_menu_content">

                        <div class="page_menu_search">
                            <form action="#">
                                <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                            </form>
                        </div>
                        <ul class="page_menu_nav">
                            <li class="page_menu_item has-children">
                                <a href="{{asset('/front/')}}/#">Language<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="{{asset('/front/')}}/#">English<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Italian<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="{{asset('/front/')}}/#">Currency<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="{{asset('/front/')}}/#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item">
                                <a href="{{asset('/front/')}}/#">Home<i class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="{{asset('/front/')}}/#">Super Deals<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="{{asset('/front/')}}/#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item has-children">
                                        <a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="{{asset('/front/')}}/#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="{{asset('/front/')}}/#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="{{asset('/front/')}}/#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="{{asset('/front/')}}/#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{asset('/front/')}}/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item"><a href="{{asset('/front/')}}/blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item"><a href="{{asset('/front/')}}/contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                        </ul>

                        <div class="menu_contact">
                            <div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('/front/')}}/images/phone_white.png" alt=""></div>+38 068 005 3570</div>
                            <div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('/front/')}}/images/mail_white.png" alt=""></div><a href="{{asset('/front/')}}/mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
