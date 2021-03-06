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

/* themes/custom/cocina/templates/page.html.twig */
class __TwigTemplate_a768eef61eaece7b56e0c4b1f0685d525bb1f94d12e345fad500dfdbcedc36c2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@bootstrap_barrio/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@bootstrap_barrio/layout/page.html.twig", "themes/custom/cocina/templates/page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 72
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "  ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 73) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 73)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 73))) {
            // line 74
            echo "    <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 74, $this->source), "html", null, true);
            echo ">
      <div class=\"container header__top\">
        ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
        ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
        ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 78)) {
                // line 79
                echo "          <div class=\"form-inline navbar-form float-right\">
            ";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 83
            echo "      </div>
    </nav>
  ";
        }
        // line 86
        echo "  <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 86, $this->source), "html", null, true);
        echo ">
    <div class=\"container header__bottom\">
      ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
      ";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 89) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 89))) {
            // line 90
            echo "        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
          ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
          ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 93)) {
                // line 94
                echo "            <div class=\"form-inline navbar-form float-right\">
              ";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 98
            echo "        </div>
      ";
        }
        // line 100
        echo "
      ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 101)) {
            // line 102
            echo "        <div class=\"header_menu\">
          <div class=\"container\">
            ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 108
        echo "
      ";
        // line 109
        if (($context["sidebar_collapse"] ?? null)) {
            // line 110
            echo "        <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
      ";
        }
        // line 112
        echo "    </div>
  </nav>
";
    }

    // line 116
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "  <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 117, $this->source), "html", null, true);
        echo "\">
    ";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
        echo "
    <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
      <main";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 120, $this->source), "html", null, true);
        echo ">
        <section class=\"section\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "
        </section>
      </main>
      ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 126)) {
            // line 127
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 127, $this->source), "html", null, true);
            echo ">
          <aside class=\"section\" role=\"complementary\">
            ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        }
        // line 133
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 133)) {
            // line 134
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 134, $this->source), "html", null, true);
            echo ">
          <aside class=\"section\" role=\"complementary\">
            ";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        }
        // line 140
        echo "    </div>
  </div>
";
    }

    // line 144
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "  <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 145, $this->source), "html", null, true);
        echo "\">
    ";
        // line 146
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 146) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 146)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 146)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 146))) {
            // line 147
            echo "      <div class=\"site-footer__top clearfix\">
        ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
        ";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "
        ";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "
        ";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 154
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 154)) {
            // line 155
            echo "      <div class=\"site-footer__bottom\">
        ";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 159
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cocina/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 159,  254 => 156,  251 => 155,  248 => 154,  242 => 151,  238 => 150,  234 => 149,  230 => 148,  227 => 147,  225 => 146,  220 => 145,  216 => 144,  210 => 140,  203 => 136,  197 => 134,  194 => 133,  187 => 129,  181 => 127,  179 => 126,  173 => 123,  167 => 120,  162 => 118,  157 => 117,  153 => 116,  147 => 112,  143 => 110,  141 => 109,  138 => 108,  131 => 104,  127 => 102,  125 => 101,  122 => 100,  118 => 98,  112 => 95,  109 => 94,  107 => 93,  103 => 92,  99 => 90,  97 => 89,  93 => 88,  87 => 86,  82 => 83,  76 => 80,  73 => 79,  71 => 78,  67 => 77,  63 => 76,  57 => 74,  54 => 73,  50 => 72,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@bootstrap_barrio/layout/page.html.twig\" %}

{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}

{% block head %}
  {% if page.secondary_menu or page.top_header or page.top_header_form %}
    <nav{{ navbar_top_attributes }}>
      <div class=\"container header__top\">
        {{ page.secondary_menu }}
        {{ page.top_header }}
        {% if page.top_header_form %}
          <div class=\"form-inline navbar-form float-right\">
            {{ page.top_header_form }}
          </div>
        {% endif %}
      </div>
    </nav>
  {% endif %}
  <nav{{ navbar_attributes }}>
    <div class=\"container header__bottom\">
      {{ page.header }}
      {% if page.primary_menu or page.header_form %}
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
          {{ page.primary_menu }}
          {% if page.header_form %}
            <div class=\"form-inline navbar-form float-right\">
              {{ page.header_form }}
            </div>
          {% endif %}
        </div>
      {% endif %}

      {% if page.menu %}
        <div class=\"header_menu\">
          <div class=\"container\">
            {{ page.menu }}
          </div>
        </div>
      {% endif %}

      {% if sidebar_collapse %}
        <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
      {% endif %}
    </div>
  </nav>
{% endblock %}

{% block content %}
  <div id=\"main\" class=\"{{ container }}\">
    {{ page.breadcrumb }}
    <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
      <main{{ content_attributes }}>
        <section class=\"section\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          {{ page.content }}
        </section>
      </main>
      {% if page.sidebar_first %}
        <div{{ sidebar_first_attributes }}>
          <aside class=\"section\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        </div>
      {% endif %}
      {% if page.sidebar_second %}
        <div{{ sidebar_second_attributes }}>
          <aside class=\"section\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        </div>
      {% endif %}
    </div>
  </div>
{% endblock %}

{% block footer %}
  <div class=\"{{ container }}\">
    {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
      <div class=\"site-footer__top clearfix\">
        {{ page.footer_first }}
        {{ page.footer_second }}
        {{ page.footer_third }}
        {{ page.footer_fourth }}
      </div>
    {% endif %}
    {% if page.footer_fifth %}
      <div class=\"site-footer__bottom\">
        {{ page.footer_fifth }}
      </div>
    {% endif %}
  </div>
{% endblock %}

", "themes/custom/cocina/templates/page.html.twig", "/var/www/html/web/themes/custom/cocina/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 73);
        static $filters = array("escape" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
