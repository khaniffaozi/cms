<?php

/* SynergyWebBundle::base.html.twig */
class __TwigTemplate_a021f8c543cd53033e7bbc724c39bb69f4eda7e2cc52458c493a3cc88790d6c4 extends Twig_Template
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
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Synergy Web Content Management System";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
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
    }

    // line 27
    public function block_header_navigation_links($context, array $blocks = array())
    {
        // line 28
        echo "                    ";
    }

    // line 36
    public function block_web_breadcrumb($context, array $blocks = array())
    {
        // line 37
        echo "            ";
    }

    // line 39
    public function block_web_body($context, array $blocks = array())
    {
        // line 40
        echo "            ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "            ";
        // line 55
        echo "        ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "SynergyWebBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  172 => 59,  167 => 58,  164 => 57,  160 => 55,  158 => 45,  155 => 44,  151 => 40,  148 => 39,  144 => 37,  141 => 36,  137 => 28,  134 => 27,  129 => 61,  127 => 57,  124 => 56,  122 => 44,  117 => 41,  115 => 39,  112 => 38,  110 => 36,  100 => 28,  98 => 27,  94 => 26,  87 => 22,  75 => 12,  72 => 11,  66 => 8,  62 => 7,  57 => 6,  54 => 5,  48 => 4,  43 => 63,  41 => 11,  38 => 10,  36 => 5,  32 => 4,  27 => 1,);
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
