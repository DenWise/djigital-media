<?php

/* Posts/index.html */
class __TwigTemplate_584e4f4fc5544b8698c83cf9a78da7668bdd24cfab69397a3b03afbdb0e89e59 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "Posts/index.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Home ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>That's your posts ";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi assumenda debitis deserunt doloribus error et.</p>


";
    }

    public function getTemplateName()
    {
        return "Posts/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Posts/index.html", "C:\\OpenServer\\domains\\MVC-pattern\\App\\Views\\Posts\\index.html");
    }
}
