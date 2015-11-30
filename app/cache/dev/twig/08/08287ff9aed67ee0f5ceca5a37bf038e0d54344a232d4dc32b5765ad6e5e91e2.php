<?php

/* SynergyWebBundle:User:list.html.twig */
class __TwigTemplate_bca1a39a970d861702a38ca16b346eb87bc3d1cc91b4cba9bf9280ad19c89361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynergyWebBundle:Layout:menu.html.twig", "SynergyWebBundle:User:list.html.twig", 1);
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
        $__internal_4b41b391552f4d4a6f585b589bdeb7a5ae4942350fbe655e7dc2fd4a3b75f427 = $this->env->getExtension("native_profiler");
        $__internal_4b41b391552f4d4a6f585b589bdeb7a5ae4942350fbe655e7dc2fd4a3b75f427->enter($__internal_4b41b391552f4d4a6f585b589bdeb7a5ae4942350fbe655e7dc2fd4a3b75f427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynergyWebBundle:User:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b41b391552f4d4a6f585b589bdeb7a5ae4942350fbe655e7dc2fd4a3b75f427->leave($__internal_4b41b391552f4d4a6f585b589bdeb7a5ae4942350fbe655e7dc2fd4a3b75f427_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28d541db36165c7620062ca3c1cebc2e66c72b2571c4cd6f868b7a06a15e4257 = $this->env->getExtension("native_profiler");
        $__internal_28d541db36165c7620062ca3c1cebc2e66c72b2571c4cd6f868b7a06a15e4257->enter($__internal_28d541db36165c7620062ca3c1cebc2e66c72b2571c4cd6f868b7a06a15e4257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap-table/bootstrap-table.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_28d541db36165c7620062ca3c1cebc2e66c72b2571c4cd6f868b7a06a15e4257->leave($__internal_28d541db36165c7620062ca3c1cebc2e66c72b2571c4cd6f868b7a06a15e4257_prof);

    }

    // line 12
    public function block_web_breadcrumb($context, array $blocks = array())
    {
        $__internal_c4951090f18855a3dca9f6625b3e7985a038148bd11de5f49e0ab8f84d8d0245 = $this->env->getExtension("native_profiler");
        $__internal_c4951090f18855a3dca9f6625b3e7985a038148bd11de5f49e0ab8f84d8d0245->enter($__internal_c4951090f18855a3dca9f6625b3e7985a038148bd11de5f49e0ab8f84d8d0245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_breadcrumb"));

        // line 13
        echo "<ol class=\"breadcrumb\">
    <li class=\"active\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("web_homepage");
        echo "\">Home</a></li>
    <li class=\"active\">User List</li>
</ol>
";
        
        $__internal_c4951090f18855a3dca9f6625b3e7985a038148bd11de5f49e0ab8f84d8d0245->leave($__internal_c4951090f18855a3dca9f6625b3e7985a038148bd11de5f49e0ab8f84d8d0245_prof);

    }

    // line 19
    public function block_web_body($context, array $blocks = array())
    {
        $__internal_e88492dea8cef6f835870f5558e9b5684995a76872015e9e39eda0e09d00bcc9 = $this->env->getExtension("native_profiler");
        $__internal_e88492dea8cef6f835870f5558e9b5684995a76872015e9e39eda0e09d00bcc9->enter($__internal_e88492dea8cef6f835870f5558e9b5684995a76872015e9e39eda0e09d00bcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_body"));

        // line 20
        echo "<div class=\"row\">
    <div class=\"col-md-12\">   
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 24
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
            <span class=\"glyphicon glyphicon-ok-sign\" aria-hidden=\"true\"></span>
                    ";
                // line 26
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
        </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
        <a class=\"btn btn-primary\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("web_user_form");
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> Create New User</a>
        <div class=\"table-responsive\">
            <table id=\"table\"
                   data-toggle=\"table\"
                   data-url=\"user/list\"
                   data-height=\"541\"
                   data-side-pagination=\"server\"
                   data-pagination=\"true\"
                   data-page-list=\"[5, 10, 20, 50, 100, 200]\"
                   data-show-refresh=\"true\"
                   data-show-toggle=\"true\" 
                   data-show-columns=\"true\" 
                   data-select-item-name=\"toolbar1\"
                   data-search=\"true\">
                <thead>
                    <tr>
                        <th data-field=\"username\">Username</th>
                        <th data-field=\"email\">Email</th>
                        <th data-field=\"country\">Country</th>
                        <th data-field=\"userType\" data-formatter=\"userFormatter\">User Type</th>
                        <th data-field=\"isActive\" data-formatter=\"statusFormatter\" data-halign=\"center\" data-align=\"center\">Status</th>
                        <th data-field=\"operate\" data-formatter=\"operateFormatter\" data-events=\"operateEvents\"  data-halign=\"center\" data-align=\"center\">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>        
</div>

<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Confirm Delete</h4>
            </div>

            <div class=\"modal-body\">
                <p>You are about to delete a user, this procedure is irreversible.</p>
                <p>Do you want to proceed?</p>
                <p class=\"debug-url\"></p>
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-danger btn-ok\">Delete</a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_e88492dea8cef6f835870f5558e9b5684995a76872015e9e39eda0e09d00bcc9->leave($__internal_e88492dea8cef6f835870f5558e9b5684995a76872015e9e39eda0e09d00bcc9_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b2630f0bdfc9634156959d1c1f792e0aac5e35e2739f165b82200e842b12b240 = $this->env->getExtension("native_profiler");
        $__internal_b2630f0bdfc9634156959d1c1f792e0aac5e35e2739f165b82200e842b12b240->enter($__internal_b2630f0bdfc9634156959d1c1f792e0aac5e35e2739f165b82200e842b12b240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "<script>
    function operateFormatter(value, row, index) {
        var button = '<a class=\"edit ml10\" href=\"user/edit/' + row['id'] + '\" target=\"_blank\" title=\"Edit\">\\n\\
                    <i class=\"glyphicon glyphicon-edit\"></i></a>&nbsp;\\n\\
                <a class=\"remove ml10\" title=\"Remove\" href=\"\" data-href=\"user/delete/' + row['id'] + '\" data-toggle=\"modal\" data-target=\"#confirm-delete\">\\n\\
                    <i class=\"glyphicon glyphicon-remove\"></i></a>';
        return button;
    }
    function statusFormatter(value, row) {
        var status = row.isActive === true ? '<span class=\"label label-success\">Activated</span>' : '<span class=\"label label-danger\">Deactivated</span>';

        return status;
    }
    function userFormatter(value, row) {
        var status = row.userType === 'admin' ? 'Admin' : 'User';

        return status;
    }

</script>
<script>
    \$('#confirm-delete').on('show.bs.modal', function(e) {
        \$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));
    });
</script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap-table/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b2630f0bdfc9634156959d1c1f792e0aac5e35e2739f165b82200e842b12b240->leave($__internal_b2630f0bdfc9634156959d1c1f792e0aac5e35e2739f165b82200e842b12b240_prof);

    }

    public function getTemplateName()
    {
        return "SynergyWebBundle:User:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 109,  200 => 84,  194 => 83,  135 => 30,  127 => 29,  118 => 26,  112 => 24,  107 => 23,  103 => 22,  99 => 20,  93 => 19,  82 => 14,  79 => 13,  73 => 12,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'SynergyWebBundle:Layout:menu.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/* <link rel="stylesheet" href="{{ asset('assets/bootstrap-table/bootstrap-table.css') }}" />*/
/* <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />*/
/* <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />*/
/* <script src="{{ asset('assets/js/jquery-2.0.3.min.js') }}"></script>*/
/* <script src="{{ asset('assets/js/bootstrap-3.1.1.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block web_breadcrumb %}*/
/* <ol class="breadcrumb">*/
/*     <li class="active"><a href="{{path('web_homepage')}}">Home</a></li>*/
/*     <li class="active">User List</li>*/
/* </ol>*/
/* {% endblock %}*/
/* */
/* {% block web_body %}*/
/* <div class="row">*/
/*     <div class="col-md-12">   */
/*         {% for label, flashes in app.session.flashbag.all %}*/
/*             {% for flash in flashes %}*/
/*         <div class="alert alert-{{ label }}" role="alert">*/
/*             <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>*/
/*                     {{ flash }}*/
/*         </div>*/
/*             {% endfor %}*/
/*         {% endfor %} */
/*         <a class="btn btn-primary" href="{{path('web_user_form')}}"><i class="glyphicon glyphicon-plus"></i> Create New User</a>*/
/*         <div class="table-responsive">*/
/*             <table id="table"*/
/*                    data-toggle="table"*/
/*                    data-url="user/list"*/
/*                    data-height="541"*/
/*                    data-side-pagination="server"*/
/*                    data-pagination="true"*/
/*                    data-page-list="[5, 10, 20, 50, 100, 200]"*/
/*                    data-show-refresh="true"*/
/*                    data-show-toggle="true" */
/*                    data-show-columns="true" */
/*                    data-select-item-name="toolbar1"*/
/*                    data-search="true">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th data-field="username">Username</th>*/
/*                         <th data-field="email">Email</th>*/
/*                         <th data-field="country">Country</th>*/
/*                         <th data-field="userType" data-formatter="userFormatter">User Type</th>*/
/*                         <th data-field="isActive" data-formatter="statusFormatter" data-halign="center" data-align="center">Status</th>*/
/*                         <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents"  data-halign="center" data-align="center">Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*             </table>*/
/*         </div>*/
/*     </div>        */
/* </div>*/
/* */
/* <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/* */
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>*/
/*             </div>*/
/* */
/*             <div class="modal-body">*/
/*                 <p>You are about to delete a user, this procedure is irreversible.</p>*/
/*                 <p>Do you want to proceed?</p>*/
/*                 <p class="debug-url"></p>*/
/*             </div>*/
/* */
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>*/
/*                 <a class="btn btn-danger btn-ok">Delete</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script>*/
/*     function operateFormatter(value, row, index) {*/
/*         var button = '<a class="edit ml10" href="user/edit/' + row['id'] + '" target="_blank" title="Edit">\n\*/
/*                     <i class="glyphicon glyphicon-edit"></i></a>&nbsp;\n\*/
/*                 <a class="remove ml10" title="Remove" href="" data-href="user/delete/' + row['id'] + '" data-toggle="modal" data-target="#confirm-delete">\n\*/
/*                     <i class="glyphicon glyphicon-remove"></i></a>';*/
/*         return button;*/
/*     }*/
/*     function statusFormatter(value, row) {*/
/*         var status = row.isActive === true ? '<span class="label label-success">Activated</span>' : '<span class="label label-danger">Deactivated</span>';*/
/* */
/*         return status;*/
/*     }*/
/*     function userFormatter(value, row) {*/
/*         var status = row.userType === 'admin' ? 'Admin' : 'User';*/
/* */
/*         return status;*/
/*     }*/
/* */
/* </script>*/
/* <script>*/
/*     $('#confirm-delete').on('show.bs.modal', function(e) {*/
/*         $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));*/
/*     });*/
/* </script>*/
/* <script src="{{ asset('assets/bootstrap-table/bootstrap-table.js') }}"></script>*/
/* {% endblock %}*/
