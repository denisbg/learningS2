<?php

/* D2bgBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_6c4863c778f95ad77a4e06de0465b1fcb568ea302b8c5ba8ea4a478ad1ab1a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("D2bgBlogBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'devskills_body' => array($this, 'block_devskills_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "D2bgBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_devskills_body($context, array $blocks = array())
    {
        // line 9
        echo " ";
        $this->env->loadTemplate("D2bgBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 10
        echo "
<p>
  <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("d2bgblog_accueil");
        echo "\" class = \"btn\"> <i class=\"icon-chevron-left\"></i>
  Retour liste </a>
  
            
</p>
";
    }

    public function getTemplateName()
    {
        return "D2bgBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  53 => 10,  50 => 9,  47 => 8,  40 => 5,  37 => 4,  11 => 1,);
    }
}
