<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_88dcbc0f7caf8a0cff912e15e800c348066def2a07d89dcf74c9a7ab496d3459 extends Twig_Template
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
        $__internal_90751f6224a57db5afd3737bd27767dde2bbdd6f4e5f55ddaf4d04d7b14c1370 = $this->env->getExtension("native_profiler");
        $__internal_90751f6224a57db5afd3737bd27767dde2bbdd6f4e5f55ddaf4d04d7b14c1370->enter($__internal_90751f6224a57db5afd3737bd27767dde2bbdd6f4e5f55ddaf4d04d7b14c1370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_90751f6224a57db5afd3737bd27767dde2bbdd6f4e5f55ddaf4d04d7b14c1370->leave($__internal_90751f6224a57db5afd3737bd27767dde2bbdd6f4e5f55ddaf4d04d7b14c1370_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
