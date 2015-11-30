<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d44b370377c48adaaaa0603c702b16647d84b002ec123f685e8e130d3a50c209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3d16ac66741c61fd48aae1384082e5952b7a93d44d2b66471a701e14b254324 = $this->env->getExtension("native_profiler");
        $__internal_f3d16ac66741c61fd48aae1384082e5952b7a93d44d2b66471a701e14b254324->enter($__internal_f3d16ac66741c61fd48aae1384082e5952b7a93d44d2b66471a701e14b254324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f3d16ac66741c61fd48aae1384082e5952b7a93d44d2b66471a701e14b254324->leave($__internal_f3d16ac66741c61fd48aae1384082e5952b7a93d44d2b66471a701e14b254324_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0dfd29f722abe5d3701676680cf122ffba0b4fc0bf1d54c8adba37a38743b4d0 = $this->env->getExtension("native_profiler");
        $__internal_0dfd29f722abe5d3701676680cf122ffba0b4fc0bf1d54c8adba37a38743b4d0->enter($__internal_0dfd29f722abe5d3701676680cf122ffba0b4fc0bf1d54c8adba37a38743b4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0dfd29f722abe5d3701676680cf122ffba0b4fc0bf1d54c8adba37a38743b4d0->leave($__internal_0dfd29f722abe5d3701676680cf122ffba0b4fc0bf1d54c8adba37a38743b4d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
