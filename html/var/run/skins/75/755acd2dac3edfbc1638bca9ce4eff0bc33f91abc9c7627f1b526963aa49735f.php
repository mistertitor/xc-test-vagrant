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

/* /var/www/html/skins/customer/modules/XC/FastLaneCheckout/sections/section_change_button.twig */
class __TwigTemplate_65da83e3357509a8345da7349d3847931b51647d081dd755e373c11b58122c7c extends \XLite\Core\Templating\Twig\Template
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
<section-change-button inline-template>
  <div class=\"checkout_fastlane_section-buttons loading\">
    <a href=\"#\" class=\"mobile_panel-details\" v-on:click.prevent=\"scrollToDetails\">
      <span class=\"title\">Order total:</span>
      <span v-text=\"total_text\" class=\"value\"></span>
    </a>
    <div v-show=\"showPlaceOrder\" class=\"place-button\">
      ";
        // line 14
        $this->startForm("\\XLite\\View\\Form\\Checkout\\Place", ["className" => "place"]);        // line 15
        echo "      ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "checkout_fastlane.sections.place-order.before"]]), "html", null, true);
        echo "
        <place-order inline-template>
          ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Simple", "label" => "Place order", "style" => "regular-main-button checkout_fastlane_section-place_order place-order", "attributes" => ["v-bind:class" => "classes", "v-on:click" => "placeOrder", "v-bind:title" => "btnTitle", "v-html" => "label"]]]), "html", null, true);
        // line 26
        echo "

            ";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "config", []), "General", []), "terms_conditions_confirm_type", []) != "Clickwrap")) {
            // line 29
            echo "                <p class=\"terms-notice\">
                    ";
            // line 30
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Clicking the Place order button you accept: Terms and Conditions", ["URL" => $this->getAttribute(($context["this"] ?? null), "getTermsURL", [], "method")]]);
            echo "
                </p>
            ";
        }
        // line 33
        echo "        </place-order>
      ";
        // line 34
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "checkout_fastlane.sections.place-order.after"]]), "html", null, true);
        echo "
      ";
        $this->endForm();        // line 36
        echo "    </div>
    <div v-show=\"!showPlaceOrder\" class=\"next-button\">
      <next-button inline-template v-bind:enabled=\"complete\" v-bind:index=\"index\">
        ";
        // line 39
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Simple", "label" => "Next step", "style" => "regular-main-button checkout_fastlane_section-next", "attributes" => ["v-on:click" => "requestNext", "v-bind:class" => "classes", "v-bind:title" => "btnTitle", "v-html" => "nextLabel"]]]), "html", null, true);
        // line 48
        echo "
      </next-button>
    </div>
  </div>
</section-change-button>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/modules/XC/FastLaneCheckout/sections/section_change_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 48,  76 => 39,  71 => 36,  67 => 34,  64 => 33,  58 => 30,  55 => 29,  53 => 28,  49 => 26,  47 => 17,  41 => 15,  40 => 14,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/modules/XC/FastLaneCheckout/sections/section_change_button.twig", "");
    }
}
