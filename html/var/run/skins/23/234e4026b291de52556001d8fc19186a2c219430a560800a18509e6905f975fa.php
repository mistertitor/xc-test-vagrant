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

/* cache_management_actions/body.twig */
class __TwigTemplate_78f5931c3c339148a1dfdb922c0f9b75b57e154d8facdcab6b1378c4e86a3fd4 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"table-wrapper\">
  <table class=\"cache-management-actions\">
    <tbody>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getBodyLines", [], "method"));
        foreach ($context['_seq'] as $context["idx"] => $context["line"]) {
            // line 9
            echo "      <tr>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["line"], "columns", []));
            foreach ($context['_seq'] as $context["idx"] => $context["column"]) {
                // line 11
                echo "          <td class=\"column column-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["column"], "serviceName", [])), "html", null, true);
                echo "\">
            ";
                // line 12
                if ( !twig_test_empty($this->getAttribute($context["column"], "view", []))) {
                    // line 13
                    echo "              ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($context["column"], "view", []), "idx" => $context["idx"], "entity" => $this->getAttribute($context["line"], "entity", []), "column" => $context["column"]]]), "html", null, true);
                    echo "
            ";
                } elseif ( !twig_test_empty($this->getAttribute(                // line 14
$context["column"], "template", []))) {
                    // line 15
                    echo "              ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => $this->getAttribute($context["column"], "template", []), "idx" => $context["idx"], "entity" => $this->getAttribute($context["line"], "entity", []), "column" => $context["column"]]]), "html", null, true);
                    echo "
            ";
                } else {
                    // line 17
                    echo "              ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["column"], "value", []), "html", null, true);
                    echo "
            ";
                }
                // line 19
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </tbody>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "cache_management_actions/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  80 => 21,  73 => 19,  67 => 17,  61 => 15,  59 => 14,  54 => 13,  52 => 12,  47 => 11,  43 => 10,  40 => 9,  36 => 8,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "cache_management_actions/body.twig", "/var/www/html/skins/admin/cache_management_actions/body.twig");
    }
}
