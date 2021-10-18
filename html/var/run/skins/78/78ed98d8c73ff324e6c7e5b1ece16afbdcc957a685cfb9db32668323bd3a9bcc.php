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

/* /var/www/html/skins/mail/common/order/invoice/parts/bottom.statuses.twig */
class __TwigTemplate_9ee06f81154d07ca3c2bd0b185d8122455f4ecec8fa475623e055476a0e1c838 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isShippingSectionVisible", [], "method")) {
            // line 8
            echo "  ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getShippingStatus", [], "method")) {
                // line 9
                echo "    <td class=\"shipping-status\">
      <div class=\"wrapper\">
        <strong class=\"title\">";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Shipping status"]), "html", null, true);
                echo ":</strong>
        ";
                // line 12
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "shippingStatus", []), "getCustomerName", [], "method");
                echo "
      </div>
    </td>
  ";
            }
        }
        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isPaymentSectionVisible", [], "method")) {
            // line 19
            echo "  ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentStatus", [], "method")) {
                // line 20
                echo "    <td class=\"payment-status\">
      <div class=\"wrapper\">
        <strong class=\"title\">";
                // line 22
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Payment status"]), "html", null, true);
                echo ":</strong>
        ";
                // line 23
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "paymentStatus", []), "getCustomerName", [], "method");
                echo "
      </div>
    </td>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/mail/common/order/invoice/parts/bottom.statuses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  66 => 22,  62 => 20,  59 => 19,  57 => 18,  54 => 17,  46 => 12,  42 => 11,  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/mail/common/order/invoice/parts/bottom.statuses.twig", "");
    }
}
