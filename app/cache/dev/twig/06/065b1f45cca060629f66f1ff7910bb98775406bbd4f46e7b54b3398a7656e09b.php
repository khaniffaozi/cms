<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c5ae2f48e69b4def52d088db39e9a560046182939bff4d0aef2edd43e0168cda extends Twig_Template
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
        $__internal_73cadbfa4d5296bf615b6074efd5b035d23fdabd8dced11b2bcd0758e19c081e = $this->env->getExtension("native_profiler");
        $__internal_73cadbfa4d5296bf615b6074efd5b035d23fdabd8dced11b2bcd0758e19c081e->enter($__internal_73cadbfa4d5296bf615b6074efd5b035d23fdabd8dced11b2bcd0758e19c081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_73cadbfa4d5296bf615b6074efd5b035d23fdabd8dced11b2bcd0758e19c081e->leave($__internal_73cadbfa4d5296bf615b6074efd5b035d23fdabd8dced11b2bcd0758e19c081e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
