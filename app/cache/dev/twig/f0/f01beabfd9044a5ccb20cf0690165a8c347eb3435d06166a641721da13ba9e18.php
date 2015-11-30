<?php

/* SynergyWebBundle:Layout:home.html.twig */
class __TwigTemplate_c0f69ae550e5f1bf1ac8424624ffc9f90abe3be386fb949687c66281d2c6dfef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynergyWebBundle:Layout:menu.html.twig", "SynergyWebBundle:Layout:home.html.twig", 1);
        $this->blocks = array(
            'web_body' => array($this, 'block_web_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynergyWebBundle:Layout:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e00d41e7f739386d2dbe833c8c2f5138ea4e8f90a28141a2362e7a062be97ecb = $this->env->getExtension("native_profiler");
        $__internal_e00d41e7f739386d2dbe833c8c2f5138ea4e8f90a28141a2362e7a062be97ecb->enter($__internal_e00d41e7f739386d2dbe833c8c2f5138ea4e8f90a28141a2362e7a062be97ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynergyWebBundle:Layout:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e00d41e7f739386d2dbe833c8c2f5138ea4e8f90a28141a2362e7a062be97ecb->leave($__internal_e00d41e7f739386d2dbe833c8c2f5138ea4e8f90a28141a2362e7a062be97ecb_prof);

    }

    // line 3
    public function block_web_body($context, array $blocks = array())
    {
        $__internal_84ff5df3ea01e2f920f0a79d7fb3c7c1d2306f7eb3b8cbdc37e5c023f7204f43 = $this->env->getExtension("native_profiler");
        $__internal_84ff5df3ea01e2f920f0a79d7fb3c7c1d2306f7eb3b8cbdc37e5c023f7204f43->enter($__internal_84ff5df3ea01e2f920f0a79d7fb3c7c1d2306f7eb3b8cbdc37e5c023f7204f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_body"));

        // line 4
        echo "    <div id=\"background\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/bg1.jpg"), "html", null, true);
        echo "\" class=\"stretch\" alt=\"\" />
    </div>
    <h1><strong>Synergy Web Content Management System</strong></h1>
";
        
        $__internal_84ff5df3ea01e2f920f0a79d7fb3c7c1d2306f7eb3b8cbdc37e5c023f7204f43->leave($__internal_84ff5df3ea01e2f920f0a79d7fb3c7c1d2306f7eb3b8cbdc37e5c023f7204f43_prof);

    }

    public function getTemplateName()
    {
        return "SynergyWebBundle:Layout:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SynergyWebBundle:Layout:menu.html.twig' %}*/
/* */
/* {% block web_body %}*/
/*     <div id="background">*/
/*         <img src="{{ asset('assets/img/bg1.jpg') }}" class="stretch" alt="" />*/
/*     </div>*/
/*     <h1><strong>Synergy Web Content Management System</strong></h1>*/
/* {% endblock %}*/
