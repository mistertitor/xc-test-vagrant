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

/* /var/www/html/skins/customer/signin/parts/login_form/password.twig */
class __TwigTemplate_4c552cc3ebfe3118caf6bd93196999ad25f202ab5fbf3b0b04006a06895b3ba8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr><td class=\"password-field\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Password", "required" => "true", "fieldName" => "password", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Password", [], null, "placeholder"]), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Password"]), "fieldOnly" => "true", "fieldId" => "login-password"]]), "html", null, true);
        echo "
</td></tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/signin/parts/login_form/password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/signin/parts/login_form/password.twig", "");
    }
}
