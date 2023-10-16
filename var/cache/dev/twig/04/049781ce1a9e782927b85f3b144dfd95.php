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

/* load_table/tables/CE_tower.html.twig */
class __TwigTemplate_6f04051cb0eea17ae530bc5286941cad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "load_table/tables/CE_tower.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "load_table/tables/CE_tower.html.twig"));

        // line 1
        echo "
<div class=\"main-panel\">
    <div class=\"content-wrapper tabl-res\">
        <div class=\"container-scroller\">
            <div class=\"container-fluid page-body-wrapper\">
                <div class=\"main-panel\">
                    <div class=\"content-wrapper\">
                        <div class=\"row\">
                            <div class=\"contTab\">
                                <div class=\"card\">
                                    <div class=\"table-responsive \">
                                        <form method=\"post\" action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_saveCont");
        echo "\">
                                            <table class=\"table th-color project-orders-table table-striped\" border=\"1px\" >
                                                <thead>
                                                    <tr>
                                                        <th>Run / </br> Cible</th>
                                                        <th>Cible avant</th>
                                                        <th>Cible latérale</th>
                                                        <th>Cible arrière</th>
                                                        <th>Plus de 3 </br> flèches </br> tirées</th>
                                                        <th>Nombre </br> flèches </br> en cible</th>
                                                        <th>Points </br> de cible</th>
                                                        <th>Temps</th>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                        <th>Bonus </br>/ Malus </th>
                                                        <th> Total </br> run </th>
                                                        <th> Total </br> cumulé </th>
                                                    </tr>
                                                </thead>
                                                <tbody id=\"tableau_cetower\">
                                                    <tr>
                                                        <td name=\"run_1\">1</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_1\" cibleav placeholder=\"Ex 5 2 \"> </td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_1\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_1\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_1\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_1\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_1\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_1\"></td>
                                                        <td name=\"b_m_1\"></td>
                                                        <td name=\"total_1\"></td>
                                                        <td name=\"total_cum_1\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_2\">2</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_2\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_2\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_2\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_2\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_2\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_2\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_2\"></td>
                                                        <td name=\"b_m_2\"></td>
                                                        <td name=\"total_2\"></td>
                                                        <td name=\"total_cum_2\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_3\">3</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_3\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_3\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_3\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_3\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_3\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_3\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_3\"></td>
                                                        <td name=\"b_m_3\"></td>
                                                        <td name=\"total_3\"></td>
                                                        <td name=\"total_cum_3\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_4\">4</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_4\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_4\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_4\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_4\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_4\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_4\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_4\"></td>
                                                        <td name=\"b_m_4\"></td>
                                                        <td name=\"total_4\"></td>
                                                        <td name=\"total_cum_4\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_5\">5</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_5\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_5\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_5\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_5\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_5\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_5\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_5\"></td>
                                                        <td name=\"b_m_5\"></td>
                                                        <td name=\"total_5\"></td>
                                                        <td name=\"total_cum_5\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_6\">6</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_6\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_6\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_6\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_6\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_6\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_6\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_6\"></td>
                                                        <td name=\"b_m_6\"></td>
                                                        <td name=\"total_6\"></td>
                                                        <td name=\"total_cum_6\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_7\">7</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_7\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_7\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_7\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_7\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_7\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_7\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_7\"></td>
                                                        <td name=\"b_m_7\"></td>
                                                        <td name=\"total_7\"></td>
                                                        <td name=\"total_cum_7\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_8\">8</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_8\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_8\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_8\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_8\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_8\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_8\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_8\"></td>
                                                        <td name=\"b_m_8\"></td>
                                                        <td name=\"total_8\"></td>
                                                        <td name=\"total_cum_8\" ></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div>
                                                <input type=\"submit\" class=\"btn btn-primary px-5\">
                                            </div>
                                        <form>
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
        return "load_table/tables/CE_tower.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"main-panel\">
    <div class=\"content-wrapper tabl-res\">
        <div class=\"container-scroller\">
            <div class=\"container-fluid page-body-wrapper\">
                <div class=\"main-panel\">
                    <div class=\"content-wrapper\">
                        <div class=\"row\">
                            <div class=\"contTab\">
                                <div class=\"card\">
                                    <div class=\"table-responsive \">
                                        <form method=\"post\" action=\"{{path ('app_saveCont')}}\">
                                            <table class=\"table th-color project-orders-table table-striped\" border=\"1px\" >
                                                <thead>
                                                    <tr>
                                                        <th>Run / </br> Cible</th>
                                                        <th>Cible avant</th>
                                                        <th>Cible latérale</th>
                                                        <th>Cible arrière</th>
                                                        <th>Plus de 3 </br> flèches </br> tirées</th>
                                                        <th>Nombre </br> flèches </br> en cible</th>
                                                        <th>Points </br> de cible</th>
                                                        <th>Temps</th>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                        <th>Bonus </br>/ Malus </th>
                                                        <th> Total </br> run </th>
                                                        <th> Total </br> cumulé </th>
                                                    </tr>
                                                </thead>
                                                <tbody id=\"tableau_cetower\">
                                                    <tr>
                                                        <td name=\"run_1\">1</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_1\" cibleav placeholder=\"Ex 5 2 \"> </td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_1\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_1\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_1\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_1\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_1\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_1\"></td>
                                                        <td name=\"b_m_1\"></td>
                                                        <td name=\"total_1\"></td>
                                                        <td name=\"total_cum_1\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_2\">2</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_2\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_2\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_2\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_2\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_2\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_2\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_2\"></td>
                                                        <td name=\"b_m_2\"></td>
                                                        <td name=\"total_2\"></td>
                                                        <td name=\"total_cum_2\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_3\">3</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_3\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_3\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_3\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_3\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_3\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_3\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_3\"></td>
                                                        <td name=\"b_m_3\"></td>
                                                        <td name=\"total_3\"></td>
                                                        <td name=\"total_cum_3\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_4\">4</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_4\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_4\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_4\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_4\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_4\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_4\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_4\"></td>
                                                        <td name=\"b_m_4\"></td>
                                                        <td name=\"total_4\"></td>
                                                        <td name=\"total_cum_4\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_5\">5</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_5\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_5\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_5\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_5\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_5\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_5\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_5\"></td>
                                                        <td name=\"b_m_5\"></td>
                                                        <td name=\"total_5\"></td>
                                                        <td name=\"total_cum_5\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_6\">6</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_6\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_6\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_6\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_6\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_6\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_6\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_6\"></td>
                                                        <td name=\"b_m_6\"></td>
                                                        <td name=\"total_6\"></td>
                                                        <td name=\"total_cum_6\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_7\">7</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_7\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_7\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_7\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_7\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_7\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_7\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_7\"></td>
                                                        <td name=\"b_m_7\"></td>
                                                        <td name=\"total_7\"></td>
                                                        <td name=\"total_cum_7\"></td>
                                                    </tr>
                                                    <tr>
                                                        <td name=\"run_8\">8</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_av_8\" cibleav placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_lat_8\" ciblelat placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"cible_ar_8\" ciblear placeholder=\"Ex 5 2 \"></td>
                                                        <td><input type=\"checkbox\" name = \"y_n_8\"> Oui</td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"nb_f_target_8\"></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"point_8\" points></td>
                                                        <td><input type=\"text\" step=\"1\" class=\"table\" name = \"tmps_8\"></td>
                                                        <td name=\"b_m_8\"></td>
                                                        <td name=\"total_8\"></td>
                                                        <td name=\"total_cum_8\" ></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div>
                                                <input type=\"submit\" class=\"btn btn-primary px-5\">
                                            </div>
                                        <form>
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
", "load_table/tables/CE_tower.html.twig", "/home/marius/Desktop/symfonyTac/templates/load_table/tables/CE_tower.html.twig");
    }
}
