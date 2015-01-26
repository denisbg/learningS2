<?php

/* AcmeDemoBundle:Block:unit.html.twig */
class __TwigTemplate_5434f02b5662d821287872ee20630429e982215ef50980b763d3c5227af9d284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-md-4 col-sm-4\">
    <img class=\"center-block\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "image", array())), "html", null, true);
        echo "\"><br>
    <a class=\"btn btn-default btn-block\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (( !(null === $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "url", array()))) ? ($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "url", array())) : ($this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "route", array())))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "text", array()), "html", null, true);
        echo "</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Block:unit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
