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

/* Back_Office/AdminMain.html.twig */
class __TwigTemplate_800ed3bf79d8c3d1d8d78b3188ed50be0b5f6b6f3b99735dd33431cb66058360 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'Entry' => [$this, 'block_Entry'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back_Office/AdminMain.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back_Office/AdminMain.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang=\"en\">

\t<!--begin::Head-->
\t<head>
\t\t<base href=\"\">
\t\t<meta charset=\"utf-8\" />
\t\t<title>Admin ";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"description\" content=\"Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets.\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

\t\t";
        // line 25
        $this->displayBlock('css', $context, $blocks);
        // line 55
        echo "\t</head>

\t<!--end::Head-->
\t";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 1081
        echo "
\t<!--end::Body-->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 26
        echo "\t\t<link rel=\"canonical\" href=\"https://keenthemes.com/metronic\" />

\t\t<!--begin::Fonts-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"), "html", null, true);
        echo "\" />

\t\t<!--end::Fonts-->

\t\t<!--begin::Page Vendors Styles(used by this page)-->
\t\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />

\t\t<!--end::Page Vendors Styles-->

\t\t<!--begin::Global Theme Styles(used by all pages)-->
\t\t<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/plugins/global/plugins.bundle.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/plugins/custom/prismjs/prismjs.bundle.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/css/style.bundle.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />

\t\t<!--end::Global Theme Styles-->

\t\t<!--begin::Layout Themes(used by all pages)-->
\t\t<link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/css/themes/layout/header/base/light.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/css/themes/layout/header/menu/light.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/css/themes/layout/brand/dark.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/css/themes/layout/aside/dark.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" />

\t\t<!--end::Layout Themes-->
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        echo "\" />

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "\t<!--begin::Body-->
\t<body id=\"kt_body\" class=\"header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading\">
\t\t
\t\t<div class=\"d-flex flex-column flex-root\">
\t\t<!--begin::Main-->
\t\t\t<!--begin::Page-->
\t\t\t<div class=\"d-flex flex-row flex-column-fluid page\">
\t\t\t\t<!--begin::Aside-->
\t\t\t\t<div class=\"aside aside-left aside-fixed d-flex flex-column flex-row-auto\" id=\"kt_aside\">
\t\t\t\t\t<!--begin::Brand-->
\t\t\t\t\t<div class=\"brand flex-column-auto\" id=\"kt_brand\">
\t\t\t\t\t\t<!--begin::Logo-->
\t\t\t\t\t\t<a href=\"index.html\" class=\"brand-logo\">
            \t\t\t\t<img alt=\"logo\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Tabaani Logo png.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!--end::Logo-->
\t\t\t\t\t\t<!--begin::Toggle-->
\t\t\t\t\t\t<button class=\"brand-toggle btn btn-sm px-0\" id=\"kt_aside_toggle\">
\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon svg-icon-xl\">
\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t<path d=\"M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)\" />
\t\t\t\t\t\t\t\t\t\t<path d=\"M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)\" />
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<!--end::Toolbar-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Brand-->
\t\t\t\t\t<!--begin::Aside Menu-->
\t\t\t\t\t<div class=\"aside-menu-wrapper flex-column-fluid\" id=\"kt_aside_menu_wrapper\">
\t\t\t\t\t\t<!--begin::Menu Container-->
\t\t\t\t\t\t<div id=\"kt_aside_menu\" class=\"aside-menu my-4\" data-menu-vertical=\"1\" data-menu-scroll=\"1\" data-menu-dropdown-timeout=\"500\">
\t\t\t\t\t\t\t<!--begin::Menu Nav-->
\t\t\t\t\t\t\t<ul class=\"menu-nav\">
\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-active\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-section\">
\t\t\t\t\t\t\t\t\t<h4 class=\"menu-text\">Lists</h4>
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"4\" y=\"4\" width=\"7\" height=\"7\" rx=\"1.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Tables</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Events</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_index_back");
        echo "\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Table Events</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_new_back");
        echo "\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Add Events</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Themes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("themes_index");
        echo "\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Table Themes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("themes_new");
        echo "\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Add Themes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"4\" y=\"4\" width=\"8\" height=\"16\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"custom/pages/login/login-1.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"custom/pages/login/login-2.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"custom/pages/wizard/wizard-1.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"custom/pages/wizard/wizard-2.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!--end::Menu Nav-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Menu Container-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Aside Menu-->
\t\t\t\t</div>
\t\t\t\t<!--end::Aside-->

