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

/* creaconc/conc/tpl_epreuves.html.twig */
class __TwigTemplate_1bf7294752d4fcca56fb50e08b52f50f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creaconc/conc/tpl_epreuves.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creaconc/conc/tpl_epreuves.html.twig"));

        // line 1
        echo "<div class=\"input-group mb-3 js-quizz-answer\" data-aid=\"";
        echo twig_escape_filter($this->env, (isset($context["idR"]) || array_key_exists("idR", $context) ? $context["idR"] : (function () { throw new RuntimeError('Variable "idR" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"input-group-text\">
        <input 
            class=\"form-check-input mt-0 success\" 
            type=\"checkbox\" 
            value=\"good\" 
            aria-label=\"Checkbox for following text input\" 
            name=\"q_";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "_a_";
        echo twig_escape_filter($this->env, (isset($context["idR"]) || array_key_exists("idR", $context) ? $context["idR"] : (function () { throw new RuntimeError('Variable "idR" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "_v\" 
            ";
        // line 9
        if (( !twig_test_empty((isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 9, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["answer"] ?? null), "v", [], "any", true, true, false, 9))) {
            // line 10
            echo "                checked=\"checked\"
            ";
        }
        // line 12
        echo "        >
    </div>
    <input type=\"text\" class=\"form-control test\" aria-label=\"Text input with checkbox\" placeholder=\"Epreuves\" name=\"q_";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "_a_";
        echo twig_escape_filter($this->env, (isset($context["idR"]) || array_key_exists("idR", $context) ? $context["idR"] : (function () { throw new RuntimeError('Variable "idR" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "_t\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["answer"] ?? null), "t", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["answer"] ?? null), "t", [], "any", false, false, false, 14), "")) : ("")), "html", null, true);
        echo "\">
    <div class=\"text-end m-2\">
        <button type=\"button\" class=\"btn btn-icon btn-danger js-quizz-answer-delete\">
            <span class=\"tf-icons bx bx-trash\"></span>
        </button>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "creaconc/conc/tpl_epreuves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  66 => 12,  62 => 10,  60 => 9,  54 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"input-group mb-3 js-quizz-answer\" data-aid=\"{{idR}}\">
    <div class=\"input-group-text\">
        <input 
            class=\"form-check-input mt-0 success\" 
            type=\"checkbox\" 
            value=\"good\" 
            aria-label=\"Checkbox for following text input\" 
            name=\"q_{{idQ}}_a_{{idR}}_v\" 
            {% if answer is not empty and answer.v is defined %}
                checked=\"checked\"
            {% endif %}
        >
    </div>
    <input type=\"text\" class=\"form-control test\" aria-label=\"Text input with checkbox\" placeholder=\"Epreuves\" name=\"q_{{idQ}}_a_{{idR}}_t\" value=\"{{answer.t|default('')}}\">
    <div class=\"text-end m-2\">
        <button type=\"button\" class=\"btn btn-icon btn-danger js-quizz-answer-delete\">
            <span class=\"tf-icons bx bx-trash\"></span>
        </button>
    </div>
</div>", "creaconc/conc/tpl_epreuves.html.twig", "/home/marius/Desktop/symfonyTac/templates/creaconc/conc/tpl_epreuves.html.twig");
    }
}
