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

/* events/index_back.html.twig */
class __TwigTemplate_1b71730b2aa2fc259f9ecfae8955f838f06b049296a32c62c376dc78a9ce4616 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'Entry' => [$this, 'block_Entry'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Back_Office/AdminMain.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/index_back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/index_back.html.twig"));

        $this->parent = $this->loadTemplate("Back_Office/AdminMain.html.twig", "events/index_back.html.twig", 1);
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
        echo "     Events Table
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_Entry($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Entry"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Entry"));

        // line 8
        echo "
        <div class=\"container\">

        <div class=\"card card-custom gutter-b\">
            <div class=\"card-header flex-wrap py-3\">
                <div class=\"card-title\">
                    <h3 class=\"card-label\">Events Details
                        <span class=\"d-block text-muted pt-2 font-size-sm\">The full and complete database of Events</span></h3>
                </div>
                <div class=\"card-toolbar\">
                    <!--begin::Dropdown-->
                    <div class=\"dropdown dropdown-inline mr-2\">
                        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_pdf_back");
        echo "\" class=\"btn btn-primary font-weight-bolder\">
\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md\">
\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</svg>
                                    <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t</span>PDF Export
                        </a>
                    </div>
                    <!--end::Dropdown-->

                    <!--begin::Add Event-->
                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_new_back");
        echo "\" class=\"btn btn-primary font-weight-bolder\">
\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md\">
\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" cx=\"9\" cy=\"15\" r=\"6\" />
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
                            <!--end::Svg Icon-->
\t\t\t\t\t\t</span>New Event</a>
                    <!--end::Add Event-->

                </div>

                <div class=\"card-body\">
                    <div id=\"kt_datatable_wrapper\" class=\"database_wrapper dt-bootstrap4 no-footer\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <table id=\"kt_datatable_2\" class=\"table table-separate table-head-custom dataTable no-footer dtr-inline collapsed\" aria-describedby=\"kt_datatable_2_info\" style=\"width: 1149px;\">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Maximum Participants</th>
                                        <!-- <th>Image</th> -->
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Address</th>
                                        <th>Theme</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 72, $this->source); })()));
        $context['_iterated'] = false;
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
            // line 73
            echo "                                        <tr>
                                            <td align=\"center\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                                            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventname", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                            <td align=\"center\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nbrmaxpart", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                            ";
            // line 78
            echo "                                            ";
            // line 80
            echo "                                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                            <td>";
            // line 81
            ((twig_get_attribute($this->env, $this->source, $context["event"], "eventdate", [], "any", false, false, false, 81)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventdate", [], "any", false, false, false, 81), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventaddress", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                            <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventtheme", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                                            <td nowrap=\"nowrap\">
                                                <a class=\"btn btn-sm btn-clean btn-icon mr-2\"
                                                   href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_edit_back", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">
                                                    <span class=\"svg-icon svg-icon-md\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                             height=\"24px\"viewBox=\"0 0 24 24\" version=\"1.1\">
                                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"> 
                                                            <rect x=\"0\" y=\"0\" height=\"24\" width=\"24\"> </rect>
                                                                <path d=\"M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z\"
                                                                      fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) \">
                                                                </path>
                                                                <rect height=\"2\" width=\"15\" fill=\"#000000\" opacity=\"0.3\" x=\"5\" y=\"20\"rx=\"1\"> </rect>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a class=\"btn btn-sm btn-clean btn-icon mr-10\">
                                                    ";
            // line 102
            echo twig_include($this->env, $context, "events/_delete_form.html.twig");
            echo "
                                                </a>
                                            </td>

                                        </tr>
                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 108
            echo "                                        <tr>
                                            <td colspan=\"11\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                                    </tbody>
                                </table>

                                <nav aria-label=\"Page navigation\" >
                                    <ul class=\"pagination\" >
                                        <li class=\"page-item\">
                                            ";
        // line 118
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 118, $this->source); })()));
        echo "
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        </div>



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "events/index_back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 118,  263 => 112,  254 => 108,  235 => 102,  216 => 86,  210 => 83,  206 => 82,  202 => 81,  197 => 80,  195 => 78,  191 => 76,  187 => 75,  183 => 74,  180 => 73,  162 => 72,  124 => 37,  104 => 20,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'Back_Office/AdminMain.html.twig' %}

 {% block title %}
     Events Table
 {% endblock %}

    {% block Entry %}

        <div class=\"container\">

        <div class=\"card card-custom gutter-b\">
            <div class=\"card-header flex-wrap py-3\">
                <div class=\"card-title\">
                    <h3 class=\"card-label\">Events Details
                        <span class=\"d-block text-muted pt-2 font-size-sm\">The full and complete database of Events</span></h3>
                </div>
                <div class=\"card-toolbar\">
                    <!--begin::Dropdown-->
                    <div class=\"dropdown dropdown-inline mr-2\">
                        <a href=\"{{ path('events_pdf_back') }}\" class=\"btn btn-primary font-weight-bolder\">
