<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_da40eb5ad0e93e99243911fc1ef822d944f1e0a5d694d2a211a7ebe3e5a9dec9 extends Twig_Template
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
        $__internal_9991d401ecd05987df7a3c6ca340209f64f7a24b0c3419edeed1efb2448f386b = $this->env->getExtension("native_profiler");
        $__internal_9991d401ecd05987df7a3c6ca340209f64f7a24b0c3419edeed1efb2448f386b->enter($__internal_9991d401ecd05987df7a3c6ca340209f64f7a24b0c3419edeed1efb2448f386b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9991d401ecd05987df7a3c6ca340209f64f7a24b0c3419edeed1efb2448f386b->leave($__internal_9991d401ecd05987df7a3c6ca340209f64f7a24b0c3419edeed1efb2448f386b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
