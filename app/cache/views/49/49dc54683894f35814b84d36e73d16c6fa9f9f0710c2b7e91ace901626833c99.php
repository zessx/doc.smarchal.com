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

/* components/footer.twig */
class __TwigTemplate_f6843487a85e708bfd066edb9af0eb1ef334186fe60c02d434d9e86269a49b97 extends Template
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
        echo "<footer class=\"container border-t-2 border-gray-800 text-center mx-auto px-4 py-8\">
    <div class=\"flex flex-col justify-center items-center\">
        <p class=\"mb-4\">
            ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), ["powered_by"]), "html", null, true);
        echo " <a href=\"https://www.directorylister.com\" class=\"underline hover:text-blue-700\">Directory Lister</a>
        </p>

        <div class=\"flex\">
            <a href=\"https://github.com/DirectoryLister/DirectoryLister\" title=\"GitHub\" class=\"text-gray-400 mx-2 hover:text-github\">
                <i class=\"fab fa-github fa-lg\"></i>
            </a>

            <a href=\"https://twitter.com/DirectoryLister\" title=\"Twitter\" class=\"text-gray-400 mx-2 hover:text-twitter\">
                <i class=\"fab fa-twitter fa-lg\"></i>
            </a>

            <a href=\"https://spectrum.chat/directory-lister\" title=\"Spectrum\" class=\"text-gray-400 mx-2 hover:text-spectrum\">
                <i class=\"fas fa-comments fa-lg\"></i>
            </a>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "components/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/footer.twig", "/var/www/doc.smarchal.com/releases/test/app/views/components/footer.twig");
    }
}
