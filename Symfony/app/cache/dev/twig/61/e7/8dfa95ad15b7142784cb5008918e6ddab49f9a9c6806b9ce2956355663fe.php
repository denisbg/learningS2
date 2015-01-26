<?php

/* D2bgBlogBundle:Identite:new.html.twig */
class __TwigTemplate_61e78dfa95ad15b7142784cb5008918e6ddab49f9a9c6806b9ce2956355663fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Identite creation</h1>

  
 ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo " 
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("identite");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        // line 18
        echo "<br>
<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "D2bgBlogBundle:Identite:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  50 => 9,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
