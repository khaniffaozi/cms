<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fd8cec3cf124771ddea500defec1aea24353b722fe391b57e2ab928b816d4c05 extends Twig_Template
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
        $__internal_f97209d7db651e9eb084feaebb27f1cda226449a2f69afedbd96743629259dce = $this->env->getExtension("native_profiler");
        $__internal_f97209d7db651e9eb084feaebb27f1cda226449a2f69afedbd96743629259dce->enter($__internal_f97209d7db651e9eb084feaebb27f1cda226449a2f69afedbd96743629259dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f97209d7db651e9eb084feaebb27f1cda226449a2f69afedbd96743629259dce->leave($__internal_f97209d7db651e9eb084feaebb27f1cda226449a2f69afedbd96743629259dce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
