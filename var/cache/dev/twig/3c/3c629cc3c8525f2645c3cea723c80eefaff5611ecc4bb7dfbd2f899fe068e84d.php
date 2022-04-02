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

/* themes/index.html.twig */
class __TwigTemplate_e68d0f5fbc2169fbdbe579a49768d32b1bd8660807d42d9064aec4a4c07d0e9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/index.html.twig"));

        $this->parent = $this->loadTemplate("Back_Office/AdminMain.html.twig", "themes/index.html.twig", 1);
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
        echo "    <div class=\"container\">

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

                <!--begin::Add Event-->
                <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("themes_new");
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
\t\t\t\t\t\t</span>New Theme</a>
                <!--end::Add Event-->

            </div>

            <div class=\"card-body\">
                <div id=\"kt_datatable_wrapper\" class=\"database_wrapper dt-bootstrap4 no-footer\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table id=\"kt_datatable_2\" class=\"table table-separate table-head-custom table-checkable dataTable no-footer dtr-inline collapsed\" aria-describedby=\"kt_datatable_2_info\" style=\"width: 1149px;\">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Themename</th>
                                        <th>Imagetheme</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 114, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 115
            echo "                                    <tr>
                                        <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                                        <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "themename", [], "any", false, false, false, 117), "html", null, true);
            echo "</td>
                                        <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "imagetheme", [], "any", false, false, false, 118), "html", null, true);
            echo "</td>
                                        <td nowrap=\"nowrap\">
                                            <a class=\"btn btn-sm btn-clean btn-icon mr-2\"
                                               href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("themes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 121)]), "html", null, true);
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
                                            <a class=\"btn btn-clean \">
                                                ";
            // line 138
            echo twig_include($this->env, $context, "themes/_delete_form.html.twig");
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
            // line 144
            echo "                                    <tr>
                                        <td colspan=\"4\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                                </tbody>
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
        return "themes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 148,  275 => 144,  256 => 138,  236 => 121,  230 => 118,  226 => 117,  222 => 116,  219 => 115,  201 => 114,  168 => 84,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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

                <!--begin::Add Event-->
                <a href=\"{{ path('themes_new') }}\" class=\"btn btn-primary font-weight-bolder\">
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
\t\t\t\t\t\t</span>New Theme</a>
                <!--end::Add Event-->

            </div>

            <div class=\"card-body\">
                <div id=\"kt_datatable_wrapper\" class=\"database_wrapper dt-bootstrap4 no-footer\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table id=\"kt_datatable_2\" class=\"table table-separate table-head-custom table-checkable dataTable no-footer dtr-inline collapsed\" aria-describedby=\"kt_datatable_2_info\" style=\"width: 1149px;\">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Themename</th>
                                        <th>Imagetheme</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for theme in themes %}
                                    <tr>
                                        <td>{{ theme.id }}</td>
                                        <td>{{ theme.themename }}</td>
                                        <td>{{ theme.imagetheme }}</td>
                                        <td nowrap=\"nowrap\">
                                            <a class=\"btn btn-sm btn-clean btn-icon mr-2\"
                                               href=\"{{ path('themes_edit', {'id': theme.id}) }}\">
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
                                            <a class=\"btn btn-clean \">
                                                {{ include('themes/_delete_form.html.twig') }}
                                            </a>

                                        </td>
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
{% endblock %}
", "themes/index.html.twig", "D:\\3ème_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\themes\\index.html.twig");
    }
}
