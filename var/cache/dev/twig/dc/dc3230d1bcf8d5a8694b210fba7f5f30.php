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

/* load_table/index.html.twig */
class __TwigTemplate_64cf06e9ea4d2e49e7bb3044e77a4ac5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "load_table/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "load_table/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "load_table/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil !!!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "\t";
        $this->loadTemplate("partials/_partials.html.twig", "load_table/index.html.twig", 6)->display($context);
        // line 7
        echo "\t<div class=\"container-fluid page-body-wrapper\">
\t\t";
        // line 8
        $this->loadTemplate("partials/_navbar.html.twig", "load_table/index.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        $this->loadTemplate("partials/_sidebar.html.twig", "load_table/index.html.twig", 9)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t\t<div class=\"boite-col\">
\t\t\t<div class=\"content-wrapper \">
\t\t\t\t<div class=\"content-wrapper \">
\t\t\t\t\t<form class=\"param\">

\t\t\t\t\t\t<input type=\"checkbox\" id=\"ffe\">ffe</input>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"gof\">gof</input></br>
\t\t\t\t\t\t<label for=\"param1-select\">Catégorie :</label>
\t\t\t\t\t\t<select id=\"param1-select\" name=\"param1\">
\t\t\t\t\t\t\t<option disabled selected>Sélectionner une catégorie</option>
\t\t\t\t\t\t\t<option value=\"1\">Club elite</option>
\t\t\t\t\t\t\t<option value=\"2\">Club 1</option>
\t\t\t\t\t\t\t<option value=\"3\">Poney 1</option>
\t\t\t\t\t\t\t<option value=\"4\">Poney A1</option>
\t\t\t\t\t\t\t<option value=\"5\">Club 2</option>
\t\t\t\t\t\t\t<option value=\"6\">Poney 2</option>
\t\t\t\t\t\t\t<option value=\"7\">Club 3</option>
\t\t\t\t\t\t\t<option value=\"8\">Poney 3</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label for=\"param2-select\">Epreuve :</label>
\t\t\t\t\t\t<select id=\"param2-select\" name=\"param2\">
\t\t\t\t\t\t\t<option disabled selected>Sélectionner une épreuve</option>
\t\t\t\t\t\t\t<option value=\"A\">Tower</option>
\t\t\t\t\t\t\t<option value=\"B\">Raid</option>
\t\t\t\t\t\t\t<option value=\"C\">Polonaise</option>
\t\t\t\t\t\t\t<option value=\"D\">Skirmish</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<button type=\"button\" id=\"submit-button\">Submit</button>
\t\t\t\t\t</form>\t
\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"part\">
\t\t\t\t<p>n° Dossard : </p>
\t\t\t\t<p>Nom Participant :</p>
\t\t\t\t<p>Equidé : </p>
\t\t\t</div>
\t\t\t<div class=\"table-responsive pt-3\" id=\"table-container\">
\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t<div class=\"content-wrapper\">\t
\t\t\t\t\t\t<p> Le tableau s'affichera ici !!!</p>\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- changement de tableau -->
\t<script>
\t\$(document).ready(function() {
\t\t\$('#submit-button').click(function() {
\t\t\tvar param1 = \$('#param1-select').val();
\t\t\tvar param2 = \$('#param2-select').val();

\t\t\t\$.ajax({
\t\t\t\turl: '/load/table/',
\t\t\t\ttype: 'GET',
\t\t\t\tdata: {
\t\t\t\t\tparam1: param1,
\t\t\t\t\tparam2: param2
\t\t\t\t},
\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\$('#table-container').html(html);
\t\t\t\t}
\t\t\t});
\t\t});
\t});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "load_table/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 12,  109 => 11,  98 => 9,  96 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil !!!
{% endblock %}
{% block header %}
\t{% include \"partials/_partials.html.twig\" %}
\t<div class=\"container-fluid page-body-wrapper\">
\t\t{% include \"partials/_navbar.html.twig\" %}
\t\t{% include \"partials/_sidebar.html.twig\" %}
{% endblock %}
{% block body %}
\t\t<div class=\"boite-col\">
\t\t\t<div class=\"content-wrapper \">
\t\t\t\t<div class=\"content-wrapper \">
\t\t\t\t\t<form class=\"param\">

\t\t\t\t\t\t<input type=\"checkbox\" id=\"ffe\">ffe</input>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"gof\">gof</input></br>
\t\t\t\t\t\t<label for=\"param1-select\">Catégorie :</label>
\t\t\t\t\t\t<select id=\"param1-select\" name=\"param1\">
\t\t\t\t\t\t\t<option disabled selected>Sélectionner une catégorie</option>
\t\t\t\t\t\t\t<option value=\"1\">Club elite</option>
\t\t\t\t\t\t\t<option value=\"2\">Club 1</option>
\t\t\t\t\t\t\t<option value=\"3\">Poney 1</option>
\t\t\t\t\t\t\t<option value=\"4\">Poney A1</option>
\t\t\t\t\t\t\t<option value=\"5\">Club 2</option>
\t\t\t\t\t\t\t<option value=\"6\">Poney 2</option>
\t\t\t\t\t\t\t<option value=\"7\">Club 3</option>
\t\t\t\t\t\t\t<option value=\"8\">Poney 3</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label for=\"param2-select\">Epreuve :</label>
\t\t\t\t\t\t<select id=\"param2-select\" name=\"param2\">
\t\t\t\t\t\t\t<option disabled selected>Sélectionner une épreuve</option>
\t\t\t\t\t\t\t<option value=\"A\">Tower</option>
\t\t\t\t\t\t\t<option value=\"B\">Raid</option>
\t\t\t\t\t\t\t<option value=\"C\">Polonaise</option>
\t\t\t\t\t\t\t<option value=\"D\">Skirmish</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<button type=\"button\" id=\"submit-button\">Submit</button>
\t\t\t\t\t</form>\t
\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"part\">
\t\t\t\t<p>n° Dossard : </p>
\t\t\t\t<p>Nom Participant :</p>
\t\t\t\t<p>Equidé : </p>
\t\t\t</div>
\t\t\t<div class=\"table-responsive pt-3\" id=\"table-container\">
\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t<div class=\"content-wrapper\">\t
\t\t\t\t\t\t<p> Le tableau s'affichera ici !!!</p>\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- changement de tableau -->
\t<script>
\t\$(document).ready(function() {
\t\t\$('#submit-button').click(function() {
\t\t\tvar param1 = \$('#param1-select').val();
\t\t\tvar param2 = \$('#param2-select').val();

\t\t\t\$.ajax({
\t\t\t\turl: '/load/table/',
\t\t\t\ttype: 'GET',
\t\t\t\tdata: {
\t\t\t\t\tparam1: param1,
\t\t\t\t\tparam2: param2
\t\t\t\t},
\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\$('#table-container').html(html);
\t\t\t\t}
\t\t\t});
\t\t});
\t});
\t</script>
{% endblock %}
", "load_table/index.html.twig", "/home/marius/Desktop/symfonyTac/templates/load_table/index.html.twig");
    }
}
