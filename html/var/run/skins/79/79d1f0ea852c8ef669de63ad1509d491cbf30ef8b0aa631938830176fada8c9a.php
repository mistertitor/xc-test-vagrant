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

/* cache_management_actions/cell/name.twig */
class __TwigTemplate_3fec9de41494299a1c12eb123ec08c33c30f7abc628dcf55ec85eab2f853a557 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<h4 class=\"action-name\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "name", []), "html", null, true);
        echo "
</h4>

<p class=\"action-description\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "description", []), "html", null, true);
        echo "
</p>

";
        // line 13
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "options", []))) {
            // line 14
            echo "    <div class=\"action-options\">
        <table class=\"action-options-table\">
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "options", []));
            foreach ($context['_seq'] as $context["idx"] => $context["option"]) {
                // line 17
                echo "                <tr>
                    <td class=\"column-option\">
                        ";
                // line 19
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", []), "html", null, true);
                echo "
                    </td>
                    <td class=\"column-option-action\">
                        ";
                // line 22
                if ( !twig_test_empty($this->getAttribute($context["option"], "view", []))) {
                    // line 23
                    echo "                            ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($context["option"], "view", []), 1 => $this->getAttribute($context["option"], "viewParams", [])]]), "html", null, true);
                    echo "
                        ";
                } elseif ( !twig_test_empty($this->getAttribute(                // line 24
($context["column"] ?? null), "template", []))) {
                    // line 25
                    echo "                            ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => $this->getAttribute($context["option"], "template", []), "params" => $this->getAttribute($context["option"], "viewParams", [])]]), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 27
                    echo "                            ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? null), "value", []), "html", null, true);
                    echo "
                        ";
                }
                // line 29
                echo "                    </td>
                    <td class=\"column-option-help\">
                        <div class=\"help-wrapper\">
                            ";
                // line 32
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["option"], "description", [])]), "className" => "help-icon"]]), "html", null, true);
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </table>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "cache_management_actions/cell/name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  93 => 32,  88 => 29,  82 => 27,  76 => 25,  74 => 24,  69 => 23,  67 => 22,  61 => 19,  57 => 17,  53 => 16,  49 => 14,  47 => 13,  41 => 10,  34 => 6,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "cache_management_actions/cell/name.twig", "/var/www/html/skins/admin/cache_management_actions/cell/name.twig");
    }
}