\t\t\t\t<!--begin::Wrapper-->
\t\t\t\t<div class=\"d-flex flex-column flex-row-fluid wrapper\" id=\"kt_wrapper\">
\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t<div id=\"kt_header\" class=\"header header-fixed\">
\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t<div class=\"container-fluid d-flex align-items-stretch justify-content-between\">
\t\t\t\t\t\t\t<!--begin::Header Menu Wrapper-->
\t\t\t\t\t\t\t<div class=\"header-menu-wrapper header-menu-wrapper-left\" id=\"kt_header_menu_wrapper\">
\t\t\t\t\t\t\t\t<!--begin::Header Menu-->
\t\t\t\t\t\t\t\t<div id=\"kt_header_menu\" class=\"header-menu header-menu-mobile header-menu-layout-default\">
\t\t\t\t\t\t\t\t\t<!--begin::Header Nav-->
\t\t\t\t\t\t\t\t\t<ul class=\"menu-nav\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active\" data-menu-toggle=\"click\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu menu-submenu-classic menu-submenu-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-active\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" data-menu-toggle=\"hover\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Code/CMD.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu menu-submenu-classic menu-submenu-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Edit To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Delete To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" data-menu-toggle=\"hover\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-box.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M22,15 L22,19 C22,20.1045695 21.1045695,21 20,21 L4,21 C2.8954305,21 2,20.1045695 2,19 L2,15 L6.27924078,15 L6.82339262,16.6324555 C7.09562072,17.4491398 7.8598984,18 8.72075922,18 L15.381966,18 C16.1395101,18 16.8320364,17.5719952 17.1708204,16.8944272 L18.118034,15 L22,15 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.5625,13 L5.92654389,7.01947752 C6.2807805,6.38972356 6.94714834,6 7.66969497,6 L16.330305,6 C17.0528517,6 17.7192195,6.38972356 18.0734561,7.01947752 L21.4375,13 L18.118034,13 C17.3604899,13 16.6679636,13.4280048 16.3291796,14.1055728 L15.381966,16 L8.72075922,16 L8.17660738,14.3675445 C7.90437928,13.5508602 7.1401016,13 6.27924078,13 L2.5625,13 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu menu-submenu-classic menu-submenu-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" data-menu-toggle=\"click\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu menu-submenu-fixed menu-submenu-left\" style=\"width:1000px\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"menu-heading menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Crown.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"menu-heading menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"menu-heading menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"menu-heading menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<!--end::Header Nav-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Header Menu-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Header Menu Wrapper-->
\t\t\t\t\t\t\t<!--begin::Topbar-->
\t\t\t\t\t\t\t<div class=\"topbar\">
\t\t\t\t\t\t\t\t<!--begin::Search-->
\t\t\t\t\t\t\t\t<div class=\"dropdown\" id=\"kt_quick_search_toggle\">
\t\t\t\t\t\t\t\t\t<!--begin::Toggle-->
\t\t\t\t\t\t\t\t\t<div class=\"topbar-item\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-icon btn-clean btn-lg btn-dropdown mr-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-xl svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Toggle-->
\t\t\t\t\t\t\t\t\t<!--begin::Dropdown-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"quick-search quick-search-dropdown\" id=\"kt_quick_search_dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Form-->
\t\t\t\t\t\t\t\t\t\t\t<form method=\"get\" class=\"quick-search-form\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"quick-search-close ki ki-close icon-sm text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Form-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Scroll-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-search-wrapper scroll\" data-scroll=\"true\" data-height=\"325\" data-mobile-height=\"200\"></div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Scroll-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Dropdown-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Search-->
\t\t\t\t\t\t\t\t<!--begin::Languages-->
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<!--begin::Toggle-->
\t\t\t\t\t\t\t\t\t<div class=\"topbar-item\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-icon btn-clean btn-dropdown btn-lg mr-1\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"h-20px w-20px rounded-sm\" src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/media/svg/flags/226-united-states.svg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Toggle-->
\t\t\t\t\t\t\t\t\t<!--begin::Dropdown-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t\t\t\t<ul class=\"navi navi-hover py-4\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/media/svg/flags/226-united-states.svg "), "html", null, true);
        echo " \" alt=\"United States\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">English</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/media/svg/flags/128-spain.svg"), "html", null, true);
        echo "\" alt=\"spain\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">Spanish</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 668
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/media/svg/flags/162-germany.svg "), "html", null, true);
        echo "\" alt=\"germany\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">German</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/media/svg/flags/063-japan.svg"), "html", null, true);
        echo "\" alt=\"japan\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">Japanese</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/assets/media/svg/flags/195-france.svg"), "html", null, true);
        echo "\" alt=\"france\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">French</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<!--end::Nav-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Dropdown-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Languages-->
\t\t\t\t\t\t\t\t<!--begin::User-->
\t\t\t\t\t\t\t\t<div class=\"topbar-item\">
\t\t\t\t\t\t\t\t\t<div class=\"btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2\" id=\"kt_quick_user_toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-weight-bold font-size-base d-none d-md-inline mr-1\">Hi,</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3\">Admin</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-lg-35 symbol-25 symbol-light-success\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label font-size-h5 font-weight-bold\">A</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::User-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Topbar-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Container-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Header-->

\t\t\t\t\t<!--begin::Content-->
\t\t\t\t\t<div class=\"content d-flex flex-column flex-column-fluid\" id=\"kt_content\">
\t\t\t\t\t\t<!--begin::Subheader-->
\t\t\t\t\t\t<div class=\"subheader py-2 py-lg-4 subheader-solid\" id=\"kt_subheader\">
\t\t\t\t\t\t\t<div class=\"container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap\">
\t\t\t\t\t\t\t\t<!--begin::Info-->
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-wrap mr-2\">
\t\t\t\t\t\t\t\t\t<!--begin::Page Title-->
\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-bold mt-2 mb-2 mr-5\">Dashboard</h5>
\t\t\t\t\t\t\t\t\t<!--end::Page Title-->
\t\t\t\t\t\t\t\t\t<!--begin::Actions-->
\t\t\t\t\t\t\t\t\t<div class=\"subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200\"></div>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-weight-bold mr-4\">#Admin</span>
\t\t\t\t\t\t\t\t\t<!--end::Actions-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t\t<!--begin::Toolbar-->
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<!--begin::Actions-->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-clean btn-sm font-weight-bold font-size-base mr-1\">Today</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-clean btn-sm font-weight-bold font-size-base mr-1\">Month</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-clean btn-sm font-weight-bold font-size-base mr-1\">Year</a>
\t\t\t\t\t\t\t\t\t<!--end::Actions-->
\t\t\t\t\t\t\t\t\t<!--begin::Daterange-->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light font-weight-bold mr-2\" id=\"kt_dashboard_daterangepicker\" data-toggle=\"tooltip\" title=\"Select dashboard daterange\" data-placement=\"left\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-size-base font-weight-bold mr-2\" id=\"kt_dashboard_daterangepicker_title\">Today</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary font-size-base font-weight-bolder\" id=\"kt_dashboard_daterangepicker_date\">Aug 16</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!--end::Daterange-->
\t\t\t\t\t\t\t\t\t<!--begin::Dropdowns-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown dropdown-inline\" data-toggle=\"tooltip\" title=\"Quick actions\" data-placement=\"left\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-clean btn-icon\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-success svg-icon-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Navigation-->
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"navi navi-hover py-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon2-drop\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-separator my-3\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon2-magnifier-tool\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Navigation-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Dropdowns-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Toolbar-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Subheader-->
\t\t\t\t\t\t<!--begin::Entry-->
\t\t\t\t\t\t<div class=\"d-flex flex-column-fluid\">


