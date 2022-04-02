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

/* events/eventsPDF.html.twig */
class __TwigTemplate_2cf5f43476333e32d2b403eb461d1399131c3dbfb584996c3103660b13ac7172 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'Entry' => [$this, 'block_Entry'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/eventsPDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/eventsPDF.html.twig"));

        // line 1
        $this->displayBlock('Entry', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_Entry($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Entry"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Entry"));

        // line 2
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<link href=\"css/bootstrap.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<style type=\"text/css\">
    img.head {
        position: absolute;
        height: 40pt;
        left: 30pt;
        top: 20pt;
    }
    .header {
        text-align: center;
        position: absolute;
        left: 0pt;
        top: 20pt;
        width: 553pt;

    }
    .header h1 {
        margin: 0pt;
        font-size: 80pt;
        font-family: Arial, Helvetica, sans-serif;
    }
    .header h2 {
        text-decoration: underline;
        text-transform: uppercase;
        background-color: #FFFF99;
        margin: 10pt 0pt 0pt 0pt;
    }
    .nip1 td {
        width: 20%;
    }
    .result {
        color: blue;
    }
    .nip-width1 {
        width: 170pt;
    }
    .nip-width2 {
        width: 130pt;
    }

    .nip-width3 {
        width: 155pt;
    }
    .nip-width4 {
        width: 145pt;
    }
    h2 {
        text-align: center;
        font-size: 14pt;
        margin: 10pt 0pt 0pt 0pt;
    }
    h1 {
        text-align: center;
        font-size: 20pt;
        margin: 10pt 0pt 0pt 0pt;
    }
    table.border, div.border table {
        margin-top: 0pt;
        border-collapse: collapse;
    }
    div.border table {
        margin-top: 0px;
    }
    .border {
        border: 2px solid black;
    }
    .th25 {
        width: 25%;
    }
    .head-tab {
        background-color: #FFFF99;
    }
    .unstyled {
        list-style-type: none;
        margin: 0px;
        padding: 0px;
    }
    .unstyled li {
        margin: 0px;
        background-color: blue;
    }

    .content {
        position: absolute;
        top: 60pt;
        left: 00pt;
    }
    .row .span6 {
        width: 250pt;
        margin: 100pt;
    }
    table tr {
        width: 100%;
    }
    .table-bordered, .table-bordered td, .table-bordered th {
        border-collapse: collapse;
        border: 1px solid black;
    }

    td, th {
        padding: 3pt;
    }


    .col1 {
        width: 10pt;
    }
    .col2 {
        width: 60pt;
    }
    .col3 {
        width: 60pt;
    }
    .col4 {
        width: 100pt;
    }
    .col5 {
        width: 120pt;
    }


    table {
        margin-top: 20pt;
        width:100%;
    }
    thead {
        background-color: #20c997;
    }

</style>
                <h1 align=\"center\" style=\"color:darkorange;\">
                    List of Tabaani Events
                </h1>
                        <table class=\"table table-bordered\">
                            <thead class=\"thead-dark\">
                            <tr align=\"Center\">
                                <th scope=\"col1\">Id</th>
                                <th scope=\"col2\">Name</th>
                                <th scope=\"col3\">Maximum Participants</th>
                                <th scope=\"col4\">Description</th>
                                <th scope=\"col5\">Date</th>
                                <th scope=\"col6\">Address</th>
                                <th scope=\"col7\">Theme</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 152
            echo "                                <tr align=\"Center\">
                                    <td align=\"center\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 153), "html", null, true);
            echo "</td>
                                    <td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventname", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
                                    <td align=\"center\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nbrmaxpart", [], "any", false, false, false, 155), "html", null, true);
            echo "</td>
                                    <td>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
                                    <td>";
            // line 157
            ((twig_get_attribute($this->env, $this->source, $context["event"], "eventdate", [], "any", false, false, false, 157)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventdate", [], "any", false, false, false, 157), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventaddress", [], "any", false, false, false, 158), "html", null, true);
            echo "</td>
                                    <td>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventtheme", [], "any", false, false, false, 159), "html", null, true);
            echo "</td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                            </tbody>
                        </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "events/eventsPDF.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  255 => 163,  245 => 159,  241 => 158,  237 => 157,  233 => 156,  229 => 155,  225 => 154,  221 => 153,  218 => 152,  214 => 151,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block Entry %}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<link href=\"css/bootstrap.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<style type=\"text/css\">
    img.head {
        position: absolute;
        height: 40pt;
        left: 30pt;
        top: 20pt;
    }
    .header {
        text-align: center;
        position: absolute;
        left: 0pt;
        top: 20pt;
        width: 553pt;

    }
    .header h1 {
        margin: 0pt;
        font-size: 80pt;
        font-family: Arial, Helvetica, sans-serif;
    }
    .header h2 {
        text-decoration: underline;
        text-transform: uppercase;
        background-color: #FFFF99;
        margin: 10pt 0pt 0pt 0pt;
    }
    .nip1 td {
        width: 20%;
    }
    .result {
        color: blue;
    }
    .nip-width1 {
        width: 170pt;
    }
    .nip-width2 {
        width: 130pt;
    }

    .nip-width3 {
        width: 155pt;
    }
    .nip-width4 {
        width: 145pt;
    }
    h2 {
        text-align: center;
        font-size: 14pt;
        margin: 10pt 0pt 0pt 0pt;
    }
    h1 {
        text-align: center;
        font-size: 20pt;
        margin: 10pt 0pt 0pt 0pt;
    }
    table.border, div.border table {
        margin-top: 0pt;
        border-collapse: collapse;
    }
    div.border table {
        margin-top: 0px;
    }
    .border {
        border: 2px solid black;
    }
    .th25 {
        width: 25%;
    }
    .head-tab {
        background-color: #FFFF99;
    }
    .unstyled {
        list-style-type: none;
        margin: 0px;
        padding: 0px;
    }
    .unstyled li {
        margin: 0px;
        background-color: blue;
    }

    .content {
        position: absolute;
        top: 60pt;
        left: 00pt;
    }
    .row .span6 {
        width: 250pt;
        margin: 100pt;
    }
    table tr {
        width: 100%;
    }
    .table-bordered, .table-bordered td, .table-bordered th {
        border-collapse: collapse;
        border: 1px solid black;
    }

    td, th {
        padding: 3pt;
    }


    .col1 {
        width: 10pt;
    }
    .col2 {
        width: 60pt;
    }
    .col3 {
        width: 60pt;
    }
    .col4 {
        width: 100pt;
    }
    .col5 {
        width: 120pt;
    }


    table {
        margin-top: 20pt;
        width:100%;
    }
    thead {
        background-color: #20c997;
    }

