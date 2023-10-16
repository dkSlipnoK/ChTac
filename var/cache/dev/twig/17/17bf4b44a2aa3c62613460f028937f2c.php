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

/* partials/_footer.html.twig */
class __TwigTemplate_0a3477ce25b4b3074ca3be3e26a2fa50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2020 <a href=\"https://www.bootstrapdash.com/\" class=\"text-muted\" target=\"_blank\">Bootstrapdash</a>. All rights reserved.</span>
                <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted\">Free <a href=\"https://www.bootstrapdash.com/\" class=\"text-muted\" target=\"_blank\">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
            </div>
        </div>    
    </div>        
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2020 <a href=\"https://www.bootstrapdash.com/\" class=\"text-muted\" target=\"_blank\">Bootstrapdash</a>. All rights reserved.</span>
                <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted\">Free <a href=\"https://www.bootstrapdash.com/\" class=\"text-muted\" target=\"_blank\">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
            </div>
        </div>    
    </div>        
</footer>", "partials/_footer.html.twig", "/home/marius/Desktop/symfonyTac/templates/partials/_footer.html.twig");
    }
}
