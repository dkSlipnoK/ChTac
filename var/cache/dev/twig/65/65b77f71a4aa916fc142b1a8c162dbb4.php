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

/* creaconc/conc/_creaconc.html.twig */
class __TwigTemplate_3017f6c4b58e77545974958bfe5d9eb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creaconc/conc/_creaconc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creaconc/conc/_creaconc.html.twig"));

        // line 1
        echo "<div class=\"main-panel\">
\t<div class=\"content-wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"table-responsive \">
\t\t\t\t\t\t<form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resources_create");
        echo "\">
\t\t\t\t\t\t\t<table class=\"table table-striped project-orders-table\" id=\"kids\">
\t\t\t\t\t\t\t\t<thead class=\"th-color\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"5\" class=\"table\">Information du Concours</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Date :
\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" name=\"dateD\"></td>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Nom :
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nom\"></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Lieu :
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"locations\"></td>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Club :
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"club\"></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"accordion\" id=\"accordionQuizz\">
\t\t\t\t\t\t\t\t\t";
        // line 31
        $context["qCount"] = 1;
        // line 32
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty((isset($context["quizzContent"]) || array_key_exists("quizzContent", $context) ? $context["quizzContent"] : (function () { throw new RuntimeError('Variable "quizzContent" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "creaconc/conc/tpl_cat.html.twig", ["idQ" => "1", "showElem" => "", "question" => ""]);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 34
            $context["qCount"] = ((isset($context["qCount"]) || array_key_exists("qCount", $context) ? $context["qCount"] : (function () { throw new RuntimeError('Variable "qCount" does not exist.', 34, $this->source); })()) + 1);
            // line 35
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "creaconc/conc/tpl_cat.html.twig", ["idQ" => "2", "showElem" => "", "question" => ""]);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 36
            $context["qCount"] = ((isset($context["qCount"]) || array_key_exists("qCount", $context) ? $context["qCount"] : (function () { throw new RuntimeError('Variable "qCount" does not exist.', 36, $this->source); })()) + 1);
            // line 37
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quizz_q_nb\" id=\"quizz_q_nb\" value=\"2\"/>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["quizzContent"]) || array_key_exists("quizzContent", $context) ? $context["quizzContent"] : (function () { throw new RuntimeError('Variable "quizzContent" does not exist.', 39, $this->source); })()), "q", [], "any", false, false, false, 39));
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
            foreach ($context['_seq'] as $context["keyQ"] => $context["question"]) {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["key"] = twig_replace_filter($context["keyQ"], ["q" => ""]);
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["showElem"] = ((((isset($context["qCount"]) || array_key_exists("qCount", $context) ? $context["qCount"] : (function () { throw new RuntimeError('Variable "qCount" does not exist.', 41, $this->source); })()) == 1)) ? ("show") : (""));
                // line 42
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "creaconc/conc/tpl_cat.html.twig", ["idQ" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 42, $this->source); })()), "showElem" => (isset($context["showElem"]) || array_key_exists("showElem", $context) ? $context["showElem"] : (function () { throw new RuntimeError('Variable "showElem" does not exist.', 42, $this->source); })()), "question" => $context["question"]]);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 43
                $context["qCount"] = ((isset($context["qCount"]) || array_key_exists("qCount", $context) ? $context["qCount"] : (function () { throw new RuntimeError('Variable "qCount" does not exist.', 43, $this->source); })()) + 1);
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['keyQ'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quizz_q_nb\" id=\"quizz_q_nb\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quizzContent"]) || array_key_exists("quizzContent", $context) ? $context["quizzContent"] : (function () { throw new RuntimeError('Variable "quizzContent" does not exist.', 45, $this->source); })()), "max_q_id", [], "any", false, false, false, 45), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary px-5 js-quizz-elem-add\">Ajouter un élément</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-none\" id=\"quizz_tpl_empty_q\">
\t\t\t\t\t\t\t\t";
        // line 53
        echo twig_include($this->env, $context, "creaconc/conc/tpl_cat.html.twig", ["idQ" => "%IDQ%", "showElem" => "", "question" => "", "addCollapseEvent" => "%COLLAPSE%", "qCount" => "Nouveau"]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-none\" id=\"quizz_tpl_empty_a\">
\t\t\t\t\t\t\t\t";
        // line 56
        echo twig_include($this->env, $context, "creaconc/conc/tpl_epreuves.html.twig", ["idQ" => "%IDQ%", "idR" => "%IDR%", "answer" => "", "showElem" => "", "addCollapseEvent" => "%COLLAPSE%"]);
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary px-5 \">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
\$(document).ready(function () {
\t\$('body').on('click', '.js-quizz-elem-add', function (e) {
\t\tlet idQ = \$('#quizz_q_nb').val() * 1;
\t\tif (isNaN(idQ)) {
\t\tidQ = 0;
\t\t}
\t\tlet newIdQ = idQ + 1;

\t\tlet contentE = \$('#quizz_tpl_empty_q').html().replace(/%IDQ%/g, newIdQ + '').replace(/%COLLAPSE%/g, 'collapse');
\t\t\$('#accordionQuizz').append(contentE);
\t\t\$('#quizz_q_nb').attr('value', newIdQ);
\t\te.stopPropagation();
\t\te.preventDefault();
\t});

\t\$('body').on('click', '.js-quizz-answer-delete', function (e) {
\t\t\$(this).closest(\".js-quizz-answer\").remove();
\t\te.stopPropagation();
\t\te.preventDefault();
\t});

\t\$('body').on('click', '.js-quizz-elem-delete', function (e) {
\t\t\$(this).closest(\".js-quizz-elem-main\").remove();
\t\te.stopPropagation();
\t\te.preventDefault();
\t});

\t// \$(\".js-quizz-answer-add\").on(\"click\", function(e) {
\t\$('body').on('click', '.js-quizz-answer-add', function (e) {
\t\tlet idQ = \$(this).closest(\".js-quizz-elem-main\").data(\"qid\");
\t\tlet idR = \$(\"#quizz_q_\" + idQ + \"_a_nb\").val() * 1;
\t\tif (isNaN(idR)) {
\t\tidR = 0;
\t\t}
\t\tlet newIdR = idR + 1;
\t\tlet contentR = \$('#quizz_tpl_empty_a').html().replace(/%IDQ%/g, idQ + '').replace(/%IDR%/g, newIdR + '');
\t\t\t\$(this).closest(\".js-quizz-elem-main\").find(\".js-quizz-answers\").append(contentR);
\t\t\t\t\$(\"#quizz_q_\" + idQ + \"_a_nb\").attr('value', newIdR);
\t\te.stopPropagation();
\t\te.preventDefault();
\t\t});
\t});


</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "creaconc/conc/_creaconc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 56,  160 => 53,  152 => 47,  146 => 45,  132 => 44,  130 => 43,  125 => 42,  122 => 41,  119 => 40,  101 => 39,  97 => 37,  95 => 36,  90 => 35,  88 => 34,  83 => 33,  80 => 32,  78 => 31,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-panel\">
\t<div class=\"content-wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"table-responsive \">
\t\t\t\t\t\t<form method=\"post\" action=\"{{path ('resources_create')}}\">
\t\t\t\t\t\t\t<table class=\"table table-striped project-orders-table\" id=\"kids\">
\t\t\t\t\t\t\t\t<thead class=\"th-color\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"5\" class=\"table\">Information du Concours</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Date :
\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" name=\"dateD\"></td>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Nom :
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nom\"></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Lieu :
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"locations\"></td>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Club :
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"club\"></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"accordion\" id=\"accordionQuizz\">
\t\t\t\t\t\t\t\t\t{% set qCount = 1 %}
\t\t\t\t\t\t\t\t\t{% if quizzContent is empty %}
\t\t\t\t\t\t\t\t\t\t{{ include('creaconc/conc/tpl_cat.html.twig', {idQ:'1', showElem:'', question:''})}}
\t\t\t\t\t\t\t\t\t\t{% set qCount = qCount + 1 %}
\t\t\t\t\t\t\t\t\t\t{{ include('creaconc/conc/tpl_cat.html.twig', {idQ:'2', showElem:'', question:''})}}
\t\t\t\t\t\t\t\t\t\t{% set qCount = qCount + 1 %}
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quizz_q_nb\" id=\"quizz_q_nb\" value=\"2\"/>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{% for keyQ, question in quizzContent.q %}
\t\t\t\t\t\t\t\t\t\t\t{% set key = keyQ|replace({'q': ''}) %}
\t\t\t\t\t\t\t\t\t\t\t{% set showElem = ( qCount == 1 ? 'show' : '' ) %}
\t\t\t\t\t\t\t\t\t\t\t{{ include('creaconc/conc/tpl_cat.html.twig', {idQ: key, showElem: showElem, question: question })}}
\t\t\t\t\t\t\t\t\t\t\t{% set qCount = qCount + 1 %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quizz_q_nb\" id=\"quizz_q_nb\" value=\"{{quizzContent.max_q_id}}\"/>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary px-5 js-quizz-elem-add\">Ajouter un élément</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-none\" id=\"quizz_tpl_empty_q\">
\t\t\t\t\t\t\t\t{{ include('creaconc/conc/tpl_cat.html.twig', {idQ:'%IDQ%', showElem:'', question: '', addCollapseEvent: '%COLLAPSE%', qCount: 'Nouveau'})}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-none\" id=\"quizz_tpl_empty_a\">
\t\t\t\t\t\t\t\t{{ include('creaconc/conc/tpl_epreuves.html.twig', {idQ:'%IDQ%', idR:'%IDR%', answer: '', showElem:'', addCollapseEvent: '%COLLAPSE%'})}}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary px-5 \">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
\$(document).ready(function () {
\t\$('body').on('click', '.js-quizz-elem-add', function (e) {
\t\tlet idQ = \$('#quizz_q_nb').val() * 1;
\t\tif (isNaN(idQ)) {
\t\tidQ = 0;
\t\t}
\t\tlet newIdQ = idQ + 1;

\t\tlet contentE = \$('#quizz_tpl_empty_q').html().replace(/%IDQ%/g, newIdQ + '').replace(/%COLLAPSE%/g, 'collapse');
\t\t\$('#accordionQuizz').append(contentE);
\t\t\$('#quizz_q_nb').attr('value', newIdQ);
\t\te.stopPropagation();
\t\te.preventDefault();
\t});

\t\$('body').on('click', '.js-quizz-answer-delete', function (e) {
\t\t\$(this).closest(\".js-quizz-answer\").remove();
\t\te.stopPropagation();
\t\te.preventDefault();
\t});

\t\$('body').on('click', '.js-quizz-elem-delete', function (e) {
\t\t\$(this).closest(\".js-quizz-elem-main\").remove();
\t\te.stopPropagation();
\t\te.preventDefault();
\t});

\t// \$(\".js-quizz-answer-add\").on(\"click\", function(e) {
\t\$('body').on('click', '.js-quizz-answer-add', function (e) {
\t\tlet idQ = \$(this).closest(\".js-quizz-elem-main\").data(\"qid\");
\t\tlet idR = \$(\"#quizz_q_\" + idQ + \"_a_nb\").val() * 1;
\t\tif (isNaN(idR)) {
\t\tidR = 0;
\t\t}
\t\tlet newIdR = idR + 1;
\t\tlet contentR = \$('#quizz_tpl_empty_a').html().replace(/%IDQ%/g, idQ + '').replace(/%IDR%/g, newIdR + '');
\t\t\t\$(this).closest(\".js-quizz-elem-main\").find(\".js-quizz-answers\").append(contentR);
\t\t\t\t\$(\"#quizz_q_\" + idQ + \"_a_nb\").attr('value', newIdR);
\t\te.stopPropagation();
\t\te.preventDefault();
\t\t});
\t});


</script>
", "creaconc/conc/_creaconc.html.twig", "/home/marius/Desktop/symfonyTac/templates/creaconc/conc/_creaconc.html.twig");
    }
}
