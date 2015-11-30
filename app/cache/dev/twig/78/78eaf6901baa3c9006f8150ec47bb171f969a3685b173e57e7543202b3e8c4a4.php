<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_f86cb84b7c7424b11e8506976b7f3859df3b2a990e66941a47764f2880d88412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8003ff55153411de92121834a6097b3f2744e1926b8787772e4bd8f6b95ab164 = $this->env->getExtension("native_profiler");
        $__internal_8003ff55153411de92121834a6097b3f2744e1926b8787772e4bd8f6b95ab164->enter($__internal_8003ff55153411de92121834a6097b3f2744e1926b8787772e4bd8f6b95ab164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8003ff55153411de92121834a6097b3f2744e1926b8787772e4bd8f6b95ab164->leave($__internal_8003ff55153411de92121834a6097b3f2744e1926b8787772e4bd8f6b95ab164_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5da64cd1fc79e9b66b0308dea0043f2be8b2f223b6c88b6426b2e6792050a88d = $this->env->getExtension("native_profiler");
        $__internal_5da64cd1fc79e9b66b0308dea0043f2be8b2f223b6c88b6426b2e6792050a88d->enter($__internal_5da64cd1fc79e9b66b0308dea0043f2be8b2f223b6c88b6426b2e6792050a88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5da64cd1fc79e9b66b0308dea0043f2be8b2f223b6c88b6426b2e6792050a88d->leave($__internal_5da64cd1fc79e9b66b0308dea0043f2be8b2f223b6c88b6426b2e6792050a88d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01ac283d4fd8ee84bf3200acfa7f861e395b7a3c2b3e723270c5c495e6c93123 = $this->env->getExtension("native_profiler");
        $__internal_01ac283d4fd8ee84bf3200acfa7f861e395b7a3c2b3e723270c5c495e6c93123->enter($__internal_01ac283d4fd8ee84bf3200acfa7f861e395b7a3c2b3e723270c5c495e6c93123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_01ac283d4fd8ee84bf3200acfa7f861e395b7a3c2b3e723270c5c495e6c93123->leave($__internal_01ac283d4fd8ee84bf3200acfa7f861e395b7a3c2b3e723270c5c495e6c93123_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_94bdc7ce85c4d91170f636a099ed5e67beddd5fcf709d9be83ee2fec8a1f43b1 = $this->env->getExtension("native_profiler");
        $__internal_94bdc7ce85c4d91170f636a099ed5e67beddd5fcf709d9be83ee2fec8a1f43b1->enter($__internal_94bdc7ce85c4d91170f636a099ed5e67beddd5fcf709d9be83ee2fec8a1f43b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_94bdc7ce85c4d91170f636a099ed5e67beddd5fcf709d9be83ee2fec8a1f43b1->leave($__internal_94bdc7ce85c4d91170f636a099ed5e67beddd5fcf709d9be83ee2fec8a1f43b1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6dce595ccedc46cbd8c05b11e393a7177d6809c4ba912c747915528e29ee0ee8 = $this->env->getExtension("native_profiler");
        $__internal_6dce595ccedc46cbd8c05b11e393a7177d6809c4ba912c747915528e29ee0ee8->enter($__internal_6dce595ccedc46cbd8c05b11e393a7177d6809c4ba912c747915528e29ee0ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6dce595ccedc46cbd8c05b11e393a7177d6809c4ba912c747915528e29ee0ee8->leave($__internal_6dce595ccedc46cbd8c05b11e393a7177d6809c4ba912c747915528e29ee0ee8_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