\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md\">
\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</svg>
                                    <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t</span>PDF Export
                        </a>
                    </div>
                    <!--end::Dropdown-->

                    <!--begin::Add Event-->
                    <a href=\"{{ path('events_new_back') }}\" class=\"btn btn-primary font-weight-bolder\">
\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md\">
\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" cx=\"9\" cy=\"15\" r=\"6\" />
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
                            <!--end::Svg Icon-->
\t\t\t\t\t\t</span>New Event</a>
                    <!--end::Add Event-->

                </div>

                <div class=\"card-body\">
                    <div id=\"kt_datatable_wrapper\" class=\"database_wrapper dt-bootstrap4 no-footer\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <table id=\"kt_datatable_2\" class=\"table table-separate table-head-custom dataTable no-footer dtr-inline collapsed\" aria-describedby=\"kt_datatable_2_info\" style=\"width: 1149px;\">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Maximum Participants</th>
                                        <!-- <th>Image</th> -->
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Address</th>
                                        <th>Theme</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for event in events %}
                                        <tr>
                                            <td align=\"center\">{{ event.id }}</td>
                                            <td>{{ event.eventname }}</td>
                                            <td align=\"center\">{{ event.nbrmaxpart }}</td>
                                            {# <td> <img src=\"{{ asset('event.imageevent') }}\" > </td> #}
                                            {# <td> <img src=\"{{ asset('pics/'~ event.imageevent) }}\"
                                                style=\"width: fit-content;\"> </td>#}
                                            <td>{{ event.description }}</td>
                                            <td>{{ event.eventdate ? event.eventdate|date('Y-m-d') : '' }}</td>
                                            <td>{{ event.eventaddress }}</td>
                                            <td>{{ event.eventtheme }}</td>
                                            <td nowrap=\"nowrap\">
                                                <a class=\"btn btn-sm btn-clean btn-icon mr-2\"
                                                   href=\"{{ path('events_edit_back', {'id': event.id}) }}\">
                                                    <span class=\"svg-icon svg-icon-md\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                             height=\"24px\"viewBox=\"0 0 24 24\" version=\"1.1\">
                                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"> 
                                                            <rect x=\"0\" y=\"0\" height=\"24\" width=\"24\"> </rect>
                                                                <path d=\"M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z\"
                                                                      fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) \">
                                                                </path>
                                                                <rect height=\"2\" width=\"15\" fill=\"#000000\" opacity=\"0.3\" x=\"5\" y=\"20\"rx=\"1\"> </rect>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a class=\"btn btn-sm btn-clean btn-icon mr-10\">
                                                    {{ include('events/_delete_form.html.twig') }}
                                                </a>
                                            </td>

                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"11\">no records found</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>

                                <nav aria-label=\"Page navigation\" >
                                    <ul class=\"pagination\" >
                                        <li class=\"page-item\">
                                            {{ knp_pagination_render(events) }}
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        </div>



    {% endblock %}", "events/index_back.html.twig", "D:\\3ème_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\events\\index_back.html.twig");
    }
}
