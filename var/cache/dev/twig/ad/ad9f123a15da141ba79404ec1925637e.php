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

/* security/login.html.twig */
class __TwigTemplate_3da4f82dd446b941754de5a89934e762 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container-scroller\">
\t\t<div class=\"container-fluid page-body-wrapper full-page-wrapper\">
\t\t\t<div class=\"content-wrapper d-flex align-items-center auth px-0\">
\t\t\t\t<div class=\"row w-100 mx-0\">
\t\t\t\t\t<div class=\"col-lg-4 mx-auto\">
\t\t\t\t\t\t<div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t";
        // line 14
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageKey", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageData", [], "any", false, false, false, 15), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 17
        echo "
\t\t\t\t\t\t\t\t";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\tVous êtes connecté(e) en tant que
\t\t\t\t\t\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "userIdentifier", [], "any", false, false, false, 21), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 25
            echo "\t\t\t\t\t\t\t\t\t<div class=\"brand-logo\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.svg"), "html", null, true);
            echo "\" alt=\"logo\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h4>Bienvenue !!!
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<h6 class=\"font-weight-light\">S'identifier pour continuer .</h6>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control form-control-lg\" id=\"InputEmail\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control form-control-lg\" id=\"InputPassword\" placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_indexuser");
            echo "\"></input>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"my-2 d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\">
\t\t\t\t\t\t\t\t\t\t\t\t\tRester connecter
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"auth-link text-black\">Mot de passe oublié ?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-4 font-weight-light\">
\t\t\t\t\t\t\t\t\t\tVous n'avez pas de compte ?
\t\t\t\t\t\t\t\t\t\t<a href=\"/register\" class=\"text-primary\">créer</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<!-- content-wrapper ends -->
\t</div>
\t<!-- page-body-wrapper ends -->
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 59,  147 => 39,  142 => 37,  128 => 26,  125 => 25,  119 => 22,  115 => 21,  111 => 19,  109 => 18,  106 => 17,  100 => 15,  98 => 14,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!
{% endblock %}

{% block body %}
\t<div class=\"container-scroller\">
\t\t<div class=\"container-fluid page-body-wrapper full-page-wrapper\">
\t\t\t<div class=\"content-wrapper d-flex align-items-center auth px-0\">
\t\t\t\t<div class=\"row w-100 mx-0\">
\t\t\t\t\t<div class=\"col-lg-4 mx-auto\">
\t\t\t\t\t\t<div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\tVous êtes connecté(e) en tant que
\t\t\t\t\t\t\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"brand-logo\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/logo-dark.svg')}}\" alt=\"logo\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h4>Bienvenue !!!
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<h6 class=\"font-weight-light\">S'identifier pour continuer .</h6>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control form-control-lg\" id=\"InputEmail\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control form-control-lg\" id=\"InputPassword\" placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\" href=\"{{ path('app_indexuser') }}\"></input>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"my-2 d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\">
\t\t\t\t\t\t\t\t\t\t\t\t\tRester connecter
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"auth-link text-black\">Mot de passe oublié ?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-4 font-weight-light\">
\t\t\t\t\t\t\t\t\t\tVous n'avez pas de compte ?
\t\t\t\t\t\t\t\t\t\t<a href=\"/register\" class=\"text-primary\">créer</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<!-- content-wrapper ends -->
\t</div>
\t<!-- page-body-wrapper ends -->
</div>{% endblock %}
", "security/login.html.twig", "/home/marius/Desktop/symfonyTac/templates/security/login.html.twig");
    }
}
