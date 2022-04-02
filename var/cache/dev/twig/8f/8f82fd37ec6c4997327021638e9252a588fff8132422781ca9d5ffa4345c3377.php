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
class __TwigTemplate_49fd39eaed59881ea0822476a2f4468ad2b343e2c77abb7b0cae52b08d7b6579 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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

    // line 8
    public function block_Content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Content"));

        // line 9
        echo "   <!-- Slider main container-->
    <div class=\"swiper-container home-slider multi-slider\">
      <!-- Additional required wrapper-->
      <div class=\"swiper-wrapper\">
        <!-- Slides-->
        <div class=\"swiper-slide bg-cover dark-overlay\" style=\"background-image: url('";
        // line 14
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
        // line 58
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
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/fez.jpg"), "html", null, true);
        echo "\" alt=\"Fez\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                        <div class=\"card-img-overlay-top text-right\"><a class=\"card-fav-icon position-relative z-index-40\" href=\"";
        // line 73
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
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/photo/marrakech.jpg"), "html", null, true);
        echo "\"  alt=\"Marrakech\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                        <div class=\"card-img-overlay-top text-right\"><a class=\"card-fav-icon position-relative z-index-40\" href=\"";
        // line 94
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
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/essaouira.jpg"), "html", null, true);
        echo "\" alt=\"Essaouira\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                        <div class=\"card-img-overlay-top text-right\">
                          <a class=\"card-fav-icon position-relative z-index-40\" href=\"";
        // line 116
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
        // line 140
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
        // line 223
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
        // line 270
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
        // line 278
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
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/photo/barcelona.jpg"), "html", null, true);
        echo "\" alt=\"Card image\">
                <div class=\"card-body overlay-content\">
                  <h6 class=\"card-title text-shadow text-uppercase\">Barcelona</h6>
                  <p class=\"card-text text-sm\">Dalí, Gaudí, Barrio Gotico</p>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide h-auto px-2\">
              <div class=\"card card-poster gradient-overlay hover-animate mb-4 mb-lg-0\"><a class=\"tile-link\" href=\"category.html\">

                </a>
                <img class=\"bg-image\" src=\"";
        // line 297
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
            <p class=\"subtitle text-primary\">The latest events</p>
            <h2>What's new on Tabaani</h2>
          </div>
          <div class=\"col-md-4 d-md-flex align-items-center justify-content-end\">
            <a class=\"text-muted text-sm\" href=\"";
        // line 317
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_index");
        echo "\">
               See all events<i class=\"fas fa-angle-double-right ml-2\"></i>
            </a>
          </div>
        </div>

        <!-- ligne 1 events -->
        <div class=\"row\">
          <!-- event name & picture -->
          <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-8\">
            <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\" style=\"background: center center url(";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/photo-1449034446853-66c86144b0ad.jpg"), "html", null, true);
        echo ") no-repeat; background-size: cover; \"><a class=\"tile-link\" href=\"category.html\"> </a>
              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                <h3 class=\"text-shadow text-uppercase mb-0\">Hiking Fest</h3>
              </div>
            </div>
            <!-- event top accessories -->
            <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
              <div class=\"badge badge-transparent badge-pill px-3 py-2\">
                <svg class=\"svg-icon text-black\">
                  <use xlink:href=\"#pin-1\"> </use>
                </svg>
                Offline Event
              </div>
              <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                <div >
                  <img class=\"avatar avatar-border-white mr-2\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/avatar/avatar-7.jpg"), "html", null, true);
        echo "\" alt=\"John\"/>
                </div>
              </a>
            </div>
            <!-- event bottom accessories -->
            <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
              <h4 class=\"text-shadow text-white\" >Tunis, Ariana</h4>
              <p class=\"mb-2 \">
                <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                  <span> 17 févr. 2022 - </span>
                  <span> 17:00 </span>
                  <span> UTC+1 </span>
                </time>
              </p>
            </div>
          </div>

          <!-- event name & picture -->
          <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
            <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\" style=\"background: center center url(";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/photo/photo-1429554429301-1c7d5ae2d42e.jpg"), "html", null, true);
        echo ") no-repeat; background-size: cover;\"><a class=\"tile-link\" href=\"category.html\"> </a>
              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                <h3 class=\"text-shadow text-uppercase mb-0\">Anime Friends</h3>
              </div>
            </div>
            <!-- event top accessories -->
            <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
              <div class=\"badge badge-transparent badge-pill px-3 py-2\">
                <svg class=\"svg-icon text-black\">
                  <use xlink:href=\"#support-1\"> </use>
                </svg>
                Online Event
              </div>
              <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                <div >
                  <img class=\"avatar avatar-border-white mr-2\" src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/avatar/avatar-7.jpg"), "html", null, true);
        echo "\"  alt=\"John\"/>
                </div>
              </a>
            </div>
            <!-- event bottom accessories -->
            <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
              <h4 class=\"text-shadow text-white\" >Sousse</h4>
              <p class=\"mb-2 \">
                <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                  <span> 17 févr. 2022 - </span>
                  <span> 17:00 </span>
                  <span> UTC+1 </span>
                </time>
              </p>
            </div>
          </div>
        </div>

        <!-- ligne 2 events -->
        <div class=\"row\">
          <!-- event name & picture -->
          <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
            <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\" style=\"background: center center url(";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/photo-1523430410476-0185cb1f6ff9.jpg"), "html", null, true);
        echo ") no-repeat; background-size: cover;\"><a class=\"tile-link\" href=\"category.html\"> </a>
              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                <h3 class=\"text-shadow text-uppercase mb-0\">Yoga of laughter</h3>
              </div>
              <!-- event top accessories -->
              <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
                <div class=\"badge badge-transparent badge-pill px-3 py-2\">
                  <svg class=\"svg-icon text-black\">
                    <use xlink:href=\"#support-1\"> </use>
                  </svg>
                  Online Event
                </div>
                <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                  <div >
                    <img class=\"avatar avatar-border-white mr-2\" src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/avatar/avatar-7.jpg"), "html", null, true);
        echo "\"  alt=\"John\"/>
                  </div>
                </a>
              </div>
              <!-- event bottom accessories -->
              <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
                <h4 class=\"text-shadow text-white\" >Sousse</h4>
                <p class=\"mb-2 \">
                  <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                    <span> 17 févr. 2022 - </span>
                    <span> 17:00 </span>
                    <span> UTC+1 </span>
                  </time>
                </p>
              </div>
            </div>
          </div>

          <!-- event name & picture -->
          <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
            <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\" style=\"background: center center url(";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/photo-1505245208761-ba872912fac0.jpg"), "html", null, true);
        echo ") no-repeat; background-size: cover;\"><a class=\"tile-link\" href=\"category.html\"> </a>
              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                <h3 class=\"text-shadow text-uppercase mb-0\">Set Free</h3>
              </div>
              <!-- event top accessories -->
              <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
                <div class=\"badge badge-transparent badge-pill px-3 py-2\">
                  <svg class=\"svg-icon text-black\">
                    <use xlink:href=\"#pin-1\"> </use>
                  </svg>
                  Offline Event
                </div>
                <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                  <div >
                    <img class=\"avatar avatar-border-white mr-2\" src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/avatar/avatar-7.jpg"), "html", null, true);
        echo "\"  alt=\"John\"/>
                  </div>
                </a>
              </div>
              <!-- event bottom accessories -->
              <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
                <h4 class=\"text-shadow text-white\" >Sousse</h4>
                <p class=\"mb-2 \">
                  <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                    <span> 17 févr. 2022 - </span>
                    <span> 17:00 </span>
                    <span> UTC+1 </span>
                  </time>
                </p>
              </div>
            </div>
          </div>

          <!-- event name & picture -->
          <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
            <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\" style=\"background: center center url(";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front-Office/img/photo/photo-1519867850-74775a87e783.jpg"), "html", null, true);
        echo ") no-repeat; background-size: cover;\"><a class=\"tile-link\" href=\"category.html\"> </a>
              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                <h3 class=\"text-shadow text-uppercase mb-0\">Chess day</h3>
              </div>
              <!-- event top accessories -->
              <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
                <div class=\"badge badge-transparent badge-pill px-3 py-2\">
                  <svg class=\"svg-icon text-black\">
                    <use xlink:href=\"#pin-1\"> </use>
                  </svg>
                  Offline Event
                </div>
                <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                  <div >
                    <img class=\"avatar avatar-border-white mr-2\" src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/avatar/avatar-7.jpg"), "html", null, true);
        echo "\"  alt=\"John\"/>
                  </div>
                </a>
              </div>
              <!-- event bottom accessories -->
              <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
                <h4 class=\"text-shadow text-white\" >Sousse</h4>
                <p class=\"mb-2 \">
                  <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                    <span> 17 févr. 2022 - </span>
                    <span> 17:00 </span>
                    <span> UTC+1 </span>
                  </time>
                </p>
              </div>
            </div>
          </div>
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
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/avatar/avatar-7.jpg"), "html", null, true);
        echo "\"  alt=\"Modern, Well-Appointed Room\"/><a class=\"tile-link\" href=\"detail-rooms.html\"></a>
                    <div class=\"card-img-overlay-bottom z-index-20\">
                      <div class=\"media text-white text-sm align-items-center\"><img class=\"avatar avatar-border-white mr-2\" src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/avatar/avatar-7.jpg"), "html", null, true);
        echo "\"  alt=\"Pamela\"/>
                        <div class=\"media-body\">Pamela</div>
                      </div>
                    </div>
                    <div class=\"card-img-overlay-top text-right\">
                      <a class=\"card-fav-icon position-relative z-index-40\" href=\"";
        // line 527
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
        return array (  691 => 527,  683 => 522,  678 => 520,  635 => 480,  618 => 466,  595 => 446,  578 => 432,  555 => 412,  538 => 398,  513 => 376,  495 => 361,  473 => 342,  455 => 327,  442 => 317,  419 => 297,  405 => 286,  394 => 278,  383 => 270,  333 => 223,  247 => 140,  220 => 116,  215 => 114,  192 => 94,  188 => 93,  165 => 73,  161 => 72,  144 => 58,  97 => 14,  90 => 9,  80 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends'Front_Office/Header-Footer.html.twig' %}

 {% block title %}
