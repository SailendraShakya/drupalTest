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

/* themes/custom/portfolio/templates/region/region--testimonial.html.twig */
class __TwigTemplate_f685dad7dcb993178e70a7ee57752cef extends Template
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
        echo "<section class=\"fix-background\" style=\"background-image:url(&#x27;images/onepage-personal-img4.jpg&#x27;);\">
  <div class=\"overlay-gray\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-5 col-sm-10 no-padding testimonial-style2 center-col text-center position-relative\">
        <i class=\"fa fa-quote-left medium-icon black-text margin-five no-margin-top\"></i>
        <h6 class=\"black-text col-xs-12\">Focused, hard work is the real key to success. Keep your eyes on the goal, and just keep taking the next step towards completing it. If you aren't sure which way to do something, do it both ways and see which works better.</h6>
        <span class=\"name black-text\">John Carmack - Google Inc</span>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/region/region--testimonial.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"fix-background\" style=\"background-image:url(&#x27;images/onepage-personal-img4.jpg&#x27;);\">
  <div class=\"overlay-gray\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-5 col-sm-10 no-padding testimonial-style2 center-col text-center position-relative\">
        <i class=\"fa fa-quote-left medium-icon black-text margin-five no-margin-top\"></i>
        <h6 class=\"black-text col-xs-12\">Focused, hard work is the real key to success. Keep your eyes on the goal, and just keep taking the next step towards completing it. If you aren't sure which way to do something, do it both ways and see which works better.</h6>
        <span class=\"name black-text\">John Carmack - Google Inc</span>
      </div>
    </div>
  </div>
</section>
", "themes/custom/portfolio/templates/region/region--testimonial.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/region/region--testimonial.html.twig");
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
