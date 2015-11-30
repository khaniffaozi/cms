<?php

/* base.html.twig */
class __TwigTemplate_2a6c38fdb9f56f3d1f532dad4b8c8c580dd3fb30f8a56e2f5dc6d75248537570 extends Twig_Template
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
        $__internal_447c7cea2d01a3ce2a3d33917535d3bdb613a3a56edd5af6c9388945a0f7abe5 = $this->env->getExtension("native_profiler");
        $__internal_447c7cea2d01a3ce2a3d33917535d3bdb613a3a56edd5af6c9388945a0f7abe5->enter($__internal_447c7cea2d01a3ce2a3d33917535d3bdb613a3a56edd5af6c9388945a0f7abe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_447c7cea2d01a3ce2a3d33917535d3bdb613a3a56edd5af6c9388945a0f7abe5->leave($__internal_447c7cea2d01a3ce2a3d33917535d3bdb613a3a56edd5af6c9388945a0f7abe5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4329801db3a960742a4fbf77b75f9d35a8233add02428a4ff5b02b135ad301a5 = $this->env->getExtension("native_profiler");
        $__internal_4329801db3a960742a4fbf77b75f9d35a8233add02428a4ff5b02b135ad301a5->enter($__internal_4329801db3a960742a4fbf77b75f9d35a8233add02428a4ff5b02b135ad301a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4329801db3a960742a4fbf77b75f9d35a8233add02428a4ff5b02b135ad301a5->leave($__internal_4329801db3a960742a4fbf77b75f9d35a8233add02428a4ff5b02b135ad301a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2cba1d2c3c1721d6f92c5450f97147c34ab8f1837b455b1cf700c6a1e6d220ad = $this->env->getExtension("native_profiler");
        $__internal_2cba1d2c3c1721d6f92c5450f97147c34ab8f1837b455b1cf700c6a1e6d220ad->enter($__internal_2cba1d2c3c1721d6f92c5450f97147c34ab8f1837b455b1cf700c6a1e6d220ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2cba1d2c3c1721d6f92c5450f97147c34ab8f1837b455b1cf700c6a1e6d220ad->leave($__internal_2cba1d2c3c1721d6f92c5450f97147c34ab8f1837b455b1cf700c6a1e6d220ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a91f389da433b554d7973cf96ac9a0cc3560dcf2cfbc90bc47596a094f4a9351 = $this->env->getExtension("native_profiler");
        $__internal_a91f389da433b554d7973cf96ac9a0cc3560dcf2cfbc90bc47596a094f4a9351->enter($__internal_a91f389da433b554d7973cf96ac9a0cc3560dcf2cfbc90bc47596a094f4a9351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a91f389da433b554d7973cf96ac9a0cc3560dcf2cfbc90bc47596a094f4a9351->leave($__internal_a91f389da433b554d7973cf96ac9a0cc3560dcf2cfbc90bc47596a094f4a9351_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19e50ccd762d0789c5357269d7932d90e57a17e5307b1efa4b5abbc0fdc93e98 = $this->env->getExtension("native_profiler");
        $__internal_19e50ccd762d0789c5357269d7932d90e57a17e5307b1efa4b5abbc0fdc93e98->enter($__internal_19e50ccd762d0789c5357269d7932d90e57a17e5307b1efa4b5abbc0fdc93e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_19e50ccd762d0789c5357269d7932d90e57a17e5307b1efa4b5abbc0fdc93e98->leave($__internal_19e50ccd762d0789c5357269d7932d90e57a17e5307b1efa4b5abbc0fdc93e98_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
