<?php

/* CmfCreateBundle::includejsfiles-ckeditor.html.twig */
class __TwigTemplate_2d9193e4139b073bbcb52c9f3ffef4ace1b7c8927dfff64181bebdc766e2324c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("CmfCreateBundle::includejsfiles-create.html.twig")->display($context);
        // line 2
        echo "
<script>window.CKEDITOR_BASEPATH = '";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["cmfCreateEditorBasePath"]) ? $context["cmfCreateEditorBasePath"] : $this->getContext($context, "cmfCreateEditorBasePath")), "html", null, true);
        echo "';</script>
";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc913f2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc913f2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ckeditor_ckeditor_1.js");
            // line 9
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fc913f2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc913f2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ckeditor_init-create-ckeditor_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fc913f2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc913f2_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ckeditor_init-create-common_3.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "fc913f2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc913f2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ckeditor.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "CmfCreateBundle::includejsfiles-ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
