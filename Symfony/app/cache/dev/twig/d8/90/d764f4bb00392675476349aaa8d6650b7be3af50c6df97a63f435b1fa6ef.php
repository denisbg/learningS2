<?php

/* ::layout.html.twig */
class __TwigTemplate_d890d764f4bb00392675476349aaa8d6650b7be3af50c6df97a63f435b1fa6ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>
<div class=\"navbar navbar-fixed-top\">
  <div class=\"navbar-inner\">
    <div class=\"container-fluid\"> <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\"> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </a> <a class=\"brand\" href=\"#\">Formation Symfony2</a>
      <div class=\"btn-group pull-right\"> <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> <i class=\"icon-user\"></i> Username <span class=\"caret\"></span> </a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">Profile</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"#\">Sign Out</a></li>
        </ul>
      </div>
      <div class=\"nav-collapse\">
        <ul class=\"nav\">
          <li class=\"active\"><a href=\"#\">Home</a></li>
          <li><a href=\"#about\">About</a></li>
          <li><a href=\"#contact\">Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
</div>
\t<div  class =\"container\">
\t<div id=\"header\" class=\"hero-unit\">
\t<h1> GENERATEUR DE CV </h1>
\t<p> <a class =\"btn btn-primary\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfony2\"> lire le tutoriel </a></p>
\t</div>

<div class=\"container-fluid\">
  <div class=\"row-fluid\">
    <div class=\"span3\">
      <div class=\"well sidebar-nav\">
        <ul class=\"nav nav-list\">
          <li class=\"nav-header\">Sidebar</li>
          <li> <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("d2bgblog_ajouter");
        echo "\"> Expériences </a></li>
          <li> <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("identite");
        echo "\"> Identités </a></li>
           <li> <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("civilite");
        echo "\"> Civilités </a></li>
            <li> <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("adresse");
        echo "\"> Adresses </a></li>
          <li><a href=\"#\">Link</a></li>
        </ul>
        ";
        // line 53
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("D2bgBlogBundle:Blog:menu", array("nombre" => "1")));
        echo "
      </div>
      <!--/.well -->
    </div>
    <!--/span-->
    <div class=\"span9\">
      <div class=\"hero-unit\"> ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo " </div>
    </div>
    <!--/span-->
  </div>
  <!--/row-->
   
  <hr>
  <footer>
    <p>&copy; Dev-Skills.com 2012</p>
  </footer>
</div>
<!--/.fluid-container-->
 
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Dev Skills Tutoriel";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "        ";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        echo "        ";
        echo " 
<script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script> 
";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 79,  164 => 78,  160 => 77,  157 => 76,  153 => 60,  150 => 59,  144 => 10,  140 => 9,  135 => 8,  132 => 7,  126 => 6,  121 => 81,  119 => 76,  101 => 60,  99 => 59,  90 => 53,  84 => 50,  80 => 49,  76 => 48,  72 => 47,  35 => 12,  33 => 7,  29 => 6,  23 => 2,);
    }
}