\t\t\t\t\t\t\t<!--begin :: BLOCK-->
\t\t\t\t\t\t\t\t";
        // line 797
        $this->displayBlock('Entry', $context, $blocks);
        // line 800
        echo "\t\t\t\t\t\t\t<!--end :: BLOCK-->


\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Entry-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Content-->
\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t<div class=\"footer bg-white py-4 d-flex flex-lg-column\" id=\"kt_footer\">
\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t<div class=\"container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t<!--begin::Copyright-->
\t\t\t\t\t\t\t<div class=\"text-dark order-2 order-md-1\">
\t\t\t\t\t\t\t\t<span class=\"text-muted font-weight-bold mr-2\">2022©</span>
\t\t\t\t\t\t\t\t<a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"text-dark-75 text-hover-primary\">Apollo</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Copyright-->
\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t<div class=\"nav nav-dark\">
\t\t\t\t\t\t\t\t<a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">About</a>
\t\t\t\t\t\t\t\t<a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">Team</a>
\t\t\t\t\t\t\t\t<a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-0\">Contact</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Nav-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Container-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Footer-->
\t\t\t\t</div>
\t\t\t\t<!--end::Wrapper-->
\t\t\t</div>
\t\t\t<!--end::Page-->
\t\t<!--end::Main-->

\t\t<!-- begin::User Panel-->
\t\t<div id=\"kt_quick_user\" class=\"offcanvas offcanvas-right p-10\">
\t\t\t<!--begin::Header-->
\t\t\t<div class=\"offcanvas-header d-flex align-items-center justify-content-between pb-5\">
\t\t\t\t<h3 class=\"font-weight-bold m-0\">To Modify
\t\t\t\t<small class=\"text-muted font-size-sm ml-2\">To Modify</small></h3>
\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-icon btn-light btn-hover-primary\" id=\"kt_quick_user_close\">
\t\t\t\t\t<i class=\"ki ki-close icon-xs text-muted\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<!--end::Header-->
\t\t\t<!--begin::Content-->
\t\t\t<div class=\"offcanvas-content pr-5 mr-n5\">
\t\t\t\t<!--begin::Header-->
\t\t\t\t<div class=\"d-flex align-items-center mt-5\">
\t\t\t\t\t<div class=\"symbol symbol-100 mr-5\">
\t\t\t\t\t\t<div class=\"symbol-label\" style=\"background-image:url('assets/media/users/300_21.jpg')\"></div>
\t\t\t\t\t\t<i class=\"symbol-badge bg-success\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t<a href=\"#\" class=\"font-weight-bold font-size-h5 text-dark-75 text-hover-primary\">Name</a>
\t\t\t\t\t\t<div class=\"text-muted mt-1\">Admin</div>
\t\t\t\t\t\t<div class=\"navi mt-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-item\">
\t\t\t\t\t\t\t\t<span class=\"navi-link p-0 pb-2\">
\t\t\t\t\t\t\t\t\t<span class=\"navi-icon mr-1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-lg svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"19.5\" cy=\"17.5\" r=\"2.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"navi-text text-muted text-hover-primary\">Email</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light-primary font-weight-bolder py-2 px-5\">Sign Out</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--end::Header-->
\t\t\t\t<!--begin::Separator-->
\t\t\t\t<div class=\"separator separator-dashed mt-8 mb-5\"></div>
\t\t\t\t<!--end::Separator-->
\t\t\t\t<!--begin::Nav-->
\t\t\t\t<div class=\"navi navi-spacer-x-0 p-0\">
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a href=\"custom/apps/user/profile-1/personal-information.html\" class=\"navi-item\">
\t\t\t\t\t\t<div class=\"navi-link\">
\t\t\t\t\t\t\t<div class=\"symbol symbol-40 bg-light mr-3\">
\t\t\t\t\t\t\t\t<div class=\"symbol-label\">
\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"18.5\" cy=\"5.5\" r=\"2.5\" />
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navi-text\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">To Modify</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">To Modify</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<!--end:Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a href=\"custom/apps/user/profile-3.html\" class=\"navi-item\">
\t\t\t\t\t\t<div class=\"navi-link\">
\t\t\t\t\t\t\t<div class=\"symbol symbol-40 bg-light mr-3\">
\t\t\t\t\t\t\t\t<div class=\"symbol-label\">
\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md svg-icon-warning\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"12\" y=\"4\" width=\"3\" height=\"13\" rx=\"1.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"7\" y=\"9\" width=\"3\" height=\"8\" rx=\"1.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"17\" y=\"11\" width=\"3\" height=\"6\" rx=\"1.5\" />
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navi-text\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">To Modify</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">To Modify</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<!--end:Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a href=\"custom/apps/user/profile-2.html\" class=\"navi-item\">
\t\t\t\t\t\t<div class=\"navi-link\">
\t\t\t\t\t\t\t<div class=\"symbol symbol-40 bg-light mr-3\">
\t\t\t\t\t\t\t\t<div class=\"symbol-label\">
\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md svg-icon-danger\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Files/Selected-file.svg-->
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navi-text\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">To Modify</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">To Modify</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<!--end:Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a href=\"custom/apps/userprofile-1/overview.html\" class=\"navi-item\">
\t\t\t\t\t\t<div class=\"navi-link\">
\t\t\t\t\t\t\t<div class=\"symbol symbol-40 bg-light mr-3\">
\t\t\t\t\t\t\t\t<div class=\"symbol-label\">
\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navi-text\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">To Modify</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">To Modify</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<!--end:Item-->
\t\t\t\t</div>
\t\t\t\t<!--end::Nav-->
\t\t\t<!--end::Content-->
\t\t</div>
\t\t<!-- end::User Panel-->
\t\t</div>

