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

/* /var/www/html/skins/mail/common/modules/XC/CustomerAttachments/order/invoice/parts/items/item.attachments.twig */
class __TwigTemplate_5f5881dce1b52d9da7303a898a0f4a2ab232641505f011cea905c07d5c54acc9 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "customerAttachments", []) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "customerAttachments", []), "isEmpty", [], "method"))) {
            // line 8
            echo "  <li class=\"separated\">
      <ul class=\"file-attachments\">
          <li>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Attached files:"]), "html", null, true);
            echo "</li>
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "customerAttachments", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 12
                echo "            <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["attachment"], "fileName", []), "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "      </ul>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/mail/common/modules/XC/CustomerAttachments/order/invoice/parts/items/item.attachments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  47 => 12,  43 => 11,  39 => 10,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/mail/common/modules/XC/CustomerAttachments/order/invoice/parts/items/item.attachments.twig", "");
    }
}
