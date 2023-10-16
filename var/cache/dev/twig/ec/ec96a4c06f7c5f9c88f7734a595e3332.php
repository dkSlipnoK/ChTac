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

/* creaconc/conc/tpl_cat.html.twig */
class __TwigTemplate_81af58b80eb5ccceef17a5e7dcce1257 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creaconc/conc/tpl_cat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creaconc/conc/tpl_cat.html.twig"));

        // line 1
        echo "<div class=\"card accordion-item active border border-dark js-quizz-elem-main\" name=\"quizz-elem-";
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" id=\"quizz-elem-";
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" data-qid=\"";
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <h2 class=\"accordion-header\" id=\"heading";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\">
        <button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("addCollapseEvent", $context)) ? (_twig_default_filter((isset($context["addCollapseEvent"]) || array_key_exists("addCollapseEvent", $context) ? $context["addCollapseEvent"] : (function () { throw new RuntimeError('Variable "addCollapseEvent" does not exist.', 3, $this->source); })()), "collapse")) : ("collapse")), "html", null, true);
        echo "\" data-bs-target=\"#accordion";
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\" aria-expanded=\"true\" aria-controls=\"accordion";
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
            Item #";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["qCount"]) || array_key_exists("qCount", $context) ? $context["qCount"] : (function () { throw new RuntimeError('Variable "qCount" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
        </button>
    </h2>
    <div id=\"accordion";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" class=\"accordion-collapse collapse ";
        echo twig_escape_filter($this->env, (isset($context["showElem"]) || array_key_exists("showElem", $context) ? $context["showElem"] : (function () { throw new RuntimeError('Variable "showElem" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" data-bs-parent=\"#accordionExample\">
        <div class=\"accordion-body\">
            <div class=\"input-group mb-3\">
                <span class=\"input-group-text\">Catégorie</span>
\t\t\t\t\t\t<select id=\"param1-select\" class=\"form-control\" name=\"q_";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<option disabled selected>Sélectionner une catégorie</option>
\t\t\t\t\t\t\t<option value=\"CLEc3\">Club élite</option>
\t\t\t\t\t\t\t<option value=\"CL1c3\">Club 1</option>
\t\t\t\t\t\t\t<option value=\"CP1c3\">Poney 1</option>
\t\t\t\t\t\t\t<option value=\"CA1c3\">Poney A1</option>
\t\t\t\t\t\t\t<option value=\"CL2c3\">Club 2</option>
\t\t\t\t\t\t\t<option value=\"CP2c3\">Poney 2</option>
\t\t\t\t\t\t\t<option value=\"CA2c2\">Poney A2</option>
\t\t\t\t\t\t\t<option value=\"CL3c2\">Club 3</option>
\t\t\t\t\t\t\t<option value=\"CP3c2\">Poney 3</option>
                            <option value=\"CL1eq\">Club 1 équipe</option>
                            <option value=\"C1pa\">Club 1 paire</option>
                            <option value=\"CL2eq\">Club 2 équipe</option>
\t\t\t\t\t\t</select>
            </div>

            <div class=\"divider divider-info mb-3\">
                <div class=\"divider-text\">Epreuves</div>
            </div>

            <div class=\"row js-quizz-answers\" data-qid=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">
                ";
        // line 33
        if ((twig_test_empty((isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 33, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 33, $this->source); })()), "a", [], "any", false, false, false, 33)))) {
            // line 34
            echo "                    ";
            echo twig_include($this->env, $context, "creaconc/conc/tpl_epreuves.html.twig", ["idR" => "1", "answer" => ""]);
            echo "
                    ";
            // line 35
            echo twig_include($this->env, $context, "creaconc/conc/tpl_epreuves.html.twig", ["idR" => "2", "answer" => ""]);
            echo "
                    <input type=\"hidden\" name=\"quizz_q_";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "_a_nb\" id=\"quizz_q_";
            echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "_a_nb\" value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "max_a_id", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "max_a_id", [], "any", false, false, false, 36), "2")) : ("2")), "html", null, true);
            echo "\"/>
                ";
        } else {
            // line 38
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 38, $this->source); })()), "a", [], "any", false, false, false, 38));
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
            foreach ($context['_seq'] as $context["keyA"] => $context["answerO"]) {
                // line 39
                echo "                        ";
                echo twig_include($this->env, $context, "creaconc/conc/tpl_epreuves.html.twig", ["idR" => $context["keyA"], "answer" => $context["answerO"]]);
                echo "
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyA'], $context['answerO'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    <input type=\"hidden\" name=\"quizz_q_";
            echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "_a_nb\" id=\"quizz_q_";
            echo twig_escape_filter($this->env, (isset($context["idQ"]) || array_key_exists("idQ", $context) ? $context["idQ"] : (function () { throw new RuntimeError('Variable "idQ" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "_a_nb\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 41, $this->source); })()), "max_a_id", [], "any", false, false, false, 41), "html", null, true);
            echo "\"/>
                ";
        }
        // line 43
        echo "            </div>

            <div class=\"col-xl-12\">
                <button class=\"btn btn-info px-5 js-quizz-answer-add\">Ajouter une épreuve</button>
            </div>

            <div class=\"text-end col-xl-12 mt-3\">
                <button class=\"btn btn-warning px-5 js-quizz-elem-delete\">Supprimer cet élément</button>
            </div>
        </div>
    </div>
</div>









";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "creaconc/conc/tpl_cat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 43,  162 => 41,  145 => 39,  127 => 38,  118 => 36,  114 => 35,  109 => 34,  107 => 33,  103 => 32,  79 => 11,  70 => 7,  64 => 4,  56 => 3,  52 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card accordion-item active border border-dark js-quizz-elem-main\" name=\"quizz-elem-{{idQ}}\" id=\"quizz-elem-{{idQ}}\" data-qid=\"{{idQ}}\">
    <h2 class=\"accordion-header\" id=\"heading{{idQ}}\">
        <button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"{{addCollapseEvent|default('collapse')}}\" data-bs-target=\"#accordion{{idQ}}\" aria-expanded=\"true\" aria-controls=\"accordion{{idQ}}\">
            Item #{{qCount}}
        </button>
    </h2>
    <div id=\"accordion{{idQ}}\" class=\"accordion-collapse collapse {{showElem}}\" data-bs-parent=\"#accordionExample\">
        <div class=\"accordion-body\">
            <div class=\"input-group mb-3\">
                <span class=\"input-group-text\">Catégorie</span>
\t\t\t\t\t\t<select id=\"param1-select\" class=\"form-control\" name=\"q_{{idQ}}\">
\t\t\t\t\t\t\t<option disabled selected>Sélectionner une catégorie</option>
\t\t\t\t\t\t\t<option value=\"CLEc3\">Club élite</option>
\t\t\t\t\t\t\t<option value=\"CL1c3\">Club 1</option>
\t\t\t\t\t\t\t<option value=\"CP1c3\">Poney 1</option>
\t\t\t\t\t\t\t<option value=\"CA1c3\">Poney A1</option>
\t\t\t\t\t\t\t<option value=\"CL2c3\">Club 2</option>
\t\t\t\t\t\t\t<option value=\"CP2c3\">Poney 2</option>
\t\t\t\t\t\t\t<option value=\"CA2c2\">Poney A2</option>
\t\t\t\t\t\t\t<option value=\"CL3c2\">Club 3</option>
\t\t\t\t\t\t\t<option value=\"CP3c2\">Poney 3</option>
                            <option value=\"CL1eq\">Club 1 équipe</option>
                            <option value=\"C1pa\">Club 1 paire</option>
                            <option value=\"CL2eq\">Club 2 équipe</option>
\t\t\t\t\t\t</select>
            </div>

            <div class=\"divider divider-info mb-3\">
                <div class=\"divider-text\">Epreuves</div>
            </div>

            <div class=\"row js-quizz-answers\" data-qid=\"{{idQ}}\">
                {% if question is empty or question.a is empty %}
                    {{ include('creaconc/conc/tpl_epreuves.html.twig', {idR: '1', answer:''})}}
                    {{ include('creaconc/conc/tpl_epreuves.html.twig', {idR: '2', answer:''})}}
                    <input type=\"hidden\" name=\"quizz_q_{{idQ}}_a_nb\" id=\"quizz_q_{{idQ}}_a_nb\" value=\"{{question.max_a_id|default('2')}}\"/>
                {% else %}
                    {% for keyA, answerO in question.a %}
                        {{ include('creaconc/conc/tpl_epreuves.html.twig', {idR: keyA, answer: answerO})}}
                    {% endfor %}
                    <input type=\"hidden\" name=\"quizz_q_{{idQ}}_a_nb\" id=\"quizz_q_{{idQ}}_a_nb\" value=\"{{question.max_a_id}}\"/>
                {% endif %}
            </div>

            <div class=\"col-xl-12\">
                <button class=\"btn btn-info px-5 js-quizz-answer-add\">Ajouter une épreuve</button>
            </div>

            <div class=\"text-end col-xl-12 mt-3\">
                <button class=\"btn btn-warning px-5 js-quizz-elem-delete\">Supprimer cet élément</button>
            </div>
        </div>
    </div>
</div>









", "creaconc/conc/tpl_cat.html.twig", "/home/marius/Desktop/symfonyTac/templates/creaconc/conc/tpl_cat.html.twig");
    }
}
