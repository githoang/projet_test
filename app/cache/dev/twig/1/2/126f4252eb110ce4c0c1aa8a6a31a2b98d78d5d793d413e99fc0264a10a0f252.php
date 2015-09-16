<?php

/* PimPdfGeneratorBundle:Product:renderPdf.html.twig */
class __TwigTemplate_011e78e3b1fb734c074aecf08659121cae87dad79a09459a516e41e6ec6d4a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'images' => array($this, 'block_images'),
            'attribute_group' => array($this, 'block_attribute_group'),
            'attribute' => array($this, 'block_attribute'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "identifier", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["renderingDate"]) ? $context["renderingDate"] : $this->getContext($context, "renderingDate"))), "html", null, true);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <style type=\"text/css\">
            ";
        // line 7
        if ((null != (isset($context["customFont"]) ? $context["customFont"] : $this->getContext($context, "customFont")))) {
            // line 8
            echo "                @font-face {
                    font-family: 'Custom font';
                    font-style: normal;
                    font-weight: 400;
                    src: url(";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["customFont"]) ? $context["customFont"] : $this->getContext($context, "customFont")), "html", null, true);
            echo ") format('truetype');
                }
            ";
        }
        // line 15
        echo "
            * {
                font-family: 'Custom font', Helvetica;
                font-weight: 400 !important;
            }

            .header {
                margin-bottom: 20px;
                width: 100%;
            }

            .header h1 {
                margin-bottom: 5px;
            }

            .header .rendering-date {
                font-size: 15px;
            }

            .images {
                width: 100%;
                overflow: hidden;
            }

            .images img {
                height: 100px;
                display: inline-block;
                margin-right: 20px;
                margin-bottom: 20px;
            }

            .attribute-group table {
                width: 100%;
                border: 1px solid #aaa;
                border-radius: 5px;
                margin-top: 0px;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            .attribute-group table h2 {
                width: 100%;
                background: #7887AB;
                color: white;
                padding: 2.5px 5px;
                font-size: 23px;
                text-transform: uppercase;
                margin: 0px;
            }

            .attribute-group table tr {
                border-bottom: 1px solid #aaa;
            }

            .attribute-group table th {
                padding: 0px;
                text-align: left;
            }

            .attribute-group table td {
                padding: 5px;
                text-align: left;
            }

            .attribute-group table .attribute {
                width: 300px;
                vertical-align: top;
            }

            .attribute-group table .value p{
                margin-top: 0;
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <div class=\"header\">
            ";
        // line 92
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "        </div>
        <div class=\"images\">
            ";
        // line 98
        $this->displayBlock('images', $context, $blocks);
        // line 104
        echo "        </div>
        <div class=\"attribute-group\">
            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupedAttributes"]) ? $context["groupedAttributes"] : $this->getContext($context, "groupedAttributes")));
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
        foreach ($context['_seq'] as $context["group"] => $context["attributes"]) {
            // line 107
            echo "                ";
            $this->displayBlock('attribute_group', $context, $blocks);
            // line 136
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "        </div>
    </body>
</html>
";
    }

    // line 92
    public function block_header($context, array $blocks = array())
    {
        // line 93
        echo "                <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "label", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "identifier", array()) != $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "label", array()))) ? ((("(" . $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "identifier", array())) . ")")) : ("")), "html", null, true);
        echo "</h1>
                <span class=\"rendering-date\">";
        // line 94
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["renderingDate"]) ? $context["renderingDate"] : $this->getContext($context, "renderingDate"))), "html", null, true);
        echo "</span>
            ";
    }

    // line 98
    public function block_images($context, array $blocks = array())
    {
        // line 99
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imageAttributes"]) ? $context["imageAttributes"] : $this->getContext($context, "imageAttributes")));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            if (( !(null === $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getValue", array(0 => $this->getAttribute($context["attribute"], "code", array()), 1 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 2 => (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope"))), "method"), "media", array())) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(            // line 100
(isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getValue", array(0 => $this->getAttribute($context["attribute"], "code", array()), 1 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 2 => (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope"))), "method"), "media", array()), "filename", array())))) {
                // line 101
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["uploadDir"]) ? $context["uploadDir"] : $this->getContext($context, "uploadDir")), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getValue", array(0 => $this->getAttribute($context["attribute"], "code", array()), 1 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 2 => (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope"))), "method"), "media", array()), "filename", array()), "html", null, true);
                echo "\" />
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            ";
    }

    // line 107
    public function block_attribute_group($context, array $blocks = array())
    {
        // line 108
        echo "                <table>
                    <thead>
                        <tr class=\"group\">
                            <th colspan=\"2\"><h2>";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "html", null, true);
        echo "</h2></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 116
            echo "                            ";
            $this->displayBlock('attribute', $context, $blocks);
            // line 132
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                    </tbody>
                </table>
                ";
    }

    // line 116
    public function block_attribute($context, array $blocks = array())
    {
        // line 117
        echo "                            <tr>
                                <td class=\"attribute\">
                                    ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "label", array()), "html", null, true);
        echo "
                                </td>
                                <td class=\"value\">
                                ";
        // line 122
        if ((($this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "attributeType", array()) == "pim_catalog_image") &&  !(null === $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getValue", array(0 => $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "code", array()), 1 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 2 => (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope"))), "method"), "media", array())))) {
            // line 123
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getValue", array(0 => $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "code", array()), 1 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 2 => (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope"))), "method"), "media", array()), "originalFilename", array()), "html", null, true);
            echo "
                                ";
        } elseif ((($this->getAttribute(        // line 124
(isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "attributeType", array()) == "pim_catalog_textarea") && $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "isWysiwygEnabled", array()))) {
            // line 125
            echo "                                    ";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getValue", array(0 => $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "code", array()), 1 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 2 => (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope"))), "method");
            echo "
                                ";
        } else {
            // line 127
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getValue", array(0 => $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "code", array()), 1 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 2 => (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope"))), "method"), "html", null, true);
            echo "
                                ";
        }
        // line 129
        echo "                                </td>
                            </tr>
                            ";
    }

    public function getTemplateName()
    {
        return "PimPdfGeneratorBundle:Product:renderPdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 129,  306 => 127,  300 => 125,  298 => 124,  293 => 123,  291 => 122,  285 => 119,  281 => 117,  278 => 116,  272 => 133,  258 => 132,  255 => 116,  238 => 115,  231 => 111,  226 => 108,  223 => 107,  219 => 103,  208 => 101,  206 => 100,  201 => 99,  198 => 98,  192 => 94,  185 => 93,  182 => 92,  175 => 137,  161 => 136,  158 => 107,  141 => 106,  137 => 104,  135 => 98,  131 => 96,  129 => 92,  50 => 15,  44 => 12,  38 => 8,  36 => 7,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>{{ product.identifier }} - {{ renderingDate|date }}</title>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/*         <style type="text/css">*/
/*             {% if (null != customFont) %}*/
/*                 @font-face {*/
/*                     font-family: 'Custom font';*/
/*                     font-style: normal;*/
/*                     font-weight: 400;*/
/*                     src: url({{ customFont }}) format('truetype');*/
/*                 }*/
/*             {% endif %}*/
/* */
/*             * {*/
/*                 font-family: 'Custom font', Helvetica;*/
/*                 font-weight: 400 !important;*/
/*             }*/
/* */
/*             .header {*/
/*                 margin-bottom: 20px;*/
/*                 width: 100%;*/
/*             }*/
/* */
/*             .header h1 {*/
/*                 margin-bottom: 5px;*/
/*             }*/
/* */
/*             .header .rendering-date {*/
/*                 font-size: 15px;*/
/*             }*/
/* */
/*             .images {*/
/*                 width: 100%;*/
/*                 overflow: hidden;*/
/*             }*/
/* */
/*             .images img {*/
/*                 height: 100px;*/
/*                 display: inline-block;*/
/*                 margin-right: 20px;*/
/*                 margin-bottom: 20px;*/
/*             }*/
/* */
/*             .attribute-group table {*/
/*                 width: 100%;*/
/*                 border: 1px solid #aaa;*/
/*                 border-radius: 5px;*/
/*                 margin-top: 0px;*/
/*                 border-collapse: collapse;*/
/*                 margin-bottom: 20px;*/
/*             }*/
/* */
/*             .attribute-group table h2 {*/
/*                 width: 100%;*/
/*                 background: #7887AB;*/
/*                 color: white;*/
/*                 padding: 2.5px 5px;*/
/*                 font-size: 23px;*/
/*                 text-transform: uppercase;*/
/*                 margin: 0px;*/
/*             }*/
/* */
/*             .attribute-group table tr {*/
/*                 border-bottom: 1px solid #aaa;*/
/*             }*/
/* */
/*             .attribute-group table th {*/
/*                 padding: 0px;*/
/*                 text-align: left;*/
/*             }*/
/* */
/*             .attribute-group table td {*/
/*                 padding: 5px;*/
/*                 text-align: left;*/
/*             }*/
/* */
/*             .attribute-group table .attribute {*/
/*                 width: 300px;*/
/*                 vertical-align: top;*/
/*             }*/
/* */
/*             .attribute-group table .value p{*/
/*                 margin-top: 0;*/
/*                 margin-bottom: 0;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         <div class="header">*/
/*             {% block header %}*/
/*                 <h1>{{ product.label }} {{ product.identifier != product.label ? '(' ~ product.identifier ~ ')' : '' }}</h1>*/
/*                 <span class="rendering-date">{{ renderingDate|date }}</span>*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="images">*/
/*             {% block images %}*/
/*                 {% for attribute in imageAttributes if product.getValue(attribute.code, locale, scope).media is not null*/
/*                     and product.getValue(attribute.code, locale, scope).media.filename is not null %}*/
/*                     <img src="{{ uploadDir }}{{ product.getValue(attribute.code, locale, scope).media.filename }}" />*/
/*                 {% endfor %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="attribute-group">*/
/*             {% for group, attributes in groupedAttributes %}*/
/*                 {% block attribute_group %}*/
/*                 <table>*/
/*                     <thead>*/
/*                         <tr class="group">*/
/*                             <th colspan="2"><h2>{{ group }}</h2></th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for attribute in attributes %}*/
/*                             {% block attribute %}*/
/*                             <tr>*/
/*                                 <td class="attribute">*/
/*                                     {{ attribute.label }}*/
/*                                 </td>*/
/*                                 <td class="value">*/
/*                                 {% if attribute.attributeType == 'pim_catalog_image' and product.getValue(attribute.code, locale, scope).media is not null %}*/
/*                                     {{ product.getValue(attribute.code, locale, scope).media.originalFilename }}*/
/*                                 {% elseif attribute.attributeType == 'pim_catalog_textarea' and attribute.isWysiwygEnabled %}*/
/*                                     {{ product.getValue(attribute.code, locale, scope)|raw }}*/
/*                                 {% else %}*/
/*                                     {{ product.getValue(attribute.code, locale, scope) }}*/
/*                                 {% endif %}*/
/*                                 </td>*/
/*                             </tr>*/
/*                             {% endblock %}*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                 {% endblock %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
