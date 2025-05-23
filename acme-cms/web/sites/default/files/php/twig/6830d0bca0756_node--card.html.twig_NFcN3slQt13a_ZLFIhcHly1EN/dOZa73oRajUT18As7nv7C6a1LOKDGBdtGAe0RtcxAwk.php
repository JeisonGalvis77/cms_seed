<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/drupal_cms_olivero/templates/content/node--card.html.twig */
class __TwigTemplate_1a8e580eb80050f3aa63292635b25571 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "
";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.drupal_cms_olivero--card"), "html", null, true);
        yield "

";
        // line 15
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["node"] ?? null), "bundle", [], "any", false, false, true, 17))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 18)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 19)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 20)) ? ("node--unpublished") : ("")), ((        // line 21
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 24
        yield "
";
        // line 25
        $context["has_image"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_image", [], "any", false, false, true, 25)), "img"));
        // line 26
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), "card", (( !($context["has_image"] ?? null)) ? ("card--no-image") : (""))], "method", false, false, true, 26), "html", null, true);
        yield ">
  <div class=\"card__inner\">
    ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
    ";
        // line 29
        if (($context["has_image"] ?? null)) {
            // line 30
            yield "      <div class=\"card__image\">
        ";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_image", [], "any", false, false, true, 31), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 34
        yield "    <div class=\"card__content\">
      <header class=\"card__header\">
        <h3 class=\"card__title\">
          <a href=\"";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</a>
        </h3>
        ";
        // line 39
        if (($context["display_submitted"] ?? null)) {
            // line 40
            yield "          <div class=\"card__subtitle\">
            <span";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true);
            yield ">
              ";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true);
            yield "
            </span>
            ";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 47
        yield "      </header>
      <div class=\"card__lower\">
        <div class=\"card__description\">
          ";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_featured_image", "links"), "html", null, true);
        yield "
        </div>
      </div>
    </div>
    <div class=\"card__cta-icon button button--primary\"></div>
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "attributes", "title_suffix", "url", "label", "display_submitted", "author_attributes", "date", "metadata"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/drupal_cms_olivero/templates/content/node--card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  122 => 50,  117 => 47,  111 => 44,  106 => 42,  102 => 41,  99 => 40,  97 => 39,  90 => 37,  85 => 34,  79 => 31,  76 => 30,  74 => 29,  70 => 28,  64 => 26,  62 => 25,  59 => 24,  57 => 21,  56 => 20,  55 => 19,  54 => 18,  53 => 17,  52 => 15,  47 => 12,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/drupal_cms_olivero/templates/content/node--card.html.twig", "/var/www/html/web/themes/contrib/drupal_cms_olivero/templates/content/node--card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "if" => 29];
        static $filters = ["escape" => 12, "clean_class" => 17, "trim" => 25, "striptags" => 25, "render" => 25, "without" => 50];
        static $functions = ["attach_library" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'clean_class', 'trim', 'striptags', 'render', 'without'],
                ['attach_library'],
                $this->source
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
