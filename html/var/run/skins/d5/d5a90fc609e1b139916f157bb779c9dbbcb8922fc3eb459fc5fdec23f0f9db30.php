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

/* /var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/hidden_blocks.twig */
class __TwigTemplate_9c0b44d82976ea4c50cc6564747a46bb420c26ba5894235a464949cda4951144 extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-hidden-list'>
\t<button class='themetweaker-button layout-editor-hidden-block' v-for=\"item in hiddenBlocks\" @click=\"showBlock(item.element)\">
\t\t<span class=\"name\" v-text=\"getBlockName(item)\"></span>
\t\t<span class=\"action\"><i class=\"icon\">";
        // line 10
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/ThemeTweaker/themetweaker/layout_editor/icons/view.svg"]);
        echo "</i>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Enable hidden block"]), "html", null, true);
        echo "</span>
\t</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/hidden_blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/hidden_blocks.twig", "");
    }
}
