<?php

/* CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig */
class __TwigTemplate_9c88aac85241fc6316d6924af0b5f7310ed5bdd07c3c5a3f020a5a157138c0ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cmf_core_checkbox_url_label_row' => array($this, 'block_cmf_core_checkbox_url_label_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('cmf_core_checkbox_url_label_row', $context, $blocks);
    }

    public function block_cmf_core_checkbox_url_label_row($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<label class=\"checkbox\">
    <input type=\"checkbox\" ";
        // line 5
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        // line 6
        echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), (isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "
</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  33 => 5,  28 => 3,  26 => 2,  20 => 1,);
    }
}
