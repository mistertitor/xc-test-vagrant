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

/* /var/www/html/skins/admin/items_list/product/table/parts/columns/inventory.twig */
class __TwigTemplate_2c72bf9987cbc108860d3e299c9cc6e73859e38d3814ff4ebd9650acdd38324f extends \XLite\Core\Templating\Twig\Template
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
<td>
  <input type=\"text\" class=\"inventory\" size=\"10\" value=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getAmount", [], "method"), "html", null, true);
        echo "\" name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getNamePostedData", [0 => "amount", 1 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getProductId", [], "method")], "method"), "html", null, true);
        echo "\" ";
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getInventoryEnabled", [], "method")) {
            echo " disabled=\"disabled\" ";
        }
        echo " />
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/admin/items_list/product/table/parts/columns/inventory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/admin/items_list/product/table/parts/columns/inventory.twig", "");
    }
}