Home 
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
                  <p class=\"card-text text-sm\">Dalí, Gaudí, Barrio Gotico</p>
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
            <p class=\"subtitle text-primary\">The latest events</p>
            <h2>What's new on Tabaani</h2>
          </div>
          <div class=\"col-md-4 d-md-flex align-items-center justify-content-end\">
            <a class=\"text-muted text-sm\" href=\"{{ path('events_index') }}\">
               See all events<i class=\"fas fa-angle-double-right ml-2\"></i>
            </a>
          </div>
        </div>

        <!-- ligne 1 events -->
        <div class=\"row\">
          <!-- event name & picture -->
          <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-8\">
            <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\" style=\"background: center center url({{ asset('Front-Office/img/photo/photo-1449034446853-66c86144b0ad.jpg') }}) no-repeat; background-size: cover; \"><a class=\"tile-link\" href=\"category.html\"> </a>
              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                <h3 class=\"text-shadow text-uppercase mb-0\">Hiking Fest</h3>
              </div>
            </div>
            <!-- event top accessories -->
            <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
              <div class=\"badge badge-transparent badge-pill px-3 py-2\">
                <svg class=\"svg-icon text-black\">
                  <use xlink:href=\"#pin-1\"> </use>
                </svg>
                Offline Event
              </div>
              <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                <div >
                  <img class=\"avatar avatar-border-white mr-2\" src=\"{{ asset ('front-office/img/avatar/avatar-7.jpg')}}\" alt=\"John\"/>
                </div>
              </a>
            </div>
            <!-- event bottom accessories -->
            <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
              <h4 class=\"text-shadow text-white\" >Tunis, Ariana</h4>
              <p class=\"mb-2 \">
                <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                  <span> 17 févr. 2022 - </span>
                  <span> 17:00 </span>
                  <span> UTC+1 </span>
                </time>
              </p>
            </div>
          </div>

          <!-- event name & picture -->
          <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
            <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\" style=\"background: center center url({{ asset('front-office/img/photo/photo-1429554429301-1c7d5ae2d42e.jpg') }}) no-repeat; background-size: cover;\"><a class=\"tile-link\" href=\"category.html\"> </a>
              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                <h3 class=\"text-shadow text-uppercase mb-0\">Anime Friends</h3>
              </div>
            </div>
            <!-- event top accessories -->
            <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
              <div class=\"badge badge-transparent badge-pill px-3 py-2\">
                <svg class=\"svg-icon text-black\">
                  <use xlink:href=\"#support-1\"> </use>
                </svg>
                Online Event
              </div>
              <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                <div >
                  <img class=\"avatar avatar-border-white mr-2\" src=\"{{ asset ('front-office/img/avatar/avatar-7.jpg')}}\"  alt=\"John\"/>
                </div>
              </a>
            </div>
            <!-- event bottom accessories -->
            <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
              <h4 class=\"text-shadow text-white\" >Sousse</h4>
              <p class=\"mb-2 \">
                <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                  <span> 17 févr. 2022 - </span>
                  <span> 17:00 </span>
                  <span> UTC+1 </span>
                </time>
              </p>
            </div>
          </div>
        </div>

        <!-- ligne 2 events -->
        <div class=\"row\">
          <!-- event name & picture -->
          <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
            <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\" style=\"background: center center url({{ asset('Front-Office/img/photo/photo-1523430410476-0185cb1f6ff9.jpg') }}) no-repeat; background-size: cover;\"><a class=\"tile-link\" href=\"category.html\"> </a>
              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                <h3 class=\"text-shadow text-uppercase mb-0\">Yoga of laughter</h3>
              </div>
              <!-- event top accessories -->
              <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
                <div class=\"badge badge-transparent badge-pill px-3 py-2\">
                  <svg class=\"svg-icon text-black\">
                    <use xlink:href=\"#support-1\"> </use>
                  </svg>
                  Online Event
                </div>
                <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                  <div >
                    <img class=\"avatar avatar-border-white mr-2\" src=\"{{ asset ('front-office/img/avatar/avatar-7.jpg')}}\"  alt=\"John\"/>
                  </div>
                </a>
              </div>
              <!-- event bottom accessories -->
              <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
                <h4 class=\"text-shadow text-white\" >Sousse</h4>
                <p class=\"mb-2 \">
                  <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                    <span> 17 févr. 2022 - </span>
                    <span> 17:00 </span>
                    <span> UTC+1 </span>
                  </time>
                </p>
              </div>
            </div>
          </div>

          <!-- event name & picture -->
          <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
            <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\" style=\"background: center center url({{ asset('Front-Office/img/photo/photo-1505245208761-ba872912fac0.jpg') }}) no-repeat; background-size: cover;\"><a class=\"tile-link\" href=\"category.html\"> </a>
              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                <h3 class=\"text-shadow text-uppercase mb-0\">Set Free</h3>
              </div>
              <!-- event top accessories -->
              <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
                <div class=\"badge badge-transparent badge-pill px-3 py-2\">
                  <svg class=\"svg-icon text-black\">
                    <use xlink:href=\"#pin-1\"> </use>
                  </svg>
                  Offline Event
                </div>
                <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                  <div >
                    <img class=\"avatar avatar-border-white mr-2\" src=\"{{ asset ('front-office/img/avatar/avatar-7.jpg')}}\"  alt=\"John\"/>
                  </div>
                </a>
              </div>
              <!-- event bottom accessories -->
              <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
                <h4 class=\"text-shadow text-white\" >Sousse</h4>
                <p class=\"mb-2 \">
                  <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                    <span> 17 févr. 2022 - </span>
                    <span> 17:00 </span>
                    <span> UTC+1 </span>
                  </time>
                </p>
              </div>
            </div>
          </div>

          <!-- event name & picture -->
          <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
            <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\" style=\"background: center center url({{ asset('Front-Office/img/photo/photo-1519867850-74775a87e783.jpg') }}) no-repeat; background-size: cover;\"><a class=\"tile-link\" href=\"category.html\"> </a>
              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                <h3 class=\"text-shadow text-uppercase mb-0\">Chess day</h3>
              </div>
              <!-- event top accessories -->
              <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
                <div class=\"badge badge-transparent badge-pill px-3 py-2\">
                  <svg class=\"svg-icon text-black\">
                    <use xlink:href=\"#pin-1\"> </use>
                  </svg>
                  Offline Event
                </div>
                <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                  <div >
                    <img class=\"avatar avatar-border-white mr-2\" src=\"{{ asset ('front-office/img/avatar/avatar-7.jpg')}}\"  alt=\"John\"/>
                  </div>
                </a>
              </div>
              <!-- event bottom accessories -->
              <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
                <h4 class=\"text-shadow text-white\" >Sousse</h4>
                <p class=\"mb-2 \">
                  <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                    <span> 17 févr. 2022 - </span>
                    <span> 17:00 </span>
                    <span> UTC+1 </span>
                  </time>
                </p>
              </div>
            </div>
          </div>
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


{% endblock %}", "Front_Office/Home.html.twig", "D:\\3ème_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\Front_Office\\Home.html.twig");
    }
}
