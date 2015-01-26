<?php

/* AcmeDemoBundle:Security:login.html.twig */
class __TwigTemplate_e6828b3c4348005c51caeaecefb6c01ac1ef5199e82958c2a04d6bed33f93bd6 extends Twig_Template
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
        echo "    <p>You can login as Admin using <em>admin/adminpass</em></p>

    ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_login_check");
        echo "\" method=\"post\" role=\"form\">
        <div class=\"row\">
            <div class=\"form-group col-xs-3\">
                <label for=\"username\">Username</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
            </div>
        </div>

        <div class=\"row\">
            <div class=\"form-group col-xs-3\">
                <label for=\"password\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" />
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Login</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  54 => 10,  51 => 9,  45 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
