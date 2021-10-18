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

/* /var/www/html/skins/admin/export/parts/option.charset.twig */
class __TwigTemplate_0178dd7941e128426854001dce5ae940645b51abe0a7e0557f4161d0d0c3cb23 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isCharsetEnabled", [], "method")) {
            // line 8
            echo "  <li class=\"charset-option\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Select\\IconvCharset", "fieldName" => "options[charset]", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Character set"]), "value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "config", []), "Units", []), "export_import_charset", [])]]), "html", null, true);
            echo "
  </li>
";
        } else {
            // line 12
            echo "  <li class=\"charset-option\">
    ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Label", "fieldName" => "options[charset]", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Character set"]), "value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "config", []), "Units", []), "export_import_charset", [])]]), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/admin/export/parts/option.charset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/admin/export/parts/option.charset.twig", "");
    }
}