</style>
                <h1 align=\"center\" style=\"color:darkorange;\">
                    List of Tabaani Events
                </h1>
                        <table class=\"table table-bordered\">
                            <thead class=\"thead-dark\">
                            <tr align=\"Center\">
                                <th scope=\"col1\">Id</th>
                                <th scope=\"col2\">Name</th>
                                <th scope=\"col3\">Maximum Participants</th>
                                <th scope=\"col4\">Description</th>
                                <th scope=\"col5\">Date</th>
                                <th scope=\"col6\">Address</th>
                                <th scope=\"col7\">Theme</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for event in events %}
                                <tr align=\"Center\">
                                    <td align=\"center\">{{ event.id }}</td>
                                    <td>{{ event.eventname }}</td>
                                    <td align=\"center\">{{ event.nbrmaxpart }}</td>
                                    <td>{{ event.description }}</td>
                                    <td>{{ event.eventdate ? event.eventdate|date('Y-m-d') : '' }}</td>
                                    <td>{{ event.eventaddress }}</td>
                                    <td>{{ event.eventtheme }}</td>

                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>


{% endblock %}", "events/eventsPDF.html.twig", "D:\\3ème_TIC_ESPRIT\\2eme_Semestre\\PIDEV\\Code\\Apollo\\templates\\events\\eventsPDF.html.twig");
    }
}
