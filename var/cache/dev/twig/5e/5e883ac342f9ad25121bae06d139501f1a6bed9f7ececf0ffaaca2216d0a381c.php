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

/* user/show.html.twig */
class __TwigTemplate_687d5c7a724ba1be50776e91b8e8b123ce30babaffafbae6c1a7fe45dfca1cd2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("Front_Office/Header-Footer.html.twig", "user/show.html.twig", 1);
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
        echo "     User Profile
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
        echo "        <section class=\"py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 mr-lg-auto\">
                        <div class=\"card border-0 shadow mb-6 mb-lg-0\">
                            <div class=\"card-header bg-gray-100 py-4 border-0 text-center\"><a class=\"d-inline-block\" href=\"#\"><img class=\"d-block avatar avatar-xxl p-2 mb-2\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/avatar-10.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <h5>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "prenomUser", [], "any", false, false, false, 15), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "nomUser", [], "any", false, false, false, 15), "html", null, true);
        echo "</h5>
                                <p class=\"text-muted text-sm mb-0\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "loginUser", [], "any", false, false, false, 16), "html", null, true);
        echo "  </p>
                            </div>
                            <div class=\"card-body p-4\">
                                <div class=\"media align-items-center mb-3\">
                                    <div class=\"icon-rounded icon-rounded-sm bg-primary-light mr-2\">
                                        <svg class=\"svg-icon text-primary svg-icon-md\">
                                            <use xlink:href=\"#diploma-1\"> </use>
                                        </svg>
                                    </div>
                                    <div class=\"media-body\">
                                        <p class=\"mb-0\">2877 reviews</p>
                                    </div>
                                </div>
                                <div class=\"media align-items-center mb-3\">
                                    <div class=\"icon-rounded icon-rounded-sm bg-primary-light mr-2\">
                                        <svg class=\"svg-icon text-primary svg-icon-md\">
                                            <use xlink:href=\"#checkmark-1\"> </use>
                                        </svg>
                                    </div>
                                    <div class=\"media-body\">
                                        <p class=\"mb-0\">Verified</p>
                                    </div>
                                </div>
                                <hr>
                                <h6>Jack provided</h6>
                                <ul class=\"card-text text-muted\">
                                    <li>Government ID</li>
                                    <li>Email address</li>
                                    <li>Phone number</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-9 pl-lg-5\">
                        <h1 class=\"hero-heading mb-0\">Hello, I'm ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "prenomUser", [], "any", false, false, false, 50), "html", null, true);
        echo "!</h1>
                        <div class=\"text-block\">
                            <p> <span class=\"badge badge-secondary-light\">Birthday: ";
        // line 52
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "dateNaiss", [], "any", false, false, false, 52)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "dateNaiss", [], "any", false, false, false, 52), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</span></p>
                            <p class=\"text-muted\">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.  </p>
                            <p class=\"text-muted\">He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.  </p>
                        </div>
                        <div class=\"text-block\">

                            <div class=\"row mb-5\">

                                <div class=\"col-md-8\">
                                    <p class=\"subtitle text-primary\">The latest events</p>
                                    <h3>Events Hosted By ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "prenomUser", [], "any", false, false, false, 62), "html", null, true);
        echo "</h3>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"btn btn-outline-primary btn-block\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_new");
        echo "\">
                                        <i class=\"far fa-paper-plane mr-2\"></i>
                                        Add a new event
                                    </a>
                                </div>
                            </div>

                            <div class=\"row\">
                                <!-- place item-->
                                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "events", [], "any", false, false, false, 74));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 75
            echo "                                <div class=\"col-sm-6 col-lg-4 mb-30px hover-animate\" data-marker-id=\"59c0c8e33b1527bfe2abaf92\">
                                    <div class=\"card h-100 border-0 shadow\">

                                        <!-- user smol details in icon -->
                                        <div class=\"card-img-top overflow-hidden gradient-overlay\">
                                            <img class=\"img-fluid\" src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "imageevent", [], "any", false, false, false, 80))), "html", null, true);
            echo "\" alt=\"Modern, Well-Appointed Room\"/>
                                            <a class=\"tile-link\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\"></a>
                                            <!-- user smol name icon -->
                                            <div class=\"card-img-overlay-bottom z-index-20\">
                                                <div class=\"media text-white text-sm align-items-center\"><img class=\"avatar avatar-border-white mr-2\" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/avatar-10.jpg"), "html", null, true);
            echo "\" alt=\"event\" />
                                                    <div class=\"media-body\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "prenomUser", [], "any", false, false, false, 85), "html", null, true);
            echo "</div>
                                                </div>
                                            </div>
                                            <!-- user smol pic icon -->
                                            <div class=\"card-img-overlay-top text-right\"><a class=\"card-fav-icon position-relative z-index-40\" href=\"javascript: void();\">
                                                    <svg class=\"svg-icon text-white\">
                                                        <use xlink:href=\"#heart-1\"> </use>
                                                    </svg></a>
                                            </div>
                                        </div>

                                        <!-- user events details -->
                                        <div class=\"card-body d-flex align-items-center\">
                                            <div class=\"w-100\">
                                                <h4 class=\"card-title\">
                                                    <a class=\"text-decoration-none text-primary \" >";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventname", [], "any", false, false, false, 100), "html", null, true);
            echo "</a>
                                                </h4>
                                                <div class=\"d-flex card-subtitle mb-3\">
                                                    <p class=\"flex-grow-1 mb-0 text-muted text-sm\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventaddress", [], "any", false, false, false, 103), "html", null, true);
            echo "</p>
                                                    <!--<p class=\"flex-shrink-1 mb-0 card-stars text-xs text-right\">
                                                        <i class=\"fa fa-star text-warning\"></i>
                                                        <i class=\"fa fa-star text-warning\"></i>
                                                        <i class=\"fa fa-star text-warning\"></i>
                                                        <i class=\"fa fa-star text-warning\"></i>
                                                        <i class=\"fa fa-star text-warning\"></i>
                                                    </p>-->
                                                </div>

                                                <!-- edit & delete buttons -->
                                                <li class=\"nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block\"><a class=\"btn btn-primary\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\">Edit</a></li>
                                                <br>
                                                ";
            // line 116
            echo twig_include($this->env, $context, "events/_delete_form.html.twig");
            echo "

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 123,  261 => 116,  256 => 114,  242 => 103,  236 => 100,  218 => 85,  214 => 84,  208 => 81,  204 => 80,  197 => 75,  180 => 74,  168 => 65,  162 => 62,  149 => 52,  144 => 50,  107 => 16,  101 => 15,  97 => 14,  90 => 9,  80 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'Front_Office/Header-Footer.html.twig' %}

 {% block title %}
     User Profile
 {% endblock %}


    {% block Content %}
        <section class=\"py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 mr-lg-auto\">
                        <div class=\"card border-0 shadow mb-6 mb-lg-0\">
                            <div class=\"card-header bg-gray-100 py-4 border-0 text-center\"><a class=\"d-inline-block\" href=\"#\"><img class=\"d-block avatar avatar-xxl p-2 mb-2\" src=\"{{ asset('pics/avatar-10.jpg') }}\" alt=\"\"></a>
                                <h5>{{ user.prenomUser }} {{ user.nomUser }}</h5>
                                <p class=\"text-muted text-sm mb-0\">{{ user.loginUser }}  </p>
                            </div>
                            <div class=\"card-body p-4\">
                                <div class=\"media align-items-center mb-3\">
                                    <div class=\"icon-rounded icon-rounded-sm bg-primary-light mr-2\">
                                        <svg class=\"svg-icon text-primary svg-icon-md\">
                                            <use xlink:href=\"#diploma-1\"> </use>
                                        </svg>
                                    </div>
                                    <div class=\"media-body\">
                                        <p class=\"mb-0\">2877 reviews</p>
                                    </div>
                                </div>
                                <div class=\"media align-items-center mb-3\">
                                    <div class=\"icon-rounded icon-rounded-sm bg-primary-light mr-2\">
                                        <svg class=\"svg-icon text-primary svg-icon-md\">
                                            <use xlink:href=\"#checkmark-1\"> </use>
                                        </svg>
                                    </div>
                                    <div class=\"media-body\">
                                        <p class=\"mb-0\">Verified</p>
                                    </div>
                                </div>
                                <hr>
                                <h6>Jack provided</h6>
                                <ul class=\"card-text text-muted\">
                                    <li>Government ID</li>
                                    <li>Email address</li>
                                    <li>Phone number</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-9 pl-lg-5\">
                        <h1 class=\"hero-heading mb-0\">Hello, I'm {{ user.prenomUser }}!</h1>
                        <div class=\"text-block\">
                            <p> <span class=\"badge badge-secondary-light\">Birthday: {{ user.dateNaiss ? user.dateNaiss|date('Y-m-d') : '' }}</span></p>
                            <p class=\"text-muted\">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.  </p>
                            <p class=\"text-muted\">He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.  </p>
                        </div>
                        <div class=\"text-block\">

                            <div class=\"row mb-5\">

                                <div class=\"col-md-8\">
                                    <p class=\"subtitle text-primary\">The latest events</p>
                                    <h3>Events Hosted By {{ user.prenomUser }}</h3>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"btn btn-outline-primary btn-block\" href=\"{{ path('events_new') }}\">
                                        <i class=\"far fa-paper-plane mr-2\"></i>
                                        Add a new event
                                    </a>
                                </div>
                            </div>

                            <div class=\"row\">
                                <!-- place item-->
                                {% for event in user.events %}
                                <div class=\"col-sm-6 col-lg-4 mb-30px hover-animate\" data-marker-id=\"59c0c8e33b1527bfe2abaf92\">
                                    <div class=\"card h-100 border-0 shadow\">

                                        <!-- user smol details in icon -->
                                        <div class=\"card-img-top overflow-hidden gradient-overlay\">
                                            <img class=\"img-fluid\" src=\"{{ asset('uploads/' ~ event.imageevent) }}\" alt=\"Modern, Well-Appointed Room\"/>
                                            <a class=\"tile-link\" href=\"{{ path('events_show', {'id': event.id}) }}\"></a>
                                            <!-- user smol name icon -->
                                            <div class=\"card-img-overlay-bottom z-index-20\">
                                                <div class=\"media text-white text-sm align-items-center\"><img class=\"avatar avatar-border-white mr-2\" src=\"{{ asset('pics/avatar-10.jpg') }}\" alt=\"event\" />
                                                    <div class=\"media-body\">{{ user.prenomUser }}</div>
                                                </div>
                                            </div>
                                            <!-- user smol pic icon -->
                                            <div class=\"card-img-overlay-top text-right\"><a class=\"card-fav-icon position-relative z-index-40\" href=\"javascript: void();\">
                                                    <svg class=\"svg-icon text-white\">
                                                        <use xlink:href=\"#heart-1\"> </use>
                                                    </svg></a>
                                            </div>
                                        </div>

                                        <!-- user events details -->
                                        <div class=\"card-body d-flex align-items-center\">
                                            <div class=\"w-100\">
                                                <h4 class=\"card-title\">
                                                    <a class=\"text-decoration-none text-primary \" >{{ event.eventname }}</a>
                                                </h4>
                                                <div class=\"d-flex card-subtitle mb-3\">
                                                    <p class=\"flex-grow-1 mb-0 text-muted text-sm\">{{ event.eventaddress }}</p>
                                                    <!--<p class=\"flex-shrink-1 mb-0 card-stars text-xs text-right\">
                                                        <i class=\"fa fa-star text-warning\"></i>
                                                        <i class=\"fa fa-star text-warning\"></i>
                                                        <i class=\"fa fa-star text-warning\"></i>
                                                        <i class=\"fa fa-star text-warning\"></i>
                                                        <i class=\"fa fa-star text-warning\"></i>
                                                    </p>-->
                                                </div>

                                                <!-- edit & delete buttons -->
                                                <li class=\"nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block\"><a class=\"btn btn-primary\" href=\"{{ path('events_edit', {'id': event.id}) }}\">Edit</a></li>
                                                <br>
                                                {{ include('events/_delete_form.html.twig') }}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 {% endfor %}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    {# <h1>User</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>NomUser</th>
                <td>{{ user.nomUser }}</td>
            </tr>
            <tr>
                <th>PrenomUser</th>
                <td>{{ user.prenomUser }}</td>
            </tr>
            <tr>
                <th>DateNaiss</th>
                <td>{{ user.dateNaiss ? user.dateNaiss|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>EmailUser</th>
                <td>{{ user.emailUser }}</td>
            </tr>
            <tr>
                <th>LoginUser</th>
                <td>{{ user.loginUser }}</td>
            </tr>
            <tr>
                <th>MdpUser</th>
                <td>{{ user.mdpUser }}</td>
            </tr>
            <tr>
                <th>NumUser</th>
                <td>{{ user.numUser }}</td>
            </tr>
            <tr>
                <th>ImageUser</th>
                <td>{{ user.imageUser }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('user_index') }}\">back to list</a>

    <a href=\"{{ path('user_edit', {'id': user.id}) }}\">edit</a>

    {{ include('user/_delete_form.html.twig') }}  #}
{% endblock %}
", "user/show.html.twig", "D:\\3ème_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\user\\show.html.twig");
    }
}
