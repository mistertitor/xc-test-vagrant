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

/* /var/www/html/skins/admin/images_settings/parts/layout_settings.cloud_zoom_mode.twig */
class __TwigTemplate_0234e11f26d3921b01b37349be61d8f1d8a3d38ef7faf89c14e7357d2dda0c71 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isCloudZoomAllowed", [], "method")) {
            // line 8
            echo "  <li class=\"has-dependency\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Select\\CloudZoomMode", "label" => "Cloud Zoom mode", "fieldName" => "cloud_zoom_mode", "value" => $this->getAttribute(($context["this"] ?? null), "getCloudZoomMode", [], "method")]]), "html", null, true);
            echo "
    <script type=\"text/x-cart-data\">
      {\"dependency\":{\"show\":{\"cloud_zoom\":[true]}}}
    </script>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/admin/images_settings/parts/layout_settings.cloud_zoom_mode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/admin/images_settings/parts/layout_settings.cloud_zoom_mode.twig", "");
    }
}
