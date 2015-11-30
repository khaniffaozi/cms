<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2e409611454947746e782b93696c7bcdee7191b6f25fea95d1456d5d8b50576b extends Twig_Template
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
        $__internal_4bdf1edd5e433d446c9d706710c176531a2b536c1510e6879ee3043f820b9c49 = $this->env->getExtension("native_profiler");
        $__internal_4bdf1edd5e433d446c9d706710c176531a2b536c1510e6879ee3043f820b9c49->enter($__internal_4bdf1edd5e433d446c9d706710c176531a2b536c1510e6879ee3043f820b9c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4bdf1edd5e433d446c9d706710c176531a2b536c1510e6879ee3043f820b9c49->leave($__internal_4bdf1edd5e433d446c9d706710c176531a2b536c1510e6879ee3043f820b9c49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
