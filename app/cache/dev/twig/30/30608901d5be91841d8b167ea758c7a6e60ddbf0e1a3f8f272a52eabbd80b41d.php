<?php

/* SynergyWebBundle:User:edit.html.twig */
class __TwigTemplate_79212a2e781b2d283a4689b79fbaf7a34e0ee09c6d322ac044bad26836c3052c extends Twig_Template
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
        $__internal_2bd805278ae1d6758ce9bb0f5aa4858837b583db1c60b80057370b9d6836b18c = $this->env->getExtension("native_profiler");
        $__internal_2bd805278ae1d6758ce9bb0f5aa4858837b583db1c60b80057370b9d6836b18c->enter($__internal_2bd805278ae1d6758ce9bb0f5aa4858837b583db1c60b80057370b9d6836b18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynergyWebBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bd805278ae1d6758ce9bb0f5aa4858837b583db1c60b80057370b9d6836b18c->leave($__internal_2bd805278ae1d6758ce9bb0f5aa4858837b583db1c60b80057370b9d6836b18c_prof);

    }

    // line 4
    public function block_web_breadcrumb($context, array $blocks = array())
    {
        $__internal_89ce4d44fece78fe944f6a05be6c3d28125f50e3789d2083259930c398043b38 = $this->env->getExtension("native_profiler");
        $__internal_89ce4d44fece78fe944f6a05be6c3d28125f50e3789d2083259930c398043b38->enter($__internal_89ce4d44fece78fe944f6a05be6c3d28125f50e3789d2083259930c398043b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_breadcrumb"));

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
        
        $__internal_89ce4d44fece78fe944f6a05be6c3d28125f50e3789d2083259930c398043b38->leave($__internal_89ce4d44fece78fe944f6a05be6c3d28125f50e3789d2083259930c398043b38_prof);

    }

    // line 12
    public function block_web_body($context, array $blocks = array())
    {
        $__internal_d60bc3d01376ca79df75ad1bae4b616fc1cc36a0f73805d5a069bd4a3e21eae6 = $this->env->getExtension("native_profiler");
        $__internal_d60bc3d01376ca79df75ad1bae4b616fc1cc36a0f73805d5a069bd4a3e21eae6->enter($__internal_d60bc3d01376ca79df75ad1bae4b616fc1cc36a0f73805d5a069bd4a3e21eae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_body"));

        // line 13
        echo "<div class=\"row\">
    <div class=\"col-md-6\">

        <legend>Add a new user :</legend>
        <fieldset>
            <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_user_save", array("id" => (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array())) : (0)))), "html", null, true);
        echo "\" method=\"POST\" id=\"userForm\">
                <div class=\"form-group col-md-12\">
                    <label for=\"username\">Username</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "username", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email", array()), "html", null, true);
        echo "\" >
                </div>
                <!-- Country -->
                <div class=\"form-group col-md-12\">
                    <label for=\"country\">Country</label>
                    <select class=\"form-control\" id=\"userType\" name=\"country\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 38
            echo "                        ";
            if (($context["val"] == $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "country", array()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["userType"]) ? $context["userType"] : $this->getContext($context, "userType")));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 51
            echo "                        ";
            if (($this->getAttribute($context["val"], "value", array()) == $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userType", array()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 64
            echo "                        ";
            if (($this->getAttribute($context["val"], "value", array()) == $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "isActive", array()))) {
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
        
        $__internal_d60bc3d01376ca79df75ad1bae4b616fc1cc36a0f73805d5a069bd4a3e21eae6->leave($__internal_d60bc3d01376ca79df75ad1bae4b616fc1cc36a0f73805d5a069bd4a3e21eae6_prof);

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
        return array (  203 => 70,  197 => 69,  189 => 67,  181 => 65,  178 => 64,  174 => 63,  166 => 57,  160 => 56,  152 => 54,  144 => 52,  141 => 51,  137 => 50,  129 => 44,  123 => 43,  115 => 41,  107 => 39,  104 => 38,  100 => 37,  91 => 31,  78 => 21,  72 => 18,  65 => 13,  59 => 12,  48 => 7,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
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
