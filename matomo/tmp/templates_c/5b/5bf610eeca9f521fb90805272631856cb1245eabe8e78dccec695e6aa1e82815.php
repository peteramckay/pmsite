<?php

/* @CoreHome/checkForUpdates.twig */
class __TwigTemplate_3f3138c5485f1db25c9bb206de787a37b4e3a086fa5804618565a2d8ea69e4d3 extends Twig_Template
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
        $this->loadTemplate("@CoreHome/_headerMessage.twig", "@CoreHome/checkForUpdates.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@CoreHome/checkForUpdates.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"@CoreHome/_headerMessage.twig\" %}", "@CoreHome/checkForUpdates.twig", "/var/www/matomo/plugins/CoreHome/templates/checkForUpdates.twig");
    }
}
