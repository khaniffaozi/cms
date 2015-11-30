<?php

/* SynergyWebBundle:Security:changePassword.html.twig */
class __TwigTemplate_8c347c05f08b093c0b89ef64752d90737a84dcf2e886f4055d71cbe5e0106692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynergyWebBundle:Layout:menu.html.twig", "SynergyWebBundle:Security:changePassword.html.twig", 1);
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
        echo "<div class=\"row\">
    <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <h4><i class=\"glyphicon glyphicon-lock\"></i> Change Your Password</h4>
                <hr>
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 11
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 12
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
                        <span class=\"glyphicon glyphicon-alert\" aria-hidden=\"true\"></span> 
                            ";
                // line 14
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                <form role=\"form\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("web_security_save_change");
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"passwordCurrent\">Current Password:</label>
                        <input type=\"password\" class=\"form-control\" id=\"passwordCurrent\" name=\"passwordCurrent\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["passwordCurrent"]) ? $context["passwordCurrent"] : null), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"passwordNew\">New Password:</label>
                        <input type=\"password\" class=\"form-control\" id=\"passwordNew\" name=\"passwordNew\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["passwordNew"]) ? $context["passwordNew"] : null), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"passwordRetype\">Retype New Password:</label>
                        <input type=\"password\" class=\"form-control\" id=\"passwordRetype\" name=\"passwordRetype\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["passwordRetype"]) ? $context["passwordRetype"] : null), "html", null, true);
        echo "\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-floppy-save\"></i> Save Change</button>
                </form>
            </div>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SynergyWebBundle:Security:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  84 => 25,  77 => 21,  71 => 18,  63 => 17,  54 => 14,  48 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SynergyWebBundle:Layout:menu.html.twig' %}*/
/* */
/* {% block web_body %}*/
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-body">*/
/*                 <h4><i class="glyphicon glyphicon-lock"></i> Change Your Password</h4>*/
/*                 <hr>*/
/*                 {% for label, flashes in app.session.flashbag.all %}*/
/*                     {% for flash in flashes %}*/
/*                     <div class="alert alert-{{ label }}" role="alert">*/
/*                         <span class="glyphicon glyphicon-alert" aria-hidden="true"></span> */
/*                             {{ flash }}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %} */
/*                 <form role="form" action="{{ path('web_security_save_change') }}" method="post">*/
/*                     <div class="form-group">*/
/*                         <label for="passwordCurrent">Current Password:</label>*/
/*                         <input type="password" class="form-control" id="passwordCurrent" name="passwordCurrent" value="{{passwordCurrent}}" required>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="passwordNew">New Password:</label>*/
/*                         <input type="password" class="form-control" id="passwordNew" name="passwordNew" value="{{passwordNew}}" required>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="passwordRetype">Retype New Password:</label>*/
/*                         <input type="password" class="form-control" id="passwordRetype" name="passwordRetype" value="{{passwordRetype}}" required>*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-save"></i> Save Change</button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
