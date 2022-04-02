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

/* participate_event/show.html.twig */
class __TwigTemplate_4adb85840c3270dde85527a901019b97c631c13c774cdef4c616dcb3c9bf51eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participate_event/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participate_event/show.html.twig"));

        $this->parent = $this->loadTemplate("Back_Office/AdminMain.html.twig", "participate_event/show.html.twig", 1);
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
        echo "     Participations Table
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
        echo "        <div class=\"container\">

            <div class=\"card card-custom gutter-b\">
                <div class=\"card-header flex-wrap py-3\">
                    <div class=\"card-title\">
                        <h3 class=\"card-label\">Themes Details
                            <span class=\"d-block text-muted pt-2 font-size-sm\">The full and complete database of Themes</span></h3>
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


                    </div>

                    <div class=\"card-body\">
                        <div id=\"kt_datatable_wrapper\" class=\"database_wrapper dt-bootstrap4 no-footer\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <table id=\"kt_datatable_2\" class=\"table table-separate table-head-custom table-checkable dataTable no-footer dtr-inline collapsed\" aria-describedby=\"kt_datatable_2_info\" style=\"width: 1149px;\">
                                        <thead>
                                        <tr>
                                            <th>ID Participation</th>
                                            <th>ID Event</th>
                                            <th>ID User</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participateEvent"]) || array_key_exists("participateEvent", $context) ? $context["participateEvent"] : (function () { throw new RuntimeError('Variable "participateEvent" does not exist.', 99, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participate"]) {
            // line 100
            echo "                                            <tr>
                                                <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participate"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                                                <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participate"], "event", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                                                <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participate"], "user", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                                            </tr>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 106
            echo "                                            <tr>
                                                <td colspan=\"4\">no records found</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    ";
        // line 123
        echo twig_include($this->env, $context, "participate_event/_delete_form.html.twig");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "participate_event/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 123,  216 => 110,  207 => 106,  199 => 103,  195 => 102,  191 => 101,  188 => 100,  183 => 99,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'Back_Office/AdminMain.html.twig' %}

 {% block title %}
     Participations Table
 {% endblock %}

    {% block Entry %}
        <div class=\"container\">

            <div class=\"card card-custom gutter-b\">
                <div class=\"card-header flex-wrap py-3\">
                    <div class=\"card-title\">
                        <h3 class=\"card-label\">Themes Details
                            <span class=\"d-block text-muted pt-2 font-size-sm\">The full and complete database of Themes</span></h3>
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


                    </div>

                    <div class=\"card-body\">
                        <div id=\"kt_datatable_wrapper\" class=\"database_wrapper dt-bootstrap4 no-footer\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <table id=\"kt_datatable_2\" class=\"table table-separate table-head-custom table-checkable dataTable no-footer dtr-inline collapsed\" aria-describedby=\"kt_datatable_2_info\" style=\"width: 1149px;\">
                                        <thead>
                                        <tr>
                                            <th>ID Participation</th>
                                            <th>ID Event</th>
                                            <th>ID User</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for participate in participateEvent %}
                                            <tr>
                                                <td>{{ participate.id }}</td>
                                                <td>{{ participate.event }}</td>
                                                <td>{{ participate.user }}</td>
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"4\">no records found</td>
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


    {{ include('participate_event/_delete_form.html.twig') }}
    {% endblock %}

", "participate_event/show.html.twig", "D:\\3ème_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\participate_event\\show.html.twig");
    }
}
