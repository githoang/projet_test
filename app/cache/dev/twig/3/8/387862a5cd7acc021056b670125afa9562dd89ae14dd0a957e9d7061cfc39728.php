<?php

/* PimNotificationBundle:Notification:list.json.twig */
class __TwigTemplate_69dedd93c6d644595fee52923a042db2b196f0c63fb0b27feb2edcd1c0ca5ebf extends Twig_Template
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
        $context["notifications"] = array();
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userNotifications"]) ? $context["userNotifications"] : $this->getContext($context, "userNotifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "    ";
            $context["notifications"] = twig_array_merge((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")), array(0 => array("id" => $this->getAttribute(            // line 4
$context["item"], "id", array()), "type" => $this->getAttribute($this->getAttribute(            // line 5
$context["item"], "notification", array()), "type", array()), "message" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute(            // line 6
$context["item"], "notification", array()), "message", array()), $this->getAttribute($this->getAttribute($context["item"], "notification", array()), "messageParams", array())), "viewed" => $this->getAttribute(            // line 7
$context["item"], "viewed", array()), "url" => (($this->getAttribute($this->getAttribute(            // line 8
$context["item"], "notification", array()), "route", array())) ? ($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($context["item"], "notification", array()), "route", array()), $this->getAttribute($this->getAttribute($context["item"], "notification", array()), "routeParams", array()))) : (null)))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        $context["data"] = array("notifications" => (isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")), "unreadCount" => $this->env->getExtension('pim_notification_extension')->countNotifications());
        // line 12
        echo twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimNotificationBundle:Notification:list.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  37 => 11,  31 => 8,  30 => 7,  29 => 6,  28 => 5,  27 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set notifications = [] %}*/
/* {% for item in userNotifications %}*/
/*     {% set notifications = notifications|merge([{*/
/*         id: item.id,*/
/*         type: item.notification.type,*/
/*         message: item.notification.message|trans(item.notification.messageParams),*/
/*         viewed: item.viewed,*/
/*         url: item.notification.route ? path(item.notification.route, item.notification.routeParams) : null*/
/*     }]) %}*/
/* {% endfor %}*/
/* {% set data = { notifications: notifications, unreadCount: notification_count() } %}*/
/* {{ data|json_encode|raw }}*/
/* */
