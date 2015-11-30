<?php

/* SynergyWebBundle:Layout:menu.html.twig */
class __TwigTemplate_88ff431cbcbfa9cf1891e7d8ebaa3b5bfc56280f964292672f457a6c0395103d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header_navigation_links($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getUserType", array()) == "admin")) {
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
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "html", null, true);
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
        return array (  84 => 25,  77 => 22,  72 => 20,  67 => 18,  61 => 16,  54 => 12,  49 => 10,  44 => 8,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
