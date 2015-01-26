<?php

/* D2bgUserBundle:Security:login.html.twig */
class __TwigTemplate_c3cac86aba5c8ca234a0f7963f39785639a7442b2acc067db1a74609fac59a94 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "<div class=\"alert alert-error\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo " </div>
";
        }
        // line 8
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" >
<label for=\"username\"> Login:</label>
<input type=\"text\" id=\"username\" name=\"_username\"  value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
<label for=\"password\"> Mot de passe :</label>
<input type=\"password\" id =  \"password\" name=\"_password\" />
<br/>
<input type=\"submit\" value=\"connexion\" >
</form>
    ";
    }

    public function getTemplateName()
    {
        return "D2bgUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  47 => 8,  41 => 6,  39 => 5,  36 => 3,  11 => 1,);
    }
}
