<?php

/* SynergyWebBundle:Job:list.html.twig */
class __TwigTemplate_74f97a383dc094c31d8d11d8d2406776b269dd1f99df4cc7a1f408b38827a2c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynergyWebBundle:Layout:menu.html.twig", "SynergyWebBundle:Job:list.html.twig", 1);
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
        $__internal_4584cafd811fcc069e1f53e5ab870fe350debfac8345dd821c0402987284832a = $this->env->getExtension("native_profiler");
        $__internal_4584cafd811fcc069e1f53e5ab870fe350debfac8345dd821c0402987284832a->enter($__internal_4584cafd811fcc069e1f53e5ab870fe350debfac8345dd821c0402987284832a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynergyWebBundle:Job:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4584cafd811fcc069e1f53e5ab870fe350debfac8345dd821c0402987284832a->leave($__internal_4584cafd811fcc069e1f53e5ab870fe350debfac8345dd821c0402987284832a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31260ee3a64ca3ca46bc23a1fe9f42b0fc57dfe59415e099888695d398a929ae = $this->env->getExtension("native_profiler");
        $__internal_31260ee3a64ca3ca46bc23a1fe9f42b0fc57dfe59415e099888695d398a929ae->enter($__internal_31260ee3a64ca3ca46bc23a1fe9f42b0fc57dfe59415e099888695d398a929ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_31260ee3a64ca3ca46bc23a1fe9f42b0fc57dfe59415e099888695d398a929ae->leave($__internal_31260ee3a64ca3ca46bc23a1fe9f42b0fc57dfe59415e099888695d398a929ae_prof);

    }

    // line 12
    public function block_web_breadcrumb($context, array $blocks = array())
    {
        $__internal_631f2cc45fbc8cb1caed25f5e26647b16c236e121b3017bd908d232e6801d263 = $this->env->getExtension("native_profiler");
        $__internal_631f2cc45fbc8cb1caed25f5e26647b16c236e121b3017bd908d232e6801d263->enter($__internal_631f2cc45fbc8cb1caed25f5e26647b16c236e121b3017bd908d232e6801d263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_breadcrumb"));

        // line 13
        echo "<ol class=\"breadcrumb\">
    <li class=\"active\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("web_homepage");
        echo "\">Home</a></li>
    <li class=\"active\">Job List</li>
</ol>
";
        
        $__internal_631f2cc45fbc8cb1caed25f5e26647b16c236e121b3017bd908d232e6801d263->leave($__internal_631f2cc45fbc8cb1caed25f5e26647b16c236e121b3017bd908d232e6801d263_prof);

    }

    // line 19
    public function block_web_body($context, array $blocks = array())
    {
        $__internal_20703246001508e8e6a3114ada2828389d11ced9299d138d908c668b862cbe00 = $this->env->getExtension("native_profiler");
        $__internal_20703246001508e8e6a3114ada2828389d11ced9299d138d908c668b862cbe00->enter($__internal_20703246001508e8e6a3114ada2828389d11ced9299d138d908c668b862cbe00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "web_body"));

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
        echo $this->env->getExtension('routing')->getPath("web_job_form");
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> Create New Job</a>
        <div class=\"table-responsive\">
            <table id=\"table\"
                   data-toggle=\"table\"
                   data-url=\"job/list\"
                   data-height=\"541\"
                   data-side-pagination=\"server\"
                   data-pagination=\"true\"
                   data-page-list=\"[5, 10, 20, 50, 100, 200]\"
                   data-show-refresh=\"true\"
                   data-show-toggle=\"true\" 
                   data-show-columns=\"true\" 
                   data-detail-view=\"true\"
                   data-detail-formatter=\"detailFormatter\"
                   data-select-item-name=\"toolbar1\"
                   data-search=\"true\">
                <thead>
                    <tr>
                        <th data-field=\"title\">Title</th>
                        <th data-field=\"validUntil\">Valid Until</th>
                        <th data-field=\"isPublish\" data-formatter=\"statusFormatter\" data-halign=\"center\" data-align=\"center\">Status</th>
                        <th data-field=\"country\">Country</th>
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
                <p>You are about to delete job, this procedure is irreversible.</p>
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
        
        $__internal_20703246001508e8e6a3114ada2828389d11ced9299d138d908c668b862cbe00->leave($__internal_20703246001508e8e6a3114ada2828389d11ced9299d138d908c668b862cbe00_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87ae02b143348e6b0c766405fd0c0cb80454e1469a98c5b55e3ce5600e7040e5 = $this->env->getExtension("native_profiler");
        $__internal_87ae02b143348e6b0c766405fd0c0cb80454e1469a98c5b55e3ce5600e7040e5->enter($__internal_87ae02b143348e6b0c766405fd0c0cb80454e1469a98c5b55e3ce5600e7040e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "<script>
    function operateFormatter(value, row, index) {
        var button = '<a class=\"edit ml10\" href=\"job/edit/' + row['id'] + '\" target=\"_blank\" title=\"Edit\">\\n\\
                        <i class=\"glyphicon glyphicon-edit\"></i></a>&nbsp;\\n\\
                        <a class=\"remove ml10\" title=\"Remove\" href=\"\" data-href=\"job/delete/' + row['id'] + '\" data-toggle=\"modal\" data-target=\"#confirm-delete\">\\n\\
                        <i class=\"glyphicon glyphicon-remove\"></i></a>';
        return button;
    }
    function statusFormatter(value, row) {
        var status = row.isPublish === true ? '<span class=\"label label-success\">Publish</span>' : '<span class=\"label label-danger\">Unpublish</span>';

        return status;
    }
    function userFormatter(value, row) {
        var status = row.userType === 'admin' ? 'Admin' : 'User';

        return status;
    }
    function valw(val){
        
    }
    function detailFormatter(index, row) {
        var id = row['id'];
        return getValue(id);
    }
    function getValue(id) {
        var value = \$.ajax({
            url: 'job/list/' + id,
            dataType: 'json',
            async: false
        });
        ";
        // line 122
        echo "        var responsibilities = '';
        var required = '';
        var desirable = '';
        var a = value['responseJSON'];
        for (i = 0; i < a.length; ++i) {
            if(a[i]['type'] === 'responsibilities'){
                responsibilities += ' <i class=\"glyphicon glyphicon-ok\"></i> ' + a[i]['description'] + '<br>';
            }else if(a[i]['type'] === 'required'){
                required += ' <i class=\"glyphicon glyphicon-ok\"></i> ' + a[i]['description'] + '<br>';
            }else{
                desirable += ' <i class=\"glyphicon glyphicon-ok\"></i> ' + a[i]['description'] + '<br>';
            }
        }
        var fresponsibilities = responsibilities?'<h4>Job Responsibility:</h4>':'';
        var frequired = required?'<h4>Required:</h4>':'';
        var fdesirable = desirable?'<h4>Desirable:</h4>':'';
        var html = fresponsibilities + responsibilities +
                frequired + required +
                fdesirable + desirable;
        return html ;
    }


</script>
<script>
    \$('#confirm-delete').on('show.bs.modal', function(e) {
        \$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));
    });
</script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap-table/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_87ae02b143348e6b0c766405fd0c0cb80454e1469a98c5b55e3ce5600e7040e5->leave($__internal_87ae02b143348e6b0c766405fd0c0cb80454e1469a98c5b55e3ce5600e7040e5_prof);

    }

    public function getTemplateName()
    {
        return "SynergyWebBundle:Job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 151,  234 => 122,  201 => 85,  195 => 84,  135 => 30,  127 => 29,  118 => 26,  112 => 24,  107 => 23,  103 => 22,  99 => 20,  93 => 19,  82 => 14,  79 => 13,  73 => 12,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
/*     <li class="active">Job List</li>*/
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
/*         <a class="btn btn-primary" href="{{path('web_job_form')}}"><i class="glyphicon glyphicon-plus"></i> Create New Job</a>*/
/*         <div class="table-responsive">*/
/*             <table id="table"*/
/*                    data-toggle="table"*/
/*                    data-url="job/list"*/
/*                    data-height="541"*/
/*                    data-side-pagination="server"*/
/*                    data-pagination="true"*/
/*                    data-page-list="[5, 10, 20, 50, 100, 200]"*/
/*                    data-show-refresh="true"*/
/*                    data-show-toggle="true" */
/*                    data-show-columns="true" */
/*                    data-detail-view="true"*/
/*                    data-detail-formatter="detailFormatter"*/
/*                    data-select-item-name="toolbar1"*/
/*                    data-search="true">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th data-field="title">Title</th>*/
/*                         <th data-field="validUntil">Valid Until</th>*/
/*                         <th data-field="isPublish" data-formatter="statusFormatter" data-halign="center" data-align="center">Status</th>*/
/*                         <th data-field="country">Country</th>*/
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
/*                 <p>You are about to delete job, this procedure is irreversible.</p>*/
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
/*         var button = '<a class="edit ml10" href="job/edit/' + row['id'] + '" target="_blank" title="Edit">\n\*/
/*                         <i class="glyphicon glyphicon-edit"></i></a>&nbsp;\n\*/
/*                         <a class="remove ml10" title="Remove" href="" data-href="job/delete/' + row['id'] + '" data-toggle="modal" data-target="#confirm-delete">\n\*/
/*                         <i class="glyphicon glyphicon-remove"></i></a>';*/
/*         return button;*/
/*     }*/
/*     function statusFormatter(value, row) {*/
/*         var status = row.isPublish === true ? '<span class="label label-success">Publish</span>' : '<span class="label label-danger">Unpublish</span>';*/
/* */
/*         return status;*/
/*     }*/
/*     function userFormatter(value, row) {*/
/*         var status = row.userType === 'admin' ? 'Admin' : 'User';*/
/* */
/*         return status;*/
/*     }*/
/*     function valw(val){*/
/*         */
/*     }*/
/*     function detailFormatter(index, row) {*/
/*         var id = row['id'];*/
/*         return getValue(id);*/
/*     }*/
/*     function getValue(id) {*/
/*         var value = $.ajax({*/
/*             url: 'job/list/' + id,*/
/*             dataType: 'json',*/
/*             async: false*/
/*         });*/
/*         {#Object.keys(value).forEach(function (key) {*/
/*             if(typeof value[key] === 'object'){*/
/*                 console.log(value[key]); */
/*                 console.log(key);*/
/*             }  */
/*         });#}*/
/*         var responsibilities = '';*/
/*         var required = '';*/
/*         var desirable = '';*/
/*         var a = value['responseJSON'];*/
/*         for (i = 0; i < a.length; ++i) {*/
/*             if(a[i]['type'] === 'responsibilities'){*/
/*                 responsibilities += ' <i class="glyphicon glyphicon-ok"></i> ' + a[i]['description'] + '<br>';*/
/*             }else if(a[i]['type'] === 'required'){*/
/*                 required += ' <i class="glyphicon glyphicon-ok"></i> ' + a[i]['description'] + '<br>';*/
/*             }else{*/
/*                 desirable += ' <i class="glyphicon glyphicon-ok"></i> ' + a[i]['description'] + '<br>';*/
/*             }*/
/*         }*/
/*         var fresponsibilities = responsibilities?'<h4>Job Responsibility:</h4>':'';*/
/*         var frequired = required?'<h4>Required:</h4>':'';*/
/*         var fdesirable = desirable?'<h4>Desirable:</h4>':'';*/
/*         var html = fresponsibilities + responsibilities +*/
/*                 frequired + required +*/
/*                 fdesirable + desirable;*/
/*         return html ;*/
/*     }*/
/* */
/* */
/* </script>*/
/* <script>*/
/*     $('#confirm-delete').on('show.bs.modal', function(e) {*/
/*         $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));*/
/*     });*/
/* </script>*/
/* <script src="{{ asset('assets/bootstrap-table/bootstrap-table.js') }}"></script>*/
/* {% endblock %}*/
