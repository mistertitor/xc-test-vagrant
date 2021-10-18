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

/* /var/www/html/skins/admin/order/history/parts/event_details_data.twig */
class __TwigTemplate_4c11501d49d83643a8b7734c0d45009c8b3fe1e8e491ce4ab2f916a0ff8216bd extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getDetails", [0 => $this->getAttribute(($context["this"] ?? null), "event", [])], "method")) {
            // line 7
            echo "  <div id=\"event-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "eventId", []), "html", null, true);
            echo "\" class=\"order-event-details event-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "eventId", []), "html", null, true);
            echo "\">
    <div class=\"details\">
      <ul>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getDetails", [0 => $this->getAttribute(($context["this"] ?? null), "event", [])], "method"));
            foreach ($context['_seq'] as $context["columnId"] => $context["columnData"]) {
                // line 11
                echo "          <li class=\"order-history-object-detail-column\">
            <ul>
              ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["columnData"]);
                foreach ($context['_seq'] as $context["cell_id"] => $context["cell"]) {
                    // line 14
                    echo "                <li>
                  <span class=\"event-details-label\">";
                    // line 15
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cell"], "getName", [], "method"), "html", null, true);
                    echo ":</span> <span class=\"value\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cell"], "getValue", [], "method"), "html", null, true);
                    echo "</span>
                </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['cell_id'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            </ul>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['columnId'], $context['columnData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/admin/order/history/parts/event_details_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  67 => 18,  56 => 15,  53 => 14,  49 => 13,  45 => 11,  41 => 10,  32 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/admin/order/history/parts/event_details_data.twig", "");
    }
}
