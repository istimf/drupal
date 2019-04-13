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

/* themes/custom/commerce_2_demo/templates/menus/menu.html.twig */
class __TwigTemplate_c898192e0003e2aae29eca1c56375b8bf2e57725e79469b6910c79cdc5052197 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 23, "macro" => 31, "set" => 34, "if" => 48, "for" => 54];
        $filters = ["clean_class" => 37];
        $functions = ["link" => 70];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)));
        echo "

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            // line 34
            $context["menu_classes"] = [0 => "menu", 1 => "menu--parent", 2 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 37
($context["menu_name"] ?? null)))), 3 => ("menu--level-" . $this->sandbox->ensureToStringAllowed(            // line 38
($context["menu_level"] ?? null)))];
            // line 41
            echo "  ";
            // line 42
            $context["sub_menu_classes"] = [0 => "menu", 1 => "menu--child", 2 => ("menu--level-" . $this->sandbox->ensureToStringAllowed(            // line 45
($context["menu_level"] ?? null)))];
            // line 48
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 49
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 50
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 52
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method"), "addClass", [0 => ($context["sub_menu_classes"] ?? null)], "method"), "removeClass", [0 => ("menu--level-" . (($context["menu_level"] ?? null) - 1))], "method")), "html", null, true);
                    echo ">
    ";
                }
                // line 54
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 55
                    echo "      ";
                    // line 56
                    $context["item_classes"] = [0 => "menu__item", 1 => ("menu__item--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 58
$context["item"], "title", [])))), 2 => (($this->getAttribute(                    // line 59
$context["item"], "is_expanded", [])) ? ("menu__item--expanded") : ("")), 3 => (($this->getAttribute(                    // line 60
$context["item"], "in_active_trail", [])) ? ("menu__item--active-trail") : (""))];
                    // line 63
                    echo "      ";
                    // line 64
                    $context["link_classes"] = [0 => "menu__link", 1 => (($this->getAttribute(                    // line 66
$context["item"], "in_active_trail", [])) ? ("menu__link--active-trail") : (""))];
                    // line 69
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
        ";
                    // line 70
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "removeClass", [0 => ($context["item_classes"] ?? null)], "method"), "addClass", [0 => ($context["link_classes"] ?? null)], "method"))), "html", null, true);
                    echo "
        ";
                    // line 71
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 72
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
        ";
                    }
                    // line 74
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/commerce_2_demo/templates/menus/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 76,  148 => 74,  142 => 72,  140 => 71,  136 => 70,  131 => 69,  129 => 66,  128 => 64,  126 => 63,  124 => 60,  123 => 59,  122 => 58,  121 => 56,  119 => 55,  114 => 54,  108 => 52,  102 => 50,  99 => 49,  96 => 48,  94 => 45,  93 => 42,  91 => 41,  89 => 38,  88 => 37,  87 => 34,  85 => 33,  82 => 32,  67 => 31,  60 => 29,  57 => 24,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/commerce_2_demo/templates/menus/menu.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/menus/menu.html.twig");
    }
}
