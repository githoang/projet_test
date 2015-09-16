<?php

/* OroTranslationBundle::requirejs.config.js.twig */
class __TwigTemplate_d8f5c4e0d232af76ba83c632021a495587d36af3c9b64f6a625d16ac891d1698 extends Twig_Template
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
        echo "require({
    shim: {
        'oro/translations': {
            deps: ['oro/translator', 'translator'],
            init: function(__) {
                return __;
            }
        }
    },
    map: {
        '*': {
            'oro/translator': 'oro/translations'
        },
        'oro/translations': {
            'oro/translator': 'oro/translator'
        }
    },
    paths: {
        'oro/translations': '";
        // line 19
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->env->getExtension('routing')->getUrl("oro_translation_jstranslation"), 0,  -3), "js", null, true);
        echo "'
    }
});";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 19,  19 => 1,);
    }
}
/* require({*/
/*     shim: {*/
/*         'oro/translations': {*/
/*             deps: ['oro/translator', 'translator'],*/
/*             init: function(__) {*/
/*                 return __;*/
/*             }*/
/*         }*/
/*     },*/
/*     map: {*/
/*         '*': {*/
/*             'oro/translator': 'oro/translations'*/
/*         },*/
/*         'oro/translations': {*/
/*             'oro/translator': 'oro/translator'*/
/*         }*/
/*     },*/
/*     paths: {*/
/*         'oro/translations': '{{ url('oro_translation_jstranslation')[0:-3] }}'*/
/*     }*/
/* });*/
