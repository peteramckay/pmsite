<?php

/* admin.twig */
class __TwigTemplate_8be671991239a53491184bc694051c1e1f3c07e838812cbfde0f4d13a998655e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "admin.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'root' => array($this, 'block_root'),
            'topcontrols' => array($this, 'block_topcontrols'),
            'notification' => array($this, 'block_notification'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_Administration")), "html", null, true);
        $context["categoryTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        $context["bodyClass"] = call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.bodyClass", "admin"));
        // line 6
        $context["isAdminArea"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["topMenuModule"] = "CoreAdminHome";
        // line 10
        echo "    ";
        $context["topMenuAction"] = "home";
        // line 11
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.header", "admin"));
        echo "
    ";
        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 13
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.footer", "admin"));
        echo "
";
    }

    // line 16
    public function block_root($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->loadTemplate("@CoreHome/_topScreen.twig", "admin.twig", 17)->display($context);
        // line 18
        echo "
    <div class=\"top_controls\">
        <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>

        ";
        // line 22
        $this->displayBlock('topcontrols', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->loadTemplate("@CoreHome/_headerMessage.twig", "admin.twig", 25)->display($context);
        // line 26
        echo "    </div>

    ";
        // line 28
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "admin.twig", 28);
        // line 29
        echo "    ";
        echo $context["ajax"]->getrequestErrorDiv(((array_key_exists("emailSuperUser", $context)) ? (_twig_default_filter(($context["emailSuperUser"] ?? $this->getContext($context, "emailSuperUser")), "")) : ("")), ($context["areAdsForProfessionalServicesEnabled"] ?? $this->getContext($context, "areAdsForProfessionalServicesEnabled")), ($context["currentModule"] ?? $this->getContext($context, "currentModule")));
        echo "
    ";
        // line 30
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "admin", ($context["currentModule"] ?? $this->getContext($context, "currentModule")), ($context["currentAction"] ?? $this->getContext($context, "currentAction"))));
        echo "

    <div class=\"page\">

        ";
        // line 34
        if (( !array_key_exists("showMenu", $context) || ($context["showMenu"] ?? $this->getContext($context, "showMenu")))) {
            // line 35
            echo "            ";
            $context["menu"] = $this->loadTemplate("@CoreHome/_menu.twig", "admin.twig", 35);
            // line 36
            echo "            ";
            echo $context["menu"]->getmenu(($context["adminMenu"] ?? $this->getContext($context, "adminMenu")), false, "Menu--admin", ($context["currentModule"] ?? $this->getContext($context, "currentModule")), ($context["currentAction"] ?? $this->getContext($context, "currentAction")));
            echo "
        ";
        }
        // line 38
        echo "
        <div class=\"pageWrap\">
            <a name=\"main\"></a>
            ";
        // line 41
        $this->displayBlock('notification', $context, $blocks);
        // line 44
        echo "            ";
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "admin.twig", 44)->display($context);
        // line 45
        echo "
            <div class=\"admin\" id=\"content\" ng-cloak>

                <div class=\"ui-confirm\" id=\"alert\">
                    <h2></h2>
                    <input role=\"no\" type=\"button\" value=\"";
        // line 50
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
                </div>

                ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "
            </div>
        </div>
    </div>


";
    }

    // line 22
    public function block_topcontrols($context, array $blocks = array())
    {
        // line 23
        echo "        ";
    }

    // line 41
    public function block_notification($context, array $blocks = array())
    {
        // line 42
        echo "                ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "admin.twig", 42)->display($context);
        // line 43
        echo "            ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "                ";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  165 => 53,  161 => 43,  158 => 42,  155 => 41,  151 => 23,  148 => 22,  138 => 55,  136 => 53,  130 => 50,  123 => 45,  120 => 44,  118 => 41,  113 => 38,  107 => 36,  104 => 35,  102 => 34,  95 => 30,  90 => 29,  88 => 28,  84 => 26,  82 => 25,  79 => 24,  77 => 22,  71 => 18,  68 => 17,  65 => 16,  59 => 13,  55 => 12,  50 => 11,  47 => 10,  44 => 9,  41 => 8,  37 => 1,  35 => 6,  33 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% set categoryTitle %}{{ 'CoreAdminHome_Administration'|translate }}{% endset %}

{% set bodyClass = postEvent('Template.bodyClass', 'admin') %}
{% set isAdminArea = true %}

{% block body %}
    {% set topMenuModule = 'CoreAdminHome' %}
    {% set topMenuAction = 'home' %}
    {{ postEvent(\"Template.header\", \"admin\") }}
    {{ parent() }}
    {{ postEvent(\"Template.footer\", \"admin\") }}
{% endblock %}

{% block root %}
    {% include \"@CoreHome/_topScreen.twig\" %}

    <div class=\"top_controls\">
        <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>

        {% block topcontrols %}
        {% endblock %}

        {% include \"@CoreHome/_headerMessage.twig\" %}
    </div>

    {% import 'ajaxMacros.twig' as ajax %}
    {{ ajax.requestErrorDiv(emailSuperUser|default(''), areAdsForProfessionalServicesEnabled, currentModule) }}
    {{ postEvent(\"Template.beforeContent\", \"admin\", currentModule, currentAction) }}

    <div class=\"page\">

        {% if showMenu is not defined or showMenu %}
            {% import '@CoreHome/_menu.twig' as menu %}
            {{ menu.menu(adminMenu, false, 'Menu--admin', currentModule, currentAction) }}
        {% endif %}

        <div class=\"pageWrap\">
            <a name=\"main\"></a>
            {% block notification %}
                {% include \"@CoreHome/_notifications.twig\" %}
            {% endblock %}
            {% include \"@CoreHome/_warningInvalidHost.twig\" %}

            <div class=\"admin\" id=\"content\" ng-cloak>

                <div class=\"ui-confirm\" id=\"alert\">
                    <h2></h2>
                    <input role=\"no\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
                </div>

                {% block content %}
                {% endblock %}

            </div>
        </div>
    </div>


{% endblock %}
", "admin.twig", "/var/www/matomo/plugins/Morpheus/templates/admin.twig");
    }
}
