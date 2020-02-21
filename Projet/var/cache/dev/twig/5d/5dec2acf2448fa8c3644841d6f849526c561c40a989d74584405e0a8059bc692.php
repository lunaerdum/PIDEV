<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @User/PageClient.html.twig */
class __TwigTemplate_3056504b64b0fb09a4a370e1096033776123f298aeb1535c3867f048d9603e94 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/PageClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/PageClient.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/logo.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <title>Bazaar</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/linericon/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/owl-carousel/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/lightbox/simpleLightbox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/nice-select/css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/animate-css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/jquery-ui/jquery-ui.css"), "html", null, true);
        echo "\">
    <!-- main css -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/responsive.css"), "html", null, true);
        echo "\">
</head>

<body>

<!--================Header Menu Area =================-->
<header class=\"header_area\">
    <div class=\"top_menu row m0\">
        <div class=\"container-fluid\">
            <div class=\"float-left\">
                <p>Call Us: 21 825 054</p>
            </div>
            <div class=\"float-right\">
                <ul class=\"right_side\">

                   ";
        // line 47
        echo "

                    ";
        // line 49
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "                    <li>
                        <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"theme-btn btn-style-one\">Login</a>
                        <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"theme-btn btn-style-one\" title=\"\">Register</a>
                    </li>
                    ";
        } else {
            // line 55
            echo "                        <li><a class=\"theme-btn btn-style-one\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" title=\"\">se deconnecter</a></li>
                    ";
        }
        // line 57
        echo "

                    <li>
                        <a href=\"#\">
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href=\"contact.html\">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"main_menu\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class=\"navbar-brand logo_h\" href=\"index.html\">
                    <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
                    <div class=\"row w-100\">
                        <div class=\"col-lg-7 pr-0\">
                            <ul class=\"nav navbar-nav center_nav pull-right\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"index.html\">Home</a>
                                </li>
                                <li class=\"nav-item submenu dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Shop</a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"category.html\">Shop Category</a>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"single-product.html\">Product Details</a>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"checkout.html\">Product Checkout</a>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"cart.html\">Shopping Cart</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"confirmation.html\">Confirmation</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"nav-item submenu dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog</a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"blog.html\">Blog</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"single-blog.html\">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"nav-item submenu dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"login.html\">Login</a>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"tracking.html\">Tracking</a>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"elements.html\">Elements</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"col-lg-5\">
                            <ul class=\"nav navbar-nav navbar-right right_nav pull-right\">
                                <hr>
                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"icons\">
                                        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"icons\">
                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"icons\">
                                        <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class=\"nav-item\">
                                    <a data-toggle=\"modal\" data-target=\"#cartModal\" class=\"nav-link\"><span class=\"icon-shopping_cart\"></span><span id=\"notif\">[0]</span></a>     <i class=\"lnr lnr lnr-cart\"></i>
                                </li>

                                <hr>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
<section class=\"home_banner_area\">
    <div class=\"overlay\"></div>
    <div class=\"banner_inner d-flex align-items-center\">
        <div class=\"container\">
            <div class=\"banner_content row\">
                <div class=\"offset-lg-2 col-lg-8\">
                    <h3>Fashion for
                        <br />Upcoming Winter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <a class=\"white_bg_btn\" href=\"#\">View Collection</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Hot Deals Area =================-->
<section class=\"hot_deals_area section_gap\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"hot_deal_box\">
                    <img class=\"img-fluid\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/product/hot_deals/deal1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"content\">
                        <h2>Hot Deals of this Month</h2>
                        <p>shop now</p>
                    </div>
                    <a class=\"hot_deal_link\" href=\"#\"></a>
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"hot_deal_box\">
                    <img class=\"img-fluid\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/product/hot_deals/deal1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"content\">
                        <h2>Hot Deals of this Month</h2>
                        <p>shop now</p>
                    </div>
                    <a class=\"hot_deal_link\" href=\"#\"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Hot Deals Area =================-->

<!--================Clients Logo Area =================-->
<section class=\"clients_logo_area\">
    <div class=\"container-fluid\">
        <div class=\"clients_slider owl-carousel\">
            <div class=\"item\">
                <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/clients-logo/c-logo-1.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/clients-logo/c-logo-2.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/clients-logo/c-logo-3.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/clients-logo/c-logo-4.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/clients-logo/c-logo-5.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
