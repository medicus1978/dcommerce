<?php

/* themes/contrib/bootstrap/templates/menu/menu.html.twig */
class __TwigTemplate_fdc0ca2adb73d0008ca423b72e55ef6d23b8a63f96ef7499ac04f684fac4dc83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("macro" => 20, "if" => 21, "for" => 23, "set" => 25);
        $filters = array("clean_class" => 52);
        $functions = array("link" => 36);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('macro', 'if', 'for', 'set'),
                array('clean_class'),
                array('link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 46
        echo "
";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this, "menu_links", array(0 => (isset($context["items"]) ? $context["items"] : null), 1 => (isset($context["attributes"]) ? $context["attributes"] : null), 2 => 0, 3 => (((isset($context["classes"]) ? $context["classes"] : null)) ? ((isset($context["classes"]) ? $context["classes"] : null)) : (array(0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass((isset($context["menu_name"]) ? $context["menu_name"] : null))), 2 => "nav")))), "method")));
        echo "
";
    }

    // line 20
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 22
                echo "    <ul";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => ((((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) ? ((isset($context["classes"]) ? $context["classes"] : null)) : ("dropdown-menu"))), "method"), "html", null, true));
                echo ">
    ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 24
                    echo "      ";
                    // line 25
                    $context["item_classes"] = array(0 => ((($this->getAttribute(                    // line 26
$context["item"], "is_expanded", array()) && $this->getAttribute($context["item"], "below", array()))) ? ("expanded") : ("")), 1 => (((($this->getAttribute(                    // line 27
$context["item"], "is_expanded", array()) && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) && $this->getAttribute($context["item"], "below", array()))) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                    // line 28
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 31
                    echo "      ";
                    if (((((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0) && $this->getAttribute($context["item"], "is_expanded", array())) && $this->getAttribute($context["item"], "below", array()))) {
                        // line 32
                        echo "        <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                        echo ">
        <a href=\"";
                        // line 33
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <span class=\"caret\"></span></a>
      ";
                    } else {
                        // line 35
                        echo "        <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                        echo ">
        ";
                        // line 36
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
      ";
                    }
                    // line 38
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 39
                        echo "        ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this, "menu_links", array(0 => $this->getAttribute($context["item"], "below", array()), 1 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), 2 => ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1), 3 => (isset($context["classes"]) ? $context["classes"] : null)), "method")));
                        echo "
      ";
                    }
                    // line 41
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/menu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  120 => 41,  114 => 39,  111 => 38,  106 => 36,  101 => 35,  94 => 33,  89 => 32,  86 => 31,  84 => 28,  83 => 27,  82 => 26,  81 => 25,  79 => 24,  75 => 23,  70 => 22,  67 => 21,  52 => 20,  46 => 52,  43 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/bootstrap/templates/menu/menu.html.twig", "/var/www/dcommerce/themes/contrib/bootstrap/templates/menu/menu.html.twig");
    }
}
