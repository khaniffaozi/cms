<?php

/* SynergyWebBundle:Layout:home.html.twig */
class __TwigTemplate_cb2c0ffd87bfd831a3e9253c6ba3a36165d7a9ee78c630a74ca3190e9b1189c4 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_web_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"background\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/bg1.jpg"), "html", null, true);
        echo "\" class=\"stretch\" alt=\"\" />
    </div>
    <h1><strong>Synergy Web Content Management System</strong></h1>
";
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
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
