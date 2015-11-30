<?php

/* SynergyWebBundle:Job:edit.html.twig */
class __TwigTemplate_981b5a125e712ebad2756ee0bbd43aee88dce5181d7d7f2a6a388e02ea669fad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynergyWebBundle:Layout:menu.html.twig", "SynergyWebBundle:Job:edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'web_breadcrumb' => array($this, 'block_web_breadcrumb'),
            'web_body' => array($this, 'block_web_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-1.3.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui-1.7.1.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/clone.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
          jQuery.noConflict();
          \$(\"#responsibilities-list\").sortable({
            handle : '.handle'
          });
          \$(\"#required-list\").sortable({
            handle : '.handle'
          });
          \$(\"#desirable-list\").sortable({
            handle : '.handle'
          });
    });
</script>
";
    }

    // line 29
    public function block_web_breadcrumb($context, array $blocks = array())
    {
        // line 30
        echo "<ol class=\"breadcrumb\">
    <li class=\"active\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("web_homepage");
        echo "\">Home</a></li>
    <li class=\"active\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("web_job");
        echo "\">Job List</a></li>
    <li class=\"active\">Add</li>
</ol>
";
    }

    // line 37
    public function block_web_body($context, array $blocks = array())
    {
        // line 38
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <form class=\"form\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_job_save", array("id" => (($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array())) ? ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array())) : (0)))), "html", null, true);
        echo "\" method=\"POST\" id=\"jobForm\">
            <legend>Add new job vacancy</legend>
            <fieldset>
                <div class=\"row\">
                    <div class=\"col-md-6 \">
                        <div class=\"form-group\">
                            <label for=\"title\">Title</label>
                            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "title", array()), "html", null, true);
        echo "\" placeholder=\"Example: Junior Web Programmer (IT Department)\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"isPublish\">Status</label>
                            <div class=\"row\">
                                <div class=\"col-md-5 \">
                                <select class=\"form-control\" id=\"isPublish\" name=\"isPublish\">
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["status"]) ? $context["status"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 55
            echo "                                    ";
            if (($this->getAttribute($context["val"], "value", array()) == $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isPublish", array()))) {
                // line 56
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "value", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "lable", array()), "html", null, true);
                echo "</option>
                                    ";
            } else {
                // line 58
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "lable", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            // line 60
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                </select>
                                </div>
                            </div>
                        </div>   
                        <div class=\"form-group\">
                            <label for=\"dtp_input2\" class=\"control-label\" required>Valid Until</label>
                            <div class=\"input-group date form_date col-md-6\" data-date=\"\" data-date-format=\"dd-mm-yyyy\" data-link-field=\"dtp_input2\" data-link-format=\"yyyy-mm-dd\">
                                <input class=\"form-control\" size=\"16\" type=\"text\" id=\"validUntil\" name=\"validUntil\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "validUntil", array()), "html", null, true);
        echo "\" readonly>
                                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-remove\"></span></span>
                                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                            </div>
                            <input type=\"hidden\" id=\"dtp_input2\" value=\"\" /><br/>
                        </div>    
                    </div>
                    <div class=\"col-md-6 \">
                        <!-- Input Responsibilities -->
                        <label class=\"control-label\" for=\"responsibilities\">Responsibilities:</label>                
                        <div class=\"form-group col-md-12 well\" id=\"responsibilities-list\">
                            <div class=\"form-responsibilities\" >
                                <button type=\"button\" class=\"btn btn-success add-responsibilities\" >
                                    <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Add
                                </button><br><br>
                            </div>
                            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsibilities"]) ? $context["responsibilities"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 85
            echo "                            <div class=\"form-responsibilities\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"  style=\"cursor:pointer\"><i class=\"glyphicon glyphicon-move handle\" ></i></span>
                                    <textarea id=\"responsibilities";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" name=\"responsibilities[]\" type=\"text\" class=\"form-control\" rows=\"3\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "description", array()), "html", null, true);
            echo "</textarea>
                                    <span class=\"input-group-addon btn btn-danger remove-responsibilities\"><i class=\"glyphicon glyphicon-remove\"></i></span>
                                </div>
                            </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                            <div class=\"form-responsibilities\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"  style=\"cursor:pointer\"><i class=\"glyphicon glyphicon-move handle\" ></i></span>
                                    <textarea id=\"responsibilities\" name=\"responsibilities[]\" type=\"text\" class=\"form-control\" rows=\"3\"></textarea>
                                    <span class=\"input-group-addon btn btn-danger remove-responsibilities\"><i class=\"glyphicon glyphicon-remove\"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row\">
                    <!-- Input Required -->
                    <div class=\"col-md-6\">
                        <label class=\"control-label\" for=\"required\">Skills and Qualifications:<br>Required:</label>                
                        <div class=\"form-group col-md-12 well\" id=\"required-list\">
                            <div class=\"form-required\" >
                                <button type=\"button\" class=\"btn btn-success add-required\" >
                                    <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Add
                                </button><br><br>
                            </div>
                            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["required"]) ? $context["required"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 115
            echo "                            <div class=\"form-required\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"  style=\"cursor:pointer\"><i class=\"glyphicon glyphicon-move handle\" ></i></span>
                                    <textarea id=\"required";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" name=\"required[]\" type=\"text\" class=\"form-control\" rows=\"3\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "description", array()), "html", null, true);
            echo "</textarea>
                                    <span class=\"input-group-addon btn btn-danger remove-required\"><i class=\"glyphicon glyphicon-remove\"></i></span>
                                </div>
                            </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                            <div class=\"form-required\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"  style=\"cursor:pointer\"><i class=\"glyphicon glyphicon-move handle\" ></i></span>
                                    <textarea id=\"required\" name=\"required[]\" type=\"text\" class=\"form-control\" rows=\"3\"></textarea>
                                    <span class=\"input-group-addon btn btn-danger remove-required\"><i class=\"glyphicon glyphicon-remove\"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Input Desirable -->
                    <div class=\"col-md-6 \">  
                        <label class=\"control-label\" for=\"desirable\"><br>Desirable:</label>                
                        <div class=\"form-group col-md-12 well\" id=\"desirable-list\">
                            <div class=\"form-desirable\" >
                                <button type=\"button\" class=\"btn btn-success add-desirable\" >
                                    <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Add
                                </button><br><br>
                            </div>
                            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["desirable"]) ? $context["desirable"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 142
            echo "                            <div class=\"form-desirable\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"  style=\"cursor:pointer\"><i class=\"glyphicon glyphicon-move handle\" ></i></span>
                                    <textarea id=\"desirable";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" name=\"desirable[]\" type=\"text\" class=\"form-control\" rows=\"3\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "description", array()), "html", null, true);
            echo "</textarea>
                                    <span class=\"input-group-addon btn btn-danger remove-desirable\"><i class=\"glyphicon glyphicon-remove\"></i></span>
                                </div>
                            </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                            <div class=\"form-desirable\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"  style=\"cursor:pointer\"><i class=\"glyphicon glyphicon-move handle\" ></i></span>
                                    <textarea id=\"desirable\" name=\"desirable[]\" type=\"text\" class=\"form-control\" rows=\"3\"></textarea>
                                    <span class=\"input-group-addon btn btn-danger remove-desirable\"><i class=\"glyphicon glyphicon-remove\"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12\"> 
                        <div class=\"form-group\">
                            <p>
                                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-floppy-save\"></i> Save</button>
                            </p>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>        
    </div>
</div>
";
    }

    // line 172
    public function block_javascripts($context, array $blocks = array())
    {
        // line 173
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$('.form_date').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "SynergyWebBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 173,  386 => 172,  361 => 150,  340 => 145,  335 => 142,  318 => 141,  298 => 123,  277 => 118,  272 => 115,  255 => 114,  232 => 93,  211 => 88,  206 => 85,  189 => 84,  170 => 68,  161 => 61,  155 => 60,  147 => 58,  139 => 56,  136 => 55,  132 => 54,  122 => 47,  112 => 40,  108 => 38,  105 => 37,  97 => 32,  93 => 31,  90 => 30,  87 => 29,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'SynergyWebBundle:Layout:menu.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/* <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />*/
/* <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />*/
/* <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.css') }}" />*/
/* <script src="{{ asset('assets/js/jquery-1.3.2.min.js') }}"></script>*/
/* <script src="{{ asset('assets/js/jquery-ui-1.7.1.custom.min.js') }}"></script>*/
/* <script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/* <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/* <script src="{{ asset('assets/js/clone.js') }}"></script>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*           jQuery.noConflict();*/
/*           $("#responsibilities-list").sortable({*/
/*             handle : '.handle'*/
/*           });*/
/*           $("#required-list").sortable({*/
/*             handle : '.handle'*/
/*           });*/
/*           $("#desirable-list").sortable({*/
/*             handle : '.handle'*/
/*           });*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
/* */
/* {% block web_breadcrumb %}*/
/* <ol class="breadcrumb">*/
/*     <li class="active"><a href="{{path('web_homepage')}}">Home</a></li>*/
/*     <li class="active"><a href="{{path('web_job')}}">Job List</a></li>*/
/*     <li class="active">Add</li>*/
/* </ol>*/
/* {% endblock %}*/
/* */
/* {% block web_body %}*/
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <form class="form" action="{{ path('web_job_save',{'id' : job.id?:0})}}" method="POST" id="jobForm">*/
/*             <legend>Add new job vacancy</legend>*/
/*             <fieldset>*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 ">*/
/*                         <div class="form-group">*/
/*                             <label for="title">Title</label>*/
/*                             <input type="text" class="form-control" id="title" name="title" value="{{job.title}}" placeholder="Example: Junior Web Programmer (IT Department)" required>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="isPublish">Status</label>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-5 ">*/
/*                                 <select class="form-control" id="isPublish" name="isPublish">*/
/*                                 {% for val in status %}*/
/*                                     {% if val.value ==  job.isPublish%}*/
/*                                             <option value="{{ val.value }}" selected>{{ val.lable }}</option>*/
/*                                     {% else %}*/
/*                                             <option value="{{ val.value }}">{{ val.lable }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                                 </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>   */
/*                         <div class="form-group">*/
/*                             <label for="dtp_input2" class="control-label" required>Valid Until</label>*/
/*                             <div class="input-group date form_date col-md-6" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">*/
/*                                 <input class="form-control" size="16" type="text" id="validUntil" name="validUntil" value="{{job.validUntil}}" readonly>*/
/*                                 <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>*/
/*                                 <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>*/
/*                             </div>*/
/*                             <input type="hidden" id="dtp_input2" value="" /><br/>*/
/*                         </div>    */
/*                     </div>*/
/*                     <div class="col-md-6 ">*/
/*                         <!-- Input Responsibilities -->*/
/*                         <label class="control-label" for="responsibilities">Responsibilities:</label>                */
/*                         <div class="form-group col-md-12 well" id="responsibilities-list">*/
/*                             <div class="form-responsibilities" >*/
/*                                 <button type="button" class="btn btn-success add-responsibilities" >*/
/*                                     <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add*/
/*                                 </button><br><br>*/
/*                             </div>*/
/*                             {% for val in responsibilities %}*/
/*                             <div class="form-responsibilities">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon"  style="cursor:pointer"><i class="glyphicon glyphicon-move handle" ></i></span>*/
/*                                     <textarea id="responsibilities{{ loop.index }}" name="responsibilities[]" type="text" class="form-control" rows="3">{{val.description}}</textarea>*/
/*                                     <span class="input-group-addon btn btn-danger remove-responsibilities"><i class="glyphicon glyphicon-remove"></i></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                             <div class="form-responsibilities">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon"  style="cursor:pointer"><i class="glyphicon glyphicon-move handle" ></i></span>*/
/*                                     <textarea id="responsibilities" name="responsibilities[]" type="text" class="form-control" rows="3"></textarea>*/
/*                                     <span class="input-group-addon btn btn-danger remove-responsibilities"><i class="glyphicon glyphicon-remove"></i></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="row">*/
/*                     <!-- Input Required -->*/
/*                     <div class="col-md-6">*/
/*                         <label class="control-label" for="required">Skills and Qualifications:<br>Required:</label>                */
/*                         <div class="form-group col-md-12 well" id="required-list">*/
/*                             <div class="form-required" >*/
/*                                 <button type="button" class="btn btn-success add-required" >*/
/*                                     <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add*/
/*                                 </button><br><br>*/
/*                             </div>*/
/*                             {% for val in required %}*/
/*                             <div class="form-required">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon"  style="cursor:pointer"><i class="glyphicon glyphicon-move handle" ></i></span>*/
/*                                     <textarea id="required{{ loop.index }}" name="required[]" type="text" class="form-control" rows="3">{{val.description}}</textarea>*/
/*                                     <span class="input-group-addon btn btn-danger remove-required"><i class="glyphicon glyphicon-remove"></i></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                             <div class="form-required">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon"  style="cursor:pointer"><i class="glyphicon glyphicon-move handle" ></i></span>*/
/*                                     <textarea id="required" name="required[]" type="text" class="form-control" rows="3"></textarea>*/
/*                                     <span class="input-group-addon btn btn-danger remove-required"><i class="glyphicon glyphicon-remove"></i></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Input Desirable -->*/
/*                     <div class="col-md-6 ">  */
/*                         <label class="control-label" for="desirable"><br>Desirable:</label>                */
/*                         <div class="form-group col-md-12 well" id="desirable-list">*/
/*                             <div class="form-desirable" >*/
/*                                 <button type="button" class="btn btn-success add-desirable" >*/
/*                                     <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add*/
/*                                 </button><br><br>*/
/*                             </div>*/
/*                             {% for val in desirable %}*/
/*                             <div class="form-desirable">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon"  style="cursor:pointer"><i class="glyphicon glyphicon-move handle" ></i></span>*/
/*                                     <textarea id="desirable{{ loop.index }}" name="desirable[]" type="text" class="form-control" rows="3">{{val.description}}</textarea>*/
/*                                     <span class="input-group-addon btn btn-danger remove-desirable"><i class="glyphicon glyphicon-remove"></i></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                             <div class="form-desirable">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon"  style="cursor:pointer"><i class="glyphicon glyphicon-move handle" ></i></span>*/
/*                                     <textarea id="desirable" name="desirable[]" type="text" class="form-control" rows="3"></textarea>*/
/*                                     <span class="input-group-addon btn btn-danger remove-desirable"><i class="glyphicon glyphicon-remove"></i></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-12"> */
/*                         <div class="form-group">*/
/*                             <p>*/
/*                                 <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-save"></i> Save</button>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </fieldset>*/
/*         </form>        */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script src="{{ asset('assets/js/bootstrap-datetimepicker.js') }}"></script>*/
/* <script type="text/javascript">*/
/*     $('.form_date').datetimepicker({*/
/*         //language:  'fr',*/
/*         weekStart: 1,*/
/*         todayBtn: 1,*/
/*         autoclose: 1,*/
/*         todayHighlight: 1,*/
/*         startView: 2,*/
/*         minView: 2,*/
/*         forceParse: 0*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
/* */
/* */
