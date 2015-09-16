<?php

/* PimUIBundle:Default:page_elements.html.twig */
class __TwigTemplate_981652c47a7766131228acd7a3791e181b1bd77bcad17be720741a24c376581d extends Twig_Template
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
        // line 27
        echo "
";
        // line 39
        echo "
";
        // line 56
        echo "
";
        // line 63
        echo "
";
        // line 70
        echo "
";
        // line 80
        echo "
";
        // line 91
        echo "
";
        // line 117
        echo "
";
        // line 137
        echo "
";
        // line 148
        echo "
";
        // line 168
        echo "
";
        // line 187
        echo "
";
        // line 196
        echo "
";
        // line 238
        echo "
";
        // line 277
        echo "
";
        // line 291
        echo "
";
        // line 296
        echo "
";
    }

    // line 1
    public function getcreateBtn($__entity__ = null, $__url__ = null, $__attr__ = null, $__acl__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "url" => $__url__,
            "attr" => $__attr__,
            "acl" => $__acl__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "    ";
            if (((null === (isset($context["acl"]) ? $context["acl"] : $this->getContext($context, "acl"))) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted((isset($context["acl"]) ? $context["acl"] : $this->getContext($context, "acl"))))) {
                // line 4
                echo "        ";
                if (((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")) == "dialog")) {
                    // line 5
                    echo "            ";
                    $context["buttonId"] = ("create-" . twig_lower_filter($this->env, twig_replace_filter((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), array(" " => "-", "." => "-"))));
                    // line 6
                    echo "            ";
                    $context["attr"] = array("id" => (isset($context["buttonId"]) ? $context["buttonId"] : $this->getContext($context, "buttonId")), "data-form-url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
                    // line 7
                    echo "            ";
                    $context["url"] = null;
                    // line 8
                    echo "        ";
                }
                // line 9
                echo "        ";
                $context["title"] = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans(("btn.create." . (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
                // line 10
                echo "        <a class=\"btn btn-primary pull-right";
                if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()), "html", null, true);
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) ? ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) : ("javascript:void(0);")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                echo "\"";
                if ((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        if (($context["key"] != "class")) {
                            echo " ";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\"";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                echo "</a>
        ";
                // line 11
                if (array_key_exists("buttonId", $context)) {
                    // line 12
                    echo "            <script type=\"text/javascript\">
                require(
                    ['jquery', 'pim/dialogform'],
                    function (\$, DialogForm) {
                        'use strict';
                        \$(function() {
                            new DialogForm('#";
                    // line 18
                    echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : $this->getContext($context, "buttonId")), "html", null, true);
                    echo "');
                        });
                    }
                );
            </script>
        ";
                }
                // line 24
                echo "    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getsubmitBtn($__text__ = null, $__icon__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            ob_start();
            // line 30
            echo "    ";
            $context["text"] = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans(((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "btn.save")) : ("btn.save"))));
            // line 31
            echo "    <button type=\"submit\" class=\"btn btn-primary\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "\">
        ";
            // line 32
            if ((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))) {
                // line 33
                echo "            <i class=\"icon-";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 35
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "
    </button>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function getsubmitDropdownBtn($__actions__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "actions" => $__actions__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            ob_start();
            // line 42
            echo "    <div class=\"btn-group submit-form\">
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
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
            foreach ($context['_seq'] as $context["actionKey"] => $context["action"]) {
                // line 44
                echo "            ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 45
                    echo "                <button type=\"submit\" class=\"btn btn-primary\" title=\"";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($context["action"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "text", array()), "")) : ("")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($context["action"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "text", array()), "")) : ("")))), "html", null, true);
                    echo "</button>
                <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu right-align\">
            ";
                } else {
                    // line 49
                    echo "                    <li><a href=\"javascript:void(0);\" value=\"";
                    echo twig_escape_filter($this->env, $context["actionKey"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($context["action"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "text", array()), "")) : ("")))), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 51
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['actionKey'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </ul>
    </div>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function getbackLink($__url__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "title" => $__title__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            ob_start();
            // line 59
            echo "    ";
            $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "btn.to grid")) : ("btn.to grid"));
            // line 60
            echo "    <a class=\"btn icons-holder back-link\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), "html", null, true);
            echo "\"><i class=\"icon-chevron-left\"></i></a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function getdeleteLinkAttributes($__url__ = null, $__redirectUrl__ = null, $__message__ = null, $__successMessage__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "redirectUrl" => $__redirectUrl__,
            "message" => $__message__,
            "successMessage" => $__successMessage__,
            "title" => $__title__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 65
            echo "    ";
            $context["message"] = ((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "confirmation.remove.item")) : ("confirmation.remove.item"));
            // line 66
            echo "    ";
            $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), $this->env->getExtension('translator')->trans("confirmation.delete"))) : ($this->env->getExtension('translator')->trans("confirmation.delete")));
            // line 67
            echo "    ";
            $context["successMessage"] = ((array_key_exists("successMessage", $context)) ? (_twig_default_filter((isset($context["successMessage"]) ? $context["successMessage"] : $this->getContext($context, "successMessage")), $this->env->getExtension('translator')->trans("flash.entity.removed"))) : ($this->env->getExtension('translator')->trans("flash.entity.removed")));
            // line 68
            echo "    href=\"javascript:void(0);\" data-dialog=\"confirm\" data-title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "\" data-message=\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" data-redirect-url=\"";
            echo twig_escape_filter($this->env, (isset($context["redirectUrl"]) ? $context["redirectUrl"] : $this->getContext($context, "redirectUrl")), "html", null, true);
            echo "\" data-method=\"DELETE\" data-error-message=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("The element could not be deleted", array(), "messages");
            echo "\" data-success-message=\"";
            echo twig_escape_filter($this->env, (isset($context["successMessage"]) ? $context["successMessage"] : $this->getContext($context, "successMessage")), "html", null, true);
            echo "\"
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function getdeleteLink($__url__ = null, $__acl__ = null, $__redirectUrl__ = null, $__message__ = null, $__successMessage__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "acl" => $__acl__,
            "redirectUrl" => $__redirectUrl__,
            "message" => $__message__,
            "successMessage" => $__successMessage__,
            "title" => $__title__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 72
            echo "    ";
            if (((null === (isset($context["acl"]) ? $context["acl"] : $this->getContext($context, "acl"))) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted((isset($context["acl"]) ? $context["acl"] : $this->getContext($context, "acl"))))) {
                // line 73
                echo "        ";
                $context["elements"] = $this;
                // line 74
                echo "        <a class=\"btn icons-holder-text no-hash\" title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.delete")), "html", null, true);
                echo "\" ";
                echo $context["elements"]->getdeleteLinkAttributes((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), (isset($context["redirectUrl"]) ? $context["redirectUrl"] : $this->getContext($context, "redirectUrl")), (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), (isset($context["successMessage"]) ? $context["successMessage"] : $this->getContext($context, "successMessage")), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")));
                echo " >
            <i class=\"icon-trash\"></i>
            ";
                // line 76
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.delete")), "html", null, true);
                echo "
        </a>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getlink($__text__ = null, $__url__ = null, $__opts__ = array())
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "url" => $__url__,
            "opts" => $__opts__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 82
            ob_start();
            // line 83
            echo "    ";
            $context["title"] = (($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "title", array(), "any", true, true)) ? ($this->getAttribute((isset($context["opts"]) ? $context["opts"] : $this->getContext($context, "opts")), "title", array())) : ((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))));
            // line 84
            echo "    ";
            $context["icon"] = (($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["opts"]) ? $context["opts"] : $this->getContext($context, "opts")), "icon", array())) : (null));
            // line 85
            echo "    <a";
            if ($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "id", array(), "any", true, true)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opts"]) ? $context["opts"] : $this->getContext($context, "opts")), "id", array()), "html", null, true);
                echo "\"";
            }
            echo " class=\"btn ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "class", array(), "any", true, true)) ? (twig_join_filter($this->getAttribute((isset($context["opts"]) ? $context["opts"] : $this->getContext($context, "opts")), "class", array()), " ")) : ("")), "html", null, true);
            if (((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")) && (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) {
                echo " icons-holder-text";
            } elseif ((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))) {
                echo " icons-holder";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) ? ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) : ("javascript:void(0);")), "html", null, true);
            echo "\"";
            if ((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))) {
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), "html", null, true);
                echo "\"";
            }
            if ($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "attr", array(), "any", true, true)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["opts"]) ? $context["opts"] : $this->getContext($context, "opts")), "attr", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo ">
        ";
            // line 86
            if ((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))) {
                echo "<i class=\"icon-";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
                echo "\"></i>";
            }
            // line 87
            echo "        ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")))), "html", null, true);
            echo "
    </a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function getpage_header($__title__ = null, $__buttons__ = null, $__subtitle__ = null, $__left__ = null, $__right__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "buttons" => $__buttons__,
            "subtitle" => $__subtitle__,
            "left" => $__left__,
            "right" => $__right__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    <div class=\"navigation clearfix navbar-extra\">
        <div class=\"row-fluid\">
            ";
            // line 95
            if ( !twig_test_empty((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")))) {
                // line 96
                echo "                <div class=\"navbar-buttons pull-right\">
                    ";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 100
            echo "            <div class=\"navbar-content pull-left\">
                <div class=\"navbar-title clearfix-oro\">
                    <div class=\"sub-title\">";
            // line 102
            echo twig_escape_filter($this->env, (twig_capitalize_string_filter($this->env, twig_first($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) . twig_slice($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1, null)), "html", null, true);
            echo "</div>
                    ";
            // line 103
            if ( !twig_test_empty((isset($context["subtitle"]) ? $context["subtitle"] : $this->getContext($context, "subtitle")))) {
                // line 104
                echo "                        <span class=\"separator\">/</span>
                        <div class=\"sub-title\">";
                // line 105
                echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : $this->getContext($context, "subtitle")), "html", null, true);
                echo "</div>
                    ";
            }
            // line 107
            echo "                </div>
           </div>
           <div class=\"clearfix\"></div>
           <div class=\"navbar-content pull-left\">
               ";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["left"]) ? $context["left"] : $this->getContext($context, "left")), "html", null, true);
            echo "
           </div>
            ";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), "html", null, true);
            echo "
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function getform_navbar($__tabs__ = null, $__translationSuffix__ = ".title")
    {
        $context = $this->env->mergeGlobals(array(
            "tabs" => $__tabs__,
            "translationSuffix" => $__translationSuffix__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 119
            echo "    <div id=\"form-navbar\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"row-fluid\">
                ";
            // line 122
            if ( !twig_test_empty((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")))) {
                // line 123
                echo "                    <ul class=\"nav\">
                        ";
                // line 124
                if (twig_test_iterable((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")))) {
                    // line 125
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                        // line 126
                        echo "                                <li";
                        if ($this->getAttribute($context["loop"], "first", array())) {
                            echo " class=\"active\"";
                        }
                        echo "><a href=\"#";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($context["tab"], array(" " => "-", "." => "-"))), "html", null, true);
                        echo "\" data-toggle=\"tab\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(($context["tab"] . (isset($context["translationSuffix"]) ? $context["translationSuffix"] : $this->getContext($context, "translationSuffix")))), "html", null, true);
                        echo "</a></li>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "                        ";
                } else {
                    // line 129
                    echo "                            <li class=\"active\"><a href=\"#";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")), array(" " => "-", "." => "-"))), "html", null, true);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")) . (isset($context["translationSuffix"]) ? $context["translationSuffix"] : $this->getContext($context, "translationSuffix")))), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 131
                echo "                    </ul>
                ";
            }
            // line 133
            echo "            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 138
    public function getform_errors($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 139
            echo "    ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array()))) {
                // line 140
                echo "        <div class=\"alert alert-error fade in top-messages\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <div class=\"message\">
                ";
                // line 143
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
            </div>
        </div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 149
    public function getaccordion($__items__ = array(), $__counter__ = 1, $__no_buffer__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "counter" => $__counter__,
            "no_buffer" => $__no_buffer__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 150
            echo "    <div class=\"accordion\">
        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
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
            foreach ($context['_seq'] as $context["title"] => $context["content"]) {
                // line 152
                echo "            <div class=\"accordion-group\">
                <div class=\"accordion-heading\">
                    <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#collapse-";
                // line 154
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                        <i class=\"icon-collapse-alt\"></i>
                        ";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["title"]), "html", null, true);
                echo "
                    </a>
                </div>
                <div id=\"collapse-";
                // line 159
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"accordion-body in\">
                    <div class=\"accordion-inner";
                // line 160
                echo (((isset($context["no_buffer"]) ? $context["no_buffer"] : $this->getContext($context, "no_buffer"))) ? ("-unbuffered") : (""));
                echo "\">
                        ";
                // line 161
                echo $context["content"];
                echo "
                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['title'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 169
    public function getupdated($__formId__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "formId" => $__formId__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 170
            ob_start();
            // line 171
            echo "    <div id=\"entity-updated\" class=\"pull-right\">
        <span class=\"label label-warning\">";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.updated"), "html", null, true);
            echo "</span>
    </div>
    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/formupdatelistener'],
            function (\$, FormUpdateListener) {
                'use strict';
                \$(function () {
                    new FormUpdateListener(\$('#";
            // line 180
            echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId")), "html", null, true);
            echo "'));
                });
            }
        );
    </script>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 188
    public function getquickCreateOption($__id__ = null, $__route__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "route" => $__route__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 189
            ob_start();
            // line 190
            echo "    ";
            $context["id"] = ("add-option-link-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 191
            echo "    <a id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" data-form-url=\"";
            echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
            echo "\" class=\"btn btn-small icons-holder add-attribute-option\" href=\"javascript:void(0);\" data-toggle=\"tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add an option"), "html", null, true);
            echo "\" data-success-message=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.attribute.option created"), "html", null, true);
            echo "\" data-error-message=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.attribute.error creating option"), "html", null, true);
            echo "\">
        <i class=\"icon-plus\"></i>
    </a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 197
    public function getchannelSwitcher($__channels__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "channels" => $__channels__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 198
            ob_start();
            // line 199
            echo "    ";
            $context["id"] = "channel-switcher";
            // line 200
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"btn-group\">
        <a class=\"btn dropdown-toggle\" href=\"javascript:void(0);\" title=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Scope"), "html", null, true);
            echo "\" data-toggle=\"dropdown\">
            <i class=\"icon-eye-open\"></i>
            <span>";
            // line 203
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Scope"), "html", null, true);
            echo "</span>
        </a>
        <ul class=\"dropdown-menu pull-right\">
            ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels")));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 207
                echo "                <li><a href=\"javascript:void(0);\" data-scope=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "label", array()), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "        </ul>
        <a class=\"btn icons-holder\" href=\"javascript:void(0);\" title=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Expand all channels"), "html", null, true);
            echo "\" data-action=\"expand\" data-collapse-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Collapse all channels"), "html", null, true);
            echo "\" data-expand-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Expand all channels"), "html", null, true);
            echo "\">
            <i class=\"icon-caret-right\"></i>
        </a>
    </div>
    <script type=\"text/javascript\">
        require(
            ['jquery', 'oro/mediator'],
            function (\$, mediator) {
                'use strict';
                \$(function () {
                    var \$channelSwitcher = \$('#";
            // line 220
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                    \$channelSwitcher.find('.dropdown-menu').find('a[data-scope]').on('click', function() {
                        mediator.trigger('scopablefield:changescope', \$(this).attr('data-scope'));
                    });
                    \$channelSwitcher.find('>a[data-action]').on('click', function() {
                        var \$el = \$(this),
                            action = \$el.attr('data-action');
                        mediator.trigger('scopablefield:' + action);
                        var newAction = action == 'collapse' ? 'expand' : 'collapse';
                        \$el.attr('title', \$el.attr('data-' + newAction + '-title')).attr('data-action', newAction);
                        \$el.find('i').toggleClass('icon-caret-right icon-caret-down');
                    });
                });
            }
        );
    </script>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 239
    public function getenabledSwitch($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 240
            ob_start();
            // line 241
            echo "    ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array(), "any", true, true)) {
                // line 242
                echo "        ";
                $context["switchId"] = "switch_status";
                // line 243
                echo "        ";
                $context["enableLabel"] = $this->env->getExtension('translator')->trans("info.product.enable");
                // line 244
                echo "        ";
                $context["disableLabel"] = $this->env->getExtension('translator')->trans("info.product.disable");
                // line 245
                echo "        ";
                $context["enabledLabel"] = $this->env->getExtension('translator')->trans("info.product.enabled");
                // line 246
                echo "        ";
                $context["disabledLabel"] = $this->env->getExtension('translator')->trans("info.product.disabled");
                // line 247
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget');
                echo "
        <div class=\"btn-group\">
            <button id=\"";
                // line 249
                echo twig_escape_filter($this->env, (isset($context["switchId"]) ? $context["switchId"] : $this->getContext($context, "switchId")), "html", null, true);
                echo "\" type=\"button\" class=\"btn\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), "vars", array()), "value", array())) ? ((isset($context["disableLabel"]) ? $context["disableLabel"] : $this->getContext($context, "disableLabel"))) : ((isset($context["enableLabel"]) ? $context["enableLabel"] : $this->getContext($context, "enableLabel")))), "html", null, true);
                echo "</button>
        </div>
        <script type=\"text/javascript\">
            require(
                ['jquery'],
                function (\$) {
                    'use strict';
                    \$(function () {
                        \$('#";
                // line 257
                echo twig_escape_filter($this->env, (isset($context["switchId"]) ? $context["switchId"] : $this->getContext($context, "switchId")), "html", null, true);
                echo "').on('click', function () {
                            var \$field = \$('#";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), "vars", array()), "id", array()), "html", null, true);
                echo "'),
                                \$status = \$('.status-enabled').find('.badge');
                            if (+\$field.val()) {
                                \$field.val(0).trigger('change');
                                \$(this).html('";
                // line 262
                echo twig_escape_filter($this->env, (isset($context["enableLabel"]) ? $context["enableLabel"] : $this->getContext($context, "enableLabel")), "html", null, true);
                echo "');
                                \$status.html('<i class=\"icon-status-disabled icon-circle\"></i>";
                // line 263
                echo twig_escape_filter($this->env, (isset($context["disabledLabel"]) ? $context["disabledLabel"] : $this->getContext($context, "disabledLabel")), "html", null, true);
                echo "').removeClass('badge-enabled status-enabled').addClass('badge-disabled status-disabled');
                            } else {
                                \$field.val(1).trigger('change');
                                \$(this).html('";
                // line 266
                echo twig_escape_filter($this->env, (isset($context["disableLabel"]) ? $context["disableLabel"] : $this->getContext($context, "disableLabel")), "html", null, true);
                echo "');
                                \$status.html('<i class=\"icon-status-enabled icon-circle\"></i>";
                // line 267
                echo twig_escape_filter($this->env, (isset($context["enabledLabel"]) ? $context["enabledLabel"] : $this->getContext($context, "enabledLabel")), "html", null, true);
                echo "').removeClass('badge-disabled status-disabled').addClass('badge-enabled status-enabled');
                            }
                        });
                    });
                }
            );
        </script>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 278
    public function getenabledLabel($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 279
            ob_start();
            // line 280
            echo "    ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array(), "any", true, true)) {
                // line 281
                echo "        <div class=\"status-enabled pull-left\">
            ";
                // line 282
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), "vars", array()), "value", array())) {
                    // line 283
                    echo "                <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled icon-circle\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.product.enabled"), "html", null, true);
                    echo "</div>
            ";
                } else {
                    // line 285
                    echo "                <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled icon-circle\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.product.disabled"), "html", null, true);
                    echo "</div>
            ";
                }
                // line 287
                echo "        </div>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 292
    public function getconfirmLinkAttributes($__url__ = null, $__redirectUrl__ = null, $__message__ = null, $__successMessage__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "redirectUrl" => $__redirectUrl__,
            "message" => $__message__,
            "successMessage" => $__successMessage__,
            "title" => $__title__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 293
            echo "    ";
            $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), $this->env->getExtension('translator')->trans("confirmation.confirm"))) : ($this->env->getExtension('translator')->trans("confirmation.confirm")));
            // line 294
            echo "    href=\"javascript:void(0);\" data-dialog=\"confirm\" data-title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "\" data-message=\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" data-redirect-url=\"";
            echo twig_escape_filter($this->env, (isset($context["redirectUrl"]) ? $context["redirectUrl"] : $this->getContext($context, "redirectUrl")), "html", null, true);
            echo "\" data-method=\"POST\" data-error-message=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("The action could not be performed", array(), "messages");
            echo "\" data-success-message=\"";
            echo twig_escape_filter($this->env, (isset($context["successMessage"]) ? $context["successMessage"] : $this->getContext($context, "successMessage")), "html", null, true);
            echo "\"
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 297
    public function getconfirmLink($__url__ = null, $__redirectUrl__ = null, $__successMessage__ = null, $__buttonLabel__ = null, $__buttonIcon__ = null, $__message__ = null, $__buttonClass__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "redirectUrl" => $__redirectUrl__,
            "successMessage" => $__successMessage__,
            "buttonLabel" => $__buttonLabel__,
            "buttonIcon" => $__buttonIcon__,
            "message" => $__message__,
            "buttonClass" => $__buttonClass__,
            "title" => $__title__,
            "varargs" => func_num_args() > 8 ? array_slice(func_get_args(), 8) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 298
            echo "    ";
            $context["this"] = $this;
            // line 299
            echo "    ";
            $context["buttonLabel"] = ("btn." . (isset($context["buttonLabel"]) ? $context["buttonLabel"] : $this->getContext($context, "buttonLabel")));
            // line 300
            echo "    <a class=\"btn ";
            echo twig_escape_filter($this->env, (isset($context["buttonClass"]) ? $context["buttonClass"] : $this->getContext($context, "buttonClass")), "html", null, true);
            echo " icons-holder-text no-hash\" title=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["buttonLabel"]) ? $context["buttonLabel"] : $this->getContext($context, "buttonLabel")))), "html", null, true);
            echo "\" ";
            echo $context["this"]->getconfirmLinkAttributes((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), (isset($context["redirectUrl"]) ? $context["redirectUrl"] : $this->getContext($context, "redirectUrl")), (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), (isset($context["successMessage"]) ? $context["successMessage"] : $this->getContext($context, "successMessage")), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")));
            echo " >
        <i class=\"icon-";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["buttonIcon"]) ? $context["buttonIcon"] : $this->getContext($context, "buttonIcon")), "html", null, true);
            echo "\"></i>
        ";
            // line 302
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["buttonLabel"]) ? $context["buttonLabel"] : $this->getContext($context, "buttonLabel")))), "html", null, true);
            echo "
    </a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PimUIBundle:Default:page_elements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1232 => 302,  1228 => 301,  1219 => 300,  1216 => 299,  1213 => 298,  1193 => 297,  1168 => 294,  1165 => 293,  1148 => 292,  1134 => 287,  1128 => 285,  1122 => 283,  1120 => 282,  1117 => 281,  1114 => 280,  1112 => 279,  1100 => 278,  1079 => 267,  1075 => 266,  1069 => 263,  1065 => 262,  1058 => 258,  1054 => 257,  1041 => 249,  1035 => 247,  1032 => 246,  1029 => 245,  1026 => 244,  1023 => 243,  1020 => 242,  1017 => 241,  1015 => 240,  1003 => 239,  974 => 220,  957 => 210,  954 => 209,  943 => 207,  939 => 206,  933 => 203,  928 => 201,  923 => 200,  920 => 199,  918 => 198,  906 => 197,  881 => 191,  878 => 190,  876 => 189,  863 => 188,  845 => 180,  834 => 172,  831 => 171,  829 => 170,  817 => 169,  805 => 166,  786 => 161,  782 => 160,  776 => 159,  770 => 156,  763 => 154,  759 => 152,  742 => 151,  739 => 150,  725 => 149,  709 => 143,  704 => 140,  701 => 139,  689 => 138,  675 => 133,  671 => 131,  663 => 129,  660 => 128,  637 => 126,  619 => 125,  617 => 124,  614 => 123,  612 => 122,  607 => 119,  594 => 118,  579 => 113,  574 => 111,  568 => 107,  563 => 105,  560 => 104,  558 => 103,  554 => 102,  550 => 100,  544 => 97,  541 => 96,  539 => 95,  535 => 93,  519 => 92,  503 => 87,  497 => 86,  459 => 85,  456 => 84,  453 => 83,  451 => 82,  437 => 81,  421 => 76,  413 => 74,  410 => 73,  407 => 72,  389 => 71,  364 => 68,  361 => 67,  358 => 66,  355 => 65,  338 => 64,  321 => 60,  318 => 59,  316 => 58,  303 => 57,  289 => 52,  275 => 51,  267 => 49,  257 => 45,  254 => 44,  237 => 43,  234 => 42,  232 => 41,  220 => 40,  204 => 35,  198 => 33,  196 => 32,  191 => 31,  188 => 30,  186 => 29,  173 => 28,  160 => 24,  151 => 18,  143 => 12,  141 => 11,  110 => 10,  107 => 9,  104 => 8,  101 => 7,  98 => 6,  95 => 5,  92 => 4,  89 => 3,  87 => 2,  72 => 1,  67 => 296,  64 => 291,  61 => 277,  58 => 238,  55 => 196,  52 => 187,  49 => 168,  46 => 148,  43 => 137,  40 => 117,  37 => 91,  34 => 80,  31 => 70,  28 => 63,  25 => 56,  22 => 39,  19 => 27,);
    }
}
/* {% macro createBtn(entity, url, attr, acl) %}*/
/* {% spaceless %}*/
/*     {% if acl is null or resource_granted(acl) %}*/
/*         {% if attr == 'dialog' %}*/
/*             {% set buttonId = 'create-'~(entity|replace({' ': '-', '.': '-'})|lower) %}*/
/*             {% set attr = { 'id': buttonId, 'data-form-url': url } %}*/
/*             {% set url = null %}*/
/*         {% endif %}*/
/*         {% set title = ('btn.create.' ~ entity)|trans|capitalize %}*/
/*         <a class="btn btn-primary pull-right{% if attr.class is defined %} {{ attr.class }}{% endif %}" href="{{ url ? url : 'javascript:void(0);' }}" title="{{ title }}"{% if attr %}{% for key, value in attr %}{% if key != 'class' %} {{ key }}="{{ value }}"{% endif %}{% endfor %}{% endif %}>{{ title }}</a>*/
/*         {% if buttonId is defined %}*/
/*             <script type="text/javascript">*/
/*                 require(*/
/*                     ['jquery', 'pim/dialogform'],*/
/*                     function ($, DialogForm) {*/
/*                         'use strict';*/
/*                         $(function() {*/
/*                             new DialogForm('#{{ buttonId }}');*/
/*                         });*/
/*                     }*/
/*                 );*/
/*             </script>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro submitBtn(text, icon) %}*/
/* {% spaceless %}*/
/*     {% set text = text|default('btn.save')|trans|capitalize %}*/
/*     <button type="submit" class="btn btn-primary" title="{{ text }}">*/
/*         {% if icon %}*/
/*             <i class="icon-{{ icon }}"></i>*/
/*         {% endif %}*/
/*         {{ text }}*/
/*     </button>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro submitDropdownBtn(actions) %}*/
/* {% spaceless %}*/
/*     <div class="btn-group submit-form">*/
/*         {% for actionKey, action in actions %}*/
/*             {% if loop.first %}*/
/*                 <button type="submit" class="btn btn-primary" title="{{ action.text|default('')|trans|capitalize }}">{{ action.text|default('')|trans|capitalize }}</button>*/
/*                 <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>*/
/*                 <ul class="dropdown-menu right-align">*/
/*             {% else %}*/
/*                     <li><a href="javascript:void(0);" value="{{ actionKey }}">{{ action.text|default('')|trans|capitalize }}</a></li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro backLink(url, title) %}*/
/* {% spaceless %}*/
/*     {% set title = title|default('btn.to grid') %}*/
/*     <a class="btn icons-holder back-link" href="{{ url }}" title="{{ title|trans|capitalize }}"><i class="icon-chevron-left"></i></a>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro deleteLinkAttributes(url, redirectUrl, message, successMessage, title) %}{% spaceless %}*/
/*     {% set message = message|default('confirmation.remove.item') %}*/
/*     {% set title = title|default('confirmation.delete'|trans) %}*/
/*     {% set successMessage = successMessage|default('flash.entity.removed'|trans) %}*/
/*     href="javascript:void(0);" data-dialog="confirm" data-title="{{ title }}" data-message="{{ message }}" data-url="{{ url }}" data-redirect-url="{{ redirectUrl }}" data-method="DELETE" data-error-message="{% trans %}The element could not be deleted{% endtrans %}" data-success-message="{{ successMessage }}"*/
/* {% endspaceless %}{% endmacro %}*/
/* */
/* {% macro deleteLink(url, acl, redirectUrl, message, successMessage, title) %}{% spaceless %}*/
/*     {% if acl is null or resource_granted(acl) %}*/
/*         {% import _self as elements %}*/
/*         <a class="btn icons-holder-text no-hash" title="{{ 'btn.delete'|trans|capitalize }}" {{elements.deleteLinkAttributes(url, redirectUrl, message, successMessage, title)}} >*/
/*             <i class="icon-trash"></i>*/
/*             {{ 'btn.delete'|trans|capitalize }}*/
/*         </a>*/
/*     {% endif %}*/
/* {% endspaceless %}{% endmacro %}*/
/* */
/* {% macro link(text, url, opts = {}) %}*/
/* {% spaceless %}*/
/*     {% set title = opts.title is defined ? opts.title : text %}*/
/*     {% set icon = opts.icon is defined ? opts.icon : null %}*/
/*     <a{% if opts.id is defined %} id="{{ opts.id }}"{% endif %} class="btn {{ opts.class is defined ? opts.class|join(' ') }}{% if text and icon %} icons-holder-text{% elseif icon %} icons-holder{% endif %}" href="{{ url ? url : 'javascript:void(0);' }}"{% if title %} title="{{ title|trans|capitalize }}"{% endif %}{% if opts.attr is defined %}{% for key, value in opts.attr %} {{ key }}="{{ value }}"{% endfor %}{% endif %}>*/
/*         {% if icon %}<i class="icon-{{ icon }}"></i>{% endif %}*/
/*         {{ text|trans|capitalize }}*/
/*     </a>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro page_header(title, buttons, subtitle, left, right) %}*/
/*     <div class="navigation clearfix navbar-extra">*/
/*         <div class="row-fluid">*/
/*             {% if buttons is not empty %}*/
/*                 <div class="navbar-buttons pull-right">*/
/*                     {{ buttons }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             <div class="navbar-content pull-left">*/
/*                 <div class="navbar-title clearfix-oro">*/
/*                     <div class="sub-title">{{ title|first|capitalize ~ title[1:] }}</div>*/
/*                     {% if subtitle is not empty %}*/
/*                         <span class="separator">/</span>*/
/*                         <div class="sub-title">{{ subtitle }}</div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*            </div>*/
/*            <div class="clearfix"></div>*/
/*            <div class="navbar-content pull-left">*/
/*                {{ left }}*/
/*            </div>*/
/*             {{ right }}*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro form_navbar(tabs, translationSuffix = '.title') %}*/
/*     <div id="form-navbar" class="navbar navbar-static scrollspy-nav">*/
/*         <div class="navbar-inner">*/
/*             <div class="row-fluid">*/
/*                 {% if tabs is not empty %}*/
/*                     <ul class="nav">*/
/*                         {% if tabs is iterable %}*/
/*                             {% for tab in tabs %}*/
/*                                 <li{% if loop.first %} class="active"{% endif %}><a href="#{{ tab|replace({' ': '-', '.': '-'})|lower }}" data-toggle="tab">{{ (tab ~ translationSuffix)|trans }}</a></li>*/
/*                             {% endfor %}*/
/*                         {% else %}*/
/*                             <li class="active"><a href="#{{ tabs|replace({' ': '-', '.': '-'})|lower }}" data-toggle="tab">{{ (tabs ~ translationSuffix)|trans }}</a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro form_errors(form) %}*/
/*     {% if form.vars.errors|length %}*/
/*         <div class="alert alert-error fade in top-messages">*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             <div class="message">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro accordion(items = {}, counter = 1, no_buffer = false) %}*/
/*     <div class="accordion">*/
/*         {% for title, content in items %}*/
/*             <div class="accordion-group">*/
/*                 <div class="accordion-heading">*/
/*                     <a class="accordion-toggle" data-toggle="collapse" href="#collapse-{{ counter }}-{{ loop.index }}">*/
/*                         <i class="icon-collapse-alt"></i>*/
/*                         {{ title|trans }}*/
/*                     </a>*/
/*                 </div>*/
/*                 <div id="collapse-{{ counter }}-{{ loop.index }}" class="accordion-body in">*/
/*                     <div class="accordion-inner{{ no_buffer ? '-unbuffered' : '' }}">*/
/*                         {{ content|raw }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro updated(formId) %}*/
/* {% spaceless %}*/
/*     <div id="entity-updated" class="pull-right">*/
/*         <span class="label label-warning">{{ 'info.updated'|trans }}</span>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'pim/formupdatelistener'],*/
/*             function ($, FormUpdateListener) {*/
/*                 'use strict';*/
/*                 $(function () {*/
/*                     new FormUpdateListener($('#{{ formId }}'));*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro quickCreateOption(id, route) %}*/
/* {% spaceless %}*/
/*     {% set id = 'add-option-link-' ~ id %}*/
/*     <a id="{{ id }}" data-form-url="{{ route }}" class="btn btn-small icons-holder add-attribute-option" href="javascript:void(0);" data-toggle="tooltip" data-original-title="{{ 'Add an option'|trans }}" data-success-message="{{ 'flash.attribute.option created'|trans }}" data-error-message="{{ 'flash.attribute.error creating option'|trans }}">*/
/*         <i class="icon-plus"></i>*/
/*     </a>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro channelSwitcher(channels) %}*/
/* {% spaceless %}*/
/*     {% set id = 'channel-switcher' %}*/
/*     <div id="{{ id }}" class="btn-group">*/
/*         <a class="btn dropdown-toggle" href="javascript:void(0);" title="{{ 'Scope'|trans }}" data-toggle="dropdown">*/
/*             <i class="icon-eye-open"></i>*/
/*             <span>{{ 'Scope'|trans }}</span>*/
/*         </a>*/
/*         <ul class="dropdown-menu pull-right">*/
/*             {% for channel in channels %}*/
/*                 <li><a href="javascript:void(0);" data-scope="{{ channel.code }}">{{ channel.label }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         <a class="btn icons-holder" href="javascript:void(0);" title="{{ 'Expand all channels'|trans }}" data-action="expand" data-collapse-title="{{ 'Collapse all channels'|trans }}" data-expand-title="{{ 'Expand all channels'|trans }}">*/
/*             <i class="icon-caret-right"></i>*/
/*         </a>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'oro/mediator'],*/
/*             function ($, mediator) {*/
/*                 'use strict';*/
/*                 $(function () {*/
/*                     var $channelSwitcher = $('#{{ id }}');*/
/*                     $channelSwitcher.find('.dropdown-menu').find('a[data-scope]').on('click', function() {*/
/*                         mediator.trigger('scopablefield:changescope', $(this).attr('data-scope'));*/
/*                     });*/
/*                     $channelSwitcher.find('>a[data-action]').on('click', function() {*/
/*                         var $el = $(this),*/
/*                             action = $el.attr('data-action');*/
/*                         mediator.trigger('scopablefield:' + action);*/
/*                         var newAction = action == 'collapse' ? 'expand' : 'collapse';*/
/*                         $el.attr('title', $el.attr('data-' + newAction + '-title')).attr('data-action', newAction);*/
/*                         $el.find('i').toggleClass('icon-caret-right icon-caret-down');*/
/*                     });*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro enabledSwitch(form) %}*/
/* {% spaceless %}*/
/*     {% if form.enabled is defined %}*/
/*         {% set switchId = 'switch_status' %}*/
/*         {% set enableLabel = 'info.product.enable'|trans %}*/
/*         {% set disableLabel = 'info.product.disable'|trans %}*/
/*         {% set enabledLabel = 'info.product.enabled'|trans %}*/
/*         {% set disabledLabel = 'info.product.disabled'|trans %}*/
/*         {{ form_widget(form.enabled) }}*/
/*         <div class="btn-group">*/
/*             <button id="{{ switchId }}" type="button" class="btn">{{ form.enabled.vars.value ? disableLabel : enableLabel }}</button>*/
/*         </div>*/
/*         <script type="text/javascript">*/
/*             require(*/
/*                 ['jquery'],*/
/*                 function ($) {*/
/*                     'use strict';*/
/*                     $(function () {*/
/*                         $('#{{ switchId }}').on('click', function () {*/
/*                             var $field = $('#{{ form.enabled.vars.id }}'),*/
/*                                 $status = $('.status-enabled').find('.badge');*/
/*                             if (+$field.val()) {*/
/*                                 $field.val(0).trigger('change');*/
/*                                 $(this).html('{{ enableLabel }}');*/
/*                                 $status.html('<i class="icon-status-disabled icon-circle"></i>{{ disabledLabel }}').removeClass('badge-enabled status-enabled').addClass('badge-disabled status-disabled');*/
/*                             } else {*/
/*                                 $field.val(1).trigger('change');*/
/*                                 $(this).html('{{ disableLabel }}');*/
/*                                 $status.html('<i class="icon-status-enabled icon-circle"></i>{{ enabledLabel }}').removeClass('badge-disabled status-disabled').addClass('badge-enabled status-enabled');*/
/*                             }*/
/*                         });*/
/*                     });*/
/*                 }*/
/*             );*/
/*         </script>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro enabledLabel(form) %}*/
/* {% spaceless %}*/
/*     {% if form.enabled is defined %}*/
/*         <div class="status-enabled pull-left">*/
/*             {% if form.enabled.vars.value %}*/
/*                 <div class="badge badge-enabled status-enabled"><i class="icon-status-enabled icon-circle"></i>{{ 'info.product.enabled'|trans }}</div>*/
/*             {% else %}*/
/*                 <div class="badge badge-disabled status-disabled"><i class="icon-status-disabled icon-circle"></i>{{ 'info.product.disabled'|trans }}</div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro confirmLinkAttributes(url, redirectUrl, message, successMessage, title) %}{% spaceless %}*/
/*     {% set title = title|default('confirmation.confirm'|trans) %}*/
/*     href="javascript:void(0);" data-dialog="confirm" data-title="{{ title }}" data-message="{{ message }}" data-url="{{ url }}" data-redirect-url="{{ redirectUrl }}" data-method="POST" data-error-message="{% trans %}The action could not be performed{% endtrans %}" data-success-message="{{ successMessage }}"*/
/* {% endspaceless %}{% endmacro %}*/
/* */
/* {% macro confirmLink(url, redirectUrl, successMessage, buttonLabel, buttonIcon, message, buttonClass, title) %}{% spaceless %}*/
/*     {% import _self as this %}*/
/*     {% set buttonLabel = 'btn.' ~ buttonLabel %}*/
/*     <a class="btn {{ buttonClass }} icons-holder-text no-hash" title="{{ buttonLabel|trans|capitalize }}" {{this.confirmLinkAttributes(url, redirectUrl, message, successMessage, title)}} >*/
/*         <i class="icon-{{ buttonIcon }}"></i>*/
/*         {{ buttonLabel|trans|capitalize }}*/
/*     </a>*/
/* {% endspaceless %}{% endmacro %}*/
/* */