\t\t<script>
\t\t\tvar HOST_URL = \"https://preview.keenthemes.com/metronic/theme/html/tools/preview\";
\t\t</script>

\t\t<!--begin::Global Config(global config for global JS scripts)-->
\t\t<script>
\t\t\tvar KTAppSettings = {
\t\t\t\t\"breakpoints\": {
\t\t\t\t\t\"sm\": 576,
\t\t\t\t\t\"md\": 768,
\t\t\t\t\t\"lg\": 992,
\t\t\t\t\t\"xl\": 1200,
\t\t\t\t\t\"xxl\": 1400
\t\t\t\t},
\t\t\t\t\"colors\": {
\t\t\t\t\t\"theme\": {
\t\t\t\t\t\t\"base\": {
\t\t\t\t\t\t\t\"white\": \"#ffffff\",
\t\t\t\t\t\t\t\"primary\": \"#3699FF\",
\t\t\t\t\t\t\t\"secondary\": \"#E5EAEE\",
\t\t\t\t\t\t\t\"success\": \"#1BC5BD\",
\t\t\t\t\t\t\t\"info\": \"#8950FC\",
\t\t\t\t\t\t\t\"warning\": \"#FFA800\",
\t\t\t\t\t\t\t\"danger\": \"#F64E60\",
\t\t\t\t\t\t\t\"light\": \"#E4E6EF\",
\t\t\t\t\t\t\t\"dark\": \"#181C32\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"light\": {
\t\t\t\t\t\t\t\"white\": \"#ffffff\",
\t\t\t\t\t\t\t\"primary\": \"#E1F0FF\",
\t\t\t\t\t\t\t\"secondary\": \"#EBEDF3\",
\t\t\t\t\t\t\t\"success\": \"#C9F7F5\",
\t\t\t\t\t\t\t\"info\": \"#EEE5FF\",
\t\t\t\t\t\t\t\"warning\": \"#FFF4DE\",
\t\t\t\t\t\t\t\"danger\": \"#FFE2E5\",
\t\t\t\t\t\t\t\"light\": \"#F3F6F9\",
\t\t\t\t\t\t\t\"dark\": \"#D6D6E0\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"inverse\": {
\t\t\t\t\t\t\t\"white\": \"#ffffff\",
\t\t\t\t\t\t\t\"primary\": \"#ffffff\",
\t\t\t\t\t\t\t\"secondary\": \"#3F4254\",
\t\t\t\t\t\t\t\"success\": \"#ffffff\",
\t\t\t\t\t\t\t\"info\": \"#ffffff\",
\t\t\t\t\t\t\t\"warning\": \"#ffffff\",
\t\t\t\t\t\t\t\"danger\": \"#ffffff\",
\t\t\t\t\t\t\t\"light\": \"#464E5F\",
\t\t\t\t\t\t\t\"dark\": \"#ffffff\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\t\"gray\": {
\t\t\t\t\t\t\"gray-100\": \"#F3F6F9\",
\t\t\t\t\t\t\"gray-200\": \"#EBEDF3\",
\t\t\t\t\t\t\"gray-300\": \"#E4E6EF\",
\t\t\t\t\t\t\"gray-400\": \"#D1D3E0\",
\t\t\t\t\t\t\"gray-500\": \"#B5B5C3\",
\t\t\t\t\t\t\"gray-600\": \"#7E8299\",
\t\t\t\t\t\t\"gray-700\": \"#5E6278\",
\t\t\t\t\t\t\"gray-800\": \"#3F4254\",
\t\t\t\t\t\t\"gray-900\": \"#181C32\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"font-family\": \"Poppins\"
\t\t\t};
\t\t</script>

\t\t<!--end::Global Config-->

\t\t<!--begin::Global Theme Bundle(used by all pages)-->
\t\t<script src=\"";
        // line 1063
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/plugins/global/plugins.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1064
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/plugins/custom/prismjs/prismjs.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1065
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/js/scripts.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"https://keenthemes.com/metronic/assets/js/engage_code.js\"></script>

\t\t<!--end::Global Theme Bundle-->

\t\t<!--begin::Page Vendors(used by this page)-->
\t\t<script src=\"";
        // line 1071
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"), "html", null, true);
        echo "\"></script>

\t\t<!--end::Page Vendors-->

\t\t<!--begin::Page Scripts(used by this page)-->
\t\t<script src=\"";
        // line 1076
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back-Office/assets/js/pages/widgets.js"), "html", null, true);
        echo "\"></script>

\t\t<!--end::Page Scripts-->
\t</body>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 797
    public function block_Entry($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Entry"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Entry"));

        // line 798
        echo "
\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Back_Office/AdminMain.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1294 => 798,  1284 => 797,  1269 => 1076,  1261 => 1071,  1252 => 1065,  1248 => 1064,  1244 => 1063,  979 => 800,  977 => 797,  865 => 688,  852 => 678,  839 => 668,  826 => 658,  813 => 648,  798 => 636,  351 => 192,  340 => 184,  315 => 162,  304 => 154,  219 => 72,  204 => 59,  194 => 58,  181 => 52,  175 => 49,  171 => 48,  167 => 47,  163 => 46,  155 => 41,  151 => 40,  147 => 39,  139 => 34,  131 => 29,  126 => 26,  116 => 25,  97 => 21,  85 => 1081,  83 => 58,  78 => 55,  76 => 25,  69 => 21,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang=\"en\">

\t<!--begin::Head-->
\t<head>
\t\t<base href=\"\">
\t\t<meta charset=\"utf-8\" />
\t\t<title>Admin {% block title %} {% endblock %}</title>
\t\t<meta name=\"description\" content=\"Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets.\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

