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

/* load_table/tables/C2_P2_PA1_tower.html.twig */
class __TwigTemplate_493281aa8ad0b927941e8e10ff28a60d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "load_table/tables/C2_P2_PA1_tower.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "load_table/tables/C2_P2_PA1_tower.html.twig"));

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
                                        <table class=\"table th-color project-orders-table \" border=\"1px\" >
                                            <thead>
                                                <tr>
                                                    <th>Run / </br> Cible</th>
                                                    <th>Cible avant</th>
                                                    <th>Cible latérale</th>
                                                    <th>Cible arrière</th>
                                                    <th>Total </br> points</th>
                                                    <th>Temps</th>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                    <th>Bonus </br>Malus </th>
                                                    <th> Total </br> run </th>
                                                    <th> Total </br> cumulé </th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th colspan=\"11\" class=\"table\">Run au pas</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cibl_av_r1\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_lat_r1\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_ar_r1\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th colspan=\"11\" class=\"table\">Runs au chronomètre</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2</td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cibl_av_r2\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_lat_r2\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_ar_r2\"></td>
                                                    <td></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"tmps_r2\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cibl_av_r3\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_lat_r3\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_ar_r3\"></td>
                                                    <td></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"tmps_r3\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cibl_av_r4\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_lat_r4\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_ar_r4\"></td>
                                                    <td></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"tmps_r4\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cibl_av_r5\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_lat_r5\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_ar_r5\"></td>
                                                    <td></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"tmps_r5\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td id=\"total\"></td>
                                                </tr>
                                            </tbody>
                                        </table>\t\t\t\t\t\t\t\t\t\t
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
        return "load_table/tables/C2_P2_PA1_tower.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
                                        <table class=\"table th-color project-orders-table \" border=\"1px\" >
                                            <thead>
                                                <tr>
                                                    <th>Run / </br> Cible</th>
                                                    <th>Cible avant</th>
                                                    <th>Cible latérale</th>
                                                    <th>Cible arrière</th>
                                                    <th>Total </br> points</th>
                                                    <th>Temps</th>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                    <th>Bonus </br>Malus </th>
                                                    <th> Total </br> run </th>
                                                    <th> Total </br> cumulé </th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th colspan=\"11\" class=\"table\">Run au pas</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cibl_av_r1\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_lat_r1\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_ar_r1\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th colspan=\"11\" class=\"table\">Runs au chronomètre</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2</td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cibl_av_r2\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_lat_r2\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_ar_r2\"></td>
                                                    <td></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"tmps_r2\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cibl_av_r3\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_lat_r3\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_ar_r3\"></td>
                                                    <td></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"tmps_r3\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cibl_av_r4\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_lat_r4\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_ar_r4\"></td>
                                                    <td></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"tmps_r4\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cibl_av_r5\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_lat_r5\"></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"cible_ar_r5\"></td>
                                                    <td></td>
                                                    <td><input type=\"text\" step=\"1\" class=\"table\" name=\"tmps_r5\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td id=\"total\"></td>
                                                </tr>
                                            </tbody>
                                        </table>\t\t\t\t\t\t\t\t\t\t
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
", "load_table/tables/C2_P2_PA1_tower.html.twig", "/home/marius/Desktop/symfonyTac/templates/load_table/tables/C2_P2_PA1_tower.html.twig");
    }
}
