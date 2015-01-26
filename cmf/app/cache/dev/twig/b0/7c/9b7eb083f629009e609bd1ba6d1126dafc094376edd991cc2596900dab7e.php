<?php

/* AcmeDemoBundle:Page:index.html.twig */
class __TwigTemplate_b07c9b7eb083f629009e609bd1ba6d1126dafc094376edd991cc2596900dab7e extends Twig_Template
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
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // createphp
        $context["rdf"] =         $this->env->getExtension('createphp')->createEntity((isset($context["cmfMainContent"]) ? $context["cmfMainContent"] : $this->getContext($context, "cmfMainContent")));
;
        echo         $context["rdf"        ]->renderStart();
        // line 5
        echo "        ";
        echo (isset($context["rdf"]) ? $context["rdf"] : $this->getContext($context, "rdf"));
        echo "
    ";
        echo         $context["rdf"        ]->renderEnd();
        unset($context["rdf"]);
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
