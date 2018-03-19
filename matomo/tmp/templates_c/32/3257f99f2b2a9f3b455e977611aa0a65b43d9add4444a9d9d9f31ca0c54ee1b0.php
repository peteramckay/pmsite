<?php

/* @CoreHome/_shortcuts.twig */
class __TwigTemplate_ab524cf69a673a24f97bf42ca14d4555d0dc581771e54053754e5e1e06a7eb8c extends Twig_Template
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
        echo "<div class=\"ui-confirm\" id=\"shortcuthelp\">
    <h2>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ShortcutsAvailable")), "html", null, true);
        echo "</h2>
    <dl></dl>
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_shortcuts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui-confirm\" id=\"shortcuthelp\">
    <h2>{{ 'CoreHome_ShortcutsAvailable'|translate }}</h2>
    <dl></dl>
</div>", "@CoreHome/_shortcuts.twig", "/var/www/matomo/plugins/CoreHome/templates/_shortcuts.twig");
    }
}
