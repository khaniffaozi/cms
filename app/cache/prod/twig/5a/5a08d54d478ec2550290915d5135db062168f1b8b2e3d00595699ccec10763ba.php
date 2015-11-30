<?php

/* SynergyWebBundle:User:edit.html.twig */
class __TwigTemplate_99672254e4a94f8a7ad40c50de3d1bca0c043b56c62d5c33f4870ea75564c3c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynergyWebBundle:Layout:menu.html.twig", "SynergyWebBundle:User:edit.html.twig", 1);
        $this->blocks = array(
            'web_breadcrumb' => array($this, 'block_web_breadcrumb'),
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

    // line 4
    public function block_web_breadcrumb($context, array $blocks = array())
    {
        // line 5
        echo "<ol class=\"breadcrumb\">
    <li class=\"active\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("web_homepage");
        echo "\">Home</a></li>
    <li class=\"active\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("web_user");
        echo "\">User List</a></li>
    <li class=\"active\">Add</li>
</ol>
";
    }

    // line 12
    public function block_web_body($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"row\">
    <div class=\"col-md-6\">

        <legend>Add a new user :</legend>
        <fieldset>
            <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_user_save", array("id" => (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array())) : (0)))), "html", null, true);
        echo "\" method=\"POST\" id=\"userForm\">
                <div class=\"form-group col-md-12\">
                    <label for=\"username\">Username</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "username", array()), "html", null, true);
        echo "\" required>
                    <small class=\"text-muted\">Username must be unique.</small>
                </div>
                <div class=\"form-group col-md-12\">
                    <label for=\"password\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\">
                    <small class=\"text-muted\"></small>
                </div>
                <div class=\"form-group col-md-12\">
                    <label for=\"email\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email", array()), "html", null, true);
        echo "\" >
                </div>
                <!-- Country -->
                <div class=\"form-group col-md-12\">
                    <label for=\"country\">Country</label>
                    <select class=\"form-control\" id=\"userType\" name=\"country\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["country"]) ? $context["country"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 38
            echo "                        ";
            if (($context["val"] == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array()))) {
                // line 39
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "</option>
                        ";
            } else {
                // line 41
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "</option>
                        ";
            }
            // line 43
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </select>
                </div>
                <!-- Usertype -->
                <div class=\"form-group col-md-6\">
                    <label for=\"userType\">User Type</label>
                    <select class=\"form-control\" id=\"userType\" name=\"userType\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userType"]) ? $context["userType"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 51
            echo "                        ";
            if (($this->getAttribute($context["val"], "value", array()) == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userType", array()))) {
                // line 52
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "value", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "lable", array()), "html", null, true);
                echo "</option>
                        ";
            } else {
                // line 54
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "lable", array()), "html", null, true);
                echo "</option>
                        ";
            }
            // line 56
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </select>
                </div>
                <!-- Status -->
                <div class=\"form-group  col-md-6\">
                    <label for=\"isActive\">Status</label>
                    <select class=\"form-control\" id=\"isActive\" name=\"isActive\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["status"]) ? $context["status"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 64
            echo "                        ";
            if (($this->getAttribute($context["val"], "value", array()) == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isActive", array()))) {
                // line 65
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "value", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "lable", array()), "html", null, true);
                echo "</option>
                        ";
            } else {
                // line 67
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "lable", array()), "html", null, true);
                echo "</option>
                        ";
            }
            // line 69
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </select>
                </div>            
                <div class=\"form-group col-md-12\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-floppy-save\"></i> Save</button>
                </div>
            </form>
        </fieldset>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SynergyWebBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 70,  182 => 69,  174 => 67,  166 => 65,  163 => 64,  159 => 63,  151 => 57,  145 => 56,  137 => 54,  129 => 52,  126 => 51,  122 => 50,  114 => 44,  108 => 43,  100 => 41,  92 => 39,  89 => 38,  85 => 37,  76 => 31,  63 => 21,  57 => 18,  50 => 13,  47 => 12,  39 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'SynergyWebBundle:Layout:menu.html.twig' %}*/
/* */
/* */
/* {% block web_breadcrumb %}*/
/* <ol class="breadcrumb">*/
/*     <li class="active"><a href="{{path('web_homepage')}}">Home</a></li>*/
/*     <li class="active"><a href="{{path('web_user')}}">User List</a></li>*/
/*     <li class="active">Add</li>*/
/* </ol>*/
/* {% endblock %}*/
/* */
/* {% block web_body %}*/
/* <div class="row">*/
/*     <div class="col-md-6">*/
/* */
/*         <legend>Add a new user :</legend>*/
/*         <fieldset>*/
/*             <form action="{{ path('web_user_save',{'id' : data.id?:0})}}" method="POST" id="userForm">*/
/*                 <div class="form-group col-md-12">*/
/*                     <label for="username">Username</label>*/
/*                     <input type="text" class="form-control" id="username" name="username" value="{{data.username}}" required>*/
/*                     <small class="text-muted">Username must be unique.</small>*/
/*                 </div>*/
/*                 <div class="form-group col-md-12">*/
/*                     <label for="password">Password</label>*/
/*                     <input type="password" class="form-control" id="password" name="password">*/
/*                     <small class="text-muted"></small>*/
/*                 </div>*/
/*                 <div class="form-group col-md-12">*/
/*                     <label for="email">Email address</label>*/
/*                     <input type="email" class="form-control" id="email" name="email" value="{{data.email}}" >*/
/*                 </div>*/
/*                 <!-- Country -->*/
/*                 <div class="form-group col-md-12">*/
/*                     <label for="country">Country</label>*/
/*                     <select class="form-control" id="userType" name="country">*/
/*                     {% for val in country %}*/
/*                         {% if val ==  data.country%}*/
/*                         <option value="{{ val }}" selected>{{ val }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ val }}">{{ val }}</option>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/*                 <!-- Usertype -->*/
/*                 <div class="form-group col-md-6">*/
/*                     <label for="userType">User Type</label>*/
/*                     <select class="form-control" id="userType" name="userType">*/
/*                     {% for val in userType %}*/
/*                         {% if val.value ==  data.userType%}*/
/*                         <option value="{{ val.value }}" selected>{{ val.lable }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ val.value }}">{{ val.lable }}</option>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/*                 <!-- Status -->*/
/*                 <div class="form-group  col-md-6">*/
/*                     <label for="isActive">Status</label>*/
/*                     <select class="form-control" id="isActive" name="isActive">*/
/*                     {% for val in status %}*/
/*                         {% if val.value ==  data.isActive%}*/
/*                         <option value="{{ val.value }}" selected>{{ val.lable }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ val.value }}">{{ val.lable }}</option>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     </select>*/
/*                 </div>            */
/*                 <div class="form-group col-md-12">*/
/*                     <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-save"></i> Save</button>*/
/*                 </div>*/
/*             </form>*/
/*         </fieldset>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
