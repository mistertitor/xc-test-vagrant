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

/* /var/www/html/skins/admin/address/order/parts/billing.twig */
class __TwigTemplate_17ac9f274b68f8177ffa5e7bfb609ac10035a1e72a1fee103f727b1e30b6e1d6 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div ";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getBillingContainerAttributes", [], "method")], "method");
        echo ">
  <h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Billing address"]), "html", null, true);
        echo "</h3>
  <div class=\"expander\"><a href=\"#\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Show"]), "html", null, true);
        echo "</a></div>
  <div class=\"collapser\"><a href=\"#\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Hide"]), "html", null, true);
        echo "</a></div>
  ";
        // line 11
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayAddressButton", [], "method")) {
            // line 12
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\SimpleLink", "label" => "Address book", "style" => "btn regular-button address-book", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "order", "", ["order_number" => $this->getAttribute($this->getAttribute(            // line 15
($context["this"] ?? null), "order", []), "orderNumber", []), "atype" => "b", "widget" => "XLite\\View\\SelectAddressOrder"]])]]), "html", null, true);
            // line 16
            echo "
  ";
        }
        // line 18
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Model\\Address\\Order", "template" => $this->getAttribute(($context["this"] ?? null), "getModelTemplate", [], "method"), "addressType" => "billing"]]), "html", null, true);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/admin/address/order/parts/billing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  55 => 16,  53 => 15,  51 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/admin/address/order/parts/billing.twig", "");
    }
}
