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

/* layouts/app.twig */
class __TwigTemplate_8eca4bff899c977af449f2952c2cc566a53a2831ec0799d0e07fff05d0b70b6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<meta charset=\"utf-8\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), ["meta_description"]), "html", null, true);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('config')->getCallable(), ["dark_mode"])) ? (call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon.dark.png"])) : (call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon.light.png"]))), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["app.css"]), "html", null, true);
        echo "\">

";
        // line 10
        if (call_user_func_array($this->env->getFunction('config')->getCallable(), ["google_analytics_id", false])) {
            // line 11
            echo "    ";
            $this->loadTemplate("components/analytics/google.twig", "layouts/app.twig", 11)->display($context);
        }
        // line 13
        echo "
";
        // line 14
        if ((call_user_func_array($this->env->getFunction('config')->getCallable(), ["matomo_analytics_url", false]) && call_user_func_array($this->env->getFunction('config')->getCallable(), ["matomo_analytics_site_id", false]))) {
            // line 15
            echo "    ";
            $this->loadTemplate("components/analytics/matomo.twig", "layouts/app.twig", 15)->display($context);
        }
        // line 17
        echo "
<title>";
        // line 18
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " &bull; Directory Lister</title>

<div id=\"app\" class=\"flex flex-col min-h-screen font-sans ";
        // line 20
        echo ((call_user_func_array($this->env->getFunction('config')->getCallable(), ["dark_mode"])) ? ("dark-mode") : ("light-mode"));
        echo "\">
    ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "</div>

<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["app.js"]), "html", null, true);
        echo "\" defer></script>
";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  91 => 24,  87 => 22,  85 => 21,  81 => 20,  76 => 18,  73 => 17,  69 => 15,  67 => 14,  64 => 13,  60 => 11,  58 => 10,  53 => 8,  49 => 7,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/app.twig", "/var/www/doc.smarchal.com/releases/test/app/views/layouts/app.twig");
    }
}
