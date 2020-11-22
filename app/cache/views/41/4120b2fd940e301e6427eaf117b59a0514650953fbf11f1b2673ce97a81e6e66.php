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

/* components/header.twig */
class __TwigTemplate_f75828829579e9bb7919f96c95dcf91452cc445bc70006446c50315197e8de01 extends Template
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
        // line 1
        echo "<header id=\"header\" class=\"bg-blue-600 shadow sticky top-0\">
    <div class=\"container flex justify-between flex-wrap items-center mx-auto p-4 md:flex-row\">
        <div class=\"flex-1 font-mono text-white text-sm tracking-tight overflow-x-auto whitespace-no-wrap py-1\">
            <a href=\".\" class=\"inline-block hover:underline\">
                ";
        // line 5
        echo twig_escape_filter($this->env, _twig_default_filter(call_user_func_array($this->env->getFunction('config')->getCallable(), ["home_text"]), call_user_func_array($this->env->getFunction('translate')->getCallable(), ["home"])), "html", null, true);
        echo "
            </a>

            ";
        // line 8
        if ( !(null === ($context["path"] ?? null))) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('breadcrumbs')->getCallable(), [$context["path"]]));
            foreach ($context['_seq'] as $context["name"] => $context["path"]) {
                // line 10
                echo "                    / <a href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" class=\"inline-block hover:underline\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            ";
        }
        // line 13
        echo "        </div>

        <button class=\"inline-block text-white mx-2 hover:text-gray-400 md:hidden\" v-on:click=\"toggleMenuVisibility\">
            <div v-if=\"menuOpen\">
                <i class=\"fas fa-times fa-lg fa-fw\"></i>
            </div>
            <div v-else>
                <i class=\"fas fa-ellipsis-v fa-lg fa-fw\"></i>
            </div>
        </button>

        <div class=\"flex items-center flex-grow flex-shrink-0 w-full pt-4 space-x-2 md:flex md:max-w-xs md:p-0\" v-bind:class=\"menuStyles\">
            ";
        // line 25
        if (((($context["path"] ?? null) &&  !twig_test_empty(($context["files"] ?? null))) && call_user_func_array($this->env->getFunction('config')->getCallable(), ["zip_downloads"]))) {
            // line 26
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('zip_url')->getCallable(), [($context["path"] ?? null)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), ["download"]), "html", null, true);
            echo "\" class=\"inline-block text-white p-1 hover:text-gray-400\">
                    <i class=\"fas fa-download fa-lg\"></i>
                </a>
            ";
        }
        // line 30
        echo "
            <div class=\"flex-1\">
                ";
        // line 32
        $this->loadTemplate("components/search.twig", "components/header.twig", 32)->display($context);
        // line 33
        echo "            </div>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "components/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  100 => 32,  96 => 30,  86 => 26,  84 => 25,  70 => 13,  67 => 12,  56 => 10,  51 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/header.twig", "/var/www/doc.smarchal.com/releases/test/app/views/components/header.twig");
    }
}