\t\t{% block css %}
\t\t<link rel=\"canonical\" href=\"https://keenthemes.com/metronic\" />

\t\t<!--begin::Fonts-->
\t\t<link rel=\"stylesheet\" href=\"{{asset ('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700') }}\" />

\t\t<!--end::Fonts-->

\t\t<!--begin::Page Vendors Styles(used by this page)-->
\t\t<link href=\"{{asset ('Back-Office/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }} \" rel=\"stylesheet\" type=\"text/css\" />

\t\t<!--end::Page Vendors Styles-->

\t\t<!--begin::Global Theme Styles(used by all pages)-->
\t\t<link href=\"{{asset ('Back-Office/assets/plugins/global/plugins.bundle.css') }} \" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"{{asset ('Back-Office/assets/plugins/custom/prismjs/prismjs.bundle.css') }} \" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"{{asset ('Back-Office/assets/css/style.bundle.css') }} \" rel=\"stylesheet\" type=\"text/css\" />

\t\t<!--end::Global Theme Styles-->

\t\t<!--begin::Layout Themes(used by all pages)-->
\t\t<link href=\"{{asset ('Back-Office/assets/css/themes/layout/header/base/light.css') }} \" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"{{asset ('Back-Office/assets/css/themes/layout/header/menu/light.css') }} \" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"{{asset ('Back-Office/assets/css/themes/layout/brand/dark.css') }} \" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"{{asset ('Back-Office/assets/css/themes/layout/aside/dark.css') }} \" rel=\"stylesheet\" type=\"text/css\" />

\t\t<!--end::Layout Themes-->
\t\t<link rel=\"shortcut icon\" href=\"{{ asset ('logo.png')}}\" />

\t\t{% endblock %}
\t</head>

\t<!--end::Head-->
\t{% block body %}
\t<!--begin::Body-->
\t<body id=\"kt_body\" class=\"header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading\">
\t\t
\t\t<div class=\"d-flex flex-column flex-root\">
\t\t<!--begin::Main-->
\t\t\t<!--begin::Page-->
\t\t\t<div class=\"d-flex flex-row flex-column-fluid page\">
\t\t\t\t<!--begin::Aside-->
\t\t\t\t<div class=\"aside aside-left aside-fixed d-flex flex-column flex-row-auto\" id=\"kt_aside\">
\t\t\t\t\t<!--begin::Brand-->
\t\t\t\t\t<div class=\"brand flex-column-auto\" id=\"kt_brand\">
\t\t\t\t\t\t<!--begin::Logo-->
\t\t\t\t\t\t<a href=\"index.html\" class=\"brand-logo\">
            \t\t\t\t<img alt=\"logo\" src=\"{{ asset ('Tabaani Logo png.png') }}\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!--end::Logo-->
\t\t\t\t\t\t<!--begin::Toggle-->
\t\t\t\t\t\t<button class=\"brand-toggle btn btn-sm px-0\" id=\"kt_aside_toggle\">
\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon svg-icon-xl\">
\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t<path d=\"M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)\" />
\t\t\t\t\t\t\t\t\t\t<path d=\"M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)\" />
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<!--end::Toolbar-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Brand-->
\t\t\t\t\t<!--begin::Aside Menu-->
\t\t\t\t\t<div class=\"aside-menu-wrapper flex-column-fluid\" id=\"kt_aside_menu_wrapper\">
\t\t\t\t\t\t<!--begin::Menu Container-->
\t\t\t\t\t\t<div id=\"kt_aside_menu\" class=\"aside-menu my-4\" data-menu-vertical=\"1\" data-menu-scroll=\"1\" data-menu-dropdown-timeout=\"500\">
\t\t\t\t\t\t\t<!--begin::Menu Nav-->
\t\t\t\t\t\t\t<ul class=\"menu-nav\">
\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-active\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-section\">
\t\t\t\t\t\t\t\t\t<h4 class=\"menu-text\">Lists</h4>
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"4\" y=\"4\" width=\"7\" height=\"7\" rx=\"1.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Tables</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Events</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('events_index_back') }}\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Table Events</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('events_new_back') }}\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Add Events</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Themes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('themes_index') }}\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Table Themes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('themes_new') }}\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Add Themes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"4\" y=\"4\" width=\"8\" height=\"16\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-parent\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"custom/pages/login/login-1.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"custom/pages/login/login-2.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" aria-haspopup=\"true\" data-menu-toggle=\"hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"custom/pages/wizard/wizard-1.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"custom/pages/wizard/wizard-2.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!--end::Menu Nav-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Menu Container-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Aside Menu-->
\t\t\t\t</div>
\t\t\t\t<!--end::Aside-->

