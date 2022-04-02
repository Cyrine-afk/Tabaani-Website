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
class __TwigTemplate_b4db0cbcda3f0104585257272d52ee4d30c270bb820ef1049d0715343c1a218f extends Template
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

        <div class=\"container\">
            <div class=\"search-bar rounded p-3 p-lg-4 position-relative mt-n5 z-index-20\">
                <form id=\"searchForm\" action=\"#\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 d-flex align-items-center form-group\">
                            <input class=\"form-control border-0 shadow-0\" type=\"search\" name=\"search\" placeholder=\"Which event are you searching for?\">

                        </div>
                        <div class=\"col-lg-2 form-group mb-0\">
                            <button class=\"btn btn-primary btn-block h-100\" type=\"submit\">Search </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <section class=\"py-6\">
          <div class=\"container\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-8\">
                        <p class=\"subtitle text-primary\">The latest events</p>
                        <h2>What's new on Tabaani</h2>
                    </div>

                    <div class=\"text-center\">
                        <a class=\"btn btn-outline-primary btn-block\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_new");
        echo "\">
                            <i class=\"far fa-paper-plane mr-2\"></i>
                            Add a new event
                        </a>
                    </div>
                </div>

              <div class=\"row\">
                  ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 54
            echo "                  <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
                          <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\"
                               style=\"background: center center url('";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/photo-1523430410476-0185cb1f6ff9.jpg"), "html", null, true);
            echo "') no-repeat;
                                       background-size: cover;\"><a class=\"tile-link\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\"> </a>
                              <div class=\"d-flex align-items-center h-100 text-white justify-content-center py-6 py-lg-7\">
                                  <h3 class=\"text-shadow text-uppercase mb-0\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventname", [], "any", false, false, false, 59), "html", null, true);
            echo "</h3>
                              </div>
                              <!-- event top accessories -->
                              <div class=\"card-img-overlay-top d-flex justify-content-between align-items-center\">
                                  <a class=\"text-right z-index-40\"> <!-- class=\"card-img-overlay-bottom position-relative z-index-40\" href=\"javascript: void();\"-->
                                      <div >
                                          <img class=\"avatar avatar-border-white mr-2\" src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/avatar-9.jpg"), "html", null, true);
            echo "\" alt=\"User Name\"/>
                                      </div>
                                  </a>
                              </div>
                              <!-- event bottom accessories -->
                              <div class=\"card-img-overlay-bottom ml-3 z-index-40 \">
                                  <h4 class=\"text-shadow text-white\" >";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventaddress", [], "any", false, false, false, 71), "html", null, true);
            echo "</h4>
                                  <p class=\"mb-2 \">
                                      <time class=\"badge badge-secondary-light\" datetime=\"2022-02-17T16:00:00Z[UTC]\" title=\"date\">
                                          <span> ";
            // line 74
            ((twig_get_attribute($this->env, $this->source, $context["event"], "eventdate", [], "any", false, false, false, 74)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventdate", [], "any", false, false, false, 74), "Y-m-d"), "html", null, true))) : (print ("")));
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
            // line 83
            echo "                      <h2> No records found </h2>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "

              </div>
              <nav aria-label=\"Page navigation example\">
                  <ul class=\"pagination pagination-template d-flex justify-content-center\">
                      <li class=\"page-item\">
                          ";
        // line 91
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 91, $this->source); })()));
        echo "
                      </li>
                  </ul>
              </nav>
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
        // line 131
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
        return array (  234 => 131,  212 => 91,  204 => 85,  197 => 83,  183 => 74,  177 => 71,  168 => 65,  159 => 59,  154 => 57,  150 => 56,  146 => 54,  141 => 53,  130 => 45,  90 => 9,  80 => 8,  69 => 4,  59 => 3,  36 => 1,);
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

        <div class=\"container\">
            <div class=\"search-bar rounded p-3 p-lg-4 position-relative mt-n5 z-index-20\">
                <form id=\"searchForm\" action=\"#\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 d-flex align-items-center form-group\">
                            <input class=\"form-control border-0 shadow-0\" type=\"search\" name=\"search\" placeholder=\"Which event are you searching for?\">

                        </div>
                        <div class=\"col-lg-2 form-group mb-0\">
                            <button class=\"btn btn-primary btn-block h-100\" type=\"submit\">Search </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <section class=\"py-6\">
          <div class=\"container\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-8\">
                        <p class=\"subtitle text-primary\">The latest events</p>
                        <h2>What's new on Tabaani</h2>
                    </div>

                    <div class=\"text-center\">
                        <a class=\"btn btn-outline-primary btn-block\" href=\"{{ path('events_new') }}\">
                            <i class=\"far fa-paper-plane mr-2\"></i>
                            Add a new event
                        </a>
                    </div>
                </div>

              <div class=\"row\">
                  {% for event in events %}
                  <div class=\"d-flex align-items-lg-stretch mb-4 col-lg-4\">
                          <div class=\"card shadow-lg border-0 w-100 border-0 hover-animate\"
                               style=\"background: center center url('{{ asset('pics/photo-1523430410476-0185cb1f6ff9.jpg') }}') no-repeat;
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
              <nav aria-label=\"Page navigation example\">
                  <ul class=\"pagination pagination-template d-flex justify-content-center\">
                      <li class=\"page-item\">
                          {{ knp_pagination_render(events) }}
                      </li>
                  </ul>
              </nav>
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
