<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_72c11d48321fee5ae04e99ccee31d257b173506e6079fbe741beb7beec66bf93 extends Twig_Template
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
        $__internal_693351d6b1d3b7c28afebf6964b7ed664cf643c8d7c5397eb453da44383d5f2c = $this->env->getExtension("native_profiler");
        $__internal_693351d6b1d3b7c28afebf6964b7ed664cf643c8d7c5397eb453da44383d5f2c->enter($__internal_693351d6b1d3b7c28afebf6964b7ed664cf643c8d7c5397eb453da44383d5f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_693351d6b1d3b7c28afebf6964b7ed664cf643c8d7c5397eb453da44383d5f2c->leave($__internal_693351d6b1d3b7c28afebf6964b7ed664cf643c8d7c5397eb453da44383d5f2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
