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

/* error.twig */
class __TwigTemplate_6396585985cfe38f16e75b438922f9f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "error.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h1>Aw shucks!</h1>
\t<p>It seems you have encountered a wild ";
        // line 5
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo " error!</p>
\t<p>You can always try to</p>
\t<ul>
\t\t<li><a href=\"/pages\">Go to the page list</a></li>
\t\t<li><a href=\"#\" onclick=\"history.back()\">Go back to the previous page</a></li>
\t\t<li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "REQUEST_URI", [], "any", false, false, false, 10), "html", null, true);
        echo "\">Reload this page</a></li>
\t</ul>
";
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
\t<h1>Aw shucks!</h1>
\t<p>It seems you have encountered a wild {{ error }} error!</p>
\t<p>You can always try to</p>
\t<ul>
\t\t<li><a href=\"/pages\">Go to the page list</a></li>
\t\t<li><a href=\"#\" onclick=\"history.back()\">Go back to the previous page</a></li>
\t\t<li><a href=\"{{ info.REQUEST_URI }}\">Reload this page</a></li>
\t</ul>
{% endblock %}", "error.twig", "C:\\xampp\\htdocs\\blog\\templates\\error.twig");
    }
}
