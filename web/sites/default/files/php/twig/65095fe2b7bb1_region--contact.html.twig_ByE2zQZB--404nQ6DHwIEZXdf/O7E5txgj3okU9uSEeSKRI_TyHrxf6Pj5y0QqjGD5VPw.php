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

/* themes/custom/portfolio/templates/region/region--contact.html.twig */
class __TwigTemplate_e34197d23fc85ae3544934bdad85f95c extends Template
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
        echo "<section id=\"contact-us\" class=\"xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">06</span><h3 class=\"section-title no-padding\">Contact us</h3>
      </div>
      <!-- end section title -->
    </div>
    <div class=\"row margin-ten no-margin-bottom\">
      <div class=\"col-md-9 text-center center-col\">
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-phone medium-icon black-text\"></i><h6 class=\"black-text margin-two no-margin-bottom\">123-456-7890</h6></div>
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-map-pin medium-icon black-text\"></i><h6 class=\"black-text margin-two no-margin-bottom\">Victoria, United States</h6></div>
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-envelope medium-icon black-text\"></i><h6 class=\"black-text margin-two no-margin-bottom\"><a class=\"black-text\" href=\"mailto:no-reply@domain.com\">no-reply@domain.com</a></h6></div>
      </div>
    </div>
    <div class=\"row\">
      <!-- form -->
      <form id=\"contactusform\" action=\"javascript:void(0)\" method=\"post\">
        <div class=\"col-md-10 col-sm-12 center-col\">
          <div class=\"row\"><div class=\"col-md-12 col-sm-12\"><div class=\"wide-separator-line margin-ten\"></div></div>
            <div class=\"col-md-12 col-sm-12\"><div id=\"success\"></div></div>
          </div>
          <div class=\"col-md-6 col-sm-12\">
            <input name=\"name\" type=\"text\" placeholder=\"Your Name\">
            <input name=\"email\" type=\"text\" placeholder=\"Your Email\">
          </div>
          <div class=\"col-md-6 col-sm-12\">
            <textarea name=\"comment\" placeholder=\"Your Message\"></textarea>
          </div>
          <div class=\"col-md-12 col-sm-12\">
            <div class=\"col-md-6 col-sm-6 no-padding-left\"><span class=\"required\">*Please complete all fields correctly</span></div>
            <div class=\"col-md-3 col-sm-6 f-right no-padding-right\"><input id=\"contact-us-button\" name=\"send message\" type=\"button\" value=\"send message\" class=\"btn btn-black no-margin-top f-right no-margin-lr\"></div>
          </div>
        </div>
      </form>
      <!-- end form -->
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/region/region--contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact-us\" class=\"xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">06</span><h3 class=\"section-title no-padding\">Contact us</h3>
      </div>
      <!-- end section title -->
    </div>
    <div class=\"row margin-ten no-margin-bottom\">
      <div class=\"col-md-9 text-center center-col\">
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-phone medium-icon black-text\"></i><h6 class=\"black-text margin-two no-margin-bottom\">123-456-7890</h6></div>
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-map-pin medium-icon black-text\"></i><h6 class=\"black-text margin-two no-margin-bottom\">Victoria, United States</h6></div>
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-envelope medium-icon black-text\"></i><h6 class=\"black-text margin-two no-margin-bottom\"><a class=\"black-text\" href=\"mailto:no-reply@domain.com\">no-reply@domain.com</a></h6></div>
      </div>
    </div>
    <div class=\"row\">
      <!-- form -->
      <form id=\"contactusform\" action=\"javascript:void(0)\" method=\"post\">
        <div class=\"col-md-10 col-sm-12 center-col\">
          <div class=\"row\"><div class=\"col-md-12 col-sm-12\"><div class=\"wide-separator-line margin-ten\"></div></div>
            <div class=\"col-md-12 col-sm-12\"><div id=\"success\"></div></div>
          </div>
          <div class=\"col-md-6 col-sm-12\">
            <input name=\"name\" type=\"text\" placeholder=\"Your Name\">
            <input name=\"email\" type=\"text\" placeholder=\"Your Email\">
          </div>
          <div class=\"col-md-6 col-sm-12\">
            <textarea name=\"comment\" placeholder=\"Your Message\"></textarea>
          </div>
          <div class=\"col-md-12 col-sm-12\">
            <div class=\"col-md-6 col-sm-6 no-padding-left\"><span class=\"required\">*Please complete all fields correctly</span></div>
            <div class=\"col-md-3 col-sm-6 f-right no-padding-right\"><input id=\"contact-us-button\" name=\"send message\" type=\"button\" value=\"send message\" class=\"btn btn-black no-margin-top f-right no-margin-lr\"></div>
          </div>
        </div>
      </form>
      <!-- end form -->
    </div>
  </div>
</section>
", "themes/custom/portfolio/templates/region/region--contact.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/region/region--contact.html.twig");
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
