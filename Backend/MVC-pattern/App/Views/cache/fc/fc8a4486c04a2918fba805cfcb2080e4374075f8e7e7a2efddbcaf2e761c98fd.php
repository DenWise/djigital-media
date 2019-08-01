<?php

/* base.html */
class __TwigTemplate_855bc67335c8f1042ca85bd220ccb44ed01105c012afdec4f8d3f06f1d9b440c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>

<header>
    <nav>
        <a href=\"/\">Home</a> |
        <a href=\"/posts/index\">Posts</a>
    </nav>
</header>
<main>
    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "</main>

</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  62 => 19,  57 => 8,  50 => 21,  48 => 19,  34 => 8,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html", "C:\\OpenServer\\domains\\MVC-pattern\\App\\Views\\base.html");
    }
}
