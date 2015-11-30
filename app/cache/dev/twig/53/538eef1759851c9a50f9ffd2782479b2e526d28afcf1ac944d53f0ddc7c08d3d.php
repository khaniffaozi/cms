<?php

/* SynergyWebBundle:Security:login.html.twig */
class __TwigTemplate_a3dbaea085cefcf94b0574ef2eb5e622720ebf670d74190da9fd5f9f5b8d2329 extends Twig_Template
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
        $__internal_addc6044a5eb5b5fe4f4f18d08c4e79894af53b7ba0e5dd7ca2e18ebde7083e8 = $this->env->getExtension("native_profiler");
        $__internal_addc6044a5eb5b5fe4f4f18d08c4e79894af53b7ba0e5dd7ca2e18ebde7083e8->enter($__internal_addc6044a5eb5b5fe4f4f18d08c4e79894af53b7ba0e5dd7ca2e18ebde7083e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynergyWebBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_addc6044a5eb5b5fe4f4f18d08c4e79894af53b7ba0e5dd7ca2e18ebde7083e8->leave($__internal_addc6044a5eb5b5fe4f4f18d08c4e79894af53b7ba0e5dd7ca2e18ebde7083e8_prof);

    }

    // line 2
    public function block_web_body($context, array $blocks = array())
    {
        $__internal_5c248d0a06c24af3fa61a19879e6aabc3d372c852adca658f33646773b71cf82 = $this->env->getExtension("native_profiler");
        $__internal_5c248d0a06c24af3fa61a19879e6aabc3d372c852adca658f33646773b71cf82->enter($__internal_5c248d0a06c24af3fa61a19879e6aabc3d372c852adca658f33646773b71cf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_body"));

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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Error:</span>
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_5c248d0a06c24af3fa61a19879e6aabc3d372c852adca658f33646773b71cf82->leave($__internal_5c248d0a06c24af3fa61a19879e6aabc3d372c852adca658f33646773b71cf82_prof);

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
        return array (  74 => 22,  67 => 19,  61 => 16,  56 => 13,  54 => 12,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
