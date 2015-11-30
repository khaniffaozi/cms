<?php

/* SynergyWebBundle:Layout:menu.html.twig */
class __TwigTemplate_c10a19d924214b521a084eec073c75a1b5f266a76e5121838fdb3106e4378959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynergyWebBundle::base.html.twig", "SynergyWebBundle:Layout:menu.html.twig", 1);
        $this->blocks = array(
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynergyWebBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3880535429065b7d286d2866985c16d8148f0126c8c5da265c281e4cd5d607fd = $this->env->getExtension("native_profiler");
        $__internal_3880535429065b7d286d2866985c16d8148f0126c8c5da265c281e4cd5d607fd->enter($__internal_3880535429065b7d286d2866985c16d8148f0126c8c5da265c281e4cd5d607fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynergyWebBundle:Layout:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3880535429065b7d286d2866985c16d8148f0126c8c5da265c281e4cd5d607fd->leave($__internal_3880535429065b7d286d2866985c16d8148f0126c8c5da265c281e4cd5d607fd_prof);

    }

    // line 3
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_50e53b1a9c0d6b2691ce99d64a6da2b739afc6853bbb7909776fcef21e900ec9 = $this->env->getExtension("native_profiler");
        $__internal_50e53b1a9c0d6b2691ce99d64a6da2b739afc6853bbb7909776fcef21e900ec9->enter($__internal_50e53b1a9c0d6b2691ce99d64a6da2b739afc6853bbb7909776fcef21e900ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getUserType", array()) == "admin")) {
            // line 5
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("web_user");
            echo "\"><i class=\"glyphicon glyphicon-user\"></i> Users</a></li>
        <li><a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("web_job");
            echo "\"><i class=\"glyphicon glyphicon-briefcase\"></i> Job Vacancies</a></li> 
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"glyphicon glyphicon-cog\"></i> ";
            // line 8
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo " <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("web_logout");
            echo "\"><i class=\"glyphicon glyphicon-log-out\"></i> Logout</a></li>
                <li role=\"separator\" class=\"divider\"></li>
                <li><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("web_security_change_password");
            echo "\"><i class=\"glyphicon glyphicon-lock\"></i>  Change Password</a></li>
            </ul>
        </li>
    ";
        } else {
            // line 16
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("web_job");
            echo "\"><i class=\"glyphicon glyphicon-briefcase\"></i> Job Vacancies</a></li> 
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"glyphicon glyphicon-cog\"></i> ";
            // line 18
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo " <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("web_logout");
            echo "\"><i class=\"glyphicon glyphicon-log-out\"></i> Logout</a></li>
                <li role=\"separator\" class=\"divider\"></li>
                <li><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("web_security_change_password");
            echo "\"><i class=\"glyphicon glyphicon-lock\"></i>  Change Password</a></li>
            </ul>
        </li>
    ";
        }
        // line 25
        echo " 
";
        
        $__internal_50e53b1a9c0d6b2691ce99d64a6da2b739afc6853bbb7909776fcef21e900ec9->leave($__internal_50e53b1a9c0d6b2691ce99d64a6da2b739afc6853bbb7909776fcef21e900ec9_prof);

    }

    public function getTemplateName()
    {
        return "SynergyWebBundle:Layout:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  86 => 22,  81 => 20,  76 => 18,  70 => 16,  63 => 12,  58 => 10,  53 => 8,  48 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SynergyWebBundle::base.html.twig' %}*/
/* */
/* {% block header_navigation_links %}*/
/*     {% if app.user.getUserType == 'admin' %}*/
/*         <li><a href="{{path('web_user')}}"><i class="glyphicon glyphicon-user"></i> Users</a></li>*/
/*         <li><a href="{{path('web_job')}}"><i class="glyphicon glyphicon-briefcase"></i> Job Vacancies</a></li> */
/*         <li class="dropdown">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i> {{app.user.username | capitalize }} <span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="{{path('web_logout')}}"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>*/
/*                 <li role="separator" class="divider"></li>*/
/*                 <li><a href="{{path('web_security_change_password')}}"><i class="glyphicon glyphicon-lock"></i>  Change Password</a></li>*/
/*             </ul>*/
/*         </li>*/
/*     {% else %}*/
/*         <li><a href="{{path('web_job')}}"><i class="glyphicon glyphicon-briefcase"></i> Job Vacancies</a></li> */
/*         <li class="dropdown">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i> {{app.user.username | capitalize }} <span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="{{path('web_logout')}}"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>*/
/*                 <li role="separator" class="divider"></li>*/
/*                 <li><a href="{{path('web_security_change_password')}}"><i class="glyphicon glyphicon-lock"></i>  Change Password</a></li>*/
/*             </ul>*/
/*         </li>*/
/*     {% endif %} */
/* {% endblock %}*/
