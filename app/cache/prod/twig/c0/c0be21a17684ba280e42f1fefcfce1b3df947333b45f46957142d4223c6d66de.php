<?php

/* SynergyWebBundle:Security:login.html.twig */
class __TwigTemplate_b966f40cb3eaa54ffd32d061ca7edfbeebc2e8d1615c0c76a9a89a93146e4fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynergyWebBundle::base.html.twig", "SynergyWebBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'web_body' => array($this, 'block_web_body'),
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

    // line 2
    public function block_web_body($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"background\">
    <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/bg1.jpg"), "html", null, true);
        echo "\" class=\"stretch\" alt=\"\" />
</div>
<div class=\"row\">
    <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <h4><i class=\"glyphicon glyphicon-lock\"></i> Secure Sign in</h4>
                <hr>
                ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 13
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Error:</span>
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "
                </div>
                ";
        }
        // line 19
        echo "                <form role=\"form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("web_login_check");
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"username\">Username:</label>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Password:</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
                    </div>
                    <div class=\"checkbox\">
                        <label><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" /> Keep me logged in</label>
                    </div>
                        <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
                </form>
            </div>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SynergyWebBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  58 => 19,  52 => 16,  47 => 13,  45 => 12,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'SynergyWebBundle::base.html.twig' %}*/
/* {% block web_body %}*/
/* <div id="background">*/
/*     <img src="{{ asset('assets/img/bg1.jpg') }}" class="stretch" alt="" />*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-body">*/
/*                 <h4><i class="glyphicon glyphicon-lock"></i> Secure Sign in</h4>*/
/*                 <hr>*/
/*                 {% if error %}*/
/*                 <div class="alert alert-danger" role="alert">*/
/*                     <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/*                     <span class="sr-only">Error:</span>*/
/*                     {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 <form role="form" action="{{ path('web_login_check') }}" method="post">*/
/*                     <div class="form-group">*/
/*                         <label for="username">Username:</label>*/
/*                         <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}">*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="password">Password:</label>*/
/*                         <input type="password" class="form-control" id="password" name="_password">*/
/*                     </div>*/
/*                     <div class="checkbox">*/
/*                         <label><input type="checkbox" id="remember_me" name="_remember_me" /> Keep me logged in</label>*/
/*                     </div>*/
/*                         <button type="submit" class="btn btn-default">Sign in</button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
