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

/* part/insertPart.html.twig */
class __TwigTemplate_cae57fffca79aedb8acf3db9915c2c3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "part/insertPart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "part/insertPart.html.twig"));

        // line 1
        echo "<div class=\"main-panel\">
\t<div class=\"content-wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"table-responsive \">
                        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["concours"]) || array_key_exists("concours", $context) ? $context["concours"] : (function () { throw new RuntimeError('Variable "concours" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conc"]) {
            // line 8
            echo "                            <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resources_insertPart", ["id" => twig_get_attribute($this->env, $this->source, $context["conc"], "id", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\">
                                <div>
                                    <label for=\"csv_file\">Choisir un fichier CSV :</label>
                                    <input type=\"file\" id=\"csv_file\" name=\"csv_file\" accept=\".csv, .txt\">
                                </div>

                                <div id=\"participants-container\"></div>
                                <div>
                                    <input type=\"submit\" class=\"btn btn-primary px-5\">
                                </div>
                            </form>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                        <a href=\"/indexuser\" type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" >
\t\t\t\t\t\t\tretour
\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>





<script>
\$(document).ready(function () {
    var categoryMappings = {
        \"CLEc3\": \"Club Élite\",
        \"CL1c3\": \"Club 1\",
        \"CP1c3\": \"Poney 1\",
        \"CL2c3\": \"Club 2\",
        \"CP2c3\": \"Poney 2\",
        \"CL3c2\": \"Club 3\",
        \"CP3c2\": \"Poney 3\",
        \"CA2c2\": \"Club A2\",
        \"CL2eq\": \"Club 2 équipe\",
        \"CL1eq\": \"Club 1 équipe\",
        \"C1pa\": \"Club 1 paire\"
    };

    var participants = [];
    
    \$('body').on('change', '#csv_file', function (e) {
        var file = e.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var contents = e.target.result;
                participants = parseCSV(contents);
                var categories = getCategories(participants);
                displayCategories(categories);
            };
            reader.readAsText(file);
        }
    });

    function parseCSV(contents) {
        var lines = contents.split('\\n');
        var participants = [];
        for (var i = 0; i < lines.length; i++) {
            var line = lines[i].trim();
            if (line) {
                var values = line.split(';');
                var participant = {
                    nom: values[6].trim(),
                    prenom: values[7].trim(),
                    club: values[8].trim(),
                    cheval: values[10].trim(),
                    categorie: values[3].trim(),
                    groupe1: true,
                    groupe2: false
                };
                participants.push(participant);
            }
        }
        return participants;
    }

    function getCategories(participants) {
        var categories = [];
        for (var i = 0; i < participants.length; i++) {
            var participant = participants[i];
            if (categories.indexOf(participant.categorie) === -1) {
                categories.push(participant.categorie);
            }
        }
        return categories;
    }

    function displayCategories(categories) {
        var container = \$('#participants-container');
        container.empty();
        if (categories.length > 0) {
            let participantsOffset = 0;
            for (var i = 0; i < categories.length; i++) {
                var category = categories[i];
                var categoryName = categoryMappings[category] || category;
                var collapsible = \$('<div class=\"collapsible\"></div>');
                var collapsibleHeader = \$('<button class=\"collapsible-header\">' + categoryName + '</button>');
                var collapsibleContent = \$('<div class=\"collapsible-content\"></div>');
                collapsible.append(collapsibleHeader);
                collapsible.append(collapsibleContent);
                container.append(collapsible);
                var filteredParticipants = filterParticipantsByCategory(category);
                let numFilteredParticipants = filteredParticipants.length;
                displayParticipants(filteredParticipants, collapsibleContent, participantsOffset);
                participantsOffset += numFilteredParticipants;
            }
            enableCollapsible();
        } else {
            container.html('Aucune catégorie trouvée.');
        }
    }

    function filterParticipantsByCategory(category) {
        return participants.filter(function (participant) {
            return participant.categorie === category;
        });
    }

    function displayParticipants(participants, container, offset) {
        container.empty();
        if (participants.length > 0) {
            var table = \$('<table class=\"table participants-table\"></table>');
            var thead = \$('<thead class=\"th-color\"><tr><th>Nom</th><th>Prénom</th><th>Club</th><th>Cheval</th><th>Groupe</th></tr></thead>');
            var tbody = \$('<tbody></tbody>');
            for (var i = 0; i < participants.length; i++) {
                var participant = participants[i];
                let idx = i + offset;
                var row = \$('<tr><td><input type=\"text\" name=\"participants[' + idx + '][nom]\" value=\"' + participant.nom + '\"></td><td><input type=\"text\" name=\"participants[' + idx + '][prenom]\" value=\"' + participant.prenom + '\"></td><td><input type=\"text\" name=\"participants[' + idx + '][club]\" value=\"' + participant.club + '\"></td><td><input type=\"text\" name=\"participants[' + idx + '][cheval]\" value=\"' + participant.cheval + '\"></td><td><select name=\"participants[' + idx + '][groupe]\"><option value=\"Groupe 1\"' + (participant.groupe1 ? ' selected' : '') + '>Groupe 1</option><option value=\"Groupe 2\"' + (participant.groupe2 ? ' selected' : '') + '>Groupe 2</option></select></td><input type=\"hidden\" name=\"participants[' + idx + '][categorie]\" value=\"' + participant.categorie + '\"></tr>');
                tbody.append(row);
            }
            table.append(thead);
            table.append(tbody);
            container.append(table);
        } else {
            container.append('<p>Aucun participant trouvé dans cette catégorie.</p>');
        }
    }

    function enableCollapsible() {
        \$('.collapsible-header').click(function (e) {
            e.preventDefault();
            \$(this).toggleClass('active');
            \$(this).next('.collapsible-content').slideToggle();
        });
    }
});


</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "part/insertPart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-panel\">
\t<div class=\"content-wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"table-responsive \">
                        {% for conc in concours %}
                            <form method=\"post\" action=\"{{path ('resources_insertPart',{id: conc.id})}}\">
                                <div>
                                    <label for=\"csv_file\">Choisir un fichier CSV :</label>
                                    <input type=\"file\" id=\"csv_file\" name=\"csv_file\" accept=\".csv, .txt\">
                                </div>

                                <div id=\"participants-container\"></div>
                                <div>
                                    <input type=\"submit\" class=\"btn btn-primary px-5\">
                                </div>
                            </form>
                        {% endfor %}
                        <a href=\"/indexuser\" type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" >
\t\t\t\t\t\t\tretour
\t\t\t\t\t\t\t<i class=\"typcn typcn-edit btn-icon-append\"></i>
\t\t\t\t\t\t</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>





<script>
\$(document).ready(function () {
    var categoryMappings = {
        \"CLEc3\": \"Club Élite\",
        \"CL1c3\": \"Club 1\",
        \"CP1c3\": \"Poney 1\",
        \"CL2c3\": \"Club 2\",
        \"CP2c3\": \"Poney 2\",
        \"CL3c2\": \"Club 3\",
        \"CP3c2\": \"Poney 3\",
        \"CA2c2\": \"Club A2\",
        \"CL2eq\": \"Club 2 équipe\",
        \"CL1eq\": \"Club 1 équipe\",
        \"C1pa\": \"Club 1 paire\"
    };

    var participants = [];
    
    \$('body').on('change', '#csv_file', function (e) {
        var file = e.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var contents = e.target.result;
                participants = parseCSV(contents);
                var categories = getCategories(participants);
                displayCategories(categories);
            };
            reader.readAsText(file);
        }
    });

    function parseCSV(contents) {
        var lines = contents.split('\\n');
        var participants = [];
        for (var i = 0; i < lines.length; i++) {
            var line = lines[i].trim();
            if (line) {
                var values = line.split(';');
                var participant = {
                    nom: values[6].trim(),
                    prenom: values[7].trim(),
                    club: values[8].trim(),
                    cheval: values[10].trim(),
                    categorie: values[3].trim(),
                    groupe1: true,
                    groupe2: false
                };
                participants.push(participant);
            }
        }
        return participants;
    }

    function getCategories(participants) {
        var categories = [];
        for (var i = 0; i < participants.length; i++) {
            var participant = participants[i];
            if (categories.indexOf(participant.categorie) === -1) {
                categories.push(participant.categorie);
            }
        }
        return categories;
    }

    function displayCategories(categories) {
        var container = \$('#participants-container');
        container.empty();
        if (categories.length > 0) {
            let participantsOffset = 0;
            for (var i = 0; i < categories.length; i++) {
                var category = categories[i];
                var categoryName = categoryMappings[category] || category;
                var collapsible = \$('<div class=\"collapsible\"></div>');
                var collapsibleHeader = \$('<button class=\"collapsible-header\">' + categoryName + '</button>');
                var collapsibleContent = \$('<div class=\"collapsible-content\"></div>');
                collapsible.append(collapsibleHeader);
                collapsible.append(collapsibleContent);
                container.append(collapsible);
                var filteredParticipants = filterParticipantsByCategory(category);
                let numFilteredParticipants = filteredParticipants.length;
                displayParticipants(filteredParticipants, collapsibleContent, participantsOffset);
                participantsOffset += numFilteredParticipants;
            }
            enableCollapsible();
        } else {
            container.html('Aucune catégorie trouvée.');
        }
    }

    function filterParticipantsByCategory(category) {
        return participants.filter(function (participant) {
            return participant.categorie === category;
        });
    }

    function displayParticipants(participants, container, offset) {
        container.empty();
        if (participants.length > 0) {
            var table = \$('<table class=\"table participants-table\"></table>');
            var thead = \$('<thead class=\"th-color\"><tr><th>Nom</th><th>Prénom</th><th>Club</th><th>Cheval</th><th>Groupe</th></tr></thead>');
            var tbody = \$('<tbody></tbody>');
            for (var i = 0; i < participants.length; i++) {
                var participant = participants[i];
                let idx = i + offset;
                var row = \$('<tr><td><input type=\"text\" name=\"participants[' + idx + '][nom]\" value=\"' + participant.nom + '\"></td><td><input type=\"text\" name=\"participants[' + idx + '][prenom]\" value=\"' + participant.prenom + '\"></td><td><input type=\"text\" name=\"participants[' + idx + '][club]\" value=\"' + participant.club + '\"></td><td><input type=\"text\" name=\"participants[' + idx + '][cheval]\" value=\"' + participant.cheval + '\"></td><td><select name=\"participants[' + idx + '][groupe]\"><option value=\"Groupe 1\"' + (participant.groupe1 ? ' selected' : '') + '>Groupe 1</option><option value=\"Groupe 2\"' + (participant.groupe2 ? ' selected' : '') + '>Groupe 2</option></select></td><input type=\"hidden\" name=\"participants[' + idx + '][categorie]\" value=\"' + participant.categorie + '\"></tr>');
                tbody.append(row);
            }
            table.append(thead);
            table.append(tbody);
            container.append(table);
        } else {
            container.append('<p>Aucun participant trouvé dans cette catégorie.</p>');
        }
    }

    function enableCollapsible() {
        \$('.collapsible-header').click(function (e) {
            e.preventDefault();
            \$(this).toggleClass('active');
            \$(this).next('.collapsible-content').slideToggle();
        });
    }
});


</script>", "part/insertPart.html.twig", "/home/marius/Desktop/symfonyTac/templates/part/insertPart.html.twig");
    }
}
