<?php

/* @CoreHome/getSystemSummary.twig */
class __TwigTemplate_f9cee33f0b7a74bf555b3ec4d4d7ca87fe7000641ba4559473cd22930b5557b9 extends Twig_Template
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
        echo "<div class=\"widgetBody systemSummary\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        ";
            if ( !twig_test_empty($context["item"])) {
                // line 4
                echo "            <div class=\"systemSummaryItem ";
                if ($this->getAttribute($context["item"], "getKey", array())) {
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["item"], "getKey", array()), "html", null, true);
                }
                echo "\">
                ";
                // line 5
                if ($this->getAttribute($context["item"], "getIcon", array())) {
                    echo "<span class=\"icon ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["item"], "getIcon", array()), "html", null, true);
                    echo "\"></span>";
                }
                // line 6
                echo "
                ";
                // line 7
                if ($this->getAttribute($context["item"], "getUrlParams", array())) {
                    // line 8
                    echo "<a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array($this->getAttribute($context["item"], "getUrlParams", array()))), "html", null, true);
                    echo "\" class=\"itemLabel\">
                ";
                } else {
                    // line 10
                    echo "<span class=\"itemLabel\">
                ";
                }
                // line 13
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["item"], "getLabel", array()), "html", null, true);
                if ($this->getAttribute($context["item"], "getValue", array())) {
                    echo ":";
                }
                // line 15
                if ($this->getAttribute($context["item"], "getUrlParams", array())) {
                    // line 16
                    echo "                    </a>";
                } else {
                    // line 18
                    echo "                    </span>";
                }
                // line 20
                echo "
                ";
                // line 21
                if ($this->getAttribute($context["item"], "getValue", array())) {
                    echo "<span class=\"itemValue\">";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["item"], "getValue", array()), "html", null, true);
                    echo "</span>";
                }
                // line 22
                echo "            </div>
        ";
            }
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    <br />
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getSystemSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  83 => 24,  79 => 22,  73 => 21,  70 => 20,  67 => 18,  64 => 16,  62 => 15,  57 => 13,  53 => 10,  47 => 8,  45 => 7,  42 => 6,  36 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"widgetBody systemSummary\">
    {% for item in items %}
        {% if item is not empty %}
            <div class=\"systemSummaryItem {% if item.getKey %}{{ item.getKey }}{% endif %}\">
                {% if item.getIcon %}<span class=\"icon {{ item.getIcon }}\"></span>{% endif %}

                {% if item.getUrlParams -%}
                    <a href=\"{{ linkTo(item.getUrlParams) }}\" class=\"itemLabel\">
                {% else -%}
                    <span class=\"itemLabel\">
                {% endif -%}

                {{ item.getLabel }}{% if item.getValue %}:{% endif %}

                {%- if item.getUrlParams %}
                    </a>
                {%- else %}
                    </span>
                {%- endif %}

                {% if item.getValue %}<span class=\"itemValue\">{{ item.getValue }}</span>{% endif %}
            </div>
        {% endif %}
    {% endfor %}
    <br />
</div>", "@CoreHome/getSystemSummary.twig", "/var/www/matomo/plugins/CoreHome/templates/getSystemSummary.twig");
    }
}
