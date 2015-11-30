<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_30c9e2712900e0c6ed89f4f5d6cd32c04f8d87c33cadef29c9fe00cc66d363f8 extends Twig_Template
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
        $__internal_22c8e8d6f24ee4e4c268defcaead783aa8a407fbbfa5ba38a460967e4731a799 = $this->env->getExtension("native_profiler");
        $__internal_22c8e8d6f24ee4e4c268defcaead783aa8a407fbbfa5ba38a460967e4731a799->enter($__internal_22c8e8d6f24ee4e4c268defcaead783aa8a407fbbfa5ba38a460967e4731a799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_22c8e8d6f24ee4e4c268defcaead783aa8a407fbbfa5ba38a460967e4731a799->leave($__internal_22c8e8d6f24ee4e4c268defcaead783aa8a407fbbfa5ba38a460967e4731a799_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
