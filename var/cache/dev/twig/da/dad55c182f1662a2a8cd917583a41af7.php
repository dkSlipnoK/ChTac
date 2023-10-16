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

/* partials/_navbar.html.twig */
class __TwigTemplate_a979c4097e9060996bca21eb9bbf456a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
\t<div class=\"navbar-brand-wrapper d-flex justify-content-center\">
\t\t<div class=\"navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100\">
\t\t\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "\t\t\t\t<a class=\"navbar-brand brand-logo\" href=\"/indexuser\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-tac.png"), "html", null, true);
            echo "\" alt=\"logo\"/></a>
\t\t\t\t<a class=\"navbar-brand brand-logo-mini\" href=\"/indexuser\"><img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.svg"), "html", null, true);
            echo "\" alt=\"logo\"/></a>
\t\t\t\t<button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
\t\t\t\t\t<span class=\"typcn typcn-th-menu\"></span>
\t\t\t\t</button>
\t\t\t";
        } else {
            // line 11
            echo "\t\t\t\t<a class=\"navbar-brand brand-logo\" href=\"/\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-tac.png"), "html", null, true);
            echo "\" alt=\"logo\"/></a>
\t\t\t\t<a class=\"navbar-brand brand-logo-mini\" href=\"/\"><img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.svg"), "html", null, true);
            echo "\" alt=\"logo\"/></a>
\t\t\t\t<button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
\t\t\t\t\t<span class=\"typcn typcn-th-menu\"></span>
\t\t\t\t</button>
\t\t\t";
        }
        // line 17
        echo "\t\t</div>
\t</div>
\t<div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
\t\t<ul class=\"navbar-nav mr-lg-2\">
\t\t\t<li class=\"nav-item nav-profile dropdown\">
\t\t\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "\t\t\t\t\t<a class=\"nav-link\" href=\"/indexuser\" data-toggle=\"dropdown\" id=\"profileDropdown\">
\t\t\t\t\t\t<img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face5.jpg"), "html", null, true);
            echo "\" alt=\"profile\"/>
\t\t\t\t\t\t<span class=\"nav-profile-name\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "username", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t<a class=\"nav-link\" href=\"/\" data-toggle=\"dropdown\" id=\"profileDropdown\">
\t\t\t\t\t\t<span class=\"nav-profile-name\"></span>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t<i class=\"typcn typcn-cog-outline text-primary\"></i>
\t\t\t\t\t\tSettings
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t<i class=\"typcn typcn-eject text-primary\"></i>
\t\t\t\t\t\tLogout
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"navbar-nav navbar-nav-right\">
\t\t\t<li class=\"nav-item nav-date dropdown\">
\t\t\t\t";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<a class=\"nav-link d-flex justify-content-center align-items-center\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t<i class = \"typcn typcn-eject text-danger\"></i>
\t\t\t\t\t\t\tDéconnection
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t<a class=\"nav-link\" href=\"/login\"> Login </a>
\t\t\t\t";
        }
        // line 55
        echo "\t\t\t</li>
