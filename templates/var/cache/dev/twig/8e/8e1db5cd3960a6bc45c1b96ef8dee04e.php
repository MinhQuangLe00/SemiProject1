<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* homepage/index.html.twig */
class __TwigTemplate_5ad665e17c32c856caf0b89e03fd30f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>W3.CSS Template</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <style>
        .w3-sidebar a {font-family: \"Roboto\", sans-serif}
        body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: \"Montserrat\", sans-serif;}
    </style>
</head>

    ";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "

";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomepageController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <style>
        .w3-sidebar a {font-family: \"Roboto\", sans-serif}
        body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: \"Montserrat\", sans-serif;}
    </style>
    </head>
    <body class=\"w3-content\" style=\"max-width:1200px\">

    <!-- Sidebar/menu -->
    <nav class=\"w3-sidebar w3-bar-block w3-white w3-collapse w3-top\" style=\"z-index:3;width:250px\" id=\"mySidebar\">
        <div class=\"w3-container w3-display-container w3-padding-16\">
            <i onclick=\"w3_close()\" class=\"fa fa-remove w3-hide-large w3-button w3-display-topright\"></i>
            <h3 class=\"w3-wide\"><b><img src='";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/Product/applelogo.png"), "html", null, true);
        echo " ' style=\"width:100%\" </b></h3>
        </div>
        <div class=\"w3-padding-64 w3-large w3-text-grey\" style=\"font-weight:bold\">
            <a href=\"/login\" class=\"w3-bar-item w3-button\">Profile</a>



            <a href=\"#\" class=\"w3-bar-item w3-button\">Apple Display</a>
            <a onclick=\"myAccFunc()\" href=\"javascript:void(0)\" class=\"w3-button w3-block w3-white w3-left-align\" id=\"myBtn\">
                APPLE <i class=\"fa fa-caret-down\"></i>
            </a>
            </a>
            <div id=\"demoAcc\" class=\"w3-bar-block w3-hide w3-padding-large w3-medium\">
                <a href=\"#\" class=\"w3-bar-item w3-button w3-light-grey\"><i class=\"fa fa-caret-right w3-margin-right\"></i>Macbook</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Mac Mini</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Macbook Air</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Macbook Pro</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Imac</a>
                <a href=\"#\" class=\"w3-bar-item w3-button w3-light-grey\"><i class=\"fa fa-caret-right w3-margin-right\"></i>Pro Phone</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Iphone 11</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Iphone 12</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Iphone 13</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Iphone 14</a>
            </div>
            <a href=\"#\" class=\"w3-bar-item w3-button\">Airpods</a>
            <a href=\"#\" class=\"w3-bar-item w3-button\">Accsessories</a>
            <a href=\"#\" class=\"w3-bar-item w3-button\">Speakers</a>
            <a href=\"#\" class=\"w3-bar-item w3-button\">Apple Watch</a>
        </div>
        <a href=\"/contact\" class=\"w3-bar-item w3-button w3-padding\">Contact</a>
        <a href=\"javascript:void(0)\" class=\"w3-bar-item w3-button w3-padding\" onclick=\"document.getElementById('newsletter').style.display='block'\">Store</a>
        <a href=\"#footer\"  class=\"w3-bar-item w3-button w3-padding\">About Us</a>
    </nav>

    <!-- Top menu on small screens -->
    <header class=\"w3-bar w3-top w3-hide-large w3-black w3-xlarge\">
        <div class=\"w3-bar-item w3-padding-24 w3-wide\">APPLE STORE</div>
        <a href=\"javascript:void(0)\" class=\"w3-bar-item w3-button w3-padding-24 w3-right\" onclick=\"w3_open()\"><i class=\"fa fa-bars\"></i></a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class=\"w3-overlay w3-hide-large\" onclick=\"w3_close()\" style=\"cursor:pointer\" title=\"close side menu\" id=\"myOverlay\"></div>

    <!-- !PAGE CONTENT! -->
    <div class=\"w3-main\" style=\"margin-left:250px\">

        <!-- Push down content on small screens -->
        <div class=\"w3-hide-large\" style=\"margin-top:83px\"></div>

        <!-- Top header -->
        <header class=\"w3-container w3-xlarge\">
            <p class=\"w3-left\">New Products Release</p>
            <p class=\"w3-right\">
                <i class=\"fa fa-shopping-cart w3-margin-right\"></i>
                <i class=\"fa fa-search\"></i>
            </p>
        </header>

        <!-- Image header -->
        <div class=\"w3-display-container w3-container\">
            <img src='";
        // line 92
        echo "/uploads/Product/Macbookpro.jpg";
        echo " ' alt=\"Mac Book New Release\" style=\"width:100%\">
            <div class=\"w3-display-topleft w3-text-white\" style=\"padding:24px 48px\">
                <h1 class=\"w3-jumbo w3-hide-small\">New Products Release</h1>
                <h1 class=\"w3-hide-large w3-hide-medium\">New Products Release</h1>
                <h1 class=\"w3-hide-small\">New Product 2023</h1>
                <p><a href=\"#jeans\" class=\"w3-button w3-black w3-padding-large w3-large\">BUY NOW !</a></p>
            </div>
        </div>

        <div class=\"w3-container w3-text-grey\" id=\"jeans\">
            <p>8 items</p>
        </div>

        <!-- Product grid -->
        <div class=\"w3-row w3-grayscale\">
            <div class=\"w3-col l3 s6\">
                <div class=\"w3-container\">
                    <img src='";
        // line 109
        echo "/uploads/Product/Macpro2.jpg.webp";
        echo " ' style=\"width:100%\">
                    <p>Macbook Pro dữ chưa?<br><b>\$24.99</b></p>
                </div>
                <div class=\"w3-container\">
                    <img src='";
        // line 113
        echo "/uploads/Product/Airpod.png";
        echo " ' style=\"width:100%\">
                    <p>Airpods<br><b>\$19.99</b></p>
                </div>
            </div>

            <div class=\"w3-col l3 s6\">
                <div class=\"w3-container\">
                    <div class=\"w3-display-container\">
                        <img src='";
        // line 121
        echo "/uploads/Product/Iphone.png";
        echo " ' style=\"width:100%\">
                        <span class=\"w3-tag w3-display-topleft\">New</span>
                        <div class=\"w3-display-middle w3-display-hover\">
                            <button class=\"w3-button w3-black\">Buy now <i class=\"fa fa-shopping-cart\"></i></button>
                        </div>
                    </div>
                    <p>Who-phone ? ABCXYZ<br><b>\$19.99</b></p>
                </div>
                <div class=\"w3-container\">
                    <img src='";
        // line 130
        echo "/uploads/Product/AppleDis.jpg";
        echo " ' style=\"width:100%\">
                    <p>Apple Display<br><b>\$20.50</b></p>
                </div>
            </div>

            <div class=\"w3-col l3 s6\">
                <div class=\"w3-container\">
                    <img src=\"/w3images/jeans3.jpg\" style=\"width:100%\">
                    <p>Imac<br><b>\$20.50</b></p>
                </div>
                <div class=\"w3-container\">
                    <div class=\"w3-display-container\">
                        <img src=\"/w3images/jeans4.jpg\" style=\"width:100%\">
                        <span class=\"w3-tag w3-display-topleft\">Sale</span>
                        <div class=\"w3-display-middle w3-display-hover\">
                            <button class=\"w3-button w3-black\">Buy now <i class=\"fa fa-shopping-cart\"></i></button>
                        </div>
                    </div>
                    <p>Apple What ?<br><b class=\"w3-text-red\">\$14.99</b></p>
                </div>
            </div>

            <div class=\"w3-col l3 s6\">
                <div class=\"w3-container\">
                    <img src=\"/w3images/jeans4.jpg\" style=\"width:100%\">
                    <p>Mac cheese<br><b>\$14.99</b></p>
                </div>
                <div class=\"w3-container\">
                    <img src=\"/w3images/jeans1.jpg\" style=\"width:100%\">
                    <p>Apple Pi Cee<br><b>\$24.99</b></p>
                </div>
            </div>
        </div>

        <!-- Subscribe section -->
        <div class=\"w3-container w3-black w3-padding-32\">
            <h1>Subscribe</h1>
            <p>To get special offers and VIP treatment:</p>
            <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Enter e-mail\" style=\"width:100%\"></p>
            <button type=\"button\" class=\"w3-button w3-red w3-margin-bottom\">Subscribe</button>
        </div>

        <!-- Footer -->
        <footer class=\"w3-padding-64 w3-light-grey w3-small w3-center\" id=\"footer\">
            <div class=\"w3-row-padding\">
                <div class=\"w3-col s4\">
                    <h4>Contact</h4>
                    <p>Questions? Don't ask, I don't have time</p>
                    <form action=\"/action_page.php\" target=\"_blank\">
                        <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Name\" name=\"Name\" required></p>
                        <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Email\" name=\"Email\" required></p>
                        <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Subject\" name=\"Subject\" required></p>
                        <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Message\" name=\"Message\" required></p>
                        <button type=\"submit\" class=\"w3-button w3-block w3-black\">Send</button>
                    </form>
                </div>

                <div class=\"w3-col s4\">
                    <h4>About</h4>
                    <p><a href=\"#\">About us</a></p>
                    <p><a href=\"#\">We're hiring</a></p>
                    <p><a href=\"#\">Support</a></p>
                    <p><a href=\"#\">Find store</a></p>
                    <p><a href=\"#\">Shipment</a></p>
                    <p><a href=\"#\">Payment</a></p>
                    <p><a href=\"#\">Gift card</a></p>
                    <p><a href=\"#\">Return</a></p>
                    <p><a href=\"#\">Help</a></p>
                </div>

                <div class=\"w3-col s4 w3-justify\">
                    <h4>Store</h4>
                    <p><i class=\"fa fa-fw fa-map-marker\"></i> <a href=\"https://goo.gl/maps/F95CLWnCpBF1Hwze7\"><button>Apple Store</button></a> </p>
                    <p><i class=\"fa fa-fw fa-phone\"></i> (+1) 080 815 087749</p>
                    <p><i class=\"fa fa-fw fa-envelope\"></i> AppleSalesTeam@apple.com</p>
                    <h4>We accept</h4>
                    <p><i class=\"fa fa-fw fa-cc-amex\"></i> Paypal</p>
                    <p><i class=\"fa fa-fw fa-credit-card\"></i> Credit Card</p>
                    <br>
                    <i class=\"fa fa-facebook-official w3-hover-opacity w3-large\"></i>
                    <i class=\"fa fa-instagram w3-hover-opacity w3-large\"></i>
                    <i class=\"fa fa-snapchat w3-hover-opacity w3-large\"></i>
                    <i class=\"fa fa-pinterest-p w3-hover-opacity w3-large\"></i>
                    <i class=\"fa fa-twitter w3-hover-opacity w3-large\"></i>
                    <i class=\"fa fa-linkedin w3-hover-opacity w3-large\"></i>
                </div>
            </div>
        </footer>

        <div class=\"w3-black w3-center w3-padding-24\">Powered by <a href=\"https://www.w3schools.com/w3css/default.asp\" title=\"W3.CSS\" target=\"_blank\" class=\"w3-hover-opacity\">Eddy Lê</a></div>

        <!-- End page content -->
    </div>

    <!-- Newsletter Modal -->
    <div id=\"newsletter\" class=\"w3-modal\">
        <div class=\"w3-modal-content w3-animate-zoom\" style=\"padding:32px\">
            <div class=\"w3-container w3-white w3-center\">
                <i onclick=\"document.getElementById('newsletter').style.display='none'\" class=\"fa fa-remove w3-right w3-button w3-transparent w3-xxlarge\"></i>
                <h2 class=\"w3-wide\">NEWSLETTER</h2>
                <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
                <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Enter e-mail\"></p>
                <button type=\"button\" class=\"w3-button w3-padding-large w3-red w3-margin-bottom\" onclick=\"document.getElementById('newsletter').style.display='none'\">Subscribe</button>
            </div>
        </div>
    </div>

    <script>
        // Accordion
        function myAccFunc() {
            var x = document.getElementById(\"demoAcc\");
            if (x.className.indexOf(\"w3-show\") == -1) {
                x.className += \" w3-show\";
            } else {
                x.className = x.className.replace(\" w3-show\", \"\");
            }
        }

        // Click on the \"Jeans\" link on page load to open the accordion for demo purposes
        document.getElementById(\"myBtn\").click();


        // Open and close sidebar
        function w3_open() {
            document.getElementById(\"mySidebar\").style.display = \"block\";
            document.getElementById(\"myOverlay\").style.display = \"block\";
        }

        function w3_close() {
            document.getElementById(\"mySidebar\").style.display = \"none\";
            document.getElementById(\"myOverlay\").style.display = \"none\";
        }
    </script>

    </body>
</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 130,  222 => 121,  211 => 113,  204 => 109,  184 => 92,  121 => 32,  108 => 21,  98 => 20,  79 => 17,  69 => 20,  65 => 18,  63 => 17,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>W3.CSS Template</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <style>
        .w3-sidebar a {font-family: \"Roboto\", sans-serif}
        body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: \"Montserrat\", sans-serif;}
    </style>
</head>

    {% block title %}Hello HomepageController!{% endblock %}


{% block body %}
    <style>
        .w3-sidebar a {font-family: \"Roboto\", sans-serif}
        body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: \"Montserrat\", sans-serif;}
    </style>
    </head>
    <body class=\"w3-content\" style=\"max-width:1200px\">

    <!-- Sidebar/menu -->
    <nav class=\"w3-sidebar w3-bar-block w3-white w3-collapse w3-top\" style=\"z-index:3;width:250px\" id=\"mySidebar\">
        <div class=\"w3-container w3-display-container w3-padding-16\">
            <i onclick=\"w3_close()\" class=\"fa fa-remove w3-hide-large w3-button w3-display-topright\"></i>
            <h3 class=\"w3-wide\"><b><img src='{{ asset('uploads/Product/applelogo.png') }} ' style=\"width:100%\" </b></h3>
        </div>
        <div class=\"w3-padding-64 w3-large w3-text-grey\" style=\"font-weight:bold\">
            <a href=\"/login\" class=\"w3-bar-item w3-button\">Profile</a>



            <a href=\"#\" class=\"w3-bar-item w3-button\">Apple Display</a>
            <a onclick=\"myAccFunc()\" href=\"javascript:void(0)\" class=\"w3-button w3-block w3-white w3-left-align\" id=\"myBtn\">
                APPLE <i class=\"fa fa-caret-down\"></i>
            </a>
            </a>
            <div id=\"demoAcc\" class=\"w3-bar-block w3-hide w3-padding-large w3-medium\">
                <a href=\"#\" class=\"w3-bar-item w3-button w3-light-grey\"><i class=\"fa fa-caret-right w3-margin-right\"></i>Macbook</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Mac Mini</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Macbook Air</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Macbook Pro</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Imac</a>
                <a href=\"#\" class=\"w3-bar-item w3-button w3-light-grey\"><i class=\"fa fa-caret-right w3-margin-right\"></i>Pro Phone</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Iphone 11</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Iphone 12</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Iphone 13</a>
                <a href=\"#\" class=\"w3-bar-item w3-button\">Iphone 14</a>
            </div>
            <a href=\"#\" class=\"w3-bar-item w3-button\">Airpods</a>
            <a href=\"#\" class=\"w3-bar-item w3-button\">Accsessories</a>
            <a href=\"#\" class=\"w3-bar-item w3-button\">Speakers</a>
            <a href=\"#\" class=\"w3-bar-item w3-button\">Apple Watch</a>
        </div>
        <a href=\"/contact\" class=\"w3-bar-item w3-button w3-padding\">Contact</a>
        <a href=\"javascript:void(0)\" class=\"w3-bar-item w3-button w3-padding\" onclick=\"document.getElementById('newsletter').style.display='block'\">Store</a>
        <a href=\"#footer\"  class=\"w3-bar-item w3-button w3-padding\">About Us</a>
    </nav>

    <!-- Top menu on small screens -->
    <header class=\"w3-bar w3-top w3-hide-large w3-black w3-xlarge\">
        <div class=\"w3-bar-item w3-padding-24 w3-wide\">APPLE STORE</div>
        <a href=\"javascript:void(0)\" class=\"w3-bar-item w3-button w3-padding-24 w3-right\" onclick=\"w3_open()\"><i class=\"fa fa-bars\"></i></a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class=\"w3-overlay w3-hide-large\" onclick=\"w3_close()\" style=\"cursor:pointer\" title=\"close side menu\" id=\"myOverlay\"></div>

    <!-- !PAGE CONTENT! -->
    <div class=\"w3-main\" style=\"margin-left:250px\">

        <!-- Push down content on small screens -->
        <div class=\"w3-hide-large\" style=\"margin-top:83px\"></div>

        <!-- Top header -->
        <header class=\"w3-container w3-xlarge\">
            <p class=\"w3-left\">New Products Release</p>
            <p class=\"w3-right\">
                <i class=\"fa fa-shopping-cart w3-margin-right\"></i>
                <i class=\"fa fa-search\"></i>
            </p>
        </header>

        <!-- Image header -->
        <div class=\"w3-display-container w3-container\">
            <img src='{{'/uploads/Product/Macbookpro.jpg'}} ' alt=\"Mac Book New Release\" style=\"width:100%\">
            <div class=\"w3-display-topleft w3-text-white\" style=\"padding:24px 48px\">
                <h1 class=\"w3-jumbo w3-hide-small\">New Products Release</h1>
                <h1 class=\"w3-hide-large w3-hide-medium\">New Products Release</h1>
                <h1 class=\"w3-hide-small\">New Product 2023</h1>
                <p><a href=\"#jeans\" class=\"w3-button w3-black w3-padding-large w3-large\">BUY NOW !</a></p>
            </div>
        </div>

        <div class=\"w3-container w3-text-grey\" id=\"jeans\">
            <p>8 items</p>
        </div>

        <!-- Product grid -->
        <div class=\"w3-row w3-grayscale\">
            <div class=\"w3-col l3 s6\">
                <div class=\"w3-container\">
                    <img src='{{'/uploads/Product/Macpro2.jpg.webp'}} ' style=\"width:100%\">
                    <p>Macbook Pro dữ chưa?<br><b>\$24.99</b></p>
                </div>
                <div class=\"w3-container\">
                    <img src='{{'/uploads/Product/Airpod.png'}} ' style=\"width:100%\">
                    <p>Airpods<br><b>\$19.99</b></p>
                </div>
            </div>

            <div class=\"w3-col l3 s6\">
                <div class=\"w3-container\">
                    <div class=\"w3-display-container\">
                        <img src='{{'/uploads/Product/Iphone.png'}} ' style=\"width:100%\">
                        <span class=\"w3-tag w3-display-topleft\">New</span>
                        <div class=\"w3-display-middle w3-display-hover\">
                            <button class=\"w3-button w3-black\">Buy now <i class=\"fa fa-shopping-cart\"></i></button>
                        </div>
                    </div>
                    <p>Who-phone ? ABCXYZ<br><b>\$19.99</b></p>
                </div>
                <div class=\"w3-container\">
                    <img src='{{'/uploads/Product/AppleDis.jpg'}} ' style=\"width:100%\">
                    <p>Apple Display<br><b>\$20.50</b></p>
                </div>
            </div>

            <div class=\"w3-col l3 s6\">
                <div class=\"w3-container\">
                    <img src=\"/w3images/jeans3.jpg\" style=\"width:100%\">
                    <p>Imac<br><b>\$20.50</b></p>
                </div>
                <div class=\"w3-container\">
                    <div class=\"w3-display-container\">
                        <img src=\"/w3images/jeans4.jpg\" style=\"width:100%\">
                        <span class=\"w3-tag w3-display-topleft\">Sale</span>
                        <div class=\"w3-display-middle w3-display-hover\">
                            <button class=\"w3-button w3-black\">Buy now <i class=\"fa fa-shopping-cart\"></i></button>
                        </div>
                    </div>
                    <p>Apple What ?<br><b class=\"w3-text-red\">\$14.99</b></p>
                </div>
            </div>

            <div class=\"w3-col l3 s6\">
                <div class=\"w3-container\">
                    <img src=\"/w3images/jeans4.jpg\" style=\"width:100%\">
                    <p>Mac cheese<br><b>\$14.99</b></p>
                </div>
                <div class=\"w3-container\">
                    <img src=\"/w3images/jeans1.jpg\" style=\"width:100%\">
                    <p>Apple Pi Cee<br><b>\$24.99</b></p>
                </div>
            </div>
        </div>

        <!-- Subscribe section -->
        <div class=\"w3-container w3-black w3-padding-32\">
            <h1>Subscribe</h1>
            <p>To get special offers and VIP treatment:</p>
            <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Enter e-mail\" style=\"width:100%\"></p>
            <button type=\"button\" class=\"w3-button w3-red w3-margin-bottom\">Subscribe</button>
        </div>

        <!-- Footer -->
        <footer class=\"w3-padding-64 w3-light-grey w3-small w3-center\" id=\"footer\">
            <div class=\"w3-row-padding\">
                <div class=\"w3-col s4\">
                    <h4>Contact</h4>
                    <p>Questions? Don't ask, I don't have time</p>
                    <form action=\"/action_page.php\" target=\"_blank\">
                        <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Name\" name=\"Name\" required></p>
                        <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Email\" name=\"Email\" required></p>
                        <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Subject\" name=\"Subject\" required></p>
                        <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Message\" name=\"Message\" required></p>
                        <button type=\"submit\" class=\"w3-button w3-block w3-black\">Send</button>
                    </form>
                </div>

                <div class=\"w3-col s4\">
                    <h4>About</h4>
                    <p><a href=\"#\">About us</a></p>
                    <p><a href=\"#\">We're hiring</a></p>
                    <p><a href=\"#\">Support</a></p>
                    <p><a href=\"#\">Find store</a></p>
                    <p><a href=\"#\">Shipment</a></p>
                    <p><a href=\"#\">Payment</a></p>
                    <p><a href=\"#\">Gift card</a></p>
                    <p><a href=\"#\">Return</a></p>
                    <p><a href=\"#\">Help</a></p>
                </div>

                <div class=\"w3-col s4 w3-justify\">
                    <h4>Store</h4>
                    <p><i class=\"fa fa-fw fa-map-marker\"></i> <a href=\"https://goo.gl/maps/F95CLWnCpBF1Hwze7\"><button>Apple Store</button></a> </p>
                    <p><i class=\"fa fa-fw fa-phone\"></i> (+1) 080 815 087749</p>
                    <p><i class=\"fa fa-fw fa-envelope\"></i> AppleSalesTeam@apple.com</p>
                    <h4>We accept</h4>
                    <p><i class=\"fa fa-fw fa-cc-amex\"></i> Paypal</p>
                    <p><i class=\"fa fa-fw fa-credit-card\"></i> Credit Card</p>
                    <br>
                    <i class=\"fa fa-facebook-official w3-hover-opacity w3-large\"></i>
                    <i class=\"fa fa-instagram w3-hover-opacity w3-large\"></i>
                    <i class=\"fa fa-snapchat w3-hover-opacity w3-large\"></i>
                    <i class=\"fa fa-pinterest-p w3-hover-opacity w3-large\"></i>
                    <i class=\"fa fa-twitter w3-hover-opacity w3-large\"></i>
                    <i class=\"fa fa-linkedin w3-hover-opacity w3-large\"></i>
                </div>
            </div>
        </footer>

        <div class=\"w3-black w3-center w3-padding-24\">Powered by <a href=\"https://www.w3schools.com/w3css/default.asp\" title=\"W3.CSS\" target=\"_blank\" class=\"w3-hover-opacity\">Eddy Lê</a></div>

        <!-- End page content -->
    </div>

    <!-- Newsletter Modal -->
    <div id=\"newsletter\" class=\"w3-modal\">
        <div class=\"w3-modal-content w3-animate-zoom\" style=\"padding:32px\">
            <div class=\"w3-container w3-white w3-center\">
                <i onclick=\"document.getElementById('newsletter').style.display='none'\" class=\"fa fa-remove w3-right w3-button w3-transparent w3-xxlarge\"></i>
                <h2 class=\"w3-wide\">NEWSLETTER</h2>
                <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
                <p><input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Enter e-mail\"></p>
                <button type=\"button\" class=\"w3-button w3-padding-large w3-red w3-margin-bottom\" onclick=\"document.getElementById('newsletter').style.display='none'\">Subscribe</button>
            </div>
        </div>
    </div>

    <script>
        // Accordion
        function myAccFunc() {
            var x = document.getElementById(\"demoAcc\");
            if (x.className.indexOf(\"w3-show\") == -1) {
                x.className += \" w3-show\";
            } else {
                x.className = x.className.replace(\" w3-show\", \"\");
            }
        }

        // Click on the \"Jeans\" link on page load to open the accordion for demo purposes
        document.getElementById(\"myBtn\").click();


        // Open and close sidebar
        function w3_open() {
            document.getElementById(\"mySidebar\").style.display = \"block\";
            document.getElementById(\"myOverlay\").style.display = \"block\";
        }

        function w3_close() {
            document.getElementById(\"mySidebar\").style.display = \"none\";
            document.getElementById(\"myOverlay\").style.display = \"none\";
        }
    </script>

    </body>
</html>

{% endblock %}
", "homepage/index.html.twig", "/Users/minwang/todowebapp/templates/homepage/index.html.twig");
    }
}
