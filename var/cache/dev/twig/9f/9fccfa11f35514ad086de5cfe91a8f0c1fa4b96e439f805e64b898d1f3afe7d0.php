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

/* events/show.html.twig */
class __TwigTemplate_0792bb236af14786c147120f88009c62e26d5a9f6cada29b384e3cb9a95cb91a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/show.html.twig"));

        $this->parent = $this->loadTemplate("Front_Office/Header-Footer.html.twig", "events/show.html.twig", 1);
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
        echo "     Event Details
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
        echo "        <section class=\"pt-7 pb-5 d-flex align-items-end dark-overlay bg-cover\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "imageevent", [], "any", false, false, false, 9))), "html", null, true);
        echo "');\">
            <div class=\"container overlay-content\">
                <div class=\"d-flex justify-content-between align-items-start flex-column flex-lg-row align-items-lg-end\">
                    <div class=\"text-white mb-4 mb-lg-0\">
                        <div class=\"badge badge-transparent badge-pill px-3 py-2 mb-4\">
                            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "eventtheme", [], "any", false, false, false, 14), "html", null, true);
        echo "
                        </div>
                        <p class=\"mb-2 \">
                            <time class=\"badge badge-primary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                                <span> ";
        // line 18
        ((twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "eventdate", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "eventdate", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true))) : (print ("")));
        echo " </span>
                            </time>
                        </p>
                        <h1 class=\"text-shadow verified\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "eventname", [], "any", false, false, false, 21), "html", null, true);
        echo "</h1>
                        <p><i class=\"fa-map-marker-alt fas mr-2\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "eventaddress", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                        <p class=\"mb-0 d-flex align-items-center\">
                            Hosted By :
                        <div >
                            <img class=\"avatar avatar-border-white mr-2\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/avatar-10.jpg"), "html", null, true);
        echo "\" alt=\"John\"/>
                                <div class=\"media-body\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "org", [], "any", false, false, false, 27), "html", null, true);
        echo "</div>
                        </div>
                        </p>
                    </div>
                    <div class=\"calltoactions\">
                        <a class=\"btn btn-primary\">Participate</a>
                        <form  id=\"JoinForm\" method=\"post\" action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participate_event_newTrying");
        echo "\" >
                            <input type=\"hidden\" name=\"myEvent\" value=";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo ">
                            <img id=\"reloader\" onclick=\"document.getElementById('JoinForm').submit();\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/14.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Join\">


                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"py-6\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <!-- About Listing-->
                        <div class=\"text-block\">
                            <h3 class=\"mb-3\">About</h3>
                            <p class=\"text-muted\"> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), "html", null, true);
        echo " </p>
                        </div>

                        <div class=\"text-block\">
                            <h3 class=\"mb-3\">Places Left</h3>
                            <h4 class=\"text-black-50\"> ";
        // line 55
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "nbrmaxpart", [], "any", false, false, false, 55) - twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "nbrGoing", [], "any", false, false, false, 55)), "html", null, true);
        echo " </h4>
                        </div>

                        <div class=\"text-block\">
                            <!-- Gallery-->
                            <h3 class=\"mb-4\">Gallery</h3>
                            <div class=\"row gallery ml-n1 mr-n1\">
                                <div class=\"col-lg-4 col-6 px-1 mb-2\"><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/restaurant-1515164783716-8e6920f3e77c.jpg"), "html", null, true);
        echo "\">
                                        <img class=\"img-fluid\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/restaurant-1515164783716-8e6920f3e77c.jpg"), "html", null, true);
        echo "\" alt=\"...\"></a>
                                </div>
                                <div class=\"col-lg-4 col-6 px-1 mb-2\"><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/restaurant-1466978913421-dad2ebd01d17.jpg"), "html", null, true);
        echo "\">
                                        <img class=\"img-fluid\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/restaurant-1466978913421-dad2ebd01d17.jpg"), "html", null, true);
        echo "\" alt=\"...\"></a>
                                </div>
                                <div class=\"col-lg-4 col-6 px-1 mb-2\"><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/restaurant-1477763858572-cda7deaa9bc5.jpg"), "html", null, true);
        echo "\">
                                        <img class=\"img-fluid\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/restaurant-1477763858572-cda7deaa9bc5.jpg"), "html", null, true);
        echo "\" alt=\"...\"></a>
                                </div>
                                <div class=\"col-lg-4 col-6 px-1 mb-2\"><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/restaurant-1505275350441-83dcda8eeef5.jpg"), "html", null, true);
        echo "\">
                                        <img class=\"img-fluid\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/restaurant-1505275350441-83dcda8eeef5.jpg"), "html", null, true);
        echo "\" alt=\"...\"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4\">
                        <div class=\"pl-xl-4\">
                            <div class=\"card border-0 shadow mb-5\">
                                <div class=\"card-header bg-gray-100 py-4 border-0\">
                                    <div class=\"media align-items-center\">
                                        <div class=\"media-body\">
                                            <p class=\"subtitle text-sm text-primary\">About the organizer</p>
                                            <h4 class=\"mb-0\">Contact</h4>
                                        </div>
                                        <svg class=\"svg-icon svg-icon svg-icon-light w-3rem h-3rem ml-3 text-muted\">
                                            <use xlink:href=\"#fountain-pen-1\"> </use>
                                        </svg>
                                    </div>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-unstyled mb-4\">
                                        <li class=\"mb-2\"> <a class=\"text-gray-00 text-sm text-decoration-none\" href=\"#\"><i class=\"fa fa-phone mr-3\"></i><span class=\"text-muted\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 94, $this->source); })()), "org", [], "any", false, false, false, 94), "numUser", [], "any", false, false, false, 94), "html", null, true);
        echo "</span></a></li>
                                        <li class=\"mb-2\"> <a class=\" text-sm text-decoration-none\" href=\"#\"><i class=\"fa fa-envelope mr-3\"></i><span class=\"text-muted\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 95, $this->source); })()), "org", [], "any", false, false, false, 95), "emailUser", [], "any", false, false, false, 95), "html", null, true);
        echo "</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center\">
                            <a class=\"btn btn-outline-primary btn-block\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_index");
        echo "\">
                                <i class=\"far fa-paper-plane mr-2\"></i>
                                Back to events list
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </section>



    ";
        // line 118
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "events/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 118,  250 => 102,  240 => 95,  236 => 94,  211 => 72,  207 => 71,  202 => 69,  198 => 68,  193 => 66,  189 => 65,  184 => 63,  180 => 62,  170 => 55,  162 => 50,  144 => 35,  140 => 34,  136 => 33,  127 => 27,  123 => 26,  116 => 22,  112 => 21,  106 => 18,  99 => 14,  90 => 9,  80 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'Front_Office/Header-Footer.html.twig' %}

 {% block title %}
     Event Details
 {% endblock %}


    {% block Content %}
        <section class=\"pt-7 pb-5 d-flex align-items-end dark-overlay bg-cover\" style=\"background-image: url('{{ asset('uploads/' ~ event.imageevent) }}');\">
            <div class=\"container overlay-content\">
                <div class=\"d-flex justify-content-between align-items-start flex-column flex-lg-row align-items-lg-end\">
                    <div class=\"text-white mb-4 mb-lg-0\">
                        <div class=\"badge badge-transparent badge-pill px-3 py-2 mb-4\">
                            {{ event.eventtheme }}
                        </div>
                        <p class=\"mb-2 \">
                            <time class=\"badge badge-primary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"Thu Feb 17 2022 16:00:00 GMT+0000 (Coordinated Universal Time)\">
                                <span> {{ event.eventdate ? event.eventdate|date('Y-m-d') : '' }} </span>
                            </time>
                        </p>
                        <h1 class=\"text-shadow verified\">{{ event.eventname }}</h1>
                        <p><i class=\"fa-map-marker-alt fas mr-2\"></i> {{ event.eventaddress }}</p>
                        <p class=\"mb-0 d-flex align-items-center\">
                            Hosted By :
                        <div >
                            <img class=\"avatar avatar-border-white mr-2\" src=\"{{ asset('pics/avatar-10.jpg') }}\" alt=\"John\"/>
                                <div class=\"media-body\">{{ event.org }}</div>
                        </div>
                        </p>
                    </div>
                    <div class=\"calltoactions\">
                        <a class=\"btn btn-primary\">Participate</a>
                        <form  id=\"JoinForm\" method=\"post\" action=\"{{ path('participate_event_newTrying')}}\" >
                            <input type=\"hidden\" name=\"myEvent\" value={{ event.id }}>
                            <img id=\"reloader\" onclick=\"document.getElementById('JoinForm').submit();\" src=\"{{ asset('pics/14.png') }}\" class=\"img-fluid\" alt=\"Join\">


                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"py-6\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <!-- About Listing-->
                        <div class=\"text-block\">
                            <h3 class=\"mb-3\">About</h3>
                            <p class=\"text-muted\"> {{ event.description }} </p>
                        </div>

                        <div class=\"text-block\">
                            <h3 class=\"mb-3\">Places Left</h3>
                            <h4 class=\"text-black-50\"> {{ (event.nbrmaxpart - event.nbrGoing) }} </h4>
                        </div>

                        <div class=\"text-block\">
                            <!-- Gallery-->
                            <h3 class=\"mb-4\">Gallery</h3>
                            <div class=\"row gallery ml-n1 mr-n1\">
                                <div class=\"col-lg-4 col-6 px-1 mb-2\"><a href=\"{{ asset('pics/restaurant-1515164783716-8e6920f3e77c.jpg') }}\">
                                        <img class=\"img-fluid\" src=\"{{ asset('pics/restaurant-1515164783716-8e6920f3e77c.jpg') }}\" alt=\"...\"></a>
                                </div>
                                <div class=\"col-lg-4 col-6 px-1 mb-2\"><a href=\"{{ asset('pics/restaurant-1466978913421-dad2ebd01d17.jpg') }}\">
                                        <img class=\"img-fluid\" src=\"{{ asset('pics/restaurant-1466978913421-dad2ebd01d17.jpg') }}\" alt=\"...\"></a>
                                </div>
                                <div class=\"col-lg-4 col-6 px-1 mb-2\"><a href=\"{{ asset('pics/restaurant-1477763858572-cda7deaa9bc5.jpg') }}\">
                                        <img class=\"img-fluid\" src=\"{{ asset('pics/restaurant-1477763858572-cda7deaa9bc5.jpg') }}\" alt=\"...\"></a>
                                </div>
                                <div class=\"col-lg-4 col-6 px-1 mb-2\"><a href=\"{{ asset('pics/restaurant-1505275350441-83dcda8eeef5.jpg') }}\">
                                        <img class=\"img-fluid\" src=\"{{ asset('pics/restaurant-1505275350441-83dcda8eeef5.jpg') }}\" alt=\"...\"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4\">
                        <div class=\"pl-xl-4\">
                            <div class=\"card border-0 shadow mb-5\">
                                <div class=\"card-header bg-gray-100 py-4 border-0\">
                                    <div class=\"media align-items-center\">
                                        <div class=\"media-body\">
                                            <p class=\"subtitle text-sm text-primary\">About the organizer</p>
                                            <h4 class=\"mb-0\">Contact</h4>
                                        </div>
                                        <svg class=\"svg-icon svg-icon svg-icon-light w-3rem h-3rem ml-3 text-muted\">
                                            <use xlink:href=\"#fountain-pen-1\"> </use>
                                        </svg>
                                    </div>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-unstyled mb-4\">
                                        <li class=\"mb-2\"> <a class=\"text-gray-00 text-sm text-decoration-none\" href=\"#\"><i class=\"fa fa-phone mr-3\"></i><span class=\"text-muted\">{{ event.org.numUser }}</span></a></li>
                                        <li class=\"mb-2\"> <a class=\" text-sm text-decoration-none\" href=\"#\"><i class=\"fa fa-envelope mr-3\"></i><span class=\"text-muted\">{{ event.org.emailUser }}</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center\">
                            <a class=\"btn btn-outline-primary btn-block\" href=\"{{ path('events_index') }}\">
                                <i class=\"far fa-paper-plane mr-2\"></i>
                                Back to events list
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </section>



    {# <a href=\"{{ path('events_index') }}\">Back to events list</a> #}

{% endblock %}
", "events/show.html.twig", "D:\\3ème_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\events\\show.html.twig");
    }
}
