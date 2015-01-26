<?php

/* CmfCreateBundle::includejsfiles-create.html.twig */
class __TwigTemplate_67013cd25c7a56b621457c2d4c6b6361c9e33572d3cdfc5bdc2ed253719b1690 extends Twig_Template
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
        // line 2
        echo "
<script type=\"text/javascript\">
    ";
        // line 4
        if ((isset($context["cmfCreateImageUploadEnabled"]) ? $context["cmfCreateImageUploadEnabled"] : $this->getContext($context, "cmfCreateImageUploadEnabled"))) {
            // line 5
            echo "        var cmfCreateImageUpload = '";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cmf_create_image_upload", array("editor" => (isset($context["cmfCreateEditor"]) ? $context["cmfCreateEditor"] : $this->getContext($context, "cmfCreateEditor")))), "html", null, true);
            echo "';
        var cmfCreateImageSearch = '";
            // line 6
            echo $this->env->getExtension('routing')->getPath("cmf_create_image_search");
            echo "';
        var cmfCreateLinkRelatedPath = '";
            // line 7
            echo $this->env->getExtension('routing')->getPath("cmf_create_image_related");
            echo "';
        var cmfCreateBrowseUrl = '";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["cmfCreateBrowseUrl"]) ? $context["cmfCreateBrowseUrl"] : $this->getContext($context, "cmfCreateBrowseUrl")), "html", null, true);
            echo "';
    ";
        } else {
            // line 10
            echo "        var cmfCreateImageUpload = false;
        var cmfCreateImageSearch = false;
        var cmfCreateLinkRelatedPath = false;
        var cmfCreateBrowseUrl = false;
    ";
        }
        // line 15
        echo "
    ";
        // line 17
        echo "    var cmfCreatePutDocument = '";
        echo $this->env->getExtension('routing')->getPath("cmf_create_put_document_base");
        echo "/';
    var cmfCreateWorkflows = '";
        // line 18
        echo $this->env->getExtension('routing')->getPath("cmf_create_workflows_base");
        echo "/';
    var cmfCreateStanbolUrl = '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["cmfCreateStanbolUrl"]) ? $context["cmfCreateStanbolUrl"] : $this->getContext($context, "cmfCreateStanbolUrl")), "html", null, true);
        echo "';

    var cmfCreatePlainTextTypes = ";
        // line 21
        echo (isset($context["cmfCreatePlainTextTypes"]) ? $context["cmfCreatePlainTextTypes"] : $this->getContext($context, "cmfCreatePlainTextTypes"));
        echo ";
</script>

";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "db3de33_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_jquery_1.js");
            // line 38
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "db3de33_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_jquery-ui_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "db3de33_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_underscore_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "db3de33_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_backbone_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "db3de33_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_rangy-core_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "db3de33_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_vie_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "db3de33_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_jquery.rdfquery.core_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "db3de33_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_jquery.rdfquery.rules_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "db3de33_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_jquery.tagsinput_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "db3de33_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_annotate_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "db3de33_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create_create_11.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "db3de33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db3de33") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/create.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "CmfCreateBundle::includejsfiles-create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 40,  77 => 38,  73 => 24,  67 => 21,  62 => 19,  58 => 18,  53 => 17,  50 => 15,  43 => 10,  38 => 8,  34 => 7,  30 => 6,  25 => 5,  23 => 4,  19 => 2,);
    }
}
