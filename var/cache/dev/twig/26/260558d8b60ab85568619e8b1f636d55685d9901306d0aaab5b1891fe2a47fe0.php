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

/* Front_Office/Header-Footer.html.twig */
class __TwigTemplate_1a657d3c6ed13b13d1106e3647dab807cad880aa0670964cbc42af7f422f46ab extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'Content' => [$this, 'block_Content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front_Office/Header-Footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front_Office/Header-Footer.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    
    <title>
        Tabaani 
        ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "     </title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
      ";
        // line 15
        $this->displayBlock('css', $context, $blocks);
        // line 38
        echo "
  </head>

  ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 221
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " 
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 16
        echo "    <!-- Price Slider Stylesheets -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/nouislider/nouislider.css"), "html", null, true);
        echo "\" type = \"text/css\">
    <!-- Google fonts - Playfair Display-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700"), "html", null, true);
        echo "\" type = \"text/css\">
    <!-- Google fonts - Poppins-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700"), "html", null, true);
        echo "\" type = \"text/css\">
    <!-- swiper-->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css"), "html", null, true);
        echo "\" type = \"text/css\">
    <!-- Magnigic Popup-->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/magnific-popup/magnific-popup.css"), "html", null, true);
        echo "\" type = \"text/css\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\" type = \"text/css\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/custom.css"), "html", null, true);
        echo "\" type = \"text/css\" >
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://use.fontawesome.com/releases/v5.8.1/css/all.css"), "html", null, true);
        echo "\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
    <link rel=\"shortcut icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        echo "\" />
    <!-- Favicon-->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "
      <body style=\"padding-top: 72px;\">
        <header class=\"header header-absolute\">
          <!-- Navbar-->
          <nav class=\"navbar navbar-expand-lg fixed-top shadow navbar-light bg-white\">
            <div class=\"container-fluid\">
              <div class=\"d-flex align-items-center\"><a class=\"navbar-brand py-3\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front-office"), "html", null, true);
        echo "\" >
                 <img alt=\"logo\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Tabaani Light bg.png"), "html", null, true);
        echo "\">

              </a>
              </div>
              <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"fa fa-bars\"></i></button>
              <!-- Navbar Collapse -->
              <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <form class=\"form-inline mt-4 mb-2 d-sm-none\" action=\"#\" id=\"searchcollapsed\">
                  <div class=\"input-label-absolute input-label-absolute-left input-reset w-100\">
                    <label class=\"label-absolute\" for=\"searchcollapsed_search\"><i class=\"fa fa-search\"></i><span class=\"sr-only\">What are you looking for?</span></label>
                    <input class=\"form-control form-control-sm border-0 shadow-0 bg-gray-200\" id=\"searchcollapsed_search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-reset btn-sm\" type=\"reset\"><i class=\"fa-times fas\">           </i></button>
                  </div>
                </form>
                <ul class=\"navbar-nav ml-auto\">
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Home</a>

                  <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle active\" id=\"homeDropdownMenuLink\" href=\"index.html\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Events</a>
                     <div class=\"dropdown-menu\" aria-labelledby=\"homeDropdownMenuLink\">
                       <a class=\"dropdown-item\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_index");
        echo "\">Events </a>
                       <a class=\"dropdown-item\" href=\"events-home.html\">Influenceurs Events</a>
                       <a class=\"dropdown-item\" href=\"roomm.html'\">My Events</a>
                     </div>
                   </li>
                   <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle active\" id=\"homeDropdownMenuLink\" href=\"index.html\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Trips</a>
                      <div class=\"dropdown-menu\" aria-labelledby=\"homeDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"index.html\">Trips </a>
                        <a class=\"dropdown-item\" href=\"roomm.html\">My trips</a>
                       </div>
                   </li>
                   <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle active\" id=\"homeDropdownMenuLink\" href=\"index.html\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Accomodations</a>
                      <div class=\"dropdown-menu\" aria-labelledby=\"homeDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"index.html\">Accomodations</a>
                        <a class=\"dropdown-item\" href=\"roomm.html\">My Accomodations</a>

                       </div>
                   </li>

                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a>
                  </li>
                  <li class=\"nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block\"><a class=\"btn btn-primary\" href=\"user-add-0.html\">Sign In</a></li>
                  <li class=\"nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block\"><a class=\"btn btn-primary\" href=\"user-add-0.html\">Sign Up</a></li>


                  <li class=\"nav-item dropdown ml-lg-3\">
                      <a id=\"userDropdownMenuLink\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_new");
        echo "\">
                          <img class=\"avatar avatar-sm avatar-border-white mr-2\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/avatar-10.jpg"), "html", null, true);
        echo "\" alt=\"Jack London\" >
                      </a>
                      <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdownMenuLink\">
                          <a class=\"dropdown-item\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => "2"]);
        echo "\">Profile</a>
                          <a class=\"dropdown-item\" href=\"user-booking-1.html\">My Events</a>
                          <div class=\"dropdown-divider\"></div>
                          <a class=\"dropdown-item\" >
                              <i class=\"fas fa-sign-out-alt mr-2 text-muted\"></i> Sign out</a>
                      </div>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
          <!-- /Navbar -->
        </header>

            <!-- Begin : Block -->

        ";
        // line 118
        $this->displayBlock('Content', $context, $blocks);
        // line 122
        echo "
        <!-- End : Block -->
   <footer class=\"position-relative z-index-10 d-print-none\">
      <!-- Main block - menus, subscribe form-->
      <div class=\"py-6 bg-gray-200 text-muted\"> 
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
              <div class=\"font-weight-bold text-uppercase text-dark mb-3\">Events</div>
              <p>Explore Our events.</p>
            </div>
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
              <div class=\"font-weight-bold text-uppercase text-dark mb-3\">Trips</div>
              <p>Explore Our trips.</p>
            </div>
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
              <div class=\"font-weight-bold text-uppercase text-dark mb-3\">Accomadations</div>
              <p>Explore Our Accomadations.</p>
            </div>
            <div class=\"col-lg-4\">
              <h6 class=\"text-uppercase text-dark mb-3\">Mail</h6>
              <p class=\"mb-3\"> Sign to our newsletter</p>
              <form action=\"#\" id=\"newsletter-form\">
                <div class=\"input-group mb-3\">
                  <input class=\"form-control bg-transparent border-dark border-right-0\" type=\"email\" placeholder=\"Your Email Address\" aria-label=\"Your Email Address\">
                  <div class=\"input-group-append\">
                    <button class=\"btn btn-outline-dark border-left-0\" type=\"submit\"> <i class=\"fa fa-paper-plane text-lg\"></i></button>
                  </div>
                </div>
              </form>
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\"><a class=\"text-muted text-hover-primary\" href=\"#\" target=\"_blank\" title=\"facebook\"><i class=\"fab fa-facebook\"></i></a></li>
                <li class=\"list-inline-item\"><a class=\"text-muted text-hover-primary\" href=\"#\" target=\"_blank\" title=\"instagram\"><i class=\"fab fa-instagram\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class=\"py-4 font-weight-light bg-gray-800 text-gray-300\">
        <div class=\"container\">
          <div class=\"row align-items-center\">
            <div class=\"col-md-6 text-center text-md-left\">
              <p class=\"text-sm mb-md-0\">&copy; 2022, Apollo.  All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    ";
        // line 172
        $this->displayBlock('js', $context, $blocks);
        // line 219
        echo "  </body>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_Content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Content"));

        // line 119
        echo "

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 173
        echo "    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open(\"GET\", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement(\"div\");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }    
      // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
      // use your own URL in production, please :)
      // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
      //- injectSvgSprite('\${path}icons/orion-svg-sprite.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/magnific-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Smooth scroll-->
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Select-->
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/bootstrap-select/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/object-fit-images/ofi.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Swiper Carousel    -->
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"), "html", null, true);
        echo "\"></script>
    <script>
         var basePath = ''
    </script>
    <!-- Main Theme JS file    -->
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/Front/html/js/theme.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front_Office/Header-Footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  452 => 217,  444 => 212,  439 => 210,  434 => 208,  429 => 206,  424 => 204,  419 => 202,  414 => 200,  385 => 173,  375 => 172,  363 => 119,  353 => 118,  342 => 219,  340 => 172,  288 => 122,  286 => 118,  266 => 101,  260 => 98,  256 => 97,  225 => 69,  202 => 49,  198 => 48,  190 => 42,  180 => 41,  168 => 36,  164 => 35,  158 => 32,  154 => 31,  149 => 29,  144 => 27,  139 => 25,  134 => 23,  129 => 21,  124 => 19,  119 => 17,  116 => 16,  106 => 15,  86 => 9,  75 => 221,  73 => 41,  68 => 38,  66 => 15,  60 => 11,  58 => 9,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    
    <title>
        Tabaani 
        {% block title %} 
        {% endblock %}
     </title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
      {% block css %}
    <!-- Price Slider Stylesheets -->
    <link rel=\"stylesheet\" href=\"{{ asset ('front-office/vendor/nouislider/nouislider.css') }}\" type = \"text/css\">
    <!-- Google fonts - Playfair Display-->
    <link rel=\"stylesheet\" href=\"{{ asset ('https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700') }}\" type = \"text/css\">
    <!-- Google fonts - Poppins-->
    <link rel=\"stylesheet\" href=\"{{ asset ('https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700') }}\" type = \"text/css\">
    <!-- swiper-->
    <link rel=\"stylesheet\" href=\"{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css') }}\" type = \"text/css\">
    <!-- Magnigic Popup-->
    <link rel=\"stylesheet\" href=\"{{ asset ('front-office/vendor/magnific-popup/magnific-popup.css') }}\" type = \"text/css\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ asset ('front-office/css/style.default.css') }}\" id=\"theme-stylesheet\" type = \"text/css\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"{{ asset ('front-office/css/custom.css') }}\" type = \"text/css\" >
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('https://use.fontawesome.com/releases/v5.8.1/css/all.css') }}\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
    <link rel=\"shortcut icon\" href=\"{{ asset ('logo.png')}}\" />
    <!-- Favicon-->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src=\"{{ asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}\"></script>
        <script src=\"{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}\"></script><![endif]-->
      {% endblock %}

  </head>

  {% block body %}

      <body style=\"padding-top: 72px;\">
        <header class=\"header header-absolute\">
          <!-- Navbar-->
          <nav class=\"navbar navbar-expand-lg fixed-top shadow navbar-light bg-white\">
            <div class=\"container-fluid\">
              <div class=\"d-flex align-items-center\"><a class=\"navbar-brand py-3\" href=\"{{ asset('/front-office') }}\" >
                 <img alt=\"logo\" src=\"{{ asset ('Tabaani Light bg.png') }}\">

              </a>
              </div>
              <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"fa fa-bars\"></i></button>
              <!-- Navbar Collapse -->
              <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <form class=\"form-inline mt-4 mb-2 d-sm-none\" action=\"#\" id=\"searchcollapsed\">
                  <div class=\"input-label-absolute input-label-absolute-left input-reset w-100\">
                    <label class=\"label-absolute\" for=\"searchcollapsed_search\"><i class=\"fa fa-search\"></i><span class=\"sr-only\">What are you looking for?</span></label>
                    <input class=\"form-control form-control-sm border-0 shadow-0 bg-gray-200\" id=\"searchcollapsed_search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-reset btn-sm\" type=\"reset\"><i class=\"fa-times fas\">           </i></button>
                  </div>
                </form>
                <ul class=\"navbar-nav ml-auto\">
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Home</a>

                  <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle active\" id=\"homeDropdownMenuLink\" href=\"index.html\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Events</a>
                     <div class=\"dropdown-menu\" aria-labelledby=\"homeDropdownMenuLink\">
                       <a class=\"dropdown-item\" href=\"{{ path('events_index') }}\">Events </a>
                       <a class=\"dropdown-item\" href=\"events-home.html\">Influenceurs Events</a>
                       <a class=\"dropdown-item\" href=\"roomm.html'\">My Events</a>
                     </div>
                   </li>
                   <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle active\" id=\"homeDropdownMenuLink\" href=\"index.html\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Trips</a>
                      <div class=\"dropdown-menu\" aria-labelledby=\"homeDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"index.html\">Trips </a>
                        <a class=\"dropdown-item\" href=\"roomm.html\">My trips</a>
                       </div>
                   </li>
                   <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle active\" id=\"homeDropdownMenuLink\" href=\"index.html\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Accomodations</a>
                      <div class=\"dropdown-menu\" aria-labelledby=\"homeDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"index.html\">Accomodations</a>
                        <a class=\"dropdown-item\" href=\"roomm.html\">My Accomodations</a>

                       </div>
                   </li>

                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a>
                  </li>
                  <li class=\"nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block\"><a class=\"btn btn-primary\" href=\"user-add-0.html\">Sign In</a></li>
                  <li class=\"nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block\"><a class=\"btn btn-primary\" href=\"user-add-0.html\">Sign Up</a></li>


                  <li class=\"nav-item dropdown ml-lg-3\">
                      <a id=\"userDropdownMenuLink\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"{{ path('events_new') }}\">
                          <img class=\"avatar avatar-sm avatar-border-white mr-2\" src=\"{{ asset('pics/avatar-10.jpg') }}\" alt=\"Jack London\" >
                      </a>
                      <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdownMenuLink\">
                          <a class=\"dropdown-item\" href=\"{{ path('user_show',{'id':'2'}) }}\">Profile</a>
                          <a class=\"dropdown-item\" href=\"user-booking-1.html\">My Events</a>
                          <div class=\"dropdown-divider\"></div>
                          <a class=\"dropdown-item\" >
                              <i class=\"fas fa-sign-out-alt mr-2 text-muted\"></i> Sign out</a>
                      </div>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
          <!-- /Navbar -->
        </header>

            <!-- Begin : Block -->

        {% block Content %}


        {% endblock %}

        <!-- End : Block -->
   <footer class=\"position-relative z-index-10 d-print-none\">
      <!-- Main block - menus, subscribe form-->
      <div class=\"py-6 bg-gray-200 text-muted\"> 
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
              <div class=\"font-weight-bold text-uppercase text-dark mb-3\">Events</div>
              <p>Explore Our events.</p>
            </div>
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
              <div class=\"font-weight-bold text-uppercase text-dark mb-3\">Trips</div>
              <p>Explore Our trips.</p>
            </div>
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
              <div class=\"font-weight-bold text-uppercase text-dark mb-3\">Accomadations</div>
              <p>Explore Our Accomadations.</p>
            </div>
            <div class=\"col-lg-4\">
              <h6 class=\"text-uppercase text-dark mb-3\">Mail</h6>
              <p class=\"mb-3\"> Sign to our newsletter</p>
              <form action=\"#\" id=\"newsletter-form\">
                <div class=\"input-group mb-3\">
                  <input class=\"form-control bg-transparent border-dark border-right-0\" type=\"email\" placeholder=\"Your Email Address\" aria-label=\"Your Email Address\">
                  <div class=\"input-group-append\">
                    <button class=\"btn btn-outline-dark border-left-0\" type=\"submit\"> <i class=\"fa fa-paper-plane text-lg\"></i></button>
                  </div>
                </div>
              </form>
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\"><a class=\"text-muted text-hover-primary\" href=\"#\" target=\"_blank\" title=\"facebook\"><i class=\"fab fa-facebook\"></i></a></li>
                <li class=\"list-inline-item\"><a class=\"text-muted text-hover-primary\" href=\"#\" target=\"_blank\" title=\"instagram\"><i class=\"fab fa-instagram\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class=\"py-4 font-weight-light bg-gray-800 text-gray-300\">
        <div class=\"container\">
          <div class=\"row align-items-center\">
            <div class=\"col-md-6 text-center text-md-left\">
              <p class=\"text-sm mb-md-0\">&copy; 2022, Apollo.  All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    {% block js %}
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open(\"GET\", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement(\"div\");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }    
      // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
      // use your own URL in production, please :)
      // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
      //- injectSvgSprite('\${path}icons/orion-svg-sprite.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src=\"{{ asset ('front-office/vendor/jquery/jquery.min.js') }}\"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src=\"{{ asset ('front-office/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src=\"{{ asset ('front-office/vendor/magnific-popup/jquery.magnific-popup.min.js') }}\"></script>
    <!-- Smooth scroll-->
    <script src=\"{{ asset ('front-office/vendor/smooth-scroll/smooth-scroll.polyfills.min.js') }}\"></script>
    <!-- Bootstrap Select-->
    <script src=\"{{ asset ('front-office/vendor/bootstrap-select/js/bootstrap-select.min.js') }}\"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src=\"{{ asset('front-office/vendor/object-fit-images/ofi.min.js') }}\"></script>
    <!-- Swiper Carousel    -->
    <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js') }}\"></script>
    <script>
         var basePath = ''
    </script>
    <!-- Main Theme JS file    -->
    <script src=\"{{ asset ('front-office/Front/html/js/theme.js') }}\"></script>
    {% endblock %}
  </body>
  {% endblock %}

</html>", "Front_Office/Header-Footer.html.twig", "D:\\3ème_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\Front_Office\\Header-Footer.html.twig");
    }
}
