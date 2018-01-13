<?php

/* @Insights/overviewWidget.twig */
class __TwigTemplate_5c7edf47fa84a7899e1b25247ce4e891014faf4b26d3f2373c4672c6ef37913c extends Twig_Template
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
        echo "<div class=\"insightsDataTable dataTable\"
     data-table-type=\"InsightsDataTable\"
     data-table-onlyinsightsinit=\"1\">
    ";
        // line 4
        if ((twig_length_filter($this->env, $this->getAttribute(($context["reports"] ?? $this->getContext($context, "reports")), "getColumns", array())) > 0)) {
            // line 5
            echo "
        <table class=\"dataTable\"
               title=\"";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, ($context["consideredGrowth"] ?? $this->getContext($context, "consideredGrowth")), "html_attr");
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, ($context["consideredChanges"] ?? $this->getContext($context, "consideredChanges")), "html_attr");
            echo "\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["reports"] ?? $this->getContext($context, "reports")), "getDataTables", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["dataTable"]) {
                if (($this->getAttribute($context["dataTable"], "getRowsCount", array()) > 0)) {
                    // line 9
                    echo "                ";
                    $context["metadata"] = $this->getAttribute($context["dataTable"], "getAllTableMetadata", array());
                    // line 10
                    echo "
                <thead>
                    ";
                    // line 12
                    $this->loadTemplate("@Insights/table_header.twig", "@Insights/overviewWidget.twig", 12)->display($context);
                    // line 13
                    echo "                </thead>

                <tbody>
                    ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dataTable"], "getRows", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                        // line 17
                        echo "                        ";
                        $this->loadTemplate("@Insights/table_row.twig", "@Insights/overviewWidget.twig", 17)->display($context);
                        // line 18
                        echo "                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "                </tbody>

            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataTable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </table>

        <script type=\"text/javascript\" defer=\"defer\">
            \$(document).ready(function () {
                require('piwik/UI/DataTable').initNewDataTables();
            });
        </script>

    ";
        } else {
            // line 31
            echo "
        <div class=\"pk-emptyDataTable\"
             title=\"";
            // line 33
            echo \Piwik\piwik_escape_filter($this->env, ($context["consideredGrowth"] ?? $this->getContext($context, "consideredGrowth")), "html_attr");
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, ($context["consideredChanges"] ?? $this->getContext($context, "consideredChanges")), "html_attr");
            echo "\">
            ";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_NoResultMatchesCriteria")), "html", null, true);
            echo "
        </div>

    ";
        }
        // line 38
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Insights/overviewWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  128 => 34,  122 => 33,  118 => 31,  107 => 22,  95 => 19,  81 => 18,  78 => 17,  61 => 16,  56 => 13,  54 => 12,  50 => 10,  47 => 9,  36 => 8,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"insightsDataTable dataTable\"
     data-table-type=\"InsightsDataTable\"
     data-table-onlyinsightsinit=\"1\">
    {% if reports.getColumns|length > 0 %}

        <table class=\"dataTable\"
               title=\"{{ consideredGrowth|e('html_attr') }} {{ consideredChanges|e('html_attr') }}\">
            {% for dataTable in reports.getDataTables() if dataTable.getRowsCount > 0 %}
                {% set metadata = dataTable.getAllTableMetadata %}

                <thead>
                    {% include \"@Insights/table_header.twig\" %}
                </thead>

                <tbody>
                    {% for row in dataTable.getRows %}
                        {% include \"@Insights/table_row.twig\" %}
                    {% endfor %}
                </tbody>

            {% endfor %}
        </table>

        <script type=\"text/javascript\" defer=\"defer\">
            \$(document).ready(function () {
                require('piwik/UI/DataTable').initNewDataTables();
            });
        </script>

    {% else %}

        <div class=\"pk-emptyDataTable\"
             title=\"{{ consideredGrowth|e('html_attr') }} {{ consideredChanges|e('html_attr') }}\">
            {{ 'Insights_NoResultMatchesCriteria'|translate }}
        </div>

    {% endif %}
</div>", "@Insights/overviewWidget.twig", "/var/www/piwik/plugins/Insights/templates/overviewWidget.twig");
    }
}
