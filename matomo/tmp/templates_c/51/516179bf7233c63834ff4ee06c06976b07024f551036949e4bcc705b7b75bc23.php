<?php

/* @Insights/insightsOverviewWidget.twig */
class __TwigTemplate_119360902ef89b246ec574e6c28e64647a97ff82cc5710837dc2a9aa7724e385 extends Twig_Template
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
        if ($this->getAttribute(($context["reports"] ?? $this->getContext($context, "reports")), "getRowsCount", array())) {
            // line 2
            echo "    ";
            $context["allMetadata"] = $this->getAttribute($this->getAttribute(($context["reports"] ?? $this->getContext($context, "reports")), "getFirstRow", array()), "getAllTableMetadata", array());
            // line 3
            echo "    ";
            $context["consideredGrowth"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_TitleConsideredInsightsGrowth", $this->getAttribute(($context["allMetadata"] ?? $this->getContext($context, "allMetadata")), "minGrowthPercentPositive", array()), call_user_func_array($this->env->getFilter('prettyDate')->getCallable(), array($this->getAttribute(($context["allMetadata"] ?? $this->getContext($context, "allMetadata")), "lastDate", array()), $this->getAttribute(($context["allMetadata"] ?? $this->getContext($context, "allMetadata")), "period", array())))));
            // line 4
            echo "
";
        } else {
            // line 6
            echo "    ";
            $context["allMetadata"] = array();
            // line 7
            echo "    ";
            $context["consideredGrowth"] = "";
        }
        // line 9
        echo "
";
        // line 10
        $context["consideredChanges"] = "";
        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("@Insights/overviewWidget.twig", "@Insights/insightsOverviewWidget.twig", 12)->display($context);
        // line 13
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Insights/insightsOverviewWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  46 => 12,  43 => 11,  41 => 10,  38 => 9,  34 => 7,  31 => 6,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if reports.getRowsCount %}
    {% set allMetadata = reports.getFirstRow.getAllTableMetadata %}
    {% set consideredGrowth  = 'Insights_TitleConsideredInsightsGrowth'|translate(allMetadata.minGrowthPercentPositive, allMetadata.lastDate|prettyDate(allMetadata.period)) %}

{% else %}
    {% set allMetadata = {} %}
    {% set consideredGrowth = '' %}
{% endif %}

{% set consideredChanges = '' %}

{% include \"@Insights/overviewWidget.twig\" %}


", "@Insights/insightsOverviewWidget.twig", "/var/www/matomo/plugins/Insights/templates/insightsOverviewWidget.twig");
    }
}
