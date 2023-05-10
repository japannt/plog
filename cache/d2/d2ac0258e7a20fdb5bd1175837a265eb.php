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

/* base.twig */
class __TwigTemplate_7c9adb94a7bf04786522ff931b5bafc1 extends Template
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
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" href=\"css/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "blog_stylesheet", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
\t</head>
\t<body>
\t\t<div class=\"body\">
\t\t\t<div class=\"header\">
\t\t\t\t<h1><a href=\"/\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "blog_name", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></h1>
\t\t\t</div>

\t\t\t<div class=\"content\">
\t\t\t\t";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "\t\t\t</div>

\t\t\t<div class=\"nav\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t<li><a href=\"/pages\">Pages</a></li>
\t\t\t\t\t<li><a href=\"/contact\">Contact</a></li>
\t\t\t\t\t<li><a href=\"/about\">About</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</body>
</html>";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  61 => 15,  59 => 14,  52 => 10,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" href=\"css/{{ config.blog_stylesheet }}\">
\t</head>
\t<body>
\t\t<div class=\"body\">
\t\t\t<div class=\"header\">
\t\t\t\t<h1><a href=\"/\">{{ config.blog_name }}</a></h1>
\t\t\t</div>

\t\t\t<div class=\"content\">
\t\t\t\t{% block content %}{% endblock %}
\t\t\t</div>

\t\t\t<div class=\"nav\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t<li><a href=\"/pages\">Pages</a></li>
\t\t\t\t\t<li><a href=\"/contact\">Contact</a></li>
\t\t\t\t\t<li><a href=\"/about\">About</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</body>
</html>", "base.twig", "C:\\xampp\\htdocs\\blog\\templates\\base.twig");
    }
}
