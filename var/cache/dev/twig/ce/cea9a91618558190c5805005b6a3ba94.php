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

/* partials/_boxConcours.html.twig */
class __TwigTemplate_06865f4641c895c06e98c86ad3766570 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_boxConcours.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_boxConcours.html.twig"));

        // line 1
        echo "<div class=\"main-panel\">
\t<div class=\"content-wrapper\">
\t\t<div class=\"container-scroller\">
\t\t\t<div class=\"container-fluid page-body-wrapper\">
\t\t\t\t<div class=\"main-panel\">
\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive \">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped project-orders-table\">
\t\t\t\t\t\t\t\t\t\t\t<thead class=\"th-color\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Club</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Information</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 21
        echo "\t\t\t\t\t\t\t\t\t\t\t<tbody class=\"tb-color\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["concours"]) || array_key_exists("concours", $context) ? $context["concours"] : (function () { throw new RuntimeError('Variable "concours" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conc"]) {
            // line 23
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conc"], "location", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conc"], "dateD", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conc"], "club", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resources_info", ["id" => twig_get_attribute($this->env, $this->source, $context["conc"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tinfo
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resources_insertPart", ["id" => twig_get_attribute($this->env, $this->source, $context["conc"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"d-flex align-items-center btn-cc\">

\t\t\t\t\t\t";
        // line 57
        echo "\t\t\t\t\t\t<a href = \" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resources_create");
        echo "\" class =\"btn btn-success btn-sm btn-icon-text mr-3\">
\t\t\t\t\t\t\tCréer
\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_boxConcours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 57,  108 => 39,  94 => 32,  87 => 28,  82 => 26,  78 => 25,  74 => 24,  71 => 23,  67 => 22,  64 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-panel\">
\t<div class=\"content-wrapper\">
\t\t<div class=\"container-scroller\">
\t\t\t<div class=\"container-fluid page-body-wrapper\">
\t\t\t\t<div class=\"main-panel\">
\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive \">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped project-orders-table\">
\t\t\t\t\t\t\t\t\t\t\t<thead class=\"th-color\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Club</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Information</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t{# affichage des concours #}
\t\t\t\t\t\t\t\t\t\t\t<tbody class=\"tb-color\">
\t\t\t\t\t\t\t\t\t\t\t{% for conc in concours %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ conc.location }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ conc.dateD|date(\"d/m/Y\") }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ conc.club }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('resources_info',{id: conc.id}) }}\" type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tinfo
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('resources_insertPart',{id: conc.id}) }}\" type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"d-flex align-items-center btn-cc\">

\t\t\t\t\t\t{# <a href=\"\" class=\"btn btn-info btn-sm btn-icon-text mr-3\" >
\t\t\t\t\t\t\tDupliquer
\t\t\t\t\t\t\t<i class=\"typcn typcn-cilpboard btn-icon-append\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t<a href = \" {{path ('resources_create')}}\" class =\"btn btn-success btn-sm btn-icon-text mr-3\">
\t\t\t\t\t\t\tCréer
\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
", "partials/_boxConcours.html.twig", "/home/marius/Desktop/symfonyTac/templates/partials/_boxConcours.html.twig");
    }
}
