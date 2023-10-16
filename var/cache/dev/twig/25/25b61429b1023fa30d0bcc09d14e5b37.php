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

/* creaconc/conc/part.html.twig */
class __TwigTemplate_e40651b50f14ccdba718d53a9b6cb870 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creaconc/conc/part.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creaconc/conc/part.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "creaconc/conc/part.html.twig", 1);
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

        echo "Compte de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "username", [], "any", false, false, false, 3), "html", null, true);
        echo " !!!!
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
        $this->loadTemplate("partials/_partials.html.twig", "creaconc/conc/part.html.twig", 6)->display($context);
        // line 7
        echo "\t<div class=\"container-fluid page-body-wrapper\">
\t\t";
        // line 8
        $this->loadTemplate("partials/_navbar.html.twig", "creaconc/conc/part.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        $this->loadTemplate("partials/_sidebar.html.twig", "creaconc/conc/part.html.twig", 9)->display($context);
        
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
        echo "\t\t<div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"table-responsive \">
                                <form method=\"post\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_savePart");
        echo "\">
                                    <table class=\"table table-striped project-orders-table\" id=\"kids\">
                                        <thead>
                                            <tr>
                                                <th colspan=\"5\" class=\"table\">Participants</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td>Nom : <input type=\"text\" name=\"nom\"></td>
                                                <td>Prénom : <input type=\"text\" name=\"prenom\"></td>
                                                <td>Cheval : <input type=\"text\" name=\"nCheval\"></td>
                                                <td>Club : <input type=\"text\" name=\"club\"></td>
                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>
                                                <td colspan=\"4\">
                                                    <label for=\"cat\">catégorie :</label>
                                                    <select id=\"cat\" name=\"cat\">
                                                        <option disabled selected>Catégorie</option>
                                                        <option value=\"Club elite\">Club elite</option>
                                                        <option value=\"Club 1\">Club 1</option>
                                                        <option value=\"Poney 1\">Poney 1</option>
                                                        <option value=\"Poney A1\">Poney A1</option>
                                                        <option value=\"Club 2\">Club 2</option>
                                                        <option value=\"Poney 2\">Poney 2</option>
                                                        <option value=\"Club 3\">Club 3</option>
                                                        <option value=\"Poney 3\">Poney 3</option>
                                                    </select>
                                                </td>
                                                

                                        </tbody>
                                    </table>
                                    <div>
                                        <input type=\"submit\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "creaconc/conc/part.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 18,  121 => 12,  111 => 11,  100 => 9,  98 => 8,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Compte de {{app.user.username}} !!!!
{% endblock %}
{% block header %}
\t{% include \"partials/_partials.html.twig\" %}
\t<div class=\"container-fluid page-body-wrapper\">
\t\t{% include \"partials/_navbar.html.twig\" %}
\t\t{% include \"partials/_sidebar.html.twig\" %}
{% endblock %}
{% block body %}
\t\t<div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"table-responsive \">
                                <form method=\"post\" action=\"{{path ('app_savePart')}}\">
                                    <table class=\"table table-striped project-orders-table\" id=\"kids\">
                                        <thead>
                                            <tr>
                                                <th colspan=\"5\" class=\"table\">Participants</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td>Nom : <input type=\"text\" name=\"nom\"></td>
                                                <td>Prénom : <input type=\"text\" name=\"prenom\"></td>
                                                <td>Cheval : <input type=\"text\" name=\"nCheval\"></td>
                                                <td>Club : <input type=\"text\" name=\"club\"></td>
                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>
                                                <td colspan=\"4\">
                                                    <label for=\"cat\">catégorie :</label>
                                                    <select id=\"cat\" name=\"cat\">
                                                        <option disabled selected>Catégorie</option>
                                                        <option value=\"Club elite\">Club elite</option>
                                                        <option value=\"Club 1\">Club 1</option>
                                                        <option value=\"Poney 1\">Poney 1</option>
                                                        <option value=\"Poney A1\">Poney A1</option>
                                                        <option value=\"Club 2\">Club 2</option>
                                                        <option value=\"Poney 2\">Poney 2</option>
                                                        <option value=\"Club 3\">Club 3</option>
                                                        <option value=\"Poney 3\">Poney 3</option>
                                                    </select>
                                                </td>
                                                

                                        </tbody>
                                    </table>
                                    <div>
                                        <input type=\"submit\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
\t</div>
{% endblock %}", "creaconc/conc/part.html.twig", "/home/marius/Desktop/symfonyTac/templates/creaconc/conc/part.html.twig");
    }
}
