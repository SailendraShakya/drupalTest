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

/* themes/custom/portfolio/templates/region/region--technology.html.twig */
class __TwigTemplate_ee371ac4b029a9ab53ac5d0680d50fd4 extends Template
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
        echo "<section class=\"fix-background\" style=\"background-image:url(&#x27;images/onepage-personal-img3.jpg&#x27;);\">
  <div class=\"opacity-medium bg-black\"></div>
  <div class=\"container position-relative\">
    <div class=\"row\">
      <div class=\"text-center center-col\">
        <!-- pie charts -->
        <div class=\"col-md-3 col-sm-3 wow bounceIn xs-margin-bottom-ten\">
          <div class=\"chart-percent\"><span class=\"chart white-text\" data-percent=\"75\"><span class=\"percent\"></span> </span></div>
          <div class=\"chart-text\">
            <h5 class=\"white-text\">Graphic Design</h5>
            <p>Expert, 7 years</p>
          </div>
        </div>
        <!-- end pie charts -->
        <!-- pie charts -->
        <div class=\"col-md-3 col-sm-3 wow bounceIn xs-margin-bottom-ten\">
          <div class=\"chart-percent\"><span class=\"chart white-text\" data-percent=\"88\"><span class=\"percent\"></span></span></div>
          <div class=\"chart-text\">
            <h5 class=\"white-text\">Web Design</h5>
            <p>Expert, 9 years</p>
          </div>
        </div>
        <!-- end pie charts -->
        <!-- pie charts -->
        <div class=\"col-md-3 col-sm-3 wow bounceIn xs-margin-bottom-ten\">
          <div class=\"chart-percent\"><span class=\"chart white-text\" data-percent=\"90\"><span class=\"percent\"></span> </span></div>
          <div class=\"chart-text\">
            <h5 class=\"white-text\">Branding</h5>
            <p>Expert, 5 years</p>
          </div>
        </div>
        <!-- end pie charts -->
        <!-- pie charts -->
        <div class=\"col-md-3 col-sm-3 wow bounceIn\">
          <div class=\"chart-percent\"><span class=\"chart white-text\" data-percent=\"96\"><span class=\"percent\"></span> </span></div>
          <div class=\"chart-text\">
            <h5 class=\"white-text\">Photography</h5>
            <p>Expert, 4 years</p>
          </div>
        </div>
        <!-- end pie charts -->
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/region/region--technology.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"fix-background\" style=\"background-image:url(&#x27;images/onepage-personal-img3.jpg&#x27;);\">
  <div class=\"opacity-medium bg-black\"></div>
  <div class=\"container position-relative\">
    <div class=\"row\">
      <div class=\"text-center center-col\">
        <!-- pie charts -->
        <div class=\"col-md-3 col-sm-3 wow bounceIn xs-margin-bottom-ten\">
          <div class=\"chart-percent\"><span class=\"chart white-text\" data-percent=\"75\"><span class=\"percent\"></span> </span></div>
          <div class=\"chart-text\">
            <h5 class=\"white-text\">Graphic Design</h5>
            <p>Expert, 7 years</p>
          </div>
        </div>
        <!-- end pie charts -->
        <!-- pie charts -->
        <div class=\"col-md-3 col-sm-3 wow bounceIn xs-margin-bottom-ten\">
          <div class=\"chart-percent\"><span class=\"chart white-text\" data-percent=\"88\"><span class=\"percent\"></span></span></div>
          <div class=\"chart-text\">
            <h5 class=\"white-text\">Web Design</h5>
            <p>Expert, 9 years</p>
          </div>
        </div>
        <!-- end pie charts -->
        <!-- pie charts -->
        <div class=\"col-md-3 col-sm-3 wow bounceIn xs-margin-bottom-ten\">
          <div class=\"chart-percent\"><span class=\"chart white-text\" data-percent=\"90\"><span class=\"percent\"></span> </span></div>
          <div class=\"chart-text\">
            <h5 class=\"white-text\">Branding</h5>
            <p>Expert, 5 years</p>
          </div>
        </div>
        <!-- end pie charts -->
        <!-- pie charts -->
        <div class=\"col-md-3 col-sm-3 wow bounceIn\">
          <div class=\"chart-percent\"><span class=\"chart white-text\" data-percent=\"96\"><span class=\"percent\"></span> </span></div>
          <div class=\"chart-text\">
            <h5 class=\"white-text\">Photography</h5>
            <p>Expert, 4 years</p>
          </div>
        </div>
        <!-- end pie charts -->
      </div>
    </div>
  </div>
</section>
", "themes/custom/portfolio/templates/region/region--technology.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/region/region--technology.html.twig");
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
