<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_f2fc680bca60132d0808fce2a4213130a796492395ee3ce8c4867b2712d4996f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'hero_unit' => array($this, 'block_hero_unit'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array())) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 15
            echo "        ";
            $this->env->loadTemplate("CmfCreateBundle::includecssfiles.html.twig")->display($context);
            // line 16
            echo "    ";
        }
        // line 17
        echo "</head>
<body class=\"container page\">
    <nav class=\"navbar navbar-inverse page__nav\" role=\"navigation\">
        <div class=\"container-fluid\">
            ";
        // line 21
        echo $this->env->getExtension('knp_menu')->render("simple", array("template" => "AcmeDemoBundle:Menu:bootstrap.html.twig", "currentClass" => "active"));
        echo "

            <ul class=\"nav  navbar-nav  navbar-right  navbar--external\">
                <li><a href=\"http://cmf.symfony.com/\">Website</a></li>
                <li><a href=\"http://symfony.com/doc/current/cmf/\">Documentation</a></li>
                <li><a href=\"http://github.com/symfony-cmf\">Github</a></li>
            </ul>
        </div>
    </nav>

    ";
        // line 31
        $this->displayBlock('hero_unit', $context, $blocks);
        // line 32
        echo "
    <div class=\"page__main\">
        ";
        // line 34
        $this->displayBlock('main', $context, $blocks);
        // line 35
        echo "    </div>

    ";
        // line 37
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("cmf_create.jsloader.controller:includeJSFilesAction"), array());
        // line 38
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 31
    public function block_hero_unit($context, array $blocks = array())
    {
    }

    // line 34
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  108 => 31,  102 => 10,  97 => 9,  94 => 8,  88 => 6,  82 => 38,  80 => 37,  76 => 35,  74 => 34,  70 => 32,  68 => 31,  55 => 21,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  37 => 12,  35 => 8,  30 => 6,  23 => 1,);
    }
}
