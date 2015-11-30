<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c1997282f272285889bbd40a8f8723660b3decd501f2363beaab76a49d985c2f extends Twig_Template
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
        $__internal_063da183cc7fdfd3d7c5c9a23e675ffad945f6ff4885cbb32a841a7c5729a147 = $this->env->getExtension("native_profiler");
        $__internal_063da183cc7fdfd3d7c5c9a23e675ffad945f6ff4885cbb32a841a7c5729a147->enter($__internal_063da183cc7fdfd3d7c5c9a23e675ffad945f6ff4885cbb32a841a7c5729a147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_063da183cc7fdfd3d7c5c9a23e675ffad945f6ff4885cbb32a841a7c5729a147->leave($__internal_063da183cc7fdfd3d7c5c9a23e675ffad945f6ff4885cbb32a841a7c5729a147_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
