<?php

/* SynergyWebBundle:Job:edit.html.twig */
class __TwigTemplate_a2a2c77cc1ffe1b5f5c22efd32a485710ee939031c48518a76091018b953c44d extends Twig_Template
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
        $__internal_fcd4f6c539d538e1b552980c8ba19d68e11f643e5d097f3b99abeb6ffe0aecb2 = $this->env->getExtension("native_profiler");
        $__internal_fcd4f6c539d538e1b552980c8ba19d68e11f643e5d097f3b99abeb6ffe0aecb2->enter($__internal_fcd4f6c539d538e1b552980c8ba19d68e11f643e5d097f3b99abeb6ffe0aecb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynergyWebBundle:Job:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcd4f6c539d538e1b552980c8ba19d68e11f643e5d097f3b99abeb6ffe0aecb2->leave($__internal_fcd4f6c539d538e1b552980c8ba19d68e11f643e5d097f3b99abeb6ffe0aecb2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c9a4703d1addfc3876774141aad17439b3732f7645038478910a9df99fb585ac = $this->env->getExtension("native_profiler");
        $__internal_c9a4703d1addfc3876774141aad17439b3732f7645038478910a9df99fb585ac->enter($__internal_c9a4703d1addfc3876774141aad17439b3732f7645038478910a9df99fb585ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c9a4703d1addfc3876774141aad17439b3732f7645038478910a9df99fb585ac->leave($__internal_c9a4703d1addfc3876774141aad17439b3732f7645038478910a9df99fb585ac_prof);

    }

    // line 29
    public function block_web_breadcrumb($context, array $blocks = array())
    {
        $__internal_ca9ea1cda0eb3d0bd63a98eac3f30219817b78ba46c802ecb940905c22b427db = $this->env->getExtension("native_profiler");
        $__internal_ca9ea1cda0eb3d0bd63a98eac3f30219817b78ba46c802ecb940905c22b427db->enter($__internal_ca9ea1cda0eb3d0bd63a98eac3f30219817b78ba46c802ecb940905c22b427db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_breadcrumb"));

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
        
        $__internal_ca9ea1cda0eb3d0bd63a98eac3f30219817b78ba46c802ecb940905c22b427db->leave($__internal_ca9ea1cda0eb3d0bd63a98eac3f30219817b78ba46c802ecb940905c22b427db_prof);

    }

    // line 37
    public function block_web_body($context, array $blocks = array())
    {
        $__internal_d60d84fd13915fa15b90b05c05a7dbb368fbb4d19465d6c8c4b77ef64865840f = $this->env->getExtension("native_profiler");
        $__internal_d60d84fd13915fa15b90b05c05a7dbb368fbb4d19465d6c8c4b77ef64865840f->enter($__internal_d60d84fd13915fa15b90b05c05a7dbb368fbb4d19465d6c8c4b77ef64865840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_body"));

        // line 38
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <form class=\"form\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_job_save", array("id" => (($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array())) ? ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array())) : (0)))), "html", null, true);
        echo "\" method=\"POST\" id=\"jobForm\">
            <legend>Add new job vacancy</legend>
            <fieldset>
                <div class=\"row\">
                    <div class=\"col-md-6 \">
                        <div class=\"form-group col-md-12\">
                            <label for=\"title\">Title</label>
                            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "title", array()), "html", null, true);
        echo "\" placeholder=\"Example: Junior Web Programmer (IT Department)\" required>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"isPublish\">Status</label>
                            <div class=\"row\">
                                <div class=\"col-md-12 \">
                                <select class=\"form-control\" id=\"isPublish\" name=\"isPublish\">
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 55
            echo "                                    ";
            if (($this->getAttribute($context["val"], "value", array()) == $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isPublish", array()))) {
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
                        <div class=\"form-group col-md-6\">
                            <label for=\"isPublish\">Country ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getCountry", array(), "method"), "html", null, true);
        echo "</label>
                            <div class=\"row\">
                                <div class=\"col-md-12 \">
                                ";
        // line 69
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getCountry", array(), "method") == "All")) {
            // line 70
            echo "                                    <select class=\"form-control\" id=\"userType\" name=\"country\">
                                    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 72
                echo "                                        ";
                if (($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()) == "")) {
                    // line 73
                    echo "                                            ";
                    if (($context["val"] == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getCountry", array(), "method"))) {
                        // line 74
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\" selected>";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "</option>
                                            ";
                    } else {
                        // line 76
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "</option>
                                            ";
                    }
                    // line 77
                    echo "                                    
                                        ";
                } else {
                    // line 79
                    echo "                                            ";
                    if (($context["val"] == $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "country", array()))) {
                        // line 80
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\" selected>";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "</option>
                                            ";
                    } else {
                        // line 82
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "</option>
                                            ";
                    }
                    // line 84
                    echo "                                        ";
                }
                // line 85
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                                    </select>
                                ";
        } else {
            // line 88
            echo "                                    <select class=\"form-control\" id=\"userType\" name=\"country\" readonly>
                                        <option value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getCountry", array(), "method"), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getCountry", array(), "method"), "html", null, true);
            echo "</option>
                                    </select>
                                ";
        }
        // line 92
        echo "                                </div>
                            </div>
                        </div>   
                        <div class=\"form-group col-md-12\">
                            <label for=\"dtp_input2\" class=\"control-label\" required>Valid Until</label>
                            <div class=\"input-group date form_date col-md-6\" data-date=\"\" data-date-format=\"dd-mm-yyyy\" data-link-field=\"dtp_input2\" data-link-format=\"yyyy-mm-dd\">
                                <input class=\"form-control\" size=\"16\" type=\"text\" id=\"validUntil\" name=\"validUntil\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "validUntil", array()), "html", null, true);
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
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsibilities"]) ? $context["responsibilities"] : $this->getContext($context, "responsibilities")));
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
            echo "                            <div class=\"form-responsibilities\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"  style=\"cursor:pointer\"><i class=\"glyphicon glyphicon-move handle\" ></i></span>
                                    <textarea id=\"responsibilities";
            // line 118
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
        // line 123
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
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")));
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
            // line 145
            echo "                            <div class=\"form-required\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"  style=\"cursor:pointer\"><i class=\"glyphicon glyphicon-move handle\" ></i></span>
                                    <textarea id=\"required";
            // line 148
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
        // line 153
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
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["desirable"]) ? $context["desirable"] : $this->getContext($context, "desirable")));
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
            // line 172
            echo "                            <div class=\"form-desirable\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"  style=\"cursor:pointer\"><i class=\"glyphicon glyphicon-move handle\" ></i></span>
                                    <textarea id=\"desirable";
            // line 175
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
        // line 180
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
        
        $__internal_d60d84fd13915fa15b90b05c05a7dbb368fbb4d19465d6c8c4b77ef64865840f->leave($__internal_d60d84fd13915fa15b90b05c05a7dbb368fbb4d19465d6c8c4b77ef64865840f_prof);

    }

    // line 202
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25f4b5590fe97ab0d1c94e81dc3a54b2e3f58bddc922152f8d0edf02858dc0a1 = $this->env->getExtension("native_profiler");
        $__internal_25f4b5590fe97ab0d1c94e81dc3a54b2e3f58bddc922152f8d0edf02858dc0a1->enter($__internal_25f4b5590fe97ab0d1c94e81dc3a54b2e3f58bddc922152f8d0edf02858dc0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 203
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
        
        $__internal_25f4b5590fe97ab0d1c94e81dc3a54b2e3f58bddc922152f8d0edf02858dc0a1->leave($__internal_25f4b5590fe97ab0d1c94e81dc3a54b2e3f58bddc922152f8d0edf02858dc0a1_prof);

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
        return array (  506 => 203,  500 => 202,  472 => 180,  451 => 175,  446 => 172,  429 => 171,  409 => 153,  388 => 148,  383 => 145,  366 => 144,  343 => 123,  322 => 118,  317 => 115,  300 => 114,  281 => 98,  273 => 92,  265 => 89,  262 => 88,  258 => 86,  252 => 85,  249 => 84,  241 => 82,  233 => 80,  230 => 79,  226 => 77,  218 => 76,  210 => 74,  207 => 73,  204 => 72,  200 => 71,  197 => 70,  195 => 69,  189 => 66,  182 => 61,  176 => 60,  168 => 58,  160 => 56,  157 => 55,  153 => 54,  143 => 47,  133 => 40,  129 => 38,  123 => 37,  112 => 32,  108 => 31,  105 => 30,  99 => 29,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
/*                         <div class="form-group col-md-12">*/
/*                             <label for="title">Title</label>*/
/*                             <input type="text" class="form-control" id="title" name="title" value="{{job.title}}" placeholder="Example: Junior Web Programmer (IT Department)" required>*/
/*                         </div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="isPublish">Status</label>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 ">*/
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
/*                         </div>  */
/*                         <div class="form-group col-md-6">*/
/*                             <label for="isPublish">Country {{ app.security.getToken().getUser().getCountry() }}</label>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 ">*/
/*                                 {% if app.security.getToken().getUser().getCountry() == 'All'%}*/
/*                                     <select class="form-control" id="userType" name="country">*/
/*                                     {% for val in country %}*/
/*                                         {% if job.id == ""%}*/
/*                                             {% if val == app.security.getToken().getUser().getCountry()%}*/
/*                                             <option value="{{val}}" selected>{{val}}</option>*/
/*                                             {% else %}*/
/*                                             <option value="{{val}}">{{val}}</option>*/
/*                                             {% endif %}                                    */
/*                                         {% else %}*/
/*                                             {% if val ==  job.country%}*/
/*                                             <option value="{{val}}" selected>{{val}}</option>*/
/*                                             {% else %}*/
/*                                             <option value="{{val}}">{{val}}</option>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                     </select>*/
/*                                 {% else %}*/
/*                                     <select class="form-control" id="userType" name="country" readonly>*/
/*                                         <option value="{{app.security.getToken().getUser().getCountry()}}" selected>{{app.security.getToken().getUser().getCountry()}}</option>*/
/*                                     </select>*/
/*                                 {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>   */
/*                         <div class="form-group col-md-12">*/
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
