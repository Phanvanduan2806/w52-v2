<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package daykemit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- START PRELOADER -->
    <div class="preloaders d-none">
        <span class="loader"></span>
    </div>
    <!-- END PRELOADER -->

    <!-- START LOGO WITH CONTACT -->
    <section class="logo-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-top-contact">
                        <i class="fa fa-phone"></i>
                        <h4>+485 7548 854826</h4>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-top-contact">
                        <i class="fa fa-envelope"></i>
                        <h4><a href="mailto:example@gmail.com">daykemit@mail.com</a></h4>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-top-contact">
                        <i class="fa fa-clock-o"></i>
                        <h4>Mở cửa T2 - T6: 7h - 18h</h4>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_social_profile">
                        <ul>
                            <li><a href="#" class="top_f_facebook"><i class="fa fa-facebook" title="Facebook"></i></a>
                            </li>
                            <li><a href="#" class="top_f_twitter"><i class="fa fa-twitter" title="Twitter"></i></a></li>
                            <li><a href="#" class="top_f_instagram"><i class="fa fa-instagram"
                                        title="Instagram"></i></a></li>
                            <li><a href="#" class="top_f_linkedin"><i class="fa fa-linkedin" title="LinkedIn"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END LOGO WITH CONTACT -->

    <!-- START NAVBAR -->
    <div id="navigation" class="fixed-top navbar-light bg-faded site-navigation">
        <div class="container top_menu_bg">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="site-logo">
                        <a href="/"><img src="/wp-content/themes/daykemit/assets/images/all-img/logo.png" alt=""></a>
                    </div>
                </div><!--- END Col -->

                <div class="col-lg-6 col-md-9 col-sm-8 ">
                    <div class="header_right ">
                        <nav id="main-menu" class="ms-auto">
                            <?php
                            $menus = get_menu_by_name('Main Menu');
                            // var_dump($menus);
                            // die();
                            ?>
                            <ul>
                                <?php
                                // Lấy URL trang chủ
                                $home_url = get_home_url();

                                // Lấy URL hiện tại
                                $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                                foreach ($menus as $menu):
                                    // Kiểm tra xem đây có phải là menu trang chủ và URL hiện tại có phải là trang chủ
                                    $is_home_menu = ($menu['url'] == $home_url);
                                    $is_current_home = ($current_url == $home_url);

                                    // Đánh dấu active chỉ khi URL của menu khớp chính xác với URL hiện tại
                                    // và nếu đây là menu trang chủ, chỉ đánh dấu active khi URL hiện tại cũng là trang chủ
                                    $is_active = ($menu['url'] == $current_url) || ($is_home_menu && $is_current_home) ? 'active' : '';
                                    ?>
                                    <?php if (!empty($menu['children'])): ?>
                                        <li class="menu-item-has-children <?php echo $is_active; ?>">
                                            <a href="<?php echo $menu['url']; ?>">
                                                <?php echo $menu['title']; ?>
                                            </a>
                                            <ul>
                                                <?php foreach ($menu['children'] as $child):
                                                    $child_is_active = ($child['url'] == $current_url) ? 'active' : '';
                                                    ?>
                                                    <li class="<?php echo $child_is_active; ?> "><a
                                                            href="<?php echo $child['url']; ?>" class="nav-link">
                                                            <?php echo $child['title']; ?>
                                                        </a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                    <?php else: ?>
                                        <li class="<?php echo $is_active; ?>"><a href="<?php echo $menu['url']; ?>"
                                                class="nav-link">
                                                <?php echo $menu['title']; ?>
                                            </a></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                            <!-- <ul>
                            <li><a class="nav-link" href="index.html">Home <span class="ti-angle-down"></span></a>
                                <ul>
                                    <li><a class="nav-link" href="index.html">Home 01</a></li>
                                    <li><a class="nav-link" href="index_2.html">Home 02</a></li>
                                    <li><a class="nav-link" href="index_3.html">Home 03</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link" href="#">Pages <span class="ti-angle-down"></span></a>
                                <ul>
                                    <li><a class="nav-link" href="about.html">About Us</a></li>
                                    <li><a class="nav-link" href="team.html">Instructor</a></li>
                                    <li><a class="nav-link" href="team-details.html">Instructor Details</a></li>
                                    <li><a class="nav-link" href="faq.html">FAQ's</a></li>
                                    <li><a class="nav-link" href="event.html">Event</a></li>
                                    <li><a class="nav-link" href="event_single.html">Event Single</a></li>
                                    <li><a class="nav-link" href="error.html">404 Page</a></li>
                                    <li><a class="nav-link" href="login.html">Login</a></li>
                                    <li><a class="nav-link" href="register.html">Register</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link" href="course.html">Courses <span class="ti-angle-down"></span></a>
                                <ul>
                                    <li><a class="nav-link" href="course.html">Courses 01</a></li>
                                    <li><a class="nav-link" href="course2.html">Courses 02</a></li>
                                    <li><a class="nav-link" href="course3.html">Courses 03</a></li>
                                    <li><a class="nav-link" href="course-sidebar.html">Course Sidebar</a></li>
                                    <li><a class="nav-link" href="single_course.html">Course details</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link" href="shop.html">Shop <span class="ti-angle-down"></span></a>
                                <ul>
                                    <li><a class="nav-link" href="shop.html">Shop</a></li>
                                    <li><a class="nav-link" href="single_shop.html">Single Shop</a></li>
                                    <li><a class="nav-link" href="cart.html">Cart Page</a></li>
                                    <li><a class="nav-link" href="checkout.html">Checkout page</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link" href="blog.html">Blog <span class="ti-angle-down"></span></a>
                                <ul>
                                    <li><a class="nav-link" href="blog.html">Blog List</a></li>
                                    <li><a class="nav-link" href="blog_single.html">Single Blog</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul> -->
                        </nav>
                        <div id="mobile_menu"></div>
                    </div>
                </div><!--- END Col -->
                <div class="col-lg-4 col-md-12 col-sm-8 m-none">
                    <div class="home_lc">
                        <a href="#" class="hlc">
                            <i class="ti-heart"></i>
                            <span class="gactive">0</span>
                        </a>
                        <a href="#" class="hlc">
                            <i class="ti-shopping-cart-full"></i>
                            <span class="gactive">2</span>
                        </a>
                    </div>
                    <div class="call_to_action">
                        <a class="btn_two" href="register.html">Đăng ký</a>
                    </div><!--- END SOCIAL PROFILE -->
                </div><!--- END Col -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </div>
    <!-- END NAVBAR -->