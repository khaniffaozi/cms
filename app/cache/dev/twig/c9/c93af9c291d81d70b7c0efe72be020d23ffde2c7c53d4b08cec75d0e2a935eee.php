<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a58c184c6d9d3583962da67a500df316184dde10fd7c8f949c3711b55c912f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e5f56c97b43fb26572bf62f008f9f802f44acd8a3a8dff405b361af200442cd = $this->env->getExtension("native_profiler");
        $__internal_3e5f56c97b43fb26572bf62f008f9f802f44acd8a3a8dff405b361af200442cd->enter($__internal_3e5f56c97b43fb26572bf62f008f9f802f44acd8a3a8dff405b361af200442cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5f56c97b43fb26572bf62f008f9f802f44acd8a3a8dff405b361af200442cd->leave($__internal_3e5f56c97b43fb26572bf62f008f9f802f44acd8a3a8dff405b361af200442cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9ab819b420bca22c8ac0c68583019808c1e22ecefb8cdc53ec6ae70667a47ef = $this->env->getExtension("native_profiler");
        $__internal_e9ab819b420bca22c8ac0c68583019808c1e22ecefb8cdc53ec6ae70667a47ef->enter($__internal_e9ab819b420bca22c8ac0c68583019808c1e22ecefb8cdc53ec6ae70667a47ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e9ab819b420bca22c8ac0c68583019808c1e22ecefb8cdc53ec6ae70667a47ef->leave($__internal_e9ab819b420bca22c8ac0c68583019808c1e22ecefb8cdc53ec6ae70667a47ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdd6bbe1abaa3118522f83e427032471dc8d66a0502968b3b132e1bd24279faf = $this->env->getExtension("native_profiler");
        $__internal_fdd6bbe1abaa3118522f83e427032471dc8d66a0502968b3b132e1bd24279faf->enter($__internal_fdd6bbe1abaa3118522f83e427032471dc8d66a0502968b3b132e1bd24279faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fdd6bbe1abaa3118522f83e427032471dc8d66a0502968b3b132e1bd24279faf->leave($__internal_fdd6bbe1abaa3118522f83e427032471dc8d66a0502968b3b132e1bd24279faf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dabcec2ec228888702673b427d654bdd8ec4e6a3e70c6a980a65d5740f1af2e6 = $this->env->getExtension("native_profiler");
        $__internal_dabcec2ec228888702673b427d654bdd8ec4e6a3e70c6a980a65d5740f1af2e6->enter($__internal_dabcec2ec228888702673b427d654bdd8ec4e6a3e70c6a980a65d5740f1af2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_dabcec2ec228888702673b427d654bdd8ec4e6a3e70c6a980a65d5740f1af2e6->leave($__internal_dabcec2ec228888702673b427d654bdd8ec4e6a3e70c6a980a65d5740f1af2e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
