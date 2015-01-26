<?php

/* CmfBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_5734bf0ebfd099b78ee6f1fcaea65b3ece2ceca02a195933546f6f7ef8d31726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "dashifiedId", array(), "any", true, true)) {
            // line 2
            echo "<div id=\"block";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "dashifiedId", array()), "html", null, true);
            echo "\" class=\"cmf-block ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings", array(), "any", false, true), "class", array()), "")) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "dashifiedType", array()), "html", null, true);
            echo "\">
";
        } else {
            // line 4
            echo "<div id=\"cms-block-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
            echo "\" class=\"cms-block cms-block-element ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings", array(), "any", false, true), "class", array()), "")) : ("")), "html", null, true);
            echo "\">
";
        }
        // line 6
        echo "    ";
        $this->displayBlock('block', $context, $blocks);
        // line 7
        echo "</div>
";
    }

    // line 6
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "CmfBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  43 => 7,  40 => 6,  32 => 4,  22 => 2,  20 => 1,);
    }
}
