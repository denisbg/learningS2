<?php

/* CmfBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_9af96e7db8af5c97680b0708d7dcdbe736cb263e028b875ff53aeb6e5e5b99b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('block', $context, $blocks);
    }

    public function block_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["childBlock"]) {
            // line 3
            echo "        ";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "divisible_by", array()) && $this->getAttribute($context["loop"], "first", array()))) {
                // line 4
                echo "            ";
                // line 5
                echo "            <div";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "divisible_class", array())) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "divisible_class", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
        ";
            }
            // line 7
            echo "
        ";
            // line 8
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "divisible_by", array())) {
                // line 9
                echo "            ";
                // line 10
                echo "            <div";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "child_class", array())) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "child_class", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
        ";
            }
            // line 12
            echo "        ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array($context["childBlock"]));
            echo "
        ";
            // line 13
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "divisible_by", array())) {
                // line 14
                echo "            </div>";
                // line 15
                echo "        ";
            }
            // line 16
            echo "
        ";
            // line 17
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "divisible_by", array())) {
                // line 18
                echo "            ";
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "divisible_by", array()))) {
                    // line 19
                    echo "                </div>";
                    // line 20
                    echo "                ";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 21
                        echo "                    ";
                        // line 22
                        echo "                    <div class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "divisible_class", array()), "html", null, true);
                        echo "\">
                ";
                    }
                    // line 24
                    echo "            ";
                } elseif ($this->getAttribute($context["loop"], "last", array())) {
                    // line 25
                    echo "                </div>";
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "        ";
            }
            // line 28
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "CmfBlockBundle:Block:block_container.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 28,  117 => 27,  114 => 26,  112 => 25,  109 => 24,  103 => 22,  101 => 21,  98 => 20,  96 => 19,  93 => 18,  91 => 17,  88 => 16,  85 => 15,  83 => 14,  81 => 13,  76 => 12,  66 => 10,  64 => 9,  62 => 8,  59 => 7,  49 => 5,  47 => 4,  44 => 3,  26 => 2,  20 => 1,);
    }
}