\t\t\t\t<!--begin::Wrapper-->
\t\t\t\t<div class=\"d-flex flex-column flex-row-fluid wrapper\" id=\"kt_wrapper\">
\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t<div id=\"kt_header\" class=\"header header-fixed\">
\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t<div class=\"container-fluid d-flex align-items-stretch justify-content-between\">
\t\t\t\t\t\t\t<!--begin::Header Menu Wrapper-->
\t\t\t\t\t\t\t<div class=\"header-menu-wrapper header-menu-wrapper-left\" id=\"kt_header_menu_wrapper\">
\t\t\t\t\t\t\t\t<!--begin::Header Menu-->
\t\t\t\t\t\t\t\t<div id=\"kt_header_menu\" class=\"header-menu header-menu-mobile header-menu-layout-default\">
\t\t\t\t\t\t\t\t\t<!--begin::Header Nav-->
\t\t\t\t\t\t\t\t\t<ul class=\"menu-nav\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active\" data-menu-toggle=\"click\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu menu-submenu-classic menu-submenu-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-active\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" data-menu-toggle=\"hover\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Code/CMD.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu menu-submenu-classic menu-submenu-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Edit To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Delete To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" data-menu-toggle=\"hover\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-box.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M22,15 L22,19 C22,20.1045695 21.1045695,21 20,21 L4,21 C2.8954305,21 2,20.1045695 2,19 L2,15 L6.27924078,15 L6.82339262,16.6324555 C7.09562072,17.4491398 7.8598984,18 8.72075922,18 L15.381966,18 C16.1395101,18 16.8320364,17.5719952 17.1708204,16.8944272 L18.118034,15 L22,15 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.5625,13 L5.92654389,7.01947752 C6.2807805,6.38972356 6.94714834,6 7.66969497,6 L16.330305,6 C17.0528517,6 17.7192195,6.38972356 18.0734561,7.01947752 L21.4375,13 L18.118034,13 C17.3604899,13 16.6679636,13.4280048 16.3291796,14.1055728 L15.381966,16 L8.72075922,16 L8.17660738,14.3675445 C7.90437928,13.5508602 7.1401016,13 6.27924078,13 L2.5625,13 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu menu-submenu-classic menu-submenu-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-submenu\" data-menu-toggle=\"click\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-submenu menu-submenu-fixed menu-submenu-left\" style=\"width:1000px\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"menu-heading menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Crown.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"menu-heading menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"menu-heading menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"menu-heading menu-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-bullet menu-bullet-dot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-arrow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<!--end::Header Nav-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Header Menu-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Header Menu Wrapper-->
\t\t\t\t\t\t\t<!--begin::Topbar-->
\t\t\t\t\t\t\t<div class=\"topbar\">
\t\t\t\t\t\t\t\t<!--begin::Search-->
\t\t\t\t\t\t\t\t<div class=\"dropdown\" id=\"kt_quick_search_toggle\">
\t\t\t\t\t\t\t\t\t<!--begin::Toggle-->
\t\t\t\t\t\t\t\t\t<div class=\"topbar-item\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-icon btn-clean btn-lg btn-dropdown mr-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-xl svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Toggle-->
\t\t\t\t\t\t\t\t\t<!--begin::Dropdown-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"quick-search quick-search-dropdown\" id=\"kt_quick_search_dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Form-->
\t\t\t\t\t\t\t\t\t\t\t<form method=\"get\" class=\"quick-search-form\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"quick-search-close ki ki-close icon-sm text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Form-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Scroll-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-search-wrapper scroll\" data-scroll=\"true\" data-height=\"325\" data-mobile-height=\"200\"></div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Scroll-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Dropdown-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Search-->
\t\t\t\t\t\t\t\t<!--begin::Languages-->
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<!--begin::Toggle-->
\t\t\t\t\t\t\t\t\t<div class=\"topbar-item\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-icon btn-clean btn-dropdown btn-lg mr-1\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"h-20px w-20px rounded-sm\" src=\"{{asset ('back-office/assets/media/svg/flags/226-united-states.svg') }}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Toggle-->
\t\t\t\t\t\t\t\t\t<!--begin::Dropdown-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t\t\t\t<ul class=\"navi navi-hover py-4\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{asset ('back-office/assets/media/svg/flags/226-united-states.svg ')}} \" alt=\"United States\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">English</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset ('back-office/assets/media/svg/flags/128-spain.svg')}}\" alt=\"spain\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">Spanish</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{asset ('back-office/assets/media/svg/flags/162-germany.svg ')}}\" alt=\"germany\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">German</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{asset ('back-office/assets/media/svg/flags/063-japan.svg')}}\" alt=\"japan\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">Japanese</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20 mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset ('back-office/assets/media/svg/flags/195-france.svg')}}\" alt=\"france\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">French</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Item-->
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<!--end::Nav-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Dropdown-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Languages-->
\t\t\t\t\t\t\t\t<!--begin::User-->
\t\t\t\t\t\t\t\t<div class=\"topbar-item\">
\t\t\t\t\t\t\t\t\t<div class=\"btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2\" id=\"kt_quick_user_toggle\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-weight-bold font-size-base d-none d-md-inline mr-1\">Hi,</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3\">Admin</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-lg-35 symbol-25 symbol-light-success\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label font-size-h5 font-weight-bold\">A</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::User-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Topbar-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Container-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Header-->

\t\t\t\t\t<!--begin::Content-->
\t\t\t\t\t<div class=\"content d-flex flex-column flex-column-fluid\" id=\"kt_content\">
\t\t\t\t\t\t<!--begin::Subheader-->
\t\t\t\t\t\t<div class=\"subheader py-2 py-lg-4 subheader-solid\" id=\"kt_subheader\">
\t\t\t\t\t\t\t<div class=\"container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap\">
\t\t\t\t\t\t\t\t<!--begin::Info-->
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-wrap mr-2\">
\t\t\t\t\t\t\t\t\t<!--begin::Page Title-->
\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-bold mt-2 mb-2 mr-5\">Dashboard</h5>
\t\t\t\t\t\t\t\t\t<!--end::Page Title-->
\t\t\t\t\t\t\t\t\t<!--begin::Actions-->
\t\t\t\t\t\t\t\t\t<div class=\"subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200\"></div>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-weight-bold mr-4\">#Admin</span>
\t\t\t\t\t\t\t\t\t<!--end::Actions-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t\t<!--begin::Toolbar-->
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<!--begin::Actions-->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-clean btn-sm font-weight-bold font-size-base mr-1\">Today</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-clean btn-sm font-weight-bold font-size-base mr-1\">Month</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-clean btn-sm font-weight-bold font-size-base mr-1\">Year</a>
\t\t\t\t\t\t\t\t\t<!--end::Actions-->
\t\t\t\t\t\t\t\t\t<!--begin::Daterange-->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light font-weight-bold mr-2\" id=\"kt_dashboard_daterangepicker\" data-toggle=\"tooltip\" title=\"Select dashboard daterange\" data-placement=\"left\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted font-size-base font-weight-bold mr-2\" id=\"kt_dashboard_daterangepicker_title\">Today</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-primary font-size-base font-weight-bolder\" id=\"kt_dashboard_daterangepicker_date\">Aug 16</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!--end::Daterange-->
\t\t\t\t\t\t\t\t\t<!--begin::Dropdowns-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown dropdown-inline\" data-toggle=\"tooltip\" title=\"Quick actions\" data-placement=\"left\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-clean btn-icon\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-success svg-icon-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Navigation-->
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"navi navi-hover py-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon2-drop\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-separator my-3\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"navi-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon2-magnifier-tool\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navi-text\">To Modify</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Navigation-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Dropdowns-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Toolbar-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Subheader-->
\t\t\t\t\t\t<!--begin::Entry-->
\t\t\t\t\t\t<div class=\"d-flex flex-column-fluid\">


