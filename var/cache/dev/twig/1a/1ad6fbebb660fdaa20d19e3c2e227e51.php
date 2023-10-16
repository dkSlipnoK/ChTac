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

/* partials/_sidebar.html.twig */
class __TwigTemplate_9d514558eb84a294f7960e3f7588b56c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_sidebar.html.twig"));

        // line 1
        echo "<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
        ";
        // line 3
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 4
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/admin\">
              <i class=\"typcn typcn-device-desktop menu-icon\"></i>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
        ";
        }
        // line 11
        echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-document-text menu-icon\"></i>
              <span class=\"menu-title\">Info Event</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/ui-features/buttons.html\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/ui-features/dropdowns.html\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/ui-features/typography.html\">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
              <i class=\"typcn typcn-film menu-icon\"></i>
              <span class=\"menu-title\">Réglement</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"charts\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"https://www.ffe.com/system/files/disciplines-tir-a-l-arc-a-cheval/reglements/reglement-tir-a-l-arc-2023-avec-rectificatif-applicable-au-02-01-2023.pdf\" target=\"_blank\">Réglement FFE</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"https://drive.google.com/file/d/1jUueBD9FTpgXnXth4Qh_AHN3uOHxYIHS/view\" target=\"_blank\">Réglement IHAA</a></li>
              </ul>
            </div>
          </li>
          ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "           <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/load/table\">
              <i class=\"typcn typcn-device-desktop menu-icon\"></i>
              <span class=\"menu-title\">tableau</span>
            </a>
          </li>
          ";
        }
        // line 46
        echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"https://bootstrapdash.com/demo/polluxui-free/docs/documentation.html\">
              <i class=\"typcn typcn-mortar-board menu-icon\"></i>
              <span class=\"menu-title\">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 46,  89 => 39,  87 => 38,  58 => 11,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
        {% if is_granted('ROLE_SUPER_ADMIN') %}
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/admin\">
              <i class=\"typcn typcn-device-desktop menu-icon\"></i>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
        {% endif %}
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-document-text menu-icon\"></i>
              <span class=\"menu-title\">Info Event</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/ui-features/buttons.html\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/ui-features/dropdowns.html\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/ui-features/typography.html\">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
              <i class=\"typcn typcn-film menu-icon\"></i>
              <span class=\"menu-title\">Réglement</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"charts\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"https://www.ffe.com/system/files/disciplines-tir-a-l-arc-a-cheval/reglements/reglement-tir-a-l-arc-2023-avec-rectificatif-applicable-au-02-01-2023.pdf\" target=\"_blank\">Réglement FFE</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"https://drive.google.com/file/d/1jUueBD9FTpgXnXth4Qh_AHN3uOHxYIHS/view\" target=\"_blank\">Réglement IHAA</a></li>
              </ul>
            </div>
          </li>
          {% if app.user %}
           <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/load/table\">
              <i class=\"typcn typcn-device-desktop menu-icon\"></i>
              <span class=\"menu-title\">tableau</span>
            </a>
          </li>
          {% endif %}
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"https://bootstrapdash.com/demo/polluxui-free/docs/documentation.html\">
              <i class=\"typcn typcn-mortar-board menu-icon\"></i>
              <span class=\"menu-title\">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>", "partials/_sidebar.html.twig", "/home/marius/Desktop/symfonyTac/templates/partials/_sidebar.html.twig");
    }
}
