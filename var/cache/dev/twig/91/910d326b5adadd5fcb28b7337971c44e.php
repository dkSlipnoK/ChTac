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

/* partials/_infConc.html.twig */
class __TwigTemplate_85f8ba30ecd72180f2ba8fa58a5e4da6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_infConc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_infConc.html.twig"));

        // line 1
        echo "<div class=\"main-panel\">
\t<div class=\"content-wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"table-responsive \">
\t\t\t\t\t\t<table class=\"table table-striped project-orders-table\" id=\"kids\">
\t\t\t\t\t\t\t";
        // line 9
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<thead class=\"th-color\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"5\">Information sur le concours : </th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody class=\"tb-color\">
\t\t\t\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["infoConc"]) || array_key_exists("infoConc", $context) ? $context["infoConc"] : (function () { throw new RuntimeError('Variable "infoConc" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 17
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "location", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "dateD", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "club", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody class=\"tb-color\">
\t\t\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Cat"]) {
            // line 27
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["epreuves"]) || array_key_exists("epreuves", $context) ? $context["epreuves"] : (function () { throw new RuntimeError('Variable "epreuves" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["infoEp"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Catégorie : ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Cat"], "nom", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Epreuve : ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infoEp"], "nom", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infoEp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<a href=\"/indexuser\" type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" >
\t\t\t\t\t\t\tretour
\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_infConc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 34,  115 => 33,  106 => 30,  102 => 29,  99 => 28,  94 => 27,  90 => 26,  85 => 23,  76 => 20,  72 => 19,  68 => 18,  65 => 17,  61 => 16,  52 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-panel\">
\t<div class=\"content-wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"table-responsive \">
\t\t\t\t\t\t<table class=\"table table-striped project-orders-table\" id=\"kids\">
\t\t\t\t\t\t\t{# affichage des concours #}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<thead class=\"th-color\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"5\">Information sur le concours : </th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody class=\"tb-color\">
\t\t\t\t\t\t\t\t{% for info in infoConc %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>{{ info.location }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ info.dateD|date(\"d/m/Y\") }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ info.club }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody class=\"tb-color\">
\t\t\t\t\t\t\t\t{% for Cat in categories %}
\t\t\t\t\t\t\t\t\t{% for infoEp in epreuves %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Catégorie : {{ Cat.nom }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Epreuve : {{ infoEp.nom }}</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<a href=\"/indexuser\" type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" >
\t\t\t\t\t\t\tretour
\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>", "partials/_infConc.html.twig", "/home/marius/Desktop/symfonyTac/templates/partials/_infConc.html.twig");
    }
}
