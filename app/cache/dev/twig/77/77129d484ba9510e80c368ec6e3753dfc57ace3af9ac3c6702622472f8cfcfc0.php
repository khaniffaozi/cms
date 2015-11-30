<?php

/* SynergyWebBundle::base.html.twig */
class __TwigTemplate_62d6316695dcae183577142cb92f5e73ddf8a237c5f3e8c01af1366ad43d1a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'web_breadcrumb' => array($this, 'block_web_breadcrumb'),
            'web_body' => array($this, 'block_web_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9f468753d9d707c1e19d7567e17648968f55961d5bde5166061c217de308bdf = $this->env->getExtension("native_profiler");
        $__internal_b9f468753d9d707c1e19d7567e17648968f55961d5bde5166061c217de308bdf->enter($__internal_b9f468753d9d707c1e19d7567e17648968f55961d5bde5166061c217de308bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynergyWebBundle::base.html.twig"));

        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "</html>
";
        
        $__internal_b9f468753d9d707c1e19d7567e17648968f55961d5bde5166061c217de308bdf->leave($__internal_b9f468753d9d707c1e19d7567e17648968f55961d5bde5166061c217de308bdf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bbef4c2bb2ad45ebf4755dc13b8fb335be380910eb2af68edffb2605f01b8e0 = $this->env->getExtension("native_profiler");
        $__internal_8bbef4c2bb2ad45ebf4755dc13b8fb335be380910eb2af68edffb2605f01b8e0->enter($__internal_8bbef4c2bb2ad45ebf4755dc13b8fb335be380910eb2af68edffb2605f01b8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Synergy Web Content Management System";
        
        $__internal_8bbef4c2bb2ad45ebf4755dc13b8fb335be380910eb2af68edffb2605f01b8e0->leave($__internal_8bbef4c2bb2ad45ebf4755dc13b8fb335be380910eb2af68edffb2605f01b8e0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d96da7d192f736351a0d00d19712a1d653af8c61950a0d4bc24765669891dfe = $this->env->getExtension("native_profiler");
        $__internal_6d96da7d192f736351a0d00d19712a1d653af8c61950a0d4bc24765669891dfe->enter($__internal_6d96da7d192f736351a0d00d19712a1d653af8c61950a0d4bc24765669891dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_6d96da7d192f736351a0d00d19712a1d653af8c61950a0d4bc24765669891dfe->leave($__internal_6d96da7d192f736351a0d00d19712a1d653af8c61950a0d4bc24765669891dfe_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_f80164b0d9a62277022cdc34260a8a93166431a061a0e40912bbab4168518a3e = $this->env->getExtension("native_profiler");
        $__internal_f80164b0d9a62277022cdc34260a8a93166431a061a0e40912bbab4168518a3e->enter($__internal_f80164b0d9a62277022cdc34260a8a93166431a061a0e40912bbab4168518a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    <body>        
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("web_homepage");
        echo "\">Synergy Engineering <i class=\"glyphicon glyphicon-home\"></i></a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\"> 
                        <li><a target=\"_blank\"  href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("web_goto_homepage");
        echo "\"><i class=\"glyphicon glyphicon-globe\"></i> Go to Synergy Web</a></li>
                    ";
        // line 27
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 28
        echo "                                            
                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"container\">
            
            ";
        // line 36
        $this->displayBlock('web_breadcrumb', $context, $blocks);
        // line 38
        echo "            
            ";
        // line 39
        $this->displayBlock('web_body', $context, $blocks);
        // line 41
        echo "            
        </div>       

        ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
    ";
        
        $__internal_f80164b0d9a62277022cdc34260a8a93166431a061a0e40912bbab4168518a3e->leave($__internal_f80164b0d9a62277022cdc34260a8a93166431a061a0e40912bbab4168518a3e_prof);

    }

    // line 27
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_bb067ba633c0b0c23a64cf50ba8968b5926beab62f1f7b691c6509c48f8f794b = $this->env->getExtension("native_profiler");
        $__internal_bb067ba633c0b0c23a64cf50ba8968b5926beab62f1f7b691c6509c48f8f794b->enter($__internal_bb067ba633c0b0c23a64cf50ba8968b5926beab62f1f7b691c6509c48f8f794b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 28
        echo "                    ";
        
        $__internal_bb067ba633c0b0c23a64cf50ba8968b5926beab62f1f7b691c6509c48f8f794b->leave($__internal_bb067ba633c0b0c23a64cf50ba8968b5926beab62f1f7b691c6509c48f8f794b_prof);

    }

    // line 36
    public function block_web_breadcrumb($context, array $blocks = array())
    {
        $__internal_eb2995b88b9b60f670575fcb857a897d5e3258e238c55d124e86806fa6d80c03 = $this->env->getExtension("native_profiler");
        $__internal_eb2995b88b9b60f670575fcb857a897d5e3258e238c55d124e86806fa6d80c03->enter($__internal_eb2995b88b9b60f670575fcb857a897d5e3258e238c55d124e86806fa6d80c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_breadcrumb"));

        // line 37
        echo "            ";
        
        $__internal_eb2995b88b9b60f670575fcb857a897d5e3258e238c55d124e86806fa6d80c03->leave($__internal_eb2995b88b9b60f670575fcb857a897d5e3258e238c55d124e86806fa6d80c03_prof);

    }

    // line 39
    public function block_web_body($context, array $blocks = array())
    {
        $__internal_20c78e6a078cb22749dc203869fb6c1c5300df1b2fb1afeab6467e8171816f84 = $this->env->getExtension("native_profiler");
        $__internal_20c78e6a078cb22749dc203869fb6c1c5300df1b2fb1afeab6467e8171816f84->enter($__internal_20c78e6a078cb22749dc203869fb6c1c5300df1b2fb1afeab6467e8171816f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_body"));

        // line 40
        echo "            ";
        
        $__internal_20c78e6a078cb22749dc203869fb6c1c5300df1b2fb1afeab6467e8171816f84->leave($__internal_20c78e6a078cb22749dc203869fb6c1c5300df1b2fb1afeab6467e8171816f84_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        $__internal_565adfadae5381805fbf7adca7c8f705469215599b354493466b1aa42f5a7d3f = $this->env->getExtension("native_profiler");
        $__internal_565adfadae5381805fbf7adca7c8f705469215599b354493466b1aa42f5a7d3f->enter($__internal_565adfadae5381805fbf7adca7c8f705469215599b354493466b1aa42f5a7d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 45
        echo "            ";
        // line 55
        echo "        ";
        
        $__internal_565adfadae5381805fbf7adca7c8f705469215599b354493466b1aa42f5a7d3f->leave($__internal_565adfadae5381805fbf7adca7c8f705469215599b354493466b1aa42f5a7d3f_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f57a08e7831f9a8a807c34b4aa05093b1737e2e4a875f8177e6e788fd608584 = $this->env->getExtension("native_profiler");
        $__internal_0f57a08e7831f9a8a807c34b4aa05093b1737e2e4a875f8177e6e788fd608584->enter($__internal_0f57a08e7831f9a8a807c34b4aa05093b1737e2e4a875f8177e6e788fd608584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_0f57a08e7831f9a8a807c34b4aa05093b1737e2e4a875f8177e6e788fd608584->leave($__internal_0f57a08e7831f9a8a807c34b4aa05093b1737e2e4a875f8177e6e788fd608584_prof);

    }

    public function getTemplateName()
    {
        return "SynergyWebBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  223 => 59,  218 => 58,  212 => 57,  205 => 55,  203 => 45,  197 => 44,  190 => 40,  184 => 39,  177 => 37,  171 => 36,  164 => 28,  158 => 27,  150 => 61,  148 => 57,  145 => 56,  143 => 44,  138 => 41,  136 => 39,  133 => 38,  131 => 36,  121 => 28,  119 => 27,  115 => 26,  108 => 22,  96 => 12,  90 => 11,  81 => 8,  77 => 7,  72 => 6,  66 => 5,  54 => 4,  46 => 63,  44 => 11,  41 => 10,  39 => 5,  35 => 4,  30 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Synergy Web Content Management System{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />*/
/*         {% endblock %}*/
/*     </head>*/
/*     {% block header %}*/
/*     <body>        */
/*         <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{path('web_homepage')}}">Synergy Engineering <i class="glyphicon glyphicon-home"></i></a>*/
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav navbar-right"> */
/*                         <li><a target="_blank"  href="{{path('web_goto_homepage')}}"><i class="glyphicon glyphicon-globe"></i> Go to Synergy Web</a></li>*/
/*                     {% block header_navigation_links %}*/
/*                     {% endblock %}                                            */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <div class="container">*/
/*             */
/*             {% block web_breadcrumb %}*/
/*             {% endblock %}*/
/*             */
/*             {% block web_body %}*/
/*             {% endblock %}*/
/*             */
/*         </div>       */
/* */
/*         {% block footer %}*/
/*             {#<footer>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <p>Copyright &copy; 2014 - 2015</p>*/
/*                             <p>PT. SYNERGY ENGINEERING, All Rights Reserved</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>#}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*         <script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/*     {% endblock %}*/
/* </html>*/
/* */
