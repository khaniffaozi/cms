<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9f3334ac565ade8a04463b9f6ecf1dceccbb2894d449b4f7324d22496f3e3b67 extends Twig_Template
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
        $__internal_fc206e7ada0854222844e219af56a45d961a04f99a32c4a8c80cbafc243af899 = $this->env->getExtension("native_profiler");
        $__internal_fc206e7ada0854222844e219af56a45d961a04f99a32c4a8c80cbafc243af899->enter($__internal_fc206e7ada0854222844e219af56a45d961a04f99a32c4a8c80cbafc243af899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fc206e7ada0854222844e219af56a45d961a04f99a32c4a8c80cbafc243af899->leave($__internal_fc206e7ada0854222844e219af56a45d961a04f99a32c4a8c80cbafc243af899_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
