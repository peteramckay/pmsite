<?php

/* @Insights/table_row.twig */
class __TwigTemplate_b0c9fac25dbe8b2a9d1a9b22751fff4f47e36e751a87d296f7544b52bf3a360c extends Twig_Template
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
        if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "isDisappeared"), "method")) {
            // line 2
            echo "    ";
            $context["rowTitle"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_TitleRowDisappearedDetails", $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "label"), "method"), $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "value_old"), "method"), call_user_func_array($this->env->getFilter('prettyDate')->getCallable(), array($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "date", array()), $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "period", array()))), call_user_func_array($this->env->getFilter('prettyDate')->getCallable(), array($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "lastDate", array()), $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "period", array())))));
        } elseif ($this->getAttribute(        // line 3
($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "isNew"), "method")) {
            // line 4
            echo "    ";
            $context["rowTitle"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_TitleRowNewDetails", $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "label"), "method"), $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "value_new"), "method"), call_user_func_array($this->env->getFilter('prettyDate')->getCallable(), array($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "lastDate", array()), $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "period", array())))));
        } else {
            // line 6
            echo "    ";
            $context["rowTitle"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_TitleRowChangeDetails", $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "label"), "method"), $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "value_old"), "method"), call_user_func_array($this->env->getFilter('prettyDate')->getCallable(), array($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "lastDate", array()), $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "period", array()))), $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "value_new"), "method"), call_user_func_array($this->env->getFilter('prettyDate')->getCallable(), array($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "date", array()), $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "period", array()))), $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "metricName", array())));
        }
        // line 8
        echo "
";
        // line 9
        $context["rowTitleShaker"] = "";
        // line 10
        if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "isMoverAndShaker"), "method")) {
            // line 11
            echo "    ";
            $context["rowTitleShaker"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_TitleRowMoverAndShaker"));
        }
        // line 13
        echo "
<tr title=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, ($context["rowTitle"] ?? $this->getContext($context, "rowTitle")), "html_attr");
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, ($context["rowTitleShaker"] ?? $this->getContext($context, "rowTitleShaker")), "html_attr");
        echo "\"
    class=\"";
        // line 15
        if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "isMoverAndShaker"), "method")) {
            echo "isMoverAndShaker";
        }
        echo "\">
    <td class=\"label\">
        <span class=\"title\">
            ";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "label"), "method"), "html", null, true);
        echo "
        </span>
    </td>

    ";
        // line 22
        if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "grown"), "method")) {
            // line 23
            echo "        <td class=\"column\">+";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "difference"), "method"), "html", null, true);
            echo "</td>
        <td class=\"column grown\">+";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "growth_percent"), "method"), "html", null, true);
            echo "</td>
    ";
        } else {
            // line 26
            echo "        <td class=\"column\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "difference"), "method"), "html", null, true);
            echo "</td>
        <td class=\"column notGrown\">";
            // line 27
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", array(0 => "growth_percent"), "method"), "html", null, true);
            echo "</td>
    ";
        }
        // line 29
        echo "</tr>";
    }

    public function getTemplateName()
    {
        return "@Insights/table_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  81 => 26,  76 => 24,  71 => 23,  69 => 22,  62 => 18,  54 => 15,  48 => 14,  45 => 13,  41 => 11,  39 => 10,  37 => 9,  34 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if row.getColumn('isDisappeared') %}
    {% set rowTitle = 'Insights_TitleRowDisappearedDetails'|translate(row.getColumn('label'), row.getColumn('value_old'), metadata.date|prettyDate(metadata.period), metadata.lastDate|prettyDate(metadata.period)) %}
{% elseif row.getColumn('isNew') %}
    {% set rowTitle = 'Insights_TitleRowNewDetails'|translate(row.getColumn('label'), row.getColumn('value_new'), metadata.lastDate|prettyDate(metadata.period)) %}
{% else %}
    {% set rowTitle = 'Insights_TitleRowChangeDetails'|translate(row.getColumn('label'), row.getColumn('value_old'), metadata.lastDate|prettyDate(metadata.period), row.getColumn('value_new'), metadata.date|prettyDate(metadata.period), metadata.metricName) %}
{% endif %}

{% set rowTitleShaker = '' %}
{% if row.getColumn('isMoverAndShaker') %}
    {% set rowTitleShaker = 'Insights_TitleRowMoverAndShaker'|translate %}
{% endif %}

<tr title=\"{{ rowTitle|e('html_attr') }} {{ rowTitleShaker|e('html_attr') }}\"
    class=\"{% if row.getColumn('isMoverAndShaker') %}isMoverAndShaker{% endif %}\">
    <td class=\"label\">
        <span class=\"title\">
            {{ row.getColumn('label') }}
        </span>
    </td>

    {% if row.getColumn('grown') %}
        <td class=\"column\">+{{ row.getColumn('difference') }}</td>
        <td class=\"column grown\">+{{ row.getColumn('growth_percent') }}</td>
    {% else %}
        <td class=\"column\">{{ row.getColumn('difference') }}</td>
        <td class=\"column notGrown\">{{ row.getColumn('growth_percent') }}</td>
    {% endif %}
</tr>", "@Insights/table_row.twig", "/var/www/piwik/plugins/Insights/templates/table_row.twig");
    }
}
