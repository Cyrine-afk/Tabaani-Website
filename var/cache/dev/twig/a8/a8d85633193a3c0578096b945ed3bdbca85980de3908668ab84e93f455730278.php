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

/* events/index.html.twig */
class __TwigTemplate_59519db1cf9e7a4544ab003899feb6d3836113eec0d4de73a4aa21edd02e1aa9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/index.html.twig"));

        $this->parent = $this->loadTemplate("Front_Office/Header-Footer.html.twig", "events/index.html.twig", 1);
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
        echo "     Events
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
        echo "        <section class=\"d-flex align-items-center dark-overlay bg-cover\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/photo-1525610553991-2bede1a236e2.jpg"), "html", null, true);
        echo "');\">
            <div class=\"container py-6 py-lg-7 text-white overlay-content text-center\">
                <div class=\"row\">
                    <div class=\"col-xl-10 mx-auto\">
                        <h1 class=\"display-3 font-weight-bold text-shadow\">Tabaani Events</h1>
                        <p class=\"text-lg text-shadow\">Uncover the best events from all types and themes !</p>
                    </div>
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

                    ";
        // line 46
        echo "
                    <div class=\"text-center\">
                        <a class=\"btn btn-outline-primary btn-block\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_new");
        echo "\">
                            <i class=\"far fa-paper-plane mr-2\"></i>
                            Add a new event
                        </a>
                    </div>

                    <!-- tris -->
                    <div class=\"dropdown col-lg-1\">
                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Trier Events
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a class=\"dropdown-item\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_Trending");
        echo "\">Trending</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_triAlphabetical");
        echo "\">Alphabetical</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_triDate");
        echo "\">Happening Soon</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_index");
        echo "\">Reset</a>
                        </div>
                    </div>

                    <!-- filtres -->
                    <div class=\"dropdown col-lg-3\">
                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Filter Events
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a class=\"dropdown-item\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_HasPassed");
        echo "\">Has Passed</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_Today");
        echo "\">Today</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_ThisWeek");
        echo "\">This Week</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_index");
        echo "\">Reset</a>
                        </div>
                    </div>

                </div>

              <div class=\"row\">
                  ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 83, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 84
            echo "                  <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
                          <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\"
                               style=\"background: center center url('";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "imageevent", [], "any", false, false, false, 86))), "html", null, true);
            echo "') no-repeat;
                                       background-size: cover;\"><a class=\"tile-link\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\"> </a>
                              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                                  <h3 class=\"text-shadow text-uppercase mb-0\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventname", [], "any", false, false, false, 89), "html", null, true);
            echo "</h3>
                              </div>
                              <!-- event top accessories -->
                              <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
                                  <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                                      <div >
                                          <img class=\"avatar avatar-border-white mr-2\" src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/avatar-9.jpg"), "html", null, true);
            echo "\" alt=\"User Name\"/>
                                      </div>
                                  </a>
                              </div>
                              <!-- event bottom accessories -->
                              <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
                                  <h4 class=\"text-shadow text-white\" >";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventaddress", [], "any", false, false, false, 101), "html", null, true);
            echo "</h4>
                                  <p class=\"mb-2 \">
                                      <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"date\">
                                          <span> ";
            // line 104
            ((twig_get_attribute($this->env, $this->source, $context["event"], "eventdate", [], "any", false, false, false, 104)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventdate", [], "any", false, false, false, 104), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " </span>
                                          <!--<span> 17:00 </span>
                                          <span> UTC+1 </span>-->
                                      </time>
                                  </p>
                              </div>
                          </div>
                  </div>
                  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 113
            echo "                      <h2> No records found </h2>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "

              </div>
              ";
        // line 125
        echo "
                  <!--<table class=\"table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Maximum Number of Participants</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Theme</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 162
        echo "                </tbody>
            </table>-->

          </div>
        </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "events/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 162,  247 => 125,  242 => 115,  235 => 113,  221 => 104,  215 => 101,  206 => 95,  197 => 89,  192 => 87,  188 => 86,  184 => 84,  179 => 83,  169 => 76,  165 => 75,  161 => 74,  157 => 73,  144 => 63,  140 => 62,  136 => 61,  132 => 60,  117 => 48,  113 => 46,  90 => 9,  80 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'Front_Office/Header-Footer.html.twig' %}

 {% block title %}
     Events
 {% endblock %}


    {% block Content %}
        <section class=\"d-flex align-items-center dark-overlay bg-cover\" style=\"background-image: url('{{ asset('pics/photo-1525610553991-2bede1a236e2.jpg') }}');\">
            <div class=\"container py-6 py-lg-7 text-white overlay-content text-center\">
                <div class=\"row\">
                    <div class=\"col-xl-10 mx-auto\">
                        <h1 class=\"display-3 font-weight-bold text-shadow\">Tabaani Events</h1>
                        <p class=\"text-lg text-shadow\">Uncover the best events from all types and themes !</p>
                    </div>
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

                    {# <form  id=\"CatForm\" method=\"post\" action=\"{{ path('event_cat')}}\" >
                        <select id=\"selectDo\" class=\"form-control form-control-sm mb-3\"   onchange=\"myFunction(event); this.form.submit(); \"  >
                            <option  value=\"\" disabled selected>Choose genre..</option>
                            {% for c in events %}
                                <option   onclick=\"document.getElementById('CatForm').submit();\" >{{ c.eventtheme}}</option>

                            {% endfor %}

                            <input  type=\"hidden\" name=\"myText\" id=\"myText\" type=\"text\" value=\"colors\">



                            <script>function myFunction(e) {
                                    document.getElementById(\"myText\").value = e.target.value
                                } </script>

                        </select>
                    </form> #}

                    <div class=\"text-center\">
                        <a class=\"btn btn-outline-primary btn-block\" href=\"{{ path('events_new') }}\">
                            <i class=\"far fa-paper-plane mr-2\"></i>
                            Add a new event
                        </a>
                    </div>

                    <!-- tris -->
                    <div class=\"dropdown col-lg-1\">
                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Trier Events
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a class=\"dropdown-item\" href=\"{{ path('event_Trending') }}\">Trending</a>
                            <a class=\"dropdown-item\" href=\"{{ path('event_triAlphabetical') }}\">Alphabetical</a>
                            <a class=\"dropdown-item\" href=\"{{ path('event_triDate') }}\">Happening Soon</a>
                            <a class=\"dropdown-item\" href=\"{{ path('events_index') }}\">Reset</a>
                        </div>
                    </div>

                    <!-- filtres -->
                    <div class=\"dropdown col-lg-3\">
                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Filter Events
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a class=\"dropdown-item\" href=\"{{ path('event_HasPassed') }}\">Has Passed</a>
                            <a class=\"dropdown-item\" href=\"{{ path('event_Today') }}\">Today</a>
                            <a class=\"dropdown-item\" href=\"{{ path('event_ThisWeek') }}\">This Week</a>
                            <a class=\"dropdown-item\" href=\"{{ path('events_index') }}\">Reset</a>
                        </div>
                    </div>

                </div>

              <div class=\"row\">
                  {% for event in events %}
                  <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
                          <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\"
                               style=\"background: center center url('{{ asset('uploads/' ~ event.imageevent) }}') no-repeat;
                                       background-size: cover;\"><a class=\"tile-link\" href=\"{{ path('events_show', {'id': event.id}) }}\"> </a>
                              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                                  <h3 class=\"text-shadow text-uppercase mb-0\">{{ event.eventname }}</h3>
                              </div>
                              <!-- event top accessories -->
                              <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
                                  <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                                      <div >
                                          <img class=\"avatar avatar-border-white mr-2\" src=\"{{ asset('pics/avatar-9.jpg') }}\" alt=\"User Name\"/>
                                      </div>
                                  </a>
                              </div>
                              <!-- event bottom accessories -->
                              <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
                                  <h4 class=\"text-shadow text-white\" >{{ event.eventaddress }}</h4>
                                  <p class=\"mb-2 \">
                                      <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"date\">
                                          <span> {{ event.eventdate ? event.eventdate|date('Y-m-d') : '' }} </span>
                                          <!--<span> 17:00 </span>
                                          <span> UTC+1 </span>-->
                                      </time>
                                  </p>
                              </div>
                          </div>
                  </div>
                  {% else %}
                      <h2> No records found </h2>
                  {% endfor %}


              </div>
              {# <nav aria-label=\"Page navigation\" >
                  <ul class=\"pagination\" >
                      <li class=\"page-item\">
                          {{ knp_pagination_render(events) }}
                      </li>
                  </ul>
              </nav>#}

                  <!--<table class=\"table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Maximum Number of Participants</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Theme</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {#  {% for event in events %}
                    <tr>
                        <td>{{ event.id }}</td>
                        <td>{{ event.eventname }}</td>
                        <td>{{ event.nbrmaxpart }}</td>
                        <td>{{ event.imageevent }}</td>
                        <td>{{ event.description }}</td>
                        <td>{{ event.eventdate ? event.eventdate|date('Y-m-d') : '' }}</td>
                        <td>{{ event.eventaddress }}</td>
                        <td>{{ event.eventtheme }}</td>
                        <td>
                            <a href=\"{{ path('events_show', {'id': event.id}) }}\">show</a>
                            <a href=\"{{ path('events_edit', {'id': event.id}) }}\">edit</a>
                            <a href=\"{{ path('events_delete', {'id': event.id}) }}\">delete</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"11\">no records found</td>
                    </tr>
                {% endfor %} #}
                </tbody>
            </table>-->

          </div>
        </section>
        {% endblock %}
", "events/index.html.twig", "D:\\3ème_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\events\\index.html.twig");
    }
}
