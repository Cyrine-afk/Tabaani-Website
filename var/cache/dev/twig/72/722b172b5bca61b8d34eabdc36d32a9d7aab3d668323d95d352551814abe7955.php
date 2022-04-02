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
class __TwigTemplate_2a0dabcc84227f568903d38c14208820962066f957415ceef751cde2a5a34994 extends Template
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
                        <button type=\"button\" class=\"btn btn-light-primary font-weight-bolder dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                    <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t</span>Export</button>
                        <!--begin::Dropdown Menu-->
                        <div class=\"dropdown-menu dropdown-menu-sm dropdown-menu-right\">
                            <!--begin::Navigation-->
                            <ul class=\"navi flex-column navi-hover py-2\">
                                <li class=\"navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2\">Choose an option:</li>
                                <li class=\"navi-item\">
                                    <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-print\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"navi-text\">Print</span>
                                    </a>
                                </li>
                                <li class=\"navi-item\">
                                    <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-copy\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"navi-text\">Copy</span>
                                    </a>
                                </li>
                                <li class=\"navi-item\">
                                    <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-file-excel-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"navi-text\">Excel</span>
                                    </a>
                                </li>
                                <li class=\"navi-item\">
                                    <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-file-text-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"navi-text\">CSV</span>
                                    </a>
                                </li>
                                <li class=\"navi-item\">
                                    <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-file-pdf-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"navi-text\">PDF</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                        <!--end::Dropdown Menu-->
                    </div>
                    <!--end::Dropdown-->

                    <!--begin::Add Event-->
                    <a href=\"";
        // line 85
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
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 120, $this->source); })()));
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
            // line 121
            echo "                                        <tr>
                                            <td align=\"center\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 122), "html", null, true);
            echo "</td>
                                            <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventname", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
                                            <td align=\"center\">";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nbrmaxpart", [], "any", false, false, false, 124), "html", null, true);
            echo "</td>
                                            <!--<td> <img src=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("event.imageevent"), "html", null, true);
            echo "\" > </td>-->
                                            <td> <img src=\"";
            // line 126
            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/") . twig_get_attribute($this->env, $this->source, $context["event"], "imageevent", [], "any", false, false, false, 126)) . ""), "html", null, true);
            echo "\" > </td>
                                            <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 127), "html", null, true);
            echo "</td>
                                            <td>";
            // line 128
            ((twig_get_attribute($this->env, $this->source, $context["event"], "eventdate", [], "any", false, false, false, 128)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventdate", [], "any", false, false, false, 128), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventaddress", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                                            <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventtheme", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                                            <td nowrap=\"nowrap\">
                                                <a class=\"btn btn-sm btn-clean btn-icon mr-2\"
                                                   href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_edit_back", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 133)]), "html", null, true);
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
            // line 149
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
            // line 155
            echo "                                        <tr>
                                            <td colspan=\"11\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                                    </tbody>
                                </table>

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
        return array (  313 => 159,  304 => 155,  285 => 149,  266 => 133,  260 => 130,  256 => 129,  252 => 128,  248 => 127,  244 => 126,  240 => 125,  236 => 124,  232 => 123,  228 => 122,  225 => 121,  207 => 120,  169 => 85,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
                        <button type=\"button\" class=\"btn btn-light-primary font-weight-bolder dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
                                                    <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t</span>Export</button>
                        <!--begin::Dropdown Menu-->
                        <div class=\"dropdown-menu dropdown-menu-sm dropdown-menu-right\">
                            <!--begin::Navigation-->
                            <ul class=\"navi flex-column navi-hover py-2\">
                                <li class=\"navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2\">Choose an option:</li>
                                <li class=\"navi-item\">
                                    <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-print\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"navi-text\">Print</span>
                                    </a>
                                </li>
                                <li class=\"navi-item\">
                                    <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-copy\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"navi-text\">Copy</span>
                                    </a>
                                </li>
                                <li class=\"navi-item\">
                                    <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-file-excel-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"navi-text\">Excel</span>
                                    </a>
                                </li>
                                <li class=\"navi-item\">
                                    <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-file-text-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"navi-text\">CSV</span>
                                    </a>
                                </li>
                                <li class=\"navi-item\">
                                    <a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-file-pdf-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"navi-text\">PDF</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                        <!--end::Dropdown Menu-->
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
                                        <th>Image</th>
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
                                            <!--<td> <img src=\"{{ asset('event.imageevent') }}\" > </td>-->
                                            <td> <img src=\"{{ asset('pics/')~ event.imageevent ~''}}\" > </td>
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
