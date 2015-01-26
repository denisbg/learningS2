<?php

/* AcmeDemoBundle::home.html.twig */
class __TwigTemplate_a5d56966aebe8e444e2bb51cb3b752a51303b0f995699ac4a85217982d9e8043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'hero_unit' => array($this, 'block_hero_unit'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hero_unit($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"jumbotron page__hero-unit\">
    <h1>Welcome!</h1>
    <h2>Symfony2 Content Management Framework</h2>
</div>
";
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"row\">
        ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("name" => "/cms/content/blocks/hero_unit")));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  51 => 11,  48 => 10,  40 => 4,  37 => 3,  11 => 1,);
    }
}
