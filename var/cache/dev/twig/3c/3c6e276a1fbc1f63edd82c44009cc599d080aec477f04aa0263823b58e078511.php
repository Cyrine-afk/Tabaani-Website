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

/* Front_Office/Home.html.twig */
class __TwigTemplate_58a34fbab614bdcaba2032de8a139a841b106f3d431c338c5aa3ea98ce8175d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'Content' => [$this, 'block_Content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Front_Office/Header-Footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front_Office/Home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front_Office/Home.html.twig"));

        $this->parent = $this->loadTemplate("Front_Office/Header-Footer.html.twig", "Front_Office/Home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Home 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 8
        echo "   <style>
     #calendrier{
       width: 80%;
       margin: auto;
     }
   </style>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_Content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Content"));

        // line 18
        echo "   <!-- Slider main container-->
    <div class=\"swiper-container home-slider multi-slider\">
      <!-- Additional required wrapper-->
      <div class=\"swiper-wrapper\">
        <!-- Slides-->
        <div class=\"swiper-slide bg-cover dark-overlay\" style=\"background-image: url('";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/photo-1493976040374-85c8e12f0c0e.jpg"), "html", null, true);
        echo "');\">
          <div class=\"container h-100\">
            <div class=\"d-flex h-100 text-white overlay-content align-items-center\" data-swiper-parallax=\"-500\">
              <div class=\"w-100\">
                <div class=\"row\">
                  <div class=\"col-lg-6\">
                    <p class=\"subtitle text-white letter-spacing-3 mb-3 font-weight-light\">Blue &amp; White</p>
                    <h2 class=\"display-3 font-weight-bold mb-3\" style=\"line-height: 1\">Japan</h2>
                    <p class=\"mb-5\">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.</p><a class=\"btn btn-outline-light d-none d-sm-inline-block\" href=\"#\">Start exploring Japan <i class=\"fa fa-angle-right ml-2\"></i></a>
                  </div>
                  <div class=\"col-lg-6 pl-lg-5 my-3 my-md-5 my-lg-0\"><a class=\"media text-reset text-decoration-none hover-animate mb-2 mb-md-5\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#paper-plane-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Discover events</h5>
                        <div class=\"media-body\">Tap to see more !</div>
                      </div></a><a class=\"media text-reset text-decoration-none hover-animate mb-2 mb-md-5\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#schedule-window-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Create events</h5>
                        <div class=\"media-body\">You don't have to be an expert to bring people together and share common passions ;) </div>
                      </div></a><a class=\"media text-reset text-decoration-none hover-animate\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#image-gallery-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Guide &amp; gallery</h5>
                        <p>Curious ? Click to see more </p>
                      </div></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide bg-cover dark-overlay\" style=\"background-image: url('";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/photo-1558114965-eeb97aa84c3b.jpg"), "html", null, true);
        echo "');\">
          <div class=\"container h-100\">
            <div class=\"d-flex h-100 text-white overlay-content align-items-center\" data-swiper-parallax=\"-500\">
              <div class=\"w-100\">
                <div class=\"row\">
                  <div class=\"col-12\">
                    <h2 class=\"display-3 font-weight-bold mb-5\" style=\"line-height: 1\">Morocco</h2>
                    <p class=\"mb-5\">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.</p>
                  </div>
                </div><a class=\"d-md-none btn btn-outline-light\" href=\"#\">Start exploring</a>
                <div class=\"row\">
                  <!-- place item-->
                  <div class=\"d-none d-md-block col-md-4 mb-5\" data-marker-id=\"\">
                    <div class=\"card h-100 border-0 shadow-lg bg-dark hover-animate\">
                      <div class=\"card-img-top overflow-hidden gradient-overlay\"> <img class=\"img-fluid\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/fez.jpg"), "html", null, true);
        echo "\" alt=\"Fez\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                        <div class=\"card-img-overlay-top text-right\"><a class=\"card-fav-icon position-relative z-index-40\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/javascript: void()"), "html", null, true);
        echo ";\">
                            <svg class=\"svg-icon text-white\">
                              <use xlink:href=\"#heart-1\"> </use>
                            </svg></a></div>
                      </div>
                      <div class=\"card-body d-flex align-items-center\">
                        <div class=\"w-100\">
                          <h6 class=\"card-title\"><a class=\"text-decoration-none text-white\" href=\"detail-rooms.html\">Fez</a></h6>
                          <div class=\"d-flex card-subtitle\">
                            <p class=\"flex-grow-1 mb-0 text-muted text-sm\">Central Morocco</p>
                            <p class=\"flex-shrink-1 mb-0 card-stars text-xs text-right\"><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- place item-->
                  <div class=\"d-none d-md-block col-md-4 mb-5\" data-marker-id=\"\">
                    <div class=\"card h-100 border-0 shadow-lg bg-dark hover-animate\">
                      <div class=\"card-img-top overflow-hidden gradient-overlay\"> <img class=\"img-fluid\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/photo/marrakech.jpg"), "html", null, true);
        echo "\"  alt=\"Marrakech\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                        <div class=\"card-img-overlay-top text-right\"><a class=\"card-fav-icon position-relative z-index-40\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/javascript: void()"), "html", null, true);
        echo ";\">
                            <svg class=\"svg-icon text-white\">
                              <use xlink:href=\"#heart-1\"> </use>
                            </svg></a></div>
                      </div>
                      <div class=\"card-body d-flex align-items-center\">
                        <div class=\"w-100\">
                          <h6 class=\"card-title\"><a class=\"text-decoration-none text-white\" href=\"detail-rooms.html\">Marrakech</a></h6>
                          <div class=\"d-flex card-subtitle\">
                            <p class=\"flex-grow-1 mb-0 text-muted text-sm\">Central Morocco</p>
                            <p class=\"flex-shrink-1 mb-0 card-stars text-xs text-right\"><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-gray-300\">                                  </i>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- place item-->
                  <div class=\"d-none d-md-block col-md-4 mb-5\" data-marker-id=\"\">
                    <div class=\"card h-100 border-0 shadow-lg bg-dark hover-animate\">
                      <div class=\"card-img-top overflow-hidden gradient-overlay\"> <img class=\"img-fluid\" src=\" ";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/essaouira.jpg"), "html", null, true);
        echo "\" alt=\"Essaouira\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                        <div class=\"card-img-overlay-top text-right\">
                          <a class=\"card-fav-icon position-relative z-index-40\" href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/javascript: void()"), "html", null, true);
        echo ";\">
                            <svg class=\"svg-icon text-white\">
                              <use xlink:href=\"#heart-1\"> </use>
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class=\"card-body d-flex align-items-center\">
                        <div class=\"w-100\">
                          <h6 class=\"card-title\"><a class=\"text-decoration-none text-white\" href=\"detail-rooms.html\">Essaouira</a></h6>
                          <div class=\"d-flex card-subtitle\">
                            <p class=\"flex-grow-1 mb-0 text-muted text-sm\">Coast</p>
                            <p class=\"flex-shrink-1 mb-0 card-stars text-xs text-right\"><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide bg-cover dark-overlay bg-cover-right\" style=\"background-image: url('";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/photo-1526392060635-9d6019884377.jpg"), "html", null, true);
        echo "');\">
          <div class=\"container h-100\">
            <div class=\"d-flex h-100 text-white overlay-content align-items-center\" data-swiper-parallax=\"-500\">
              <div class=\"w-100\">
                <div class=\"row\">
                  <div class=\"col-lg-6\">
                    <p class=\"subtitle text-white letter-spacing-3 mb-3 font-weight-light\">Discover South America</p>
                    <h2 class=\"display-3 font-weight-bold mb-3\" style=\"line-height: 1\">Peru</h2>
                    <p class=\"mb-5\">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit</p>
                  </div>
                </div>
                <div class=\"row mt-3 mt-md-5\">
                  <div class=\"col-md-4 mb-2 mb-md-0\"><a class=\"media text-reset text-decoration-none hover-animate\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#paper-plane-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Discover events</h5>
                        <div class=\"media-body\">Tap to see more !</div>
                      </div></a></div>
                  <div class=\"col-md-4 mb-2 mb-md-0\"><a class=\"media text-reset text-decoration-none hover-animate\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#schedule-window-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Create events</h5>
                        <div class=\"media-body\">You don't have to be an expert to bring people together and share common passions ;)</div>
                      </div></a></div>
                  <div class=\"col-md-4 mb-2 mb-md-0\"><a class=\"media text-reset text-decoration-none hover-animate\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#image-gallery-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Guide &amp; gallery</h5>
                        <p>Curious ? Click to see more </p>
                      </div></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"swiper-pagination swiper-pagination-white\"></div>
      <div class=\"swiper-nav d-none d-lg-block\">
        <div class=\"swiper-button-prev\" id=\"homePrev\"></div>
        <div class=\"swiper-button-next\" id=\"homeNext\"></div>
      </div>
    </div>
    <section class=\"py-6\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-4 px-5\">
            <p class=\"advantage-number\">1</p>
            <div class=\"pl-lg-5\">
              <h6 class=\"text-uppercase\">Travel</h6>
              <p class=\"text-muted text-sm mb-5 mb-lg-0\">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his.</p>
            </div>
          </div>
          <div class=\"col-lg-4 px-5\">
            <p class=\"advantage-number\">2</p>
            <div class=\"pl-lg-5\">
              <h6 class=\"text-uppercase\">Relax</h6>
              <p class=\"text-muted text-sm mb-5 mb-lg-0\">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size .</p>
            </div>
          </div>
          <div class=\"col-lg-4 px-5\">
            <p class=\"advantage-number\">3</p>
            <div class=\"pl-lg-5\">
              <h6 class=\"text-uppercase\">Explore</h6>
              <p class=\"text-muted text-sm mb-5 mb-lg-0\">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samp.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Places-->
    <section class=\"bg-gray-100\">
      <div class=\"bg-cover\" style=\"height: 250px; background-image: url(";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/places-divider.jpg"), "html", null, true);
        echo ");\"></div>
      <div class=\"container pb-lg-3\">
        <div class=\"search-bar rounded p-3 p-lg-4 position-relative mt-n4 z-index-20\">
          <form action=\"#\">
            <div class=\"row\">
              <div class=\"col-lg-4 d-flex align-items-center form-group\">
                <label>
                  <input class=\"form-control border-0 shadow-0\" type=\"search\" name=\"search\" placeholder=\"What are you searching for?\">
                </label>
              </div>
              <div class=\"col-md-6 col-lg-3 d-flex align-items-center form-group\">
                <div class=\"input-label-absolute input-label-absolute-right w-100\">
                  <label class=\"label-absolute\" for=\"location\"><i class=\"fa fa-crosshairs\"></i><span class=\"sr-only\">City</span></label>
                  <input class=\"form-control border-0 shadow-0\" type=\"text\" name=\"location\" placeholder=\"Location\" id=\"location\">
                </div>
              </div>
              <div class=\"col-md-6 col-lg-3 d-flex align-items-center form-group no-divider\">
                <select class=\"selectpicker\" title=\"Categories\" data-style=\"btn-form-control\">
                  <option value=\"small\">Restaurants</option>
                  <option value=\"medium\">Hotels</option>
                  <option value=\"large\">Cafes</option>
                  <option value=\"x-large\">Garages</option>
                </select>
              </div>
              <div class=\"col-lg-2 form-group mb-0\">
                <button class=\"btn btn-primary btn-block h-100\" type=\"submit\">Search    </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class=\"py-6 bg-gray-100\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-8\">
            <p class=\"subtitle text-primary\">our latest trips</p>
            <h2>Tabaani Trips</h2>
          </div>
          <div class=\"col-md-4 d-lg-flex align-items-center justify-content-end\"><a class=\"text-muted text-sm\" href=\"category.html\">
               See all guides<i class=\"fas fa-angle-double-right ml-2\"></i></a></div>
        </div>
        <div class=\"swiper-container guides-slider mx-n2 pt-3\">
          <!-- Additional required wrapper-->
          <div class=\"swiper-wrapper pb-5\">
            <!-- Slides-->
            <div class=\"swiper-slide h-auto px-2\">
              <div class=\"card card-poster gradient-overlay hover-animate mb-4 mb-lg-0\"><a class=\"tile-link\" href=\"category.html\"></a><img class=\"bg-image\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/photo/new-york.jpg"), "html", null, true);
        echo "\"  alt=\"Card image\">
                <div class=\"card-body overlay-content\">
                  <h6 class=\"card-title text-shadow text-uppercase\">New York</h6>
                  <p class=\"card-text text-sm\">The big apple</p>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide h-auto px-2\">
              <div class=\"card card-poster gradient-overlay hover-animate mb-4 mb-lg-0\"><a class=\"tile-link\" href=\"category.html\"></a><img class=\"bg-image\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/photo/paris.jpg"), "html", null, true);
        echo "\" alt=\"Card image\">
                <div class=\"card-body overlay-content\">
                  <h6 class=\"card-title text-shadow text-uppercase\">Paris</h6>
                  <p class=\"card-text text-sm\">Artist capital of Europe</p>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide h-auto px-2\">
              <div class=\"card card-poster gradient-overlay hover-animate mb-4 mb-lg-0\"><a class=\"tile-link\" href=\"category.html\"></a><img class=\"bg-image\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/photo/barcelona.jpg"), "html", null, true);
        echo "\" alt=\"Card image\">
                <div class=\"card-body overlay-content\">
                  <h6 class=\"card-title text-shadow text-uppercase\">Barcelona</h6>
                  <p class=\"card-text text-sm\">Dal??, Gaud??, Barrio Gotico</p>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide h-auto px-2\">
              <div class=\"card card-poster gradient-overlay hover-animate mb-4 mb-lg-0\"><a class=\"tile-link\" href=\"category.html\">

                </a>
                <img class=\"bg-image\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/praque.jpg"), "html", null, true);
        echo "\"  alt=\"Card image\">
                <div class=\"card-body overlay-content\">
                  <h6 class=\"card-title text-shadow text-uppercase\">Prague</h6>
                  <p class=\"card-text text-sm\">City of hundred towers</p>
                </div>
              </div>
            </div>
          </div>
          <div class=\"swiper-pagination d-md-none\"> </div>
        </div>
      </div>
    </section>
    <section class=\"py-6\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-8\">
            <p class=\"subtitle text-primary\">What's new on Tabaani ?</p>
            <h2>Check Out The Events Calendar</h2>
          </div>
          <div class=\"col-md-4 d-md-flex align-items-center justify-content-end\">
            <a class=\"text-muted text-sm\" href=\"";
        // line 326
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_index");
        echo "\">
               See all events<i class=\"fas fa-angle-double-right ml-2\"></i>
            </a>
          </div>
        </div>

        <!-- ligne 1 events -->
        <div class=\"row\" id=\"calendrier\">



          <script>
            window.onload = () => {
              let calendarElt = document.querySelector(\"#calendrier\")

              let calendar = new FullCalendar.Calendar(calendarElt,{
                initialView: 'dayGridMonth',
                headerToolbar: {
                  start: 'prev,next',
                  center: 'title',
                  end: 'dayGridMonth,timeGridWeek'
                },
                events: ";
        // line 348
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 348, $this->source); })());
        echo ",

              })

              calendar.render()
            }
          </script>
        </div>
      </div>
    </section>

    <section class=\"py-6\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-8\">
            <p class=\"subtitle text-secondary\">Here you can book your accomdation     </p>
            <h2>Accomadations</h2>
          </div>
          <div class=\"col-md-4 d-lg-flex align-items-center justify-content-end\"><a class=\"text-muted text-sm\" href=\"category.html\">
               See all deals<i class=\"fas fa-angle-double-right ml-2\"></i></a></div>
        </div>
        <!-- Slider main container-->
        <div class=\"swiper-container swiper-container-mx-negative swiper-init pt-3\" data-swiper=\"{&quot;slidesPerView&quot;:4,&quot;spaceBetween&quot;:20,&quot;loop&quot;:true,&quot;roundLengths&quot;:true,&quot;breakpoints&quot;:{&quot;1200&quot;:{&quot;slidesPerView&quot;:3},&quot;991&quot;:{&quot;slidesPerView&quot;:2},&quot;565&quot;:{&quot;slidesPerView&quot;:1}},&quot;pagination&quot;:{&quot;el&quot;:&quot;.swiper-pagination&quot;,&quot;clickable&quot;:true,&quot;dynamicBullets&quot;:true}}\">
          <!-- Additional required wrapper-->
          <div class=\"swiper-wrapper pb-5\">
            <!-- Slides-->
            <div class=\"swiper-slide h-auto px-2\">
              <!-- place item-->
              <div class=\"w-100 h-100 hover-animate\" data-marker-id=\"59c0c8e33b1527bfe2abaf92\">
                <div class=\"card h-100 border-0 shadow\">
                  <div class=\"card-img-top overflow-hidden gradient-overlay\"> <img class=\"img-fluid\" src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/avatar/avatar-7.jpg"), "html", null, true);
        echo "\"  alt=\"Modern, Well-Appointed Room\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                    <div class=\"card-img-overlay-bottom z-index-20\">
                      <div class=\"media text-white text-sm align-items-center\"><img class=\"avatar avatar-border-white mr-2\" src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/avatar/avatar-7.jpg"), "html", null, true);
        echo "\"  alt=\"Pamela\"/>
                        <div class=\"media-body\">Pamela</div>
                      </div>
                    </div>
                    <div class=\"card-img-overlay-top text-right\">
                      <a class=\"card-fav-icon position-relative z-index-40\" href=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/javascript: void()"), "html", null, true);
        echo ";\">
                        <svg class=\"svg-icon text-white\">
                          <use xlink:href=\"#heart-1\"> </use>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class=\"card-body d-flex align-items-center\">
                    <div class=\"w-100\">
                      <h6 class=\"card-title\"><a class=\"text-decoration-none text-dark\" href=\"detail-rooms.html\">Modern, Well-Appointed Room</a></h6>
                      <div class=\"d-flex card-subtitle mb-3\">
                        <p class=\"flex-grow-1 mb-0 text-muted text-sm\">Private room</p>
                        <p class=\"flex-shrink-1 mb-0 card-stars text-xs text-right\"><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i>
                        </p>
                      </div>
                      <p class=\"card-text text-muted\"><span class=\"h4 text-primary\">\$80</span> per night</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!-- If we need pagination-->
          <div class=\"swiper-pagination\"></div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front_Office/Home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 385,  532 => 380,  527 => 378,  494 => 348,  469 => 326,  446 => 306,  432 => 295,  421 => 287,  410 => 279,  360 => 232,  274 => 149,  247 => 125,  242 => 123,  219 => 103,  215 => 102,  192 => 82,  188 => 81,  171 => 67,  124 => 23,  117 => 18,  107 => 17,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends'Front_Office/Header-Footer.html.twig' %}

 {% block title %}
