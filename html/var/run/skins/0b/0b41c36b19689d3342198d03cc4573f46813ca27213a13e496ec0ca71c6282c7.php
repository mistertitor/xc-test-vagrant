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

/* /var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_exit_modal.twig */
class __TwigTemplate_1472862addb26aaba61f3e9dadd595268d1969b5f9c9aa5d517b88c91f120dad extends \XLite\Core\Templating\Twig\Template
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
<xlite-themetweaker-modal :show=\"isExitConfirmVisible\" namespace=\"exitConfirm\">
  <p slot=\"body\" class=\"text-center\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["You have unsaved changes. Are you really sure to exit?"]), "html", null, true);
        echo "</p>
  <div slot=\"footer\">
    <button class=\"themetweaker-modal-button secondary\"
            @click=\"onExitConfirmDiscard\">
      <span>";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Discard changes"]), "html", null, true);
        echo "</span>
    </button>
    <button class=\"themetweaker-modal-button\"
            @click=\"onExitConfirmSave\">
      <span>";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Save"]), "html", null, true);
        echo "</span>
    </button>
  </div>
</xlite-themetweaker-modal>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_exit_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  41 => 12,  34 => 8,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_exit_modal.twig", "");
    }
}
