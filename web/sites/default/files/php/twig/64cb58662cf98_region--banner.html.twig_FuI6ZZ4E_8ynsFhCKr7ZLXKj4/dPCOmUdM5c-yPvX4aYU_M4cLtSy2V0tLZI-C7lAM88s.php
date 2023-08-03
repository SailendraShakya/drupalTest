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

/* themes/custom/portfolio/templates/region/region--banner.html.twig */
class __TwigTemplate_49475bf1eab6eba2bdc9166c3a9c766c extends Template
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
        // line 1
        echo "<section class=\"parallax1 parallax-fix full-screen no-padding scroll-to-down\" onclick=\"scrollToDown()\" id=\"slider\">
  <div class=\"overlay-gray\"></div>
  <img class=\"parallax-background-img\" src=\"images/onepage-personal.jpg\" alt>
  <div class=\"container full-screen position-relative\">
    <div class=\"slider-typography\">
      <div class=\"slider-text-middle-main\">
        <div class=\"slider-text-middle slider-text-middle2 personal-name animated fadeIn\">
          <h1 class=\"margin-two\">I'm Andrew Smith</h1>
          <span class=\"cd-headline letters type text-uppercase\">
                                <span class=\"cd-words-wrapper waiting\">
                                    <b class=\"is-visible main-font text-large font-weight-400\">I'm creative designer</b>
                                    <b class=\"main-font text-large font-weight-400\">I'm dedicated freelancer</b>
                                    <b class=\"main-font text-large font-weight-400\">I'm brilliant developer</b>
                                </span>
                            </span>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/region/region--banner.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"parallax1 parallax-fix full-screen no-padding scroll-to-down\" onclick=\"scrollToDown()\" id=\"slider\">
  <div class=\"overlay-gray\"></div>
  <img class=\"parallax-background-img\" src=\"images/onepage-personal.jpg\" alt>
  <div class=\"container full-screen position-relative\">
    <div class=\"slider-typography\">
      <div class=\"slider-text-middle-main\">
        <div class=\"slider-text-middle slider-text-middle2 personal-name animated fadeIn\">
          <h1 class=\"margin-two\">I'm Andrew Smith</h1>
          <span class=\"cd-headline letters type text-uppercase\">
                                <span class=\"cd-words-wrapper waiting\">
                                    <b class=\"is-visible main-font text-large font-weight-400\">I'm creative designer</b>
                                    <b class=\"main-font text-large font-weight-400\">I'm dedicated freelancer</b>
                                    <b class=\"main-font text-large font-weight-400\">I'm brilliant developer</b>
                                </span>
                            </span>
        </div>
      </div>
    </div>
  </div>
</section>
", "themes/custom/portfolio/templates/region/region--banner.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/region/region--banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