\t\t\t<li class=\"nav-item nav-date dropdown\">
\t\t\t\t<a class=\"nav-link d-flex justify-content-center align-items-center\" href=\"javascript:;\">
\t\t\t\t\t<h6 class=\"date mb-0\">";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</h6>
\t\t\t\t\t<i class=\"typcn typcn-calendar text-primary\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t<i class=\"typcn typcn-mail mx-0\"></i>
\t\t\t\t\t<span class=\"count\"></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
\t\t\t\t\t<p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face2.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"profile-pic\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-item-content flex-grow\">
\t\t\t\t\t\t\t<h6 class=\"preview-subject ellipsis font-weight-normal\">Tim Cook
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p class=\"font-weight-light small-text text-muted mb-0\">
\t\t\t\t\t\t\t\tNew product launch
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"profile-pic\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-item-content flex-grow\">
\t\t\t\t\t\t\t<h6 class=\"preview-subject ellipsis font-weight-normal\">
\t\t\t\t\t\t\t\tJohnson
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p class=\"font-weight-light small-text text-muted mb-0\">
\t\t\t\t\t\t\t\tUpcoming board meeting
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mr-0\">
\t\t\t\t<a class=\"nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t<i class=\"typcn typcn-bell mx-0\"></i>
\t\t\t\t\t<span class=\"count\"></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
\t\t\t\t\t<p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t<div class=\"preview-icon bg-success\">
\t\t\t\t\t\t\t\t<i class=\"typcn typcn-info mx-0\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t<h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
\t\t\t\t\t\t\t<p class=\"font-weight-light small-text mb-0 text-muted\">
\t\t\t\t\t\t\t\tJust now
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t<div class=\"preview-icon bg-warning\">
\t\t\t\t\t\t\t\t<i class=\"typcn typcn-cog-outline mx-0\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t<h6 class=\"preview-subject font-weight-normal\">Settings</h6>
\t\t\t\t\t\t\t<p class=\"font-weight-light small-text mb-0 text-muted\">
\t\t\t\t\t\t\t\tPrivate message
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t<div class=\"preview-icon bg-info\">
\t\t\t\t\t\t\t\t<i class=\"typcn typcn-user mx-0\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t<h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
\t\t\t\t\t\t\t<p class=\"font-weight-light small-text mb-0 text-muted\">
\t\t\t\t\t\t\t\t2 days ago
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t\t<button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
\t\t\t<span class=\"typcn typcn-th-menu\"></span>
\t\t</button>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 83,  158 => 71,  142 => 58,  137 => 55,  133 => 53,  124 => 47,  121 => 46,  119 => 45,  102 => 30,  97 => 27,  92 => 25,  88 => 24,  85 => 23,  83 => 22,  76 => 17,  68 => 12,  63 => 11,  55 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
\t<div class=\"navbar-brand-wrapper d-flex justify-content-center\">
\t\t<div class=\"navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100\">
\t\t\t{% if app.user %}
\t\t\t\t<a class=\"navbar-brand brand-logo\" href=\"/indexuser\"><img src=\"{{asset('assets/images/logo-tac.png')}}\" alt=\"logo\"/></a>
\t\t\t\t<a class=\"navbar-brand brand-logo-mini\" href=\"/indexuser\"><img src=\"{{asset('assets/images/logo-mini.svg')}}\" alt=\"logo\"/></a>
\t\t\t\t<button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
\t\t\t\t\t<span class=\"typcn typcn-th-menu\"></span>
\t\t\t\t</button>
\t\t\t{% else %}
\t\t\t\t<a class=\"navbar-brand brand-logo\" href=\"/\"><img src=\"{{asset('assets/images/logo-tac.png')}}\" alt=\"logo\"/></a>
\t\t\t\t<a class=\"navbar-brand brand-logo-mini\" href=\"/\"><img src=\"{{asset('assets/images/logo-mini.svg')}}\" alt=\"logo\"/></a>
\t\t\t\t<button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
\t\t\t\t\t<span class=\"typcn typcn-th-menu\"></span>
\t\t\t\t</button>
\t\t\t{% endif %}
\t\t</div>
\t</div>
\t<div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
\t\t<ul class=\"navbar-nav mr-lg-2\">
\t\t\t<li class=\"nav-item nav-profile dropdown\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<a class=\"nav-link\" href=\"/indexuser\" data-toggle=\"dropdown\" id=\"profileDropdown\">
\t\t\t\t\t\t<img src=\"{{asset('assets/images/faces/face5.jpg')}}\" alt=\"profile\"/>
\t\t\t\t\t\t<span class=\"nav-profile-name\">{{app.user.username}}</span>
\t\t\t\t{% else %}
\t\t\t\t\t<a class=\"nav-link\" href=\"/\" data-toggle=\"dropdown\" id=\"profileDropdown\">
\t\t\t\t\t\t<span class=\"nav-profile-name\"></span>
\t\t\t\t{% endif %}
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t<i class=\"typcn typcn-cog-outline text-primary\"></i>
\t\t\t\t\t\tSettings
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t<i class=\"typcn typcn-eject text-primary\"></i>
\t\t\t\t\t\tLogout
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"navbar-nav navbar-nav-right\">
\t\t\t<li class=\"nav-item nav-date dropdown\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<a class=\"nav-link d-flex justify-content-center align-items-center\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t<i class = \"typcn typcn-eject text-danger\"></i>
\t\t\t\t\t\t\tDéconnection
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<a class=\"nav-link\" href=\"/login\"> Login </a>
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t\t<li class=\"nav-item nav-date dropdown\">
\t\t\t\t<a class=\"nav-link d-flex justify-content-center align-items-center\" href=\"javascript:;\">
\t\t\t\t\t<h6 class=\"date mb-0\">{{\"now\"|date(\"d/m/Y\")}}</h6>
\t\t\t\t\t<i class=\"typcn typcn-calendar text-primary\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t<i class=\"typcn typcn-mail mx-0\"></i>
\t\t\t\t\t<span class=\"count\"></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
\t\t\t\t\t<p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/faces/face2.jpg')}}\" alt=\"image\" class=\"profile-pic\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-item-content flex-grow\">
\t\t\t\t\t\t\t<h6 class=\"preview-subject ellipsis font-weight-normal\">Tim Cook
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p class=\"font-weight-light small-text text-muted mb-0\">
\t\t\t\t\t\t\t\tNew product launch
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t<img src=\"{{asset('assets/images/faces/face3.jpg')}}\" alt=\"image\" class=\"profile-pic\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-item-content flex-grow\">
\t\t\t\t\t\t\t<h6 class=\"preview-subject ellipsis font-weight-normal\">
\t\t\t\t\t\t\t\tJohnson
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p class=\"font-weight-light small-text text-muted mb-0\">
\t\t\t\t\t\t\t\tUpcoming board meeting
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mr-0\">
\t\t\t\t<a class=\"nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t<i class=\"typcn typcn-bell mx-0\"></i>
\t\t\t\t\t<span class=\"count\"></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
\t\t\t\t\t<p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t<div class=\"preview-icon bg-success\">
\t\t\t\t\t\t\t\t<i class=\"typcn typcn-info mx-0\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t<h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
\t\t\t\t\t\t\t<p class=\"font-weight-light small-text mb-0 text-muted\">
\t\t\t\t\t\t\t\tJust now
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t<div class=\"preview-icon bg-warning\">
\t\t\t\t\t\t\t\t<i class=\"typcn typcn-cog-outline mx-0\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t<h6 class=\"preview-subject font-weight-normal\">Settings</h6>
\t\t\t\t\t\t\t<p class=\"font-weight-light small-text mb-0 text-muted\">
\t\t\t\t\t\t\t\tPrivate message
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item preview-item\">
\t\t\t\t\t\t<div class=\"preview-thumbnail\">
\t\t\t\t\t\t\t<div class=\"preview-icon bg-info\">
\t\t\t\t\t\t\t\t<i class=\"typcn typcn-user mx-0\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-item-content\">
\t\t\t\t\t\t\t<h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
\t\t\t\t\t\t\t<p class=\"font-weight-light small-text mb-0 text-muted\">
\t\t\t\t\t\t\t\t2 days ago
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t\t<button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
\t\t\t<span class=\"typcn typcn-th-menu\"></span>
\t\t</button>
\t</div>
</nav>
", "partials/_navbar.html.twig", "/home/marius/Desktop/symfonyTac/templates/partials/_navbar.html.twig");
    }
}
