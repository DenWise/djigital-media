<?php

/* Home/index.html */
class __TwigTemplate_44aa5a08ffc2b0997402b8b8175f335bb7f066833d31323a2b0166c9adc4a9c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "Home/index.html", 1);
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
        <h1>Welcome to our home page ";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!</h1>
        <ul>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 10
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
        // line 12
        echo "        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi assumenda debitis deserunt doloribus error et, ipsam minus nemo omnis possimus quod veniam, voluptatibus?</p>
        <button>Glad to see You too!</button>

";
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
        return array (  65 => 12,  54 => 10,  50 => 9,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Home/index.html", "C:\\OpenServer\\domains\\MVC-pattern\\App\\Views\\Home\\index.html");
    }
}
