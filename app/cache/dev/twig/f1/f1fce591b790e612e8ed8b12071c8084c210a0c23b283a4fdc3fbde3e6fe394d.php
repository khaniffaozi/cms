<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_556f097638d3d6c60be06ce921064917211fb8548b17b65d00bab0444874851c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b24b37edf74bab7efbb0bd4bd131d0bde87a900a07cc6e698a167539f250ec3b = $this->env->getExtension("native_profiler");
        $__internal_b24b37edf74bab7efbb0bd4bd131d0bde87a900a07cc6e698a167539f250ec3b->enter($__internal_b24b37edf74bab7efbb0bd4bd131d0bde87a900a07cc6e698a167539f250ec3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24b37edf74bab7efbb0bd4bd131d0bde87a900a07cc6e698a167539f250ec3b->leave($__internal_b24b37edf74bab7efbb0bd4bd131d0bde87a900a07cc6e698a167539f250ec3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90ee1e30127ee064dc70655fccd8eac8ac70f285421fae2bee114ca5b8273806 = $this->env->getExtension("native_profiler");
        $__internal_90ee1e30127ee064dc70655fccd8eac8ac70f285421fae2bee114ca5b8273806->enter($__internal_90ee1e30127ee064dc70655fccd8eac8ac70f285421fae2bee114ca5b8273806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_90ee1e30127ee064dc70655fccd8eac8ac70f285421fae2bee114ca5b8273806->leave($__internal_90ee1e30127ee064dc70655fccd8eac8ac70f285421fae2bee114ca5b8273806_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_568957b91c19a693416be893b00e9d7980b44a9aa66ac3256065f2770124a7dd = $this->env->getExtension("native_profiler");
        $__internal_568957b91c19a693416be893b00e9d7980b44a9aa66ac3256065f2770124a7dd->enter($__internal_568957b91c19a693416be893b00e9d7980b44a9aa66ac3256065f2770124a7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_568957b91c19a693416be893b00e9d7980b44a9aa66ac3256065f2770124a7dd->leave($__internal_568957b91c19a693416be893b00e9d7980b44a9aa66ac3256065f2770124a7dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
