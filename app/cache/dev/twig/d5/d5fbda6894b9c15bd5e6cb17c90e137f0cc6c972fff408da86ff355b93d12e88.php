<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fc4a3c878dbb87c60fd63bafeb4ccdbb7ebc3397660f39e00d0d47ad1b6e60d5 extends Twig_Template
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
        $__internal_fd429d8614164ab80a65dc6bcdf43005a646bc376ae88ee0223d1e62fe9f599b = $this->env->getExtension("native_profiler");
        $__internal_fd429d8614164ab80a65dc6bcdf43005a646bc376ae88ee0223d1e62fe9f599b->enter($__internal_fd429d8614164ab80a65dc6bcdf43005a646bc376ae88ee0223d1e62fe9f599b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fd429d8614164ab80a65dc6bcdf43005a646bc376ae88ee0223d1e62fe9f599b->leave($__internal_fd429d8614164ab80a65dc6bcdf43005a646bc376ae88ee0223d1e62fe9f599b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
