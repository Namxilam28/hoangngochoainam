<?php

/* extension/module/quick_info.twig */
class __TwigTemplate_24cf4fc3f267d300a1186604e1996e1c5c099223c9597954e167ab601b227770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 21
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 25
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 30
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\"
                      class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 33
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 35
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\"
                                   id=\"input-name\" class=\"form-control\"/>
                            ";
        // line 37
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 38
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                            ";
        }
        // line 40
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 43
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 46
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 47
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 48
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 50
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 51
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 53
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"form-group end-module-name\"></div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
                            <ul class=\"nav nav-tabs tabs-left\" id=\"tabs-vertical\">
                                ";
        // line 60
        $context["row"] = 0;
        // line 61
        echo "                                ";
        if ((isset($context["module_description"]) ? $context["module_description"] : null)) {
            // line 62
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["module_description"]) ? $context["module_description"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 63
                echo "                                    <li><a href=\"#tab-module-";
                echo (isset($context["row"]) ? $context["row"] : null);
                echo "\" id=\"id-module-";
                echo (isset($context["row"]) ? $context["row"] : null);
                echo "\" data-toggle=\"tab\">";
                echo (isset($context["text_item"]) ? $context["text_item"] : null);
                echo (isset($context["row"]) ? $context["row"] : null);
                echo " <i onclick=\"\$('.tabs-left a:first').trigger('click'); \$('#id-module-";
                echo (isset($context["row"]) ? $context["row"] : null);
                echo "').remove(); \$('#tab-module-";
                echo (isset($context["row"]) ? $context["row"] : null);
                echo "').remove(); return false;\" class=\"fa fa-minus-circle\"></i></a></li>
                                    ";
                // line 64
                $context["row"] = ((isset($context["row"]) ? $context["row"] : null) + 1);
                // line 65
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                                ";
        }
        // line 67
        echo "                                <li id=\"module-add\">";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "&nbsp;<i onclick=\"addItem();\" class=\"fa fa-plus-circle\"></i></li>
                            </ul>
                        </div>
                        <div class=\"col-xs-12 col-sm-10 col-md-10 col-lg-10\">
                            <div class=\"tab-content\" id=\"tab-description\">
                                ";
        // line 72
        $context["row"] = 0;
        // line 73
        echo "                                ";
        if ((isset($context["module_description"]) ? $context["module_description"] : null)) {
            // line 74
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["module_description"]) ? $context["module_description"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 75
                echo "                                <div class=\"tab-pane\" id=\"tab-module-";
                echo (isset($context["row"]) ? $context["row"] : null);
                echo "\">
                                    <div class=\"tab-pane\">
                                        <ul class=\"nav nav-tabs tab-content-description\" id=\"language-";
                // line 77
                echo (isset($context["row"]) ? $context["row"] : null);
                echo "\">
                                            ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 79
                    echo "                                            <li>
                                                <a href=\"#language-";
                    // line 80
                    echo (isset($context["row"]) ? $context["row"] : null);
                    echo "-";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo $this->getAttribute($context["language"], "code", array(), "array");
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array(), "array");
                    echo ".png\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array(), "array");
                    echo "\" /> ";
                    echo $this->getAttribute($context["language"], "name", array(), "array");
                    echo "
                                                </a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                                        </ul>
                                        <div class=\"tab-content\">
                                            ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 86
                    echo "                                            <div class=\"tab-pane\" id=\"language-";
                    echo (isset($context["row"]) ? $context["row"] : null);
                    echo "-";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "\">
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\">";
                    // line 88
                    echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                    echo "</label>
                                                    <div class=\"col-sm-10\">
                                                        <input type=\"text\" name=\"module_description[";
                    // line 90
                    echo (isset($context["row"]) ? $context["row"] : null);
                    echo "][title][";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "]\" placeholder=\"";
                    echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                    echo "\"  value=\"";
                    echo $this->getAttribute($this->getAttribute($context["info"], "title", array(), "array"), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array");
                    echo "\" class=\"form-control\" />
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\">";
                    // line 94
                    echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                    echo "</label>
                                                    <div class=\"col-sm-10\">
                                                        <textarea name=\"module_description[";
                    // line 96
                    echo (isset($context["row"]) ? $context["row"] : null);
                    echo "][description][";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "]\" placeholder=\"";
                    echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                    echo "\" class=\"form-control\" rows=\"3\">";
                    echo $this->getAttribute($this->getAttribute($context["info"], "description", array(), "array"), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array");
                    echo "</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 104
                echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"module_description[";
                // line 106
                echo (isset($context["row"]) ? $context["row"] : null);
                echo "][sort_order]\" placeholder=\"";
                echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
                echo "\"  value=\"";
                echo $this->getAttribute($context["info"], "sort_order", array(), "array");
                echo "\" size=\"15\" class=\"form-control\" />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 110
                echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"module_description[";
                // line 112
                echo (isset($context["row"]) ? $context["row"] : null);
                echo "][status]\" class=\"form-control\">
                                                ";
                // line 113
                if ($this->getAttribute($context["info"], "status", array())) {
                    // line 114
                    echo "                                                <option value=\"1\" selected=\"selected\">";
                    echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                    echo "</option>
                                                <option value=\"0\">";
                    // line 115
                    echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                    echo "</option>
                                                ";
                } else {
                    // line 117
                    echo "                                                <option value=\"1\">";
                    echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                    echo "</option>
                                                <option value=\"0\" selected=\"selected\">";
                    // line 118
                    echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                    echo "</option>
                                                ";
                }
                // line 120
                echo "                                            </select>
                                        </div>
                                    </div>
                                </div>
                                    ";
                // line 124
                $context["row"] = ((isset($context["row"]) ? $context["row"] : null) + 1);
                // line 125
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                                ";
        }
        // line 127
        echo "                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script>
        \$('#tabs-vertical a:first').tab('show');
        ";
        // line 138
        $context["tabs"] = 0;
        // line 139
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["module_description"]) ? $context["module_description"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 140
            echo "        \$('#language-";
            echo (isset($context["tabs"]) ? $context["tabs"] : null);
            echo " a:first').tab('show');
        ";
            // line 141
            $context["tabs"] = ((isset($context["tabs"]) ? $context["tabs"] : null) + 1);
            // line 142
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "    </script>
    <script type=\"text/javascript\"><!--
        var row = ";
        // line 145
        echo (isset($context["row"]) ? $context["row"] : null);
        echo ";
        function addItem() {
            html = '<div class=\"tab-pane\" id=\"tab-module-' + row + '\">';
            html +='<div class=\"tab-pane\">';
            html +='<ul class=\"nav nav-tabs\" id=\"language-' + row + '\">';
            ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 151
            echo "                html +='<li>';
                html +='<a href=\"#language-' + row + '-";
            // line 152
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo "/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array(), "array");
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array(), "array");
            echo "';
                html +='</a></li>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "            html +='</ul>';
            html +='<div class=\"tab-content\">';
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 158
            echo "                html +='<div class=\"tab-pane\" id=\"language-' + row + '-";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">';
                html +='<div class=\"form-group\">';
                html +='<label class=\"col-sm-2 control-label\">";
            // line 160
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</label>';
                html +='<div class=\"col-sm-10\">';
                html +='<input type=\"text\" name=\"module_description[' + row + '][title][";
            // line 162
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "\"  value=\"\" class=\"form-control\" />';
                html +='</div>';
                html +='</div>';
                html +='<div class=\"form-group\">';
                html +='<label class=\"col-sm-2 control-label\">";
            // line 166
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>';
                html +='<div class=\"col-sm-10\">';
            html +='<textarea name=\"module_description[' + row + '][description][";
            // line 168
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" class=\"form-control\" rows=\"3\"></textarea>';
                html +='</div>';
                html +='</div>';
                html +='</div>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "            html +='</div>';
            html +='</div>';
            html +='<div class=\"form-group\">';
            html +='<label class=\"col-sm-2 control-label\">";
        // line 176
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>';
            html +='<div class=\"col-sm-10\">';
            html +='<input type=\"text\" name=\"module_description[' + row + '][sort_order]\" placeholder=\"";
        // line 178
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\"  value=\"0\" size=\"15\" class=\"form-control\" />';
            html +='</div>';
            html +='</div>';
            html +='<div class=\"form-group\">';
            html +='<label class=\"col-sm-2 control-label\">";
        // line 182
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>';
            html +='<div class=\"col-sm-10\">';
            html +='<select name=\"module_description[' + row + '][status]\" class=\"form-control\">';
            html +='<option value=\"1\" selected=\"selected\">";
        // line 185
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>';
            html +='<option value=\"0\">";
        // line 186
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>';
            html +='</select>';
            html +='</div>';
            html +='</div>';
            html +='</div>';

            \$('#tab-description').append(html);
            \$('#language-' + row + ' a:first').tab('show');
            \$('#module-add').before('<li><a href=\"#tab-module-' + row + '\" id=\"id-module-' + row + '\" data-toggle=\"tab\">";
        // line 194
        echo (isset($context["text_item"]) ? $context["text_item"] : null);
        echo " ' + row + ' <i onclick=\"\$(\\'.tabs-left a:first\\').trigger(\\'click\\'); \$(\\'#id-module-' + row + '\\').remove(); \$(\\'#tab-module-' + row + '\\').remove(); return false;\" class=\"fa fa-minus-circle\"></i></a></li>');

            \$('#tabs-vertical a#id-module-' + row + '').tab('show');
            \$('#id-module-' + row + '').trigger('click');
            row++;
        }
        //--></script>
";
        // line 201
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/quick_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 201,  524 => 194,  513 => 186,  509 => 185,  503 => 182,  496 => 178,  491 => 176,  486 => 173,  473 => 168,  468 => 166,  459 => 162,  454 => 160,  448 => 158,  444 => 157,  440 => 155,  423 => 152,  420 => 151,  416 => 150,  408 => 145,  404 => 143,  398 => 142,  396 => 141,  391 => 140,  386 => 139,  384 => 138,  371 => 127,  368 => 126,  362 => 125,  360 => 124,  354 => 120,  349 => 118,  344 => 117,  339 => 115,  334 => 114,  332 => 113,  328 => 112,  323 => 110,  312 => 106,  307 => 104,  302 => 101,  285 => 96,  280 => 94,  267 => 90,  262 => 88,  254 => 86,  250 => 85,  246 => 83,  227 => 80,  224 => 79,  220 => 78,  216 => 77,  210 => 75,  205 => 74,  202 => 73,  200 => 72,  191 => 67,  188 => 66,  182 => 65,  180 => 64,  166 => 63,  161 => 62,  158 => 61,  156 => 60,  147 => 53,  142 => 51,  137 => 50,  132 => 48,  127 => 47,  125 => 46,  119 => 43,  114 => 40,  108 => 38,  106 => 37,  99 => 35,  94 => 33,  88 => 30,  82 => 27,  78 => 25,  71 => 21,  68 => 20,  66 => 19,  60 => 15,  49 => 13,  45 => 12,  40 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}"*/
/*                         class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i*/
/*                             class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i*/
/*                         class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module"*/
/*                       class="form-horizontal">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}"*/
/*                                    id="input-name" class="form-control"/>*/
/*                             {% if error_name %}*/
/*                                 <div class="text-danger">{{ error_name }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="status" id="input-status" class="form-control">*/
/*                                 {% if status %}*/
/*                                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                     <option value="0">{{ text_disabled }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="1">{{ text_enabled }}</option>*/
/*                                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group end-module-name"></div>*/
/*                     <div class="row">*/
/*                         <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">*/
/*                             <ul class="nav nav-tabs tabs-left" id="tabs-vertical">*/
/*                                 {% set row = 0 %}*/
/*                                 {% if module_description %}*/
/*                                     {% for info in module_description %}*/
/*                                     <li><a href="#tab-module-{{ row }}" id="id-module-{{ row }}" data-toggle="tab">{{ text_item }}{{ row }} <i onclick="$('.tabs-left a:first').trigger('click'); $('#id-module-{{ row }}').remove(); $('#tab-module-{{ row }}').remove(); return false;" class="fa fa-minus-circle"></i></a></li>*/
/*                                     {% set row = row + 1 %}*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                                 <li id="module-add">{{ button_add }}&nbsp;<i onclick="addItem();" class="fa fa-plus-circle"></i></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">*/
/*                             <div class="tab-content" id="tab-description">*/
/*                                 {% set row = 0 %}*/
/*                                 {% if module_description %}*/
/*                                 {% for info in module_description %}*/
/*                                 <div class="tab-pane" id="tab-module-{{ row }}">*/
/*                                     <div class="tab-pane">*/
/*                                         <ul class="nav nav-tabs tab-content-description" id="language-{{ row }}">*/
/*                                             {% for language in languages %}*/
/*                                             <li>*/
/*                                                 <a href="#language-{{ row }}-{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" /> {{ language['name'] }}*/
/*                                                 </a></li>*/
/*                                             {% endfor %}*/
/*                                         </ul>*/
/*                                         <div class="tab-content">*/
/*                                             {% for language in languages %}*/
/*                                             <div class="tab-pane" id="language-{{ row }}-{{ language['language_id'] }}">*/
/*                                                 <div class="form-group">*/
/*                                                     <label class="col-sm-2 control-label">{{ entry_title }}</label>*/
/*                                                     <div class="col-sm-10">*/
/*                                                         <input type="text" name="module_description[{{ row }}][title][{{ language['language_id'] }}]" placeholder="{{ entry_title }}"  value="{{ info['title'][language['language_id']] }}" class="form-control" />*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="form-group">*/
/*                                                     <label class="col-sm-2 control-label">{{ entry_description }}</label>*/
/*                                                     <div class="col-sm-10">*/
/*                                                         <textarea name="module_description[{{ row }}][description][{{ language['language_id'] }}]" placeholder="{{ entry_description }}" class="form-control" rows="3">{{ info['description'][language['language_id']] }}</textarea>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-2 control-label">{{ entry_sort_order }}</label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <input type="text" name="module_description[{{ row }}][sort_order]" placeholder="{{ entry_sort_order }}"  value="{{ info['sort_order'] }}" size="15" class="form-control" />*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-2 control-label">{{ entry_status }}</label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <select name="module_description[{{ row }}][status]" class="form-control">*/
/*                                                 {% if info.status %}*/
/*                                                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                                 <option value="0">{{ text_disabled }}</option>*/
/*                                                 {% else %}*/
/*                                                 <option value="1">{{ text_enabled }}</option>*/
/*                                                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                                 {% endif %}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                     {% set row = row + 1 %}*/
/*                                 {% endfor %}*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/*     <script>*/
/*         $('#tabs-vertical a:first').tab('show');*/
/*         {% set tabs = 0 %}*/
/*         {% for info in module_description %}*/
/*         $('#language-{{ tabs }} a:first').tab('show');*/
/*         {% set tabs = tabs + 1 %}*/
/*         {% endfor %}*/
/*     </script>*/
/*     <script type="text/javascript"><!--*/
/*         var row = {{ row }};*/
/*         function addItem() {*/
/*             html = '<div class="tab-pane" id="tab-module-' + row + '">';*/
/*             html +='<div class="tab-pane">';*/
/*             html +='<ul class="nav nav-tabs" id="language-' + row + '">';*/
/*             {% for language in languages %}*/
/*                 html +='<li>';*/
/*                 html +='<a href="#language-' + row + '-{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" /> {{ language['name'] }}';*/
/*                 html +='</a></li>';*/
/*             {% endfor %}*/
/*             html +='</ul>';*/
/*             html +='<div class="tab-content">';*/
/*             {% for language in languages %}*/
/*                 html +='<div class="tab-pane" id="language-' + row + '-{{ language['language_id'] }}">';*/
/*                 html +='<div class="form-group">';*/
/*                 html +='<label class="col-sm-2 control-label">{{ entry_title }}</label>';*/
/*                 html +='<div class="col-sm-10">';*/
/*                 html +='<input type="text" name="module_description[' + row + '][title][{{ language['language_id'] }}]" placeholder="{{ entry_title }}"  value="" class="form-control" />';*/
/*                 html +='</div>';*/
/*                 html +='</div>';*/
/*                 html +='<div class="form-group">';*/
/*                 html +='<label class="col-sm-2 control-label">{{ entry_description }}</label>';*/
/*                 html +='<div class="col-sm-10">';*/
/*             html +='<textarea name="module_description[' + row + '][description][{{ language['language_id'] }}]" placeholder="{{ entry_description }}" class="form-control" rows="3"></textarea>';*/
/*                 html +='</div>';*/
/*                 html +='</div>';*/
/*                 html +='</div>';*/
/*             {% endfor %}*/
/*             html +='</div>';*/
/*             html +='</div>';*/
/*             html +='<div class="form-group">';*/
/*             html +='<label class="col-sm-2 control-label">{{ entry_sort_order }}</label>';*/
/*             html +='<div class="col-sm-10">';*/
/*             html +='<input type="text" name="module_description[' + row + '][sort_order]" placeholder="{{ entry_sort_order }}"  value="0" size="15" class="form-control" />';*/
/*             html +='</div>';*/
/*             html +='</div>';*/
/*             html +='<div class="form-group">';*/
/*             html +='<label class="col-sm-2 control-label">{{ entry_status }}</label>';*/
/*             html +='<div class="col-sm-10">';*/
/*             html +='<select name="module_description[' + row + '][status]" class="form-control">';*/
/*             html +='<option value="1" selected="selected">{{ text_enabled }}</option>';*/
/*             html +='<option value="0">{{ text_disabled }}</option>';*/
/*             html +='</select>';*/
/*             html +='</div>';*/
/*             html +='</div>';*/
/*             html +='</div>';*/
/* */
/*             $('#tab-description').append(html);*/
/*             $('#language-' + row + ' a:first').tab('show');*/
/*             $('#module-add').before('<li><a href="#tab-module-' + row + '" id="id-module-' + row + '" data-toggle="tab">{{ text_item }} ' + row + ' <i onclick="$(\'.tabs-left a:first\').trigger(\'click\'); $(\'#id-module-' + row + '\').remove(); $(\'#tab-module-' + row + '\').remove(); return false;" class="fa fa-minus-circle"></i></a></li>');*/
/* */
/*             $('#tabs-vertical a#id-module-' + row + '').tab('show');*/
/*             $('#id-module-' + row + '').trigger('click');*/
/*             row++;*/
/*         }*/
/*         //--></script>*/
/* {{ footer }}*/
