 <!-- ============================================================== -->
 <!-- Top header  -->
 <!-- ============================================================== -->
 <!-- Start Navigation -->
 <div class="header dark-text">
     <div class="container">
         <nav id="navigation" class="navigation navigation-landscape">
             <div class="nav-header">
                 <a class="nav-brand py-2 px-0" href="/">
                     <img src="{{ asset('assets/img/logo/rudra-logo.png') }}" alt="rudra education logo" class="img-fluid">
                 </a>
                 <div class="nav-toggle"></div>
                 <div class="mobile_nav">
                     <ul>
                         <li>
                             <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#login"
                                 class="crs_yuo12 w-auto text-white theme-bg">
                                 <span class="embos_45"><i class="fas fa-sign-in-alt me-1"></i>Log In</span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="nav-menus-wrapper">
                 <ul class="nav-menu">

                     {{-- <li class="active"><a href="#">Home<span class="submenu-indicator"></span></a>
                         <ul class="nav-dropdown nav-submenu">
                             <li><a href="index.html">Home 1</a></li>
                             <li><a href="home-2.html">Home 2</a></li>
                             <li><a href="home-3.html">Home 3</a></li>
                             <li><a href="home-4.html">Home 4</a></li>
                             <li><a href="home-5.html">Home 5</a></li>
                             <li><a href="home-6.html">Home 6</a></li>
                             <li><a href="home-7.html">Home 7</a></li>
                         </ul>
                     </li> --}}


                     <li><a href="#"> K-12 <span class="submenu-indicator"></span></a>
                         <ul class="nav-dropdown nav-submenu">
                             <li><a href="https://www.bosse.ac.in/" target="_blank"> BOSSE </a></li>
                             <li><a href="https://juaonline.in/" target="_blank"> Jamia Urdu Aligarh </a></li>
                         </ul>
                     </li>


                     <li><a href="#"> University <span class="submenu-indicator"></span></a>
                         <ul class="nav-dropdown nav-submenu">
                             <li><a href="#"> Online <span class="submenu-indicator"></span></a>
                                 <ul class="nav-dropdown nav-submenu" style="height: 400px; overflow: auto;">
                                     <li><a href="https://www.iaodl.com/lp/onlinemanipal?utm_term=manipal%20university%20online&utm_campaign=&utm_source=13-muj-search&utm_medium=ppc&gad_source=1&gclid=CjwKCAjwk43ABhBIEiwAvvMEByq0hIBXWKD8Kokek1x9AfFp-kfcxv7uxOAPjAFFjmzm8deypyC6PxoCnagQAvD_BwE" target="_blank"> Manipal University Online </a></li>
                                     <li><a href="https://www.uudoon.in/" target="_blank">Uttaranchal University </a></li>
                                     <li><a href="https://kuk.ac.in/" target="_blank">Kurukshetra University</a></li>
                                     <li><a href="https://www.lpuonline.com/landingpages/lpuonlinebrand?utm_source=google&utm_medium=search&utm_campaignid=21415929089&utm_adgroupid=177758509596&utm_creativeid=744909235874&utm_matchtype=e&utm_device=c&utm_network=g&utm_keyword=lovely%20professional%20university%20online&utm_keywordid={keywordid}&utm_campaign=HO_Search_Brand_Exact&gad_source=1&gclid=CjwKCAjwk43ABhBIEiwAvvMEBw55JaXLXNq2rGG6e_yqMjwH_RLerJEXkV55Q4GTuCs4uDrdGEsxxxoC4HUQAvD_BwE" target="_blank"> Lovely Professional University Online </a></li>
                                     <li><a href="https://upesonline.ac.in/brand?utm_source=Google_Search&utm_medium=cpc&utm_campaign=PM_UPESON_Brand_GSN_LG_2025_Manual_CPC_Experiment&utm_term=upes%20online&device=c&adposition=&creative=717335018309&loc_physical_ms=9061672&adgroup=180340092120&placement=&target=&utm_keywords=22432519418&network=g&gad_source=1&gclid=CjwKCAjwk43ABhBIEiwAvvMEB-NiYDeqiaRxkxjlQw6Eye3K7FGy0htIylpmaAd7fW-MlnqR5KbKDRoCChEQAvD_BwE" target="_blank"> UPES Online </a></li>
                                     <li><a href="https://www.dypatiledu.com/dypatil-university-online-education-mba-cta?source=DYPatil&media=IGAW&campaign=SRCH&cn=s_competitor_dm&ag=mba&utm_term=Online%20university%20in%20india&gad_source=1&gclid=CjwKCAjwk43ABhBIEiwAvvMEBx4vHJnWJ5J5SKVBGhmMr3Z-Bi58rnw3vAhJ0b5rqma-SHrzQkn0ohoCxikQAvD_BwE" target="_blank"> D.Y Patil University Online </a></li>
                                     <li><a href="https://vgu.ac.in/" target="_blank"> Vivekanand Global University (VGU) </a></li>
                                     <li><a href="https://www.learningroutes.in/aep/gla-online.html?utm_source=Google&utm_medium=GLA_Exact&utm_campaign=LR_GLA_Exact_6/3/25&utm_content=GLA&utm_keyword=gla%20university%20online&utm_location=9061672&gad_source=1&gclid=CjwKCAjwk43ABhBIEiwAvvMEB6_bCo001E6xTsF0RUizd27xo-OdmU4Z0CVQSO_UDGBNJFyXzE3MNhoCvFwQAvD_BwE" target="_blank"> GLA University Online </a></li>
                                     <li><a href="https://www.onlinemanipal.com/smu-online-degree-courses?utm_source=Google&utm_medium=CPC&utm_campaign=GGL_SRCH_1_Brand_SMU_Generic_Exact&utm_content=Generic_SMU_Online_Exact_v3&utm_keyword=sikkim%20manipal%20university%20online&matchtype=e&utm_adset=g&utm_adid=165337634841&utm_placement=&utm_position=21239232891&gad_source=1&gclid=CjwKCAjwk43ABhBIEiwAvvMEB9spgCkA-oYuZYWLW6hR8-kro-0a_EgjtxzGIxrhY5rMe3K1hdhnPxoC4i4QAvD_BwE" target="_blank"> Sikkim Manipal University Online </a></li>
                                     <li><a href="https://vignanonline.com/" target="_blank"> Vignan University Online </a></li>
                                     <li><a href="https://www.amrita.edu/" target="_blank"> Amrita University </a></li>
                                     <li><a href="https://shoolini.distanceeducationschool.com/?utm_source=Google_Ads&utm_campaign=Online_Shoolini&utm_medium=Shoolini_Online&utm_term=shoolini%20university%20online&gad_source=1&gclid=CjwKCAjwk43ABhBIEiwAvvMEBweCjg5rtapkXj0l3n4XBfiR7yHJPtanr_i6JT6N_DAA5YA-TuwY7BoCIuMQAvD_BwE" target="_blank"> Shoolini University Online </a></li>
                                     <li><a href="https://www.nmims.edu/" target="_blank"> NMIMS University </a></li>
                                     <li><a href="https://www.andhrauniversity.edu.in/" target="_blank"> Andhra University </a></li>
                                     <li><a href="https://www.onlinemanipal.com/online-degree-courses?utm_source=Google&utm_medium=CPC&utm_campaign=GGL_SRCH_1_Brand_Manipal_Generic_Phrase&utm_content=Generic_Manipal_Online_Phrase_v2&utm_keyword=learning%20manipal%20online&matchtype=p&utm_adset=g&utm_adid=165337655441&utm_placement=&utm_position=21239233119&gad_source=1&gclid=CjwKCAjwk43ABhBIEiwAvvMEB8mufQEw4ZpKlTOcmzBLUwgUIPdyKgBa3Spndkesrk6ZywqtjKp1MhoC9gkQAvD_BwE " target="_blank"> MAHE ONLINE </a></li>
                                     <li><a href="https://www.amu.ac.in/" target="_blank"> Aligarh Muslim University </a></li>
                                     <li><a href="https://jamiahamdard.edu/" target="_blank"> Jamia Hamdard University </a></li>
                                     <li><a href="https://mzu.edu.in/" target="_blank"> Mizoram University </a></li>
                                 </ul>
                             </li>
                             <li><a href="#"> ODL <span class="submenu-indicator"></span></a>
                                 <ul class="nav-dropdown nav-submenu">
                                     <li><a href="https://subharti.org/" target="_blank"> Subharti University </a></li>
                                     <li><a href="https://gyanvihar.org/" target="_blank"> Suresh Gyan Vihar University </a></li>
                                     <li><a href="https://www.mangalayatan.in/" target="_blank"> Mangalayatan University </a></li>
                                 </ul>
                             </li>
                         </ul>
                     </li>


                     <li><a href="/about-us"> About Us </a></li>

                     <li><a href="#">Courses<span class="submenu-indicator"></span></a>
                         <ul class="nav-dropdown nav-submenu">
                             <li><a href="#">Search Courses in Grid<span class="submenu-indicator"></span></a>
                                 <ul class="nav-dropdown nav-submenu">
                                     <li><a href="grid-layout-with-sidebar.html">Grid Layout Style 1</a></li>
                                     <li><a href="grid-layout-with-sidebar-2.html">Grid Layout Style 2</a></li>
                                     <li><a href="grid-layout-with-sidebar-3.html">Grid Layout Style 3</a></li>
                                     <li><a href="grid-layout-with-sidebar-4.html">Grid Layout Style 4</a></li>
                                 </ul>
                             </li>
                             <li><a href="#">Search Courses in List<span class="submenu-indicator"></span></a>
                                 <ul class="nav-dropdown nav-submenu">
                                     <li><a href="list-layout-with-sidebar.html">List Layout Style 1</a></li>
                                     <li><a href="list-layout-with-full.html">List Full Width</a></li>
                                 </ul>
                             </li>

                             <li><a href="explore-category.html">Explore Category</a></li>
                             <li><a href="find-instructor.html">Find Instructor</a></li>
                         </ul>
                     </li>

                     {{-- <li><a href="#">Pages<span class="submenu-indicator"></span></a>
                         <ul class="nav-dropdown nav-submenu">
                             <li><a href="#">Shop Pages<span class="submenu-indicator"></span></a>
                                 <ul class="nav-dropdown nav-submenu">
                                     <li><a href="shop-with-sidebar.html">Shop Sidebar Left</a></li>
                                     <li><a href="shop-with-right-sidebar.html">Shop Sidebar Right</a></li>
                                     <li><a href="list-shop-with-sidebar.html">Shop List Style</a></li>
                                     <li><a href="wishlist.html">Wishlist</a></li>
                                     <li><a href="checkout.html">Checkout</a></li>
                                     <li><a href="product-detail.html">Product Detail</a></li>
                                 </ul>
                             </li>
                             <li><a href="about.html">About Us</a></li>
                             <li><a href="contact.html">Say Hello</a></li>
                             <li><a href="blogs.html">Blog Style</a></li>
                             <li><a href="pricing.html">Pricing</a></li>
                             <li><a href="404.html">404 Page</a></li>
                             <li><a href="component.html">Elements</a></li>
                             <li><a href="faq.html">FAQs</a></li>
                             <li><a href="login.html">Login</a></li>
                             <li><a href="signup.html">Signup</a></li>
                             <li><a href="forgot.html">Forgot</a></li>
                         </ul>
                     </li> --}}

                     <li><a href="/wilp-program"> Wilp Program </a></li>
                     <li><a href="/credit-transfer"> Credit Transfer </a></li>
                     <li><a href="/study-abroad"> Study Abroad </a></li>
                     <li><a href="/contact-us"> Contact Us </a></li>
                 </ul>

                 <ul class="nav-menu nav-menu-social align-to-right">

                     <li class="add-listing theme-bg">
                         <a href="#" class="alio_green " data-bs-toggle="modal" data-bs-target="#login">
                             <i class="fas fa-sign-in-alt me-1"></i><span class="dn-lg">Log In</span>
                         </a>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
 </div>
 <!-- End Navigation -->
 <div class="clearfix"></div>
 <!-- ============================================================== -->
 <!-- Top header  -->
 <!-- ============================================================== -->