\t\t\t\t\t\t\t<!--begin :: BLOCK-->
\t\t\t\t\t\t\t\t{% block Entry %}

\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t<!--end :: BLOCK-->


\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Entry-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Content-->
\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t<div class=\"footer bg-white py-4 d-flex flex-lg-column\" id=\"kt_footer\">
\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t<div class=\"container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t<!--begin::Copyright-->
\t\t\t\t\t\t\t<div class=\"text-dark order-2 order-md-1\">
\t\t\t\t\t\t\t\t<span class=\"text-muted font-weight-bold mr-2\">2022©</span>
\t\t\t\t\t\t\t\t<a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"text-dark-75 text-hover-primary\">Apollo</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Copyright-->
\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t<div class=\"nav nav-dark\">
\t\t\t\t\t\t\t\t<a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">About</a>
\t\t\t\t\t\t\t\t<a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-5\">Team</a>
\t\t\t\t\t\t\t\t<a href=\"http://keenthemes.com/metronic\" target=\"_blank\" class=\"nav-link pl-0 pr-0\">Contact</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Nav-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Container-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Footer-->
\t\t\t\t</div>
\t\t\t\t<!--end::Wrapper-->
\t\t\t</div>
\t\t\t<!--end::Page-->
\t\t<!--end::Main-->

\t\t<!-- begin::User Panel-->
\t\t<div id=\"kt_quick_user\" class=\"offcanvas offcanvas-right p-10\">
\t\t\t<!--begin::Header-->
\t\t\t<div class=\"offcanvas-header d-flex align-items-center justify-content-between pb-5\">
\t\t\t\t<h3 class=\"font-weight-bold m-0\">To Modify
\t\t\t\t<small class=\"text-muted font-size-sm ml-2\">To Modify</small></h3>
\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-icon btn-light btn-hover-primary\" id=\"kt_quick_user_close\">
\t\t\t\t\t<i class=\"ki ki-close icon-xs text-muted\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<!--end::Header-->
\t\t\t<!--begin::Content-->
\t\t\t<div class=\"offcanvas-content pr-5 mr-n5\">
\t\t\t\t<!--begin::Header-->
\t\t\t\t<div class=\"d-flex align-items-center mt-5\">
\t\t\t\t\t<div class=\"symbol symbol-100 mr-5\">
\t\t\t\t\t\t<div class=\"symbol-label\" style=\"background-image:url('assets/media/users/300_21.jpg')\"></div>
\t\t\t\t\t\t<i class=\"symbol-badge bg-success\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t<a href=\"#\" class=\"font-weight-bold font-size-h5 text-dark-75 text-hover-primary\">Name</a>
\t\t\t\t\t\t<div class=\"text-muted mt-1\">Admin</div>
\t\t\t\t\t\t<div class=\"navi mt-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navi-item\">
\t\t\t\t\t\t\t\t<span class=\"navi-link p-0 pb-2\">
\t\t\t\t\t\t\t\t\t<span class=\"navi-icon mr-1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-lg svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"19.5\" cy=\"17.5\" r=\"2.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"navi-text text-muted text-hover-primary\">Email</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light-primary font-weight-bolder py-2 px-5\">Sign Out</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--end::Header-->
\t\t\t\t<!--begin::Separator-->
\t\t\t\t<div class=\"separator separator-dashed mt-8 mb-5\"></div>
\t\t\t\t<!--end::Separator-->
\t\t\t\t<!--begin::Nav-->
\t\t\t\t<div class=\"navi navi-spacer-x-0 p-0\">
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a href=\"custom/apps/user/profile-1/personal-information.html\" class=\"navi-item\">
\t\t\t\t\t\t<div class=\"navi-link\">
\t\t\t\t\t\t\t<div class=\"symbol symbol-40 bg-light mr-3\">
\t\t\t\t\t\t\t\t<div class=\"symbol-label\">
\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"18.5\" cy=\"5.5\" r=\"2.5\" />
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navi-text\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">To Modify</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">To Modify</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<!--end:Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a href=\"custom/apps/user/profile-3.html\" class=\"navi-item\">
\t\t\t\t\t\t<div class=\"navi-link\">
\t\t\t\t\t\t\t<div class=\"symbol symbol-40 bg-light mr-3\">
\t\t\t\t\t\t\t\t<div class=\"symbol-label\">
\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md svg-icon-warning\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"12\" y=\"4\" width=\"3\" height=\"13\" rx=\"1.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"7\" y=\"9\" width=\"3\" height=\"8\" rx=\"1.5\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"17\" y=\"11\" width=\"3\" height=\"6\" rx=\"1.5\" />
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navi-text\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">To Modify</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">To Modify</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<!--end:Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a href=\"custom/apps/user/profile-2.html\" class=\"navi-item\">
\t\t\t\t\t\t<div class=\"navi-link\">
\t\t\t\t\t\t\t<div class=\"symbol symbol-40 bg-light mr-3\">
\t\t\t\t\t\t\t\t<div class=\"symbol-label\">
\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md svg-icon-danger\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Files/Selected-file.svg-->
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navi-text\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">To Modify</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">To Modify</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<!--end:Item-->
\t\t\t\t\t<!--begin::Item-->
\t\t\t\t\t<a href=\"custom/apps/userprofile-1/overview.html\" class=\"navi-item\">
\t\t\t\t\t\t<div class=\"navi-link\">
\t\t\t\t\t\t\t<div class=\"symbol symbol-40 bg-light mr-3\">
\t\t\t\t\t\t\t\t<div class=\"symbol-label\">
\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-md svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z\" fill=\"#000000\" opacity=\"0.3\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z\" fill=\"#000000\" />
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navi-text\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">To Modify</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">To Modify</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<!--end:Item-->
\t\t\t\t</div>
\t\t\t\t<!--end::Nav-->
\t\t\t<!--end::Content-->
\t\t</div>
\t\t<!-- end::User Panel-->
\t\t</div>

