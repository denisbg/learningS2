<?php

/* D2bgBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_80a351ca318ba0328dfcaf183a3aeaf0431eb86c82bddddfcc72b47b0af59c7d extends Twig_Template
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
        echo "
";
        // line 5
        echo "\t
<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\">
</script>

";
        // line 10
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
   // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.  
   var \$container = \$('div#dbg_prospectbundle_article_categories');
   // On ajoute un lien pour ajouter une nouvelle catégorie  
   var \$lienAjout = \$('<a href=\"#\" id=\"ajout_categorie\" class=\"btn\">Ajouter une catégorie</a>');
   \$container.append(\$lienAjout);
   // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.  
   \$lienAjout.click(function(e) {
      ajouterCategorie(\$container);
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
   });
   // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
   var index = \$container.find(':input').length;

   // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
   if (index == 0) {
       ajouterCategorie(\$container);
   } else {
      // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
      \$container.children('div').each(function() {
          ajouterLienSuppression(\$(this));
      });
  }

  // La fonction qui ajoute un formulaire Categorie
  
function ajouterCategorie(\$container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte \"__name__label__\" qu'il contient par le label du champ
    // - le texte \"__name__\" qu'il contient par le numéro du champ
    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Catégorie n°' + (index+1)).replace(/__name__/g, index));

    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie    
\tajouterLienSuppression(\$prototype);    
\t// On ajoute le prototype modifié à la fin de la balise <div>    
\t\$container.append(\$prototype);    
\t// Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro    
\tindex++;  
\t}  
// La fonction qui ajoute un lien de suppression d'une catégorie  
function ajouterLienSuppression(\$prototype) {    
\t// Création du lien    
\t\$lienSuppression = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');    
\t// Ajout du lien    
\t\$prototype.append(\$lienSuppression);    
\t// Ajout du listener sur le clic du lien    
\t\$lienSuppression.click(
\t  function(e) {      
\t    \$prototype.remove();
\t\te.preventDefault(); 
  \t// évite qu'un # apparaisse dans l'URL      
\t   return false;    
\t    }
\t   ); 
\t}
});
\t</script>

<div class=\"well\">
  <form method=\"post\" 
";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" class=\"btn btn-primary\" />
</form></div>
";
    }

    public function getTemplateName()
    {
        return "D2bgBlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 73,  92 => 72,  28 => 10,  22 => 5,  19 => 1,);
    }
}
