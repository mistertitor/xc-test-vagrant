<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/skins/customer/mini_cart/horizontal/parts/disabled_reason.twig */
class __TwigTemplate_7ecd1235105d325fdf3526a1845112a822968e898d416d015ab8096141e07c6b extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "checkCart", [], "method")) {
            // line 7
            echo "  <div class=\"reason-details\">
    ";
            // line 8
            echo $this->getAttribute(($context["this"] ?? null), "getDisabledReason", [], "method");
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/mini_cart/horizontal/parts/disabled_reason.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  32 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/mini_cart/horizontal/parts/disabled_reason.twig", "");
    }
}