\t\t<script>
\t\t\tvar HOST_URL = \"https://preview.keenthemes.com/metronic/theme/html/tools/preview\";
\t\t</script>

\t\t<!--begin::Global Config(global config for global JS scripts)-->
\t\t<script>
\t\t\tvar KTAppSettings = {
\t\t\t\t\"breakpoints\": {
\t\t\t\t\t\"sm\": 576,
\t\t\t\t\t\"md\": 768,
\t\t\t\t\t\"lg\": 992,
\t\t\t\t\t\"xl\": 1200,
\t\t\t\t\t\"xxl\": 1400
\t\t\t\t},
\t\t\t\t\"colors\": {
\t\t\t\t\t\"theme\": {
\t\t\t\t\t\t\"base\": {
\t\t\t\t\t\t\t\"white\": \"#ffffff\",
\t\t\t\t\t\t\t\"primary\": \"#3699FF\",
\t\t\t\t\t\t\t\"secondary\": \"#E5EAEE\",
\t\t\t\t\t\t\t\"success\": \"#1BC5BD\",
\t\t\t\t\t\t\t\"info\": \"#8950FC\",
\t\t\t\t\t\t\t\"warning\": \"#FFA800\",
\t\t\t\t\t\t\t\"danger\": \"#F64E60\",
\t\t\t\t\t\t\t\"light\": \"#E4E6EF\",
\t\t\t\t\t\t\t\"dark\": \"#181C32\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"light\": {
\t\t\t\t\t\t\t\"white\": \"#ffffff\",
\t\t\t\t\t\t\t\"primary\": \"#E1F0FF\",
\t\t\t\t\t\t\t\"secondary\": \"#EBEDF3\",
\t\t\t\t\t\t\t\"success\": \"#C9F7F5\",
\t\t\t\t\t\t\t\"info\": \"#EEE5FF\",
\t\t\t\t\t\t\t\"warning\": \"#FFF4DE\",
\t\t\t\t\t\t\t\"danger\": \"#FFE2E5\",
\t\t\t\t\t\t\t\"light\": \"#F3F6F9\",
\t\t\t\t\t\t\t\"dark\": \"#D6D6E0\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"inverse\": {
\t\t\t\t\t\t\t\"white\": \"#ffffff\",
\t\t\t\t\t\t\t\"primary\": \"#ffffff\",
\t\t\t\t\t\t\t\"secondary\": \"#3F4254\",
\t\t\t\t\t\t\t\"success\": \"#ffffff\",
\t\t\t\t\t\t\t\"info\": \"#ffffff\",
\t\t\t\t\t\t\t\"warning\": \"#ffffff\",
\t\t\t\t\t\t\t\"danger\": \"#ffffff\",
\t\t\t\t\t\t\t\"light\": \"#464E5F\",
\t\t\t\t\t\t\t\"dark\": \"#ffffff\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\t\"gray\": {
\t\t\t\t\t\t\"gray-100\": \"#F3F6F9\",
\t\t\t\t\t\t\"gray-200\": \"#EBEDF3\",
\t\t\t\t\t\t\"gray-300\": \"#E4E6EF\",
\t\t\t\t\t\t\"gray-400\": \"#D1D3E0\",
\t\t\t\t\t\t\"gray-500\": \"#B5B5C3\",
\t\t\t\t\t\t\"gray-600\": \"#7E8299\",
\t\t\t\t\t\t\"gray-700\": \"#5E6278\",
\t\t\t\t\t\t\"gray-800\": \"#3F4254\",
\t\t\t\t\t\t\"gray-900\": \"#181C32\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"font-family\": \"Poppins\"
\t\t\t};
\t\t</script>

\t\t<!--end::Global Config-->

\t\t<!--begin::Global Theme Bundle(used by all pages)-->
\t\t<script src=\"{{asset ('Back-Office/assets/plugins/global/plugins.bundle.js') }}\"></script>
\t\t<script src=\"{{asset ('Back-Office/assets/plugins/custom/prismjs/prismjs.bundle.js') }}\"></script>
\t\t<script src=\"{{asset ('Back-Office/assets/js/scripts.bundle.js') }}\"></script>
\t\t<script src=\"https://keenthemes.com/metronic/assets/js/engage_code.js\"></script>

\t\t<!--end::Global Theme Bundle-->

\t\t<!--begin::Page Vendors(used by this page)-->
\t\t<script src=\"{{asset ('Back-Office/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}\"></script>

\t\t<!--end::Page Vendors-->

\t\t<!--begin::Page Scripts(used by this page)-->
\t\t<script src=\"{{asset ('Back-Office/assets/js/pages/widgets.js') }}\"></script>

\t\t<!--end::Page Scripts-->
\t</body>
\t{% endblock %}

\t<!--end::Body-->
</html>", "Back_Office/AdminMain.html.twig", "D:\\3ème_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\Back_Office\\AdminMain.html.twig");
    }
}
