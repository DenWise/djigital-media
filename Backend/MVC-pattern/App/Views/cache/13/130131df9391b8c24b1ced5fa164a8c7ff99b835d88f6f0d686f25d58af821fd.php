<?php

/* Home/index.html */
class __TwigTemplate_23bad232d0974b42896a7788c943003111b26a2acd06f1dddde34aa6775362ef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Welcome Home</title>
</head>
<body>
    <div class=\"container\">
        <h1>Welcome to our home page ";
        // line 12
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!</h1>
        <ul>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 15
            echo "                <li style=\"color: ";
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi assumenda debitis deserunt doloribus error et, ipsam minus nemo omnis possimus quod veniam, voluptatibus?</p>
        <button>Glad to see You too!</button>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Home/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  45 => 15,  41 => 14,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Home/index.html", "C:\\OpenServer\\domains\\MVC-pattern\\App\\Views\\Home\\index.html");
    }
}