Home 
{% endblock %}

 {% block stylesheet %}
   <style>
     #calendrier{
       width: 80%;
       margin: auto;
     }
   </style>
 {% endblock %}


{% block Content %}
   <!-- Slider main container-->
    <div class=\"swiper-container home-slider multi-slider\">
      <!-- Additional required wrapper-->
      <div class=\"swiper-wrapper\">
        <!-- Slides-->
        <div class=\"swiper-slide bg-cover dark-overlay\" style=\"background-image: url('{{ asset('Front-Office/img/photo/photo-1493976040374-85c8e12f0c0e.jpg') }}');\">
          <div class=\"container h-100\">
            <div class=\"d-flex h-100 text-white overlay-content align-items-center\" data-swiper-parallax=\"-500\">
              <div class=\"w-100\">
                <div class=\"row\">
                  <div class=\"col-lg-6\">
                    <p class=\"subtitle text-white letter-spacing-3 mb-3 font-weight-light\">Blue &amp; White</p>
                    <h2 class=\"display-3 font-weight-bold mb-3\" style=\"line-height: 1\">Japan</h2>
                    <p class=\"mb-5\">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.</p><a class=\"btn btn-outline-light d-none d-sm-inline-block\" href=\"#\">Start exploring Japan <i class=\"fa fa-angle-right ml-2\"></i></a>
                  </div>
                  <div class=\"col-lg-6 pl-lg-5 my-3 my-md-5 my-lg-0\"><a class=\"media text-reset text-decoration-none hover-animate mb-2 mb-md-5\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#paper-plane-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Discover events</h5>
                        <div class=\"media-body\">Tap to see more !</div>
                      </div></a><a class=\"media text-reset text-decoration-none hover-animate mb-2 mb-md-5\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#schedule-window-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Create events</h5>
                        <div class=\"media-body\">You don't have to be an expert to bring people together and share common passions ;) </div>
                      </div></a><a class=\"media text-reset text-decoration-none hover-animate\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#image-gallery-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Guide &amp; gallery</h5>
                        <p>Curious ? Click to see more </p>
                      </div></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide bg-cover dark-overlay\" style=\"background-image: url('{{ asset('Front-Office/img/photo/photo-1558114965-eeb97aa84c3b.jpg') }}');\">
          <div class=\"container h-100\">
            <div class=\"d-flex h-100 text-white overlay-content align-items-center\" data-swiper-parallax=\"-500\">
              <div class=\"w-100\">
                <div class=\"row\">
                  <div class=\"col-12\">
                    <h2 class=\"display-3 font-weight-bold mb-5\" style=\"line-height: 1\">Morocco</h2>
                    <p class=\"mb-5\">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.</p>
                  </div>
                </div><a class=\"d-md-none btn btn-outline-light\" href=\"#\">Start exploring</a>
                <div class=\"row\">
                  <!-- place item-->
                  <div class=\"d-none d-md-block col-md-4 mb-5\" data-marker-id=\"\">
                    <div class=\"card h-100 border-0 shadow-lg bg-dark hover-animate\">
                      <div class=\"card-img-top overflow-hidden gradient-overlay\"> <img class=\"img-fluid\" src=\"{{ asset('Front-Office/img/photo/fez.jpg')}}\" alt=\"Fez\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                        <div class=\"card-img-overlay-top text-right\"><a class=\"card-fav-icon position-relative z-index-40\" href=\"{{ asset('js/javascript: void()') }};\">
                            <svg class=\"svg-icon text-white\">
                              <use xlink:href=\"#heart-1\"> </use>
                            </svg></a></div>
                      </div>
                      <div class=\"card-body d-flex align-items-center\">
                        <div class=\"w-100\">
                          <h6 class=\"card-title\"><a class=\"text-decoration-none text-white\" href=\"detail-rooms.html\">Fez</a></h6>
                          <div class=\"d-flex card-subtitle\">
                            <p class=\"flex-grow-1 mb-0 text-muted text-sm\">Central Morocco</p>
                            <p class=\"flex-shrink-1 mb-0 card-stars text-xs text-right\"><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- place item-->
                  <div class=\"d-none d-md-block col-md-4 mb-5\" data-marker-id=\"\">
                    <div class=\"card h-100 border-0 shadow-lg bg-dark hover-animate\">
                      <div class=\"card-img-top overflow-hidden gradient-overlay\"> <img class=\"img-fluid\" src=\"{{ asset('front-office/img/photo/marrakech.jpg')}}\"  alt=\"Marrakech\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                        <div class=\"card-img-overlay-top text-right\"><a class=\"card-fav-icon position-relative z-index-40\" href=\"{{ asset('js/javascript: void()') }};\">
                            <svg class=\"svg-icon text-white\">
                              <use xlink:href=\"#heart-1\"> </use>
                            </svg></a></div>
                      </div>
                      <div class=\"card-body d-flex align-items-center\">
                        <div class=\"w-100\">
                          <h6 class=\"card-title\"><a class=\"text-decoration-none text-white\" href=\"detail-rooms.html\">Marrakech</a></h6>
                          <div class=\"d-flex card-subtitle\">
                            <p class=\"flex-grow-1 mb-0 text-muted text-sm\">Central Morocco</p>
                            <p class=\"flex-shrink-1 mb-0 card-stars text-xs text-right\"><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-gray-300\">                                  </i>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- place item-->
                  <div class=\"d-none d-md-block col-md-4 mb-5\" data-marker-id=\"\">
                    <div class=\"card h-100 border-0 shadow-lg bg-dark hover-animate\">
                      <div class=\"card-img-top overflow-hidden gradient-overlay\"> <img class=\"img-fluid\" src=\" {{asset('Front-Office/img/photo/essaouira.jpg') }}\" alt=\"Essaouira\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                        <div class=\"card-img-overlay-top text-right\">
                          <a class=\"card-fav-icon position-relative z-index-40\" href=\"{{ asset('js/javascript: void()') }};\">
                            <svg class=\"svg-icon text-white\">
                              <use xlink:href=\"#heart-1\"> </use>
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class=\"card-body d-flex align-items-center\">
                        <div class=\"w-100\">
                          <h6 class=\"card-title\"><a class=\"text-decoration-none text-white\" href=\"detail-rooms.html\">Essaouira</a></h6>
                          <div class=\"d-flex card-subtitle\">
                            <p class=\"flex-grow-1 mb-0 text-muted text-sm\">Coast</p>
                            <p class=\"flex-shrink-1 mb-0 card-stars text-xs text-right\"><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide bg-cover dark-overlay bg-cover-right\" style=\"background-image: url('{{ asset('Front-Office/img/photo/photo-1526392060635-9d6019884377.jpg') }}');\">
          <div class=\"container h-100\">
            <div class=\"d-flex h-100 text-white overlay-content align-items-center\" data-swiper-parallax=\"-500\">
              <div class=\"w-100\">
                <div class=\"row\">
                  <div class=\"col-lg-6\">
                    <p class=\"subtitle text-white letter-spacing-3 mb-3 font-weight-light\">Discover South America</p>
                    <h2 class=\"display-3 font-weight-bold mb-3\" style=\"line-height: 1\">Peru</h2>
                    <p class=\"mb-5\">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit</p>
                  </div>
                </div>
                <div class=\"row mt-3 mt-md-5\">
                  <div class=\"col-md-4 mb-2 mb-md-0\"><a class=\"media text-reset text-decoration-none hover-animate\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#paper-plane-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Discover events</h5>
                        <div class=\"media-body\">Tap to see more !</div>
                      </div></a></div>
                  <div class=\"col-md-4 mb-2 mb-md-0\"><a class=\"media text-reset text-decoration-none hover-animate\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#schedule-window-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Create events</h5>
                        <div class=\"media-body\">You don't have to be an expert to bring people together and share common passions ;)</div>
                      </div></a></div>
                  <div class=\"col-md-4 mb-2 mb-md-0\"><a class=\"media text-reset text-decoration-none hover-animate\" href=\"#\">
                      <div class=\"icon-rounded bg-white opacity-7 mr-4\">
                        <svg class=\"svg-icon text-dark w-2rem h-2rem\">
                          <use xlink:href=\"#image-gallery-1\"> </use>
                        </svg>
                      </div>
                      <div class=\"media-body\">
                        <h5>Guide &amp; gallery</h5>
                        <p>Curious ? Click to see more </p>
                      </div></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"swiper-pagination swiper-pagination-white\"></div>
      <div class=\"swiper-nav d-none d-lg-block\">
        <div class=\"swiper-button-prev\" id=\"homePrev\"></div>
        <div class=\"swiper-button-next\" id=\"homeNext\"></div>
      </div>
    </div>
    <section class=\"py-6\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-4 px-5\">
            <p class=\"advantage-number\">1</p>
            <div class=\"pl-lg-5\">
              <h6 class=\"text-uppercase\">Travel</h6>
              <p class=\"text-muted text-sm mb-5 mb-lg-0\">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his.</p>
            </div>
          </div>
          <div class=\"col-lg-4 px-5\">
            <p class=\"advantage-number\">2</p>
            <div class=\"pl-lg-5\">
              <h6 class=\"text-uppercase\">Relax</h6>
              <p class=\"text-muted text-sm mb-5 mb-lg-0\">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size .</p>
            </div>
          </div>
          <div class=\"col-lg-4 px-5\">
            <p class=\"advantage-number\">3</p>
            <div class=\"pl-lg-5\">
              <h6 class=\"text-uppercase\">Explore</h6>
              <p class=\"text-muted text-sm mb-5 mb-lg-0\">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samp.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Places-->
    <section class=\"bg-gray-100\">
      <div class=\"bg-cover\" style=\"height: 250px; background-image: url({{ asset('Front-Office/img/photo/places-divider.jpg') }});\"></div>
      <div class=\"container pb-lg-3\">
        <div class=\"search-bar rounded p-3 p-lg-4 position-relative mt-n4 z-index-20\">
          <form action=\"#\">
            <div class=\"row\">
              <div class=\"col-lg-4 d-flex align-items-center form-group\">
                <label>
                  <input class=\"form-control border-0 shadow-0\" type=\"search\" name=\"search\" placeholder=\"What are you searching for?\">
                </label>
              </div>
              <div class=\"col-md-6 col-lg-3 d-flex align-items-center form-group\">
                <div class=\"input-label-absolute input-label-absolute-right w-100\">
                  <label class=\"label-absolute\" for=\"location\"><i class=\"fa fa-crosshairs\"></i><span class=\"sr-only\">City</span></label>
                  <input class=\"form-control border-0 shadow-0\" type=\"text\" name=\"location\" placeholder=\"Location\" id=\"location\">
                </div>
              </div>
              <div class=\"col-md-6 col-lg-3 d-flex align-items-center form-group no-divider\">
                <select class=\"selectpicker\" title=\"Categories\" data-style=\"btn-form-control\">
                  <option value=\"small\">Restaurants</option>
                  <option value=\"medium\">Hotels</option>
                  <option value=\"large\">Cafes</option>
                  <option value=\"x-large\">Garages</option>
                </select>
              </div>
              <div class=\"col-lg-2 form-group mb-0\">
                <button class=\"btn btn-primary btn-block h-100\" type=\"submit\">Search    </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class=\"py-6 bg-gray-100\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-8\">
            <p class=\"subtitle text-primary\">our latest trips</p>
            <h2>Tabaani Trips</h2>
          </div>
          <div class=\"col-md-4 d-lg-flex align-items-center justify-content-end\"><a class=\"text-muted text-sm\" href=\"category.html\">
               See all guides<i class=\"fas fa-angle-double-right ml-2\"></i></a></div>
        </div>
        <div class=\"swiper-container guides-slider mx-n2 pt-3\">
          <!-- Additional required wrapper-->
          <div class=\"swiper-wrapper pb-5\">
            <!-- Slides-->
            <div class=\"swiper-slide h-auto px-2\">
              <div class=\"card card-poster gradient-overlay hover-animate mb-4 mb-lg-0\"><a class=\"tile-link\" href=\"category.html\"></a><img class=\"bg-image\" src=\"{{ asset ('front-office/img/photo/new-york.jpg')}}\"  alt=\"Card image\">
                <div class=\"card-body overlay-content\">
                  <h6 class=\"card-title text-shadow text-uppercase\">New York</h6>
                  <p class=\"card-text text-sm\">The big apple</p>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide h-auto px-2\">
              <div class=\"card card-poster gradient-overlay hover-animate mb-4 mb-lg-0\"><a class=\"tile-link\" href=\"category.html\"></a><img class=\"bg-image\" src=\"{{ asset ('front-office/img/photo/paris.jpg')}}\" alt=\"Card image\">
                <div class=\"card-body overlay-content\">
                  <h6 class=\"card-title text-shadow text-uppercase\">Paris</h6>
                  <p class=\"card-text text-sm\">Artist capital of Europe</p>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide h-auto px-2\">
              <div class=\"card card-poster gradient-overlay hover-animate mb-4 mb-lg-0\"><a class=\"tile-link\" href=\"category.html\"></a><img class=\"bg-image\" src=\"{{ asset ('front-office/img/photo/barcelona.jpg')}}\" alt=\"Card image\">
                <div class=\"card-body overlay-content\">
                  <h6 class=\"card-title text-shadow text-uppercase\">Barcelona</h6>
                  <p class=\"card-text text-sm\">Dal??, Gaud??, Barrio Gotico</p>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide h-auto px-2\">
              <div class=\"card card-poster gradient-overlay hover-animate mb-4 mb-lg-0\"><a class=\"tile-link\" href=\"category.html\">

                </a>
                <img class=\"bg-image\" src=\"{{ asset ('Front-Office/img/photo/praque.jpg')}}\"  alt=\"Card image\">
                <div class=\"card-body overlay-content\">
                  <h6 class=\"card-title text-shadow text-uppercase\">Prague</h6>
                  <p class=\"card-text text-sm\">City of hundred towers</p>
                </div>
              </div>
            </div>
          </div>
          <div class=\"swiper-pagination d-md-none\"> </div>
        </div>
      </div>
    </section>
    <section class=\"py-6\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-8\">
            <p class=\"subtitle text-primary\">What's new on Tabaani ?</p>
            <h2>Check Out The Events Calendar</h2>
          </div>
          <div class=\"col-md-4 d-md-flex align-items-center justify-content-end\">
            <a class=\"text-muted text-sm\" href=\"{{ path('events_index') }}\">
               See all events<i class=\"fas fa-angle-double-right ml-2\"></i>
            </a>
          </div>
        </div>

        <!-- ligne 1 events -->
        <div class=\"row\" id=\"calendrier\">



          <script>
            window.onload = () => {
              let calendarElt = document.querySelector(\"#calendrier\")

              let calendar = new FullCalendar.Calendar(calendarElt,{
                initialView: 'dayGridMonth',
                headerToolbar: {
                  start: 'prev,next',
                  center: 'title',
                  end: 'dayGridMonth,timeGridWeek'
                },
                events: {{ data|raw }},

              })

              calendar.render()
            }
          </script>
        </div>
      </div>
    </section>

    <section class=\"py-6\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-8\">
            <p class=\"subtitle text-secondary\">Here you can book your accomdation     </p>
            <h2>Accomadations</h2>
          </div>
          <div class=\"col-md-4 d-lg-flex align-items-center justify-content-end\"><a class=\"text-muted text-sm\" href=\"category.html\">
               See all deals<i class=\"fas fa-angle-double-right ml-2\"></i></a></div>
        </div>
        <!-- Slider main container-->
        <div class=\"swiper-container swiper-container-mx-negative swiper-init pt-3\" data-swiper=\"{&quot;slidesPerView&quot;:4,&quot;spaceBetween&quot;:20,&quot;loop&quot;:true,&quot;roundLengths&quot;:true,&quot;breakpoints&quot;:{&quot;1200&quot;:{&quot;slidesPerView&quot;:3},&quot;991&quot;:{&quot;slidesPerView&quot;:2},&quot;565&quot;:{&quot;slidesPerView&quot;:1}},&quot;pagination&quot;:{&quot;el&quot;:&quot;.swiper-pagination&quot;,&quot;clickable&quot;:true,&quot;dynamicBullets&quot;:true}}\">
          <!-- Additional required wrapper-->
          <div class=\"swiper-wrapper pb-5\">
            <!-- Slides-->
            <div class=\"swiper-slide h-auto px-2\">
              <!-- place item-->
              <div class=\"w-100 h-100 hover-animate\" data-marker-id=\"59c0c8e33b1527bfe2abaf92\">
                <div class=\"card h-100 border-0 shadow\">
                  <div class=\"card-img-top overflow-hidden gradient-overlay\"> <img class=\"img-fluid\" src=\"{{ asset ('front-office/img/avatar/avatar-7.jpg')}}\"  alt=\"Modern, Well-Appointed Room\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                    <div class=\"card-img-overlay-bottom z-index-20\">
                      <div class=\"media text-white text-sm align-items-center\"><img class=\"avatar avatar-border-white mr-2\" src=\"{{ asset ('front-office/img/avatar/avatar-7.jpg')}}\"  alt=\"Pamela\"/>
                        <div class=\"media-body\">Pamela</div>
                      </div>
                    </div>
                    <div class=\"card-img-overlay-top text-right\">
                      <a class=\"card-fav-icon position-relative z-index-40\" href=\"{{ asset('js/javascript: void()') }};\">
                        <svg class=\"svg-icon text-white\">
                          <use xlink:href=\"#heart-1\"> </use>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class=\"card-body d-flex align-items-center\">
                    <div class=\"w-100\">
                      <h6 class=\"card-title\"><a class=\"text-decoration-none text-dark\" href=\"detail-rooms.html\">Modern, Well-Appointed Room</a></h6>
                      <div class=\"d-flex card-subtitle mb-3\">
                        <p class=\"flex-grow-1 mb-0 text-muted text-sm\">Private room</p>
                        <p class=\"flex-shrink-1 mb-0 card-stars text-xs text-right\"><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i><i class=\"fa fa-star text-warning\"></i>
                        </p>
                      </div>
                      <p class=\"card-text text-muted\"><span class=\"h4 text-primary\">\$80</span> per night</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!-- If we need pagination-->
          <div class=\"swiper-pagination\"></div>
        </div>
    </section>

{% endblock %}
", "Front_Office/Home.html.twig", "D:\\3??me_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\Front_Office\\Home.html.twig");
    }
}
