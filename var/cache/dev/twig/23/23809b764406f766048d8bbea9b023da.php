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

/* load_table/tables/CE_polonaise.html.twig */
class __TwigTemplate_cd1c9504d6d540e3b25241459960320f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "load_table/tables/CE_polonaise.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "load_table/tables/CE_polonaise.html.twig"));

        // line 1
        echo "<div class=\"main-panel\">
\t<div class=\"content-wrapper tabl-res\">
\t\t<div class=\"container-scroller\">
\t\t\t<div class=\"container-fluid page-body-wrapper\">
\t\t\t\t<div class=\"main-panel\">
\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"card\">
                                    <div class=\"table-responsive \">
                                        <form method=\"post\" action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_saveCont");
        echo "\">
                                            <table class=\"table th-color project-orders-table \" >
                                                <thead>
                                                    <tr>
                                                        <th colspan=\"4\" class=\"table\"> Ajouter \"saut\" après le nom de la cible pour que ça calcul le bonus saut</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                    <tr>
                                                        <th>Cible</th>
                                                        <th>Nom des cibles</th>
                                                        <th>Run 1 </br>Points Cible</th>
                                                        <th>Run 1 </br>Bonus saut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Cible 1</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible1\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible1\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 2</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible2\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible2\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 3</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible3\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible3\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 4</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible4\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible4\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 5</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible5\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible5\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 6</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible6\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible6\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 7</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible7\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible7\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 8</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible8\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible8\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 9</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible9\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible9\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 10</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible10\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible10\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 11</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible11\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible11\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 12</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible12\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible12\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 13</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible13\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible13\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 14</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible14\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible14\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 15</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible14\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible14\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 16</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible16\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible16\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 17</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible17\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible17\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 18</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible18\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible18\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 19</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible19\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible19\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 20</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible20\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible20\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 21</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible21\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible21\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 22</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible22\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible22\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 23</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible23\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible23\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 24</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible24\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible24\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 25</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible25\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible25\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 26</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible26\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible26\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 27</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible27\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible27\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 28</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible28\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible28\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 29</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible29\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible29\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 30</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible30\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible30\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"> Total points cible</td>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"> Total points</td>
                                                        <td class=\"table\" colspan=\"2\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"> Temps</td>
                                                        <td class=\"table\" colspan=\"2\"><input type=\"text\" step=\"1\" name=\"tmps\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"> Temps Bonus</td>
                                                        <td class=\"table\" colspan=\"2\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"> Total Run</td>
                                                        <td class=\"table\" colspan=\"2\" id=\"total\"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div>
                                                <input type=\"submit\" class=\"btn btn-primary px-5\">
                                            </div>
                                        </form>\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                </div>\t\t\t\t\t\t\t\t\t\t
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t\t
                    </div>
                </div>\t\t\t\t\t
            </div>
        </div>\t\t\t\t\t\t
    </div>
</div>
<script>
    document.getElementById(\"total\").style.backgroundColor = \"#fffbb0\";
    \$(\"#tableau_cetower td input[type=text]\").on('change', (elem) => {
        let parent = \$(elem.target).parent().parent();
        let fields = ['cibleav', 'ciblelat', 'ciblear'];

        let sum = 0;
        fields.forEach(field => {
            parent.find(`[\${field}]`).val().split(' ').forEach(num => {
                if (num == '') return;
                sum += parseInt(num);
            });
        });


        // let sum = parseInt(parent.find('[cibleav]').val() || 0)+parseInt(parent.find('[ciblelat]').val() || 0)+parseInt(parent.find('[ciblear]').val() || 0);
        parent.find('[points]').val(sum);
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "load_table/tables/CE_polonaise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-panel\">
\t<div class=\"content-wrapper tabl-res\">
\t\t<div class=\"container-scroller\">
\t\t\t<div class=\"container-fluid page-body-wrapper\">
\t\t\t\t<div class=\"main-panel\">
\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"card\">
                                    <div class=\"table-responsive \">
                                        <form method=\"post\" action=\"{{path ('app_saveCont')}}\">
                                            <table class=\"table th-color project-orders-table \" >
                                                <thead>
                                                    <tr>
                                                        <th colspan=\"4\" class=\"table\"> Ajouter \"saut\" après le nom de la cible pour que ça calcul le bonus saut</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                    <tr>
                                                        <th>Cible</th>
                                                        <th>Nom des cibles</th>
                                                        <th>Run 1 </br>Points Cible</th>
                                                        <th>Run 1 </br>Bonus saut</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Cible 1</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible1\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible1\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 2</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible2\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible2\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 3</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible3\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible3\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 4</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible4\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible4\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 5</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible5\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible5\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 6</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible6\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible6\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 7</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible7\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible7\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 8</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible8\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible8\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 9</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible9\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible9\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 10</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible10\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible10\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 11</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible11\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible11\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 12</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible12\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible12\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 13</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible13\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible13\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 14</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible14\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible14\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 15</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible14\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible14\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 16</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible16\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible16\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 17</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible17\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible17\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 18</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible18\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible18\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 19</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible19\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible19\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 20</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible20\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible20\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 21</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible21\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible21\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 22</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible22\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible22\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 23</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible23\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible23\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 24</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible24\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible24\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 25</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible25\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible25\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 26</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible26\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible26\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 27</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible27\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible27\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 28</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible28\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible28\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 29</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible29\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible29\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cible 30</td>
                                                        <td><input type=\"text\" class=\"table\" placeholder=\"Nom cible\" name=\"cible30\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name=\"point_cible30\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"> Total points cible</td>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"> Total points</td>
                                                        <td class=\"table\" colspan=\"2\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"> Temps</td>
                                                        <td class=\"table\" colspan=\"2\"><input type=\"text\" step=\"1\" name=\"tmps\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"> Temps Bonus</td>
                                                        <td class=\"table\" colspan=\"2\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"table\"></td>
                                                        <td class=\"table\"> Total Run</td>
                                                        <td class=\"table\" colspan=\"2\" id=\"total\"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div>
                                                <input type=\"submit\" class=\"btn btn-primary px-5\">
                                            </div>
                                        </form>\t\t\t\t\t\t\t\t\t\t
                                    </div>
                                </div>\t\t\t\t\t\t\t\t\t\t
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t\t
                    </div>
                </div>\t\t\t\t\t
            </div>
        </div>\t\t\t\t\t\t
    </div>
</div>
<script>
    document.getElementById(\"total\").style.backgroundColor = \"#fffbb0\";
    \$(\"#tableau_cetower td input[type=text]\").on('change', (elem) => {
        let parent = \$(elem.target).parent().parent();
        let fields = ['cibleav', 'ciblelat', 'ciblear'];

        let sum = 0;
        fields.forEach(field => {
            parent.find(`[\${field}]`).val().split(' ').forEach(num => {
                if (num == '') return;
                sum += parseInt(num);
            });
        });


        // let sum = parseInt(parent.find('[cibleav]').val() || 0)+parseInt(parent.find('[ciblelat]').val() || 0)+parseInt(parent.find('[ciblear]').val() || 0);
        parent.find('[points]').val(sum);
    });
</script>
", "load_table/tables/CE_polonaise.html.twig", "/home/marius/Desktop/symfonyTac/templates/load_table/tables/CE_polonaise.html.twig");
    }
}