</section>
<!--================End Clients Logo Area =================-->

<!--================Feature Product Area =================-->
<section class=\"feature_product_area section_gap\">
    <div class=\"main_box\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"main_title\">
                    <h2>Featured Products</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 268
            echo "
                <div class=\"col col\">
                    <div class=\"f_p_item\">
                        <div class=\"f_p_img\">
                            <img src=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Upload/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomfile", []), "html", null, true);
            echo "\" width=\"200\" class=\"img-rectangle\" />
                            <div class=\"p_icon\">
                                <a href=\"#\">
                                    <i class=\"lnr lnr-heart\"></i>
                                </a>
                                <a onclick=\"addtoCart(";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", []), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", []), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomfile", []), "html", null, true);
            echo "')\" >
                                    <i class=\"lnr lnr-cart\"></i>

</a>
                            </div>
                        </div>
                        <a href=\"#\">
                            <h4>";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", []), "html", null, true);
            echo "</h4>
                        </a>
                        <h5>";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", []), "html", null, true);
            echo " TND</h5>
                    </div>

                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "
            </div>


        </div>
    </div>
</section>
<!--================End Feature Product Area =================-->

<!--================ Subscription Area ================-->
<section class=\"subscription-area section_gap\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"section-title text-center\">
                    <h2>Subscribe for Our Newsletter</h2>
                    <span>We won’t send any kind of spam</span>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div id=\"mc_embed_signup\">
                    <form target=\"_blank\" novalidate action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01\"
                          method=\"get\" class=\"subscription relative\">
                        <input type=\"email\" name=\"EMAIL\" placeholder=\"Email address\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Email address'\"
                               required=\"\">
                        <!-- <div style=\"position: absolute; left: -5000px;\">
                            <input type=\"text\" name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\">
                        </div> -->
                        <button type=\"submit\" class=\"newsl-btn\">Get Started</button>
                        <div class=\"info\"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Subscription Area ================-->
<div class=\"modal fade\" id=\"cartModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-bottom-0\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">
                    Your Shopping Cart
                </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <table class=\"table table-image\">
                    <thead>
                    <tr>
                        <th scope=\"col\"></th>
                        <th scope=\"col\">Product</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                    </thead>
                    <tbody id=\"cart\">

                    </tbody>
                </table>
                <div class=\"d-flex justify-content-end\">
                    <h5>Total: <span class=\"price text-success\" ><span id=\"total\">0\$</span></span></h5>
                </div>
            </div>
            <div class=\"modal-footer border-top-0 d-flex justify-content-between\">
                <form action=\"";
        // line 360
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_Ajout");
        echo "\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"submit\" class=\"btn btn-success\">Checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--================ start footer Area  =================-->
<footer class=\"footer-area section_gap\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3  col-md-6 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h6 class=\"footer_title\">About Us</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h6 class=\"footer_title\">Newsletter</h6>
                    <p>Stay updated with our latest trends</p>
                    <div id=\"mc_embed_signup\">
                        <form target=\"_blank\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                              method=\"get\" class=\"subscribe_form relative\">
                            <div class=\"input-group d-flex flex-row\">
                                <input name=\"EMAIL\" placeholder=\"Email Address\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Email Address '\"
                                       required=\"\" type=\"email\">
                                <button class=\"btn sub-btn\">
                                    <span class=\"lnr lnr-arrow-right\"></span>
                                </button>
                            </div>
                            <div class=\"mt-10 info\"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"single-footer-widget instafeed\">
                    <h6 class=\"footer_title\">Instagram Feed</h6>
                    <ul class=\"list instafeed d-flex flex-wrap\">
                        <li>
                            <img src=\"img/instagram/Image-01.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-02.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-03.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-04.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-05.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-06.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-07.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-08.jpg\" alt=\"\">
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-6 col-sm-6\">
                <div class=\"single-footer-widget f_social_wd\">
                    <h6 class=\"footer_title\">Follow Us</h6>
                    <p>Let us be social</p>
                    <div class=\"f_social\">
                        <a href=\"#\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-dribbble\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-behance\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row footer-bottom d-flex justify-content-between align-items-center\">
            <p class=\"col-lg-12 footer-text text-center\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery/jquery-min.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery/jquery.lightbox-0.5.css"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/stellar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/lightbox/simpleLightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/isotope/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/isotope/isotope-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/flipclock/timer.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/vendors/counter-up/jquery.counterup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/mail-script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/theme.js"), "html", null, true);
        echo "\"></script>
