<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_cb3dde9ef15c9238678fe557df19757b602ca0c1c688094629110db702f33fd1 extends Twig_Template
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
        $__internal_08015d42ef62610c7c37cb13e8ffa3ac2201ca6f127466cae99934acd24440bb = $this->env->getExtension("native_profiler");
        $__internal_08015d42ef62610c7c37cb13e8ffa3ac2201ca6f127466cae99934acd24440bb->enter($__internal_08015d42ef62610c7c37cb13e8ffa3ac2201ca6f127466cae99934acd24440bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_08015d42ef62610c7c37cb13e8ffa3ac2201ca6f127466cae99934acd24440bb->leave($__internal_08015d42ef62610c7c37cb13e8ffa3ac2201ca6f127466cae99934acd24440bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
