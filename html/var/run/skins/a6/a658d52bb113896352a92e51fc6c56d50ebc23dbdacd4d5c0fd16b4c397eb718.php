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

/* /var/www/html/skins/customer/items_list/product/parts/common.added-mark.twig */
class __TwigTemplate_cd753c833edb556f59e26369eee7b59392e5611894d64654db087f282ebeeb0c extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        echo "<div title=\"Added to cart\" class=\"added-to-cart\"><i class=\"fa fa-check-square\"></i></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/items_list/product/parts/common.added-mark.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/items_list/product/parts/common.added-mark.twig", "");
    }
}