<script src =\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/cookiesFunction.js"), "html", null, true);
        echo "\"></script>

<script src=\"https://js.stripe.com/v3/\"></script>

</body>

<script>
    function addtoCart(id, nom, prix,file) {
        console.log(id);
        let jsoncart = {
            id: id,
            prix: prix,
            nom: nom,
            image:file
        };
        let stingObject = JSON.stringify(jsoncart);
        cookiemonster.append('card', stingObject, 1);
        \$('#cart').append('   <tr>\\n'+
                '              <td class=\"w-25\">\\n'+
                '                <img src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Upload/"), "html", null, true);
        echo "'+jsoncart.image+'\" class=\"img-fluid img-thumbnail\" alt=\"Sheep\">\\n'+
                '              </td>\\n'+
                '              <td>'+jsoncart.nom+'</td>\\n'+
                '              <td>'+jsoncart.prix+'</td>\\n'+
                '              <td>\\n'+
                '                <a  onclick=\"deleteCookie(1)\" class=\"btn btn-danger btn-sm\">\\n'+
                '                  <i class=\"fa fa-times\"></i>\\n'+
                '                </a>\\n'+
                '              </td>\\n'+
                '            </tr>')
        let total = 0;
        let cart = cookiemonster.get('card');

        for (let i = 0; i < cart.length; i++) {
            let jsoncart = JSON.parse(cart[i]);
            total += parseFloat(jsoncart.prix);
        }
        \$('#total').html(total + \" €\");
        \$('#notif').html(cookiemonster.get('card').length);


    }

</script>
<script>
    \$(document).ready(function () {
        try {
            cookiemonster.get(\"card\")
        } catch (e) {
            cookiemonster.set(\"card\", [], 1);

        }
        \$('#cartModal').modal('show');
        let cart = cookiemonster.get(\"card\");
        \$('#cart').html(\"\");
        let total = 0;
        for (let i = 0; i < cart.length; i++) {
            var jsoncart = JSON.parse(cart[i]);
            total += parseFloat(jsoncart.prix);
            //ajouti element fi DOM architecture de HTML
            \$('#cart').append('   <tr>\\n'+
                    '              <td class=\"w-25\">\\n'+
                    '                <img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "'+jsoncart.image+'\" class=\"img-fluid img-thumbnail\" alt=\"Sheep\">\\n'+
                    '              </td>\\n'+
                    '              <td>'+jsoncart.nom+'</td>\\n'+
                    '              <td>'+jsoncart.prix+'</td>\\n'+
                    '              <td>\\n'+
                    '                <a  onclick=\"deleteCookie(' + i + ')\" class=\"btn btn-danger btn-sm\">\\n'+
                    '                  <i class=\"fa fa-times\"></i>\\n'+
                    '                </a>\\n'+
                    '              </td>\\n'+
                    '            </tr>')
        }
        \$('#notif').html(cookiemonster.get('card').length);
        \$('#total').html(total + \" €\");

    })




    function deleteCookie(i) {
        cookiemonster.splice('card', i, 1, 1);
        let cart = cookiemonster.get(\"card\");
        \$('#cart').html(\"\");
        let total = 0;
        for (let i = 0; i < cart.length; i++) {
            var jsoncart = JSON.parse(cart[i]);
            total += parseFloat(jsoncart.prix);
            \$('#cart').append('   <tr>\\n'+
                    '              <td class=\"w-25\">\\n'+
                    '                <img src=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "'+jsoncart.image+'\" class=\"img-fluid img-thumbnail\" alt=\"Sheep\">\\n'+
                    '              </td>\\n'+
                    '              <td>'+jsoncart.nom+'</td>\\n'+
                    '              <td>'+jsoncart.prix+'</td>\\n'+
                    '              <td>\\n'+
                    '                <a  onclick=\"deleteCookie(' + i + ')\" class=\"btn btn-danger btn-sm\">\\n'+
                    '                  <i class=\"fa fa-times\"></i>\\n'+
                    '                </a>\\n'+
                    '              </td>\\n'+
                    '            </tr>')
        }
        \$('#notif').html(cookiemonster.get('card').length);
        \$('#total').html(total + \" €\");

    }



</script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@User/PageClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  761 => 569,  729 => 540,  684 => 498,  662 => 479,  658 => 478,  654 => 477,  650 => 476,  646 => 475,  642 => 474,  638 => 473,  634 => 472,  630 => 471,  626 => 470,  622 => 469,  618 => 468,  614 => 467,  610 => 466,  606 => 465,  602 => 464,  598 => 463,  594 => 462,  489 => 360,  418 => 291,  407 => 286,  402 => 284,  386 => 277,  377 => 272,  371 => 268,  367 => 267,  345 => 248,  339 => 245,  333 => 242,  327 => 239,  321 => 236,  300 => 218,  286 => 207,  154 => 78,  131 => 57,  125 => 55,  119 => 52,  115 => 51,  112 => 50,  110 => 49,  106 => 47,  88 => 21,  84 => 20,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  45 => 8,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" href=\"{{ asset('Front/img/logo.png') }}\" type=\"image/png\">
    <title>Bazaar</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/vendors/linericon/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/vendors/owl-carousel/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/vendors/lightbox/simpleLightbox.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/vendors/nice-select/css/nice-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/vendors/animate-css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/vendors/jquery-ui/jquery-ui.css') }}\">
    <!-- main css -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/responsive.css') }}\">
</head>

<body>

<!--================Header Menu Area =================-->
<header class=\"header_area\">
    <div class=\"top_menu row m0\">
        <div class=\"container-fluid\">
            <div class=\"float-left\">
                <p>Call Us: 21 825 054</p>
            </div>
            <div class=\"float-right\">
                <ul class=\"right_side\">

                   {# {% block button %}
                        <div class=\"button-box\">
                            {% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                                <li><a href=\"{{ path('fos_user_security_login') }}\" class=\"theme-btn btn-style-one\">Connexion</a>
                                    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"theme-btn btn-style-one\" title=\"\">s'inscrire</a></li>

                            {% else %}
                                <li><a class=\"theme-btn btn-style-one\" href=\"{{ path('fos_user_security_logout') }}\" title=\"\">se deconnecter</a></li>
                            {% endif %}
                        </div>
                    {% endblock %}#}


                    {% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                    <li>
                        <a href=\"{{ path('fos_user_security_login') }}\" class=\"theme-btn btn-style-one\">Login</a>
                        <a href=\"{{ path('fos_user_registration_register') }}\" class=\"theme-btn btn-style-one\" title=\"\">Register</a>
                    </li>
                    {% else %}
                        <li><a class=\"theme-btn btn-style-one\" href=\"{{ path('fos_user_security_logout') }}\" title=\"\">se deconnecter</a></li>
                    {% endif %}


                    <li>
                        <a href=\"#\">
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href=\"contact.html\">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"main_menu\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class=\"navbar-brand logo_h\" href=\"index.html\">
                    <img src=\"{{ asset('Front/img/logo.png') }}\" alt=\"\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
                    <div class=\"row w-100\">
                        <div class=\"col-lg-7 pr-0\">
                            <ul class=\"nav navbar-nav center_nav pull-right\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"index.html\">Home</a>
                                </li>
                                <li class=\"nav-item submenu dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Shop</a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"category.html\">Shop Category</a>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"single-product.html\">Product Details</a>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"checkout.html\">Product Checkout</a>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"cart.html\">Shopping Cart</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"confirmation.html\">Confirmation</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"nav-item submenu dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog</a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"blog.html\">Blog</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"single-blog.html\">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"nav-item submenu dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"login.html\">Login</a>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"tracking.html\">Tracking</a>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"elements.html\">Elements</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"col-lg-5\">
                            <ul class=\"nav navbar-nav navbar-right right_nav pull-right\">
                                <hr>
                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"icons\">
                                        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"icons\">
                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"icons\">
                                        <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class=\"nav-item\">
                                    <a data-toggle=\"modal\" data-target=\"#cartModal\" class=\"nav-link\"><span class=\"icon-shopping_cart\"></span><span id=\"notif\">[0]</span></a>     <i class=\"lnr lnr lnr-cart\"></i>
                                </li>

                                <hr>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
<section class=\"home_banner_area\">
    <div class=\"overlay\"></div>
    <div class=\"banner_inner d-flex align-items-center\">
        <div class=\"container\">
            <div class=\"banner_content row\">
                <div class=\"offset-lg-2 col-lg-8\">
                    <h3>Fashion for
                        <br />Upcoming Winter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <a class=\"white_bg_btn\" href=\"#\">View Collection</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Hot Deals Area =================-->
<section class=\"hot_deals_area section_gap\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"hot_deal_box\">
                    <img class=\"img-fluid\" src=\"{{ asset('Front/img/product/hot_deals/deal1.jpg') }}\" alt=\"\">
                    <div class=\"content\">
                        <h2>Hot Deals of this Month</h2>
                        <p>shop now</p>
                    </div>
                    <a class=\"hot_deal_link\" href=\"#\"></a>
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"hot_deal_box\">
                    <img class=\"img-fluid\" src=\"{{ asset('Front/img/product/hot_deals/deal1.jpg') }}\" alt=\"\">
                    <div class=\"content\">
                        <h2>Hot Deals of this Month</h2>
                        <p>shop now</p>
                    </div>
                    <a class=\"hot_deal_link\" href=\"#\"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Hot Deals Area =================-->

<!--================Clients Logo Area =================-->
<section class=\"clients_logo_area\">
    <div class=\"container-fluid\">
        <div class=\"clients_slider owl-carousel\">
            <div class=\"item\">
                <img src=\"{{ asset('Front/img/clients-logo/c-logo-1.png') }}\" alt=\"\">
            </div>
            <div class=\"item\">
                <img src=\"{{ asset('Front/img/clients-logo/c-logo-2.png') }}\" alt=\"\">
            </div>
            <div class=\"item\">
                <img src=\"{{ asset('Front/img/clients-logo/c-logo-3.png') }}\" alt=\"\">
            </div>
            <div class=\"item\">
                <img src=\"{{ asset('Front/img/clients-logo/c-logo-4.png') }}\" alt=\"\">
            </div>
            <div class=\"item\">
                <img src=\"{{ asset('Front/img/clients-logo/c-logo-5.png') }}\" alt=\"\">
            </div>
        </div>
    </div>
</section>
<!--================End Clients Logo Area =================-->

<!--================Feature Product Area =================-->
<section class=\"feature_product_area section_gap\">
    <div class=\"main_box\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"main_title\">
                    <h2>Featured Products</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>

            <div class=\"row\">
                {% for p in prod %}

                <div class=\"col col\">
                    <div class=\"f_p_item\">
                        <div class=\"f_p_img\">
                            <img src=\"{{ asset('Upload/')}}{{ p.nomfile }}\" width=\"200\" class=\"img-rectangle\" />
                            <div class=\"p_icon\">
                                <a href=\"#\">
                                    <i class=\"lnr lnr-heart\"></i>
                                </a>
                                <a onclick=\"addtoCart({{ p.id }},'{{ p.nom }}',{{ p.prix }},'{{ p.nomfile }}')\" >
                                    <i class=\"lnr lnr-cart\"></i>

</a>
                            </div>
                        </div>
                        <a href=\"#\">
                            <h4>{{ p.nom}}</h4>
                        </a>
                        <h5>{{ p.prix }} TND</h5>
                    </div>

                </div>
                {% endfor %}

            </div>


        </div>
    </div>
</section>
<!--================End Feature Product Area =================-->

<!--================ Subscription Area ================-->
<section class=\"subscription-area section_gap\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"section-title text-center\">
                    <h2>Subscribe for Our Newsletter</h2>
                    <span>We won’t send any kind of spam</span>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div id=\"mc_embed_signup\">
                    <form target=\"_blank\" novalidate action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01\"
                          method=\"get\" class=\"subscription relative\">
                        <input type=\"email\" name=\"EMAIL\" placeholder=\"Email address\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Email address'\"
                               required=\"\">
                        <!-- <div style=\"position: absolute; left: -5000px;\">
                            <input type=\"text\" name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\">
                        </div> -->
                        <button type=\"submit\" class=\"newsl-btn\">Get Started</button>
                        <div class=\"info\"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Subscription Area ================-->
<div class=\"modal fade\" id=\"cartModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-bottom-0\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">
                    Your Shopping Cart
                </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <table class=\"table table-image\">
                    <thead>
                    <tr>
                        <th scope=\"col\"></th>
                        <th scope=\"col\">Product</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                    </thead>
                    <tbody id=\"cart\">

                    </tbody>
                </table>
                <div class=\"d-flex justify-content-end\">
                    <h5>Total: <span class=\"price text-success\" ><span id=\"total\">0\$</span></span></h5>
                </div>
            </div>
            <div class=\"modal-footer border-top-0 d-flex justify-content-between\">
                <form action=\"{{ path('panier_Ajout') }}\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"submit\" class=\"btn btn-success\">Checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--================ start footer Area  =================-->
<footer class=\"footer-area section_gap\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3  col-md-6 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h6 class=\"footer_title\">About Us</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h6 class=\"footer_title\">Newsletter</h6>
                    <p>Stay updated with our latest trends</p>
                    <div id=\"mc_embed_signup\">
                        <form target=\"_blank\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                              method=\"get\" class=\"subscribe_form relative\">
                            <div class=\"input-group d-flex flex-row\">
                                <input name=\"EMAIL\" placeholder=\"Email Address\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Email Address '\"
                                       required=\"\" type=\"email\">
                                <button class=\"btn sub-btn\">
                                    <span class=\"lnr lnr-arrow-right\"></span>
                                </button>
                            </div>
                            <div class=\"mt-10 info\"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"single-footer-widget instafeed\">
                    <h6 class=\"footer_title\">Instagram Feed</h6>
                    <ul class=\"list instafeed d-flex flex-wrap\">
                        <li>
                            <img src=\"img/instagram/Image-01.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-02.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-03.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-04.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-05.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-06.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-07.jpg\" alt=\"\">
                        </li>
                        <li>
                            <img src=\"img/instagram/Image-08.jpg\" alt=\"\">
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-6 col-sm-6\">
                <div class=\"single-footer-widget f_social_wd\">
                    <h6 class=\"footer_title\">Follow Us</h6>
                    <p>Let us be social</p>
                    <div class=\"f_social\">
                        <a href=\"#\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-dribbble\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-behance\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row footer-bottom d-flex justify-content-between align-items-center\">
            <p class=\"col-lg-12 footer-text text-center\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"{{ asset('Front/js/jquery-3.2.1.min.js') }}\"></script>
<script src=\" {{ asset('jquery/jquery-min.js') }}\"></script>
<script src=\" {{ asset('jquery/jquery.lightbox-0.5.css') }}\"></script>
<script src=\"{{ asset('Front/js/popper.js') }}\"></script>
<script src=\"{{ asset('Front/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('Front/js/stellar.js') }}\"></script>
<script src=\"{{ asset('Front/vendors/lightbox/simpleLightbox.min.js') }}\"></script>
<script src=\"{{ asset('Front/vendors/nice-select/js/jquery.nice-select.min.js') }}\"></script>
<script src=\"{{ asset('Front/vendors/isotope/imagesloaded.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('Front/vendors/isotope/isotope-min.js') }}\"></script>
<script src=\"{{ asset('Front/vendors/owl-carousel/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('Front/js/jquery.ajaxchimp.min.js') }}\"></script>
<script src=\"{{ asset('Front/vendors/counter-up/jquery.waypoints.min.js') }}\"></script>
<script src=\"{{ asset('Front/vendors/flipclock/timer.js') }}\"></script>
<script src=\"{{ asset('Front/vendors/counter-up/jquery.counterup.js') }}\"></script>
<script src=\"{{ asset('Front/js/mail-script.js') }}\"></script>
<script src=\"{{ asset('Front/js/theme.js') }}\"></script>
<script src =\"{{ asset('Front/js/cookiesFunction.js') }}\"></script>

<script src=\"https://js.stripe.com/v3/\"></script>

</body>

<script>
    function addtoCart(id, nom, prix,file) {
        console.log(id);
        let jsoncart = {
            id: id,
            prix: prix,
            nom: nom,
            image:file
        };
        let stingObject = JSON.stringify(jsoncart);
        cookiemonster.append('card', stingObject, 1);
        \$('#cart').append('   <tr>\\n'+
                '              <td class=\"w-25\">\\n'+
                '                <img src=\"{{ asset('Upload/') }}'+jsoncart.image+'\" class=\"img-fluid img-thumbnail\" alt=\"Sheep\">\\n'+
                '              </td>\\n'+
                '              <td>'+jsoncart.nom+'</td>\\n'+
                '              <td>'+jsoncart.prix+'</td>\\n'+
                '              <td>\\n'+
                '                <a  onclick=\"deleteCookie(1)\" class=\"btn btn-danger btn-sm\">\\n'+
                '                  <i class=\"fa fa-times\"></i>\\n'+
                '                </a>\\n'+
                '              </td>\\n'+
                '            </tr>')
        let total = 0;
        let cart = cookiemonster.get('card');

        for (let i = 0; i < cart.length; i++) {
            let jsoncart = JSON.parse(cart[i]);
            total += parseFloat(jsoncart.prix);
        }
        \$('#total').html(total + \" €\");
        \$('#notif').html(cookiemonster.get('card').length);


    }

</script>
<script>
    \$(document).ready(function () {
        try {
            cookiemonster.get(\"card\")
        } catch (e) {
            cookiemonster.set(\"card\", [], 1);

        }
        \$('#cartModal').modal('show');
        let cart = cookiemonster.get(\"card\");
        \$('#cart').html(\"\");
        let total = 0;
        for (let i = 0; i < cart.length; i++) {
            var jsoncart = JSON.parse(cart[i]);
            total += parseFloat(jsoncart.prix);
            //ajouti element fi DOM architecture de HTML
            \$('#cart').append('   <tr>\\n'+
                    '              <td class=\"w-25\">\\n'+
                    '                <img src=\"{{ asset('') }}'+jsoncart.image+'\" class=\"img-fluid img-thumbnail\" alt=\"Sheep\">\\n'+
                    '              </td>\\n'+
                    '              <td>'+jsoncart.nom+'</td>\\n'+
                    '              <td>'+jsoncart.prix+'</td>\\n'+
                    '              <td>\\n'+
                    '                <a  onclick=\"deleteCookie(' + i + ')\" class=\"btn btn-danger btn-sm\">\\n'+
                    '                  <i class=\"fa fa-times\"></i>\\n'+
                    '                </a>\\n'+
                    '              </td>\\n'+
                    '            </tr>')
        }
        \$('#notif').html(cookiemonster.get('card').length);
        \$('#total').html(total + \" €\");

    })




    function deleteCookie(i) {
        cookiemonster.splice('card', i, 1, 1);
        let cart = cookiemonster.get(\"card\");
        \$('#cart').html(\"\");
        let total = 0;
        for (let i = 0; i < cart.length; i++) {
            var jsoncart = JSON.parse(cart[i]);
            total += parseFloat(jsoncart.prix);
            \$('#cart').append('   <tr>\\n'+
                    '              <td class=\"w-25\">\\n'+
                    '                <img src=\"{{ asset('') }}'+jsoncart.image+'\" class=\"img-fluid img-thumbnail\" alt=\"Sheep\">\\n'+
                    '              </td>\\n'+
                    '              <td>'+jsoncart.nom+'</td>\\n'+
                    '              <td>'+jsoncart.prix+'</td>\\n'+
                    '              <td>\\n'+
                    '                <a  onclick=\"deleteCookie(' + i + ')\" class=\"btn btn-danger btn-sm\">\\n'+
                    '                  <i class=\"fa fa-times\"></i>\\n'+
                    '                </a>\\n'+
                    '              </td>\\n'+
                    '            </tr>')
        }
        \$('#notif').html(cookiemonster.get('card').length);
        \$('#total').html(total + \" €\");

    }



</script>
</html>", "@User/PageClient.html.twig", "C:\\wamp\\www\\Projet\\src\\UserBundle\\Resources\\views\\PageClient.html.twig");
    }
}
