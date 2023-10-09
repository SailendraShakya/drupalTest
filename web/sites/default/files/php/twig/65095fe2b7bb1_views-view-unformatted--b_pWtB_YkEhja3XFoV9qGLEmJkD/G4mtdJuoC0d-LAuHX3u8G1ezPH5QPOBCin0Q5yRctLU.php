<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/portfolio/templates/views/views-view-unformatted--blogs--block-1.html.twig */
class __TwigTemplate_0e3128716fcea2e5bc11cd6b350bfcea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
";
        // line 21
        if (($context["title"] ?? null)) {
            // line 22
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 22, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 24
        echo "<section id=\"blog\" class=\"xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">05</span><h3 class=\"section-title no-padding\">Recent Blog</h3>
      </div>
      <!-- end section title -->
    </div>
    <div class=\"row margin-ten no-margin-bottom\">

      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 36
            echo "        ";
            $context["row_classes"] = [0 => ((            // line 37
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 40
            echo "        <!-- blog item -->
        <div class=\"col-md-4 col-sm-4 wow fadeInUp animated\" style=\"visibility: visible; animation-name: fadeInUp;\">
          <div class=\"blog-post\">
            <div class=\"blog-post-images\">
              <a href=\"blog-right-sidebar.html\">
";
            // line 46
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 46)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 46), "render_tokens", [], "any", false, false, true, 46)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 46)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_images }}"] ?? null) : null), 46, $this->source), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"post-details\">
              <a href=\"blog-right-sidebar.html\" class=\"post-title\">
                ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 51), "render_tokens", [], "any", false, false, true, 51)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 51)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ title }}"] ?? null) : null), 51, $this->source), "html", null, true);
            echo "
              </a>
              <span class=\"post-author\">Posted by Vince Lombardi | 02 January 2015</span>
              <p>
                ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 55)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 55), "render_tokens", [], "any", false, false, true, 55)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 55)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ body }}"] ?? null) : null), 55, $this->source), "html", null, true);
            echo "
              </p>
            </div>
          </div>
        </div>
        <!-- end blog item -->
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/views/views-view-unformatted--blogs--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 62,  107 => 55,  100 => 51,  91 => 46,  84 => 40,  82 => 37,  80 => 36,  63 => 35,  50 => 24,  44 => 22,  42 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 *
 * @ingroup themeable
 */
#}

{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
<section id=\"blog\" class=\"xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">05</span><h3 class=\"section-title no-padding\">Recent Blog</h3>
      </div>
      <!-- end section title -->
    </div>
    <div class=\"row margin-ten no-margin-bottom\">

      {% for row in rows %}
        {% set row_classes = [
          default_row_class ? 'views-row',
        ] %}
{#        {{- row.content -}}#}
        <!-- blog item -->
        <div class=\"col-md-4 col-sm-4 wow fadeInUp animated\" style=\"visibility: visible; animation-name: fadeInUp;\">
          <div class=\"blog-post\">
            <div class=\"blog-post-images\">
              <a href=\"blog-right-sidebar.html\">
{#                <img src=\"{{ row.content[\"#view\"].style_plugin.render_tokens[ loop.index0 ]['{{ field_images }}'] }}\" alt=\"\">#}
                {{ row.content[\"#view\"].style_plugin.render_tokens[ loop.index0 ]['{{ field_images }}'] }}
              </a>
            </div>
            <div class=\"post-details\">
              <a href=\"blog-right-sidebar.html\" class=\"post-title\">
                {{ row.content[\"#view\"].style_plugin.render_tokens[ loop.index0 ]['{{ title }}'] }}
              </a>
              <span class=\"post-author\">Posted by Vince Lombardi | 02 January 2015</span>
              <p>
                {{ row.content[\"#view\"].style_plugin.render_tokens[ loop.index0 ]['{{ body }}'] }}
              </p>
            </div>
          </div>
        </div>
        <!-- end blog item -->
      {% endfor %}

    </div>
  </div>
</section>
", "themes/custom/portfolio/templates/views/views-view-unformatted--blogs--block-1.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/views/views-view-unformatted--blogs--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "for" => 35, "set" => 36);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
