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

/* /var/www/html/skins/admin/modules/XC/Reviews/reviews/buttons/addReview.twig */
class __TwigTemplate_99fb34beb55c301e323078d246713040ae44380f2b03402c41f4f6dfc9df14e6 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "getProductId", [], "method")) {
            // line 9
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\Reviews\\View\\Button\\Admin\\AddReview", "style" => "add-review", "target_product_id" => $this->getAttribute(($context["this"] ?? null), "getProductId", [], "method")]]), "html", null, true);
            echo "
";
        }
        // line 11
        if ( !$this->getAttribute(($context["this"] ?? null), "getProductId", [], "method")) {
            // line 12
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\Reviews\\View\\Button\\Admin\\AddReview", "style" => "add-review"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/admin/modules/XC/Reviews/reviews/buttons/addReview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  41 => 11,  35 => 9,  33 => 8,  30 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/admin/modules/XC/Reviews/reviews/buttons/addReview.twig", "");
    }
}
