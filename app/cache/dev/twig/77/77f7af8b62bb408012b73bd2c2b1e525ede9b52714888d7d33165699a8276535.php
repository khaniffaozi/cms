<?php

/* ::base.html.twig */
class __TwigTemplate_a616e39d63b8966742c0c00064621c80b59a9f2806516f1d0f943a4aee4b439f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ac66d88ee2ab46ea4fed3b01ba9f13a6b3404f2f17baf317e7c38b15a151287 = $this->env->getExtension("native_profiler");
        $__internal_6ac66d88ee2ab46ea4fed3b01ba9f13a6b3404f2f17baf317e7c38b15a151287->enter($__internal_6ac66d88ee2ab46ea4fed3b01ba9f13a6b3404f2f17baf317e7c38b15a151287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6ac66d88ee2ab46ea4fed3b01ba9f13a6b3404f2f17baf317e7c38b15a151287->leave($__internal_6ac66d88ee2ab46ea4fed3b01ba9f13a6b3404f2f17baf317e7c38b15a151287_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f87605029dac964dc74c990fe04bc869ac330f648e502d17495670305dd931ff = $this->env->getExtension("native_profiler");
        $__internal_f87605029dac964dc74c990fe04bc869ac330f648e502d17495670305dd931ff->enter($__internal_f87605029dac964dc74c990fe04bc869ac330f648e502d17495670305dd931ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f87605029dac964dc74c990fe04bc869ac330f648e502d17495670305dd931ff->leave($__internal_f87605029dac964dc74c990fe04bc869ac330f648e502d17495670305dd931ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_099bfe8615d2ce9b50c02f6a64375390a45865f8cd89b21f6f73c6de4b1ad456 = $this->env->getExtension("native_profiler");
        $__internal_099bfe8615d2ce9b50c02f6a64375390a45865f8cd89b21f6f73c6de4b1ad456->enter($__internal_099bfe8615d2ce9b50c02f6a64375390a45865f8cd89b21f6f73c6de4b1ad456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_099bfe8615d2ce9b50c02f6a64375390a45865f8cd89b21f6f73c6de4b1ad456->leave($__internal_099bfe8615d2ce9b50c02f6a64375390a45865f8cd89b21f6f73c6de4b1ad456_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dba36dd522831a7ae87ae4b5001ebbf67efb96f1dd47742a72fd9c2393d439d = $this->env->getExtension("native_profiler");
        $__internal_6dba36dd522831a7ae87ae4b5001ebbf67efb96f1dd47742a72fd9c2393d439d->enter($__internal_6dba36dd522831a7ae87ae4b5001ebbf67efb96f1dd47742a72fd9c2393d439d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6dba36dd522831a7ae87ae4b5001ebbf67efb96f1dd47742a72fd9c2393d439d->leave($__internal_6dba36dd522831a7ae87ae4b5001ebbf67efb96f1dd47742a72fd9c2393d439d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a5c5278e22cb3b5aa3b00a735ce3dffd1f306ba4043b0f9bf52ca917e90af63 = $this->env->getExtension("native_profiler");
        $__internal_8a5c5278e22cb3b5aa3b00a735ce3dffd1f306ba4043b0f9bf52ca917e90af63->enter($__internal_8a5c5278e22cb3b5aa3b00a735ce3dffd1f306ba4043b0f9bf52ca917e90af63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8a5c5278e22cb3b5aa3b00a735ce3dffd1f306ba4043b0f9bf52ca917e90af63->leave($__internal_8a5c5278e22cb3b5aa3b00a735ce3dffd1f306ba4043b0f9bf52ca917e90af63_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
