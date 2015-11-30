<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d1c091a109035c2a036fdf175439011769e12067f808ed696e4da4e8535e4989 extends Twig_Template
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
        $__internal_578c648211fde36d2d8d6d5a9eea3049c7db94e6e100752b09acb6c230b309e7 = $this->env->getExtension("native_profiler");
        $__internal_578c648211fde36d2d8d6d5a9eea3049c7db94e6e100752b09acb6c230b309e7->enter($__internal_578c648211fde36d2d8d6d5a9eea3049c7db94e6e100752b09acb6c230b309e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_578c648211fde36d2d8d6d5a9eea3049c7db94e6e100752b09acb6c230b309e7->leave($__internal_578c648211fde36d2d8d6d5a9eea3049c7db94e6e100752b09acb6c230b309e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
