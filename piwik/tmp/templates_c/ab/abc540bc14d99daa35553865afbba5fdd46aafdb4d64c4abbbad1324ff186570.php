<?php

/* @Insights/table_header.twig */
class __TwigTemplate_3e6b240823d88706324b87d06e3f290b65decc2d4f4e6ee3e968f8de0de2b770 extends Twig_Template
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
        echo "<tr>
    <th class=\"label first\">
        ";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "reportName", array()), "html", null, true);
        echo "
    </th>
    <th class=\"label orderBy ";
        // line 5
        if (("absolute" == $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "order_by", array()))) {
            echo "active";
        }
        echo "\"
        name=\"orderBy\" value=\"absolute\">
        ";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "metricName", array()), "html", null, true);
        echo "
    </th>
    <th class=\"label last orderBy ";
        // line 9
        if (("relative" == $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "order_by", array()))) {
            echo "active";
        }
        echo "\"
        name=\"orderBy\" value=\"relative\">
        ";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MultiSites_Evolution")), "html", null, true);
        echo "
    </th>
</tr>";
    }

    public function getTemplateName()
    {
        return "@Insights/table_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  40 => 9,  35 => 7,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <th class=\"label first\">
        {{ metadata.reportName }}
    </th>
    <th class=\"label orderBy {% if 'absolute' == properties.order_by %}active{% endif %}\"
        name=\"orderBy\" value=\"absolute\">
        {{ metadata.metricName }}
    </th>
    <th class=\"label last orderBy {% if 'relative' == properties.order_by %}active{% endif %}\"
        name=\"orderBy\" value=\"relative\">
        {{ 'MultiSites_Evolution'|translate }}
    </th>
</tr>", "@Insights/table_header.twig", "/var/www/piwik/plugins/Insights/templates/table_header.twig");
    }
}
