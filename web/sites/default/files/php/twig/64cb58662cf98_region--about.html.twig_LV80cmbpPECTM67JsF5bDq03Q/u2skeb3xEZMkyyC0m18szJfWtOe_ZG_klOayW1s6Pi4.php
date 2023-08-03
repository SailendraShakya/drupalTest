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

/* themes/custom/portfolio/templates/region/region--about.html.twig */
class __TwigTemplate_c19ebc569c327220e1fcd740cda67a05 extends Template
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
        echo "<section id=\"features\" class=\"border-bottom no-padding-bottom xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">01</span><h3 class=\"section-title no-padding\">About Me</h3>
      </div>
      <!-- end section title -->
    </div>
    <div class=\"row margin-ten no-margin-bottom\">
      <div class=\"col-md-6 col-sm-6 text-center xs-margin-bottom-ten\">
        <img src=\"images/onepage-personal-img.jpg\" alt>
      </div>
      <div class=\"col-md-6 col-sm-6 sm-margin-bottom-ten\">
        <div class=\"col-md-12 col-sm-12 no-padding\">
          <p class=\"text-large\">Hello, I'm a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University.</p>
          <ul class=\"list-line margin-ten text-med\">
            <li><span class=\"font-weight-600\">Name:</span> Andrew Smith</li>
            <li><span class=\"font-weight-600\">Email:</span>andrew@gmail.com</li>
            <li><span class=\"font-weight-600\">Phone:</span> (123) - 456-7890</li>
            <li><span class=\"font-weight-600\">Date of birth:</span> 23 February 1986</li>
            <li><span class=\"font-weight-600\">Nationality:</span> United States</li>
          </ul>
          <a class=\"highlight-button-dark btn btn-medium button\" href=\"#\">Download Resume</a>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/region/region--about.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"features\" class=\"border-bottom no-padding-bottom xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">01</span><h3 class=\"section-title no-padding\">About Me</h3>
      </div>
      <!-- end section title -->
    </div>
    <div class=\"row margin-ten no-margin-bottom\">
      <div class=\"col-md-6 col-sm-6 text-center xs-margin-bottom-ten\">
        <img src=\"images/onepage-personal-img.jpg\" alt>
      </div>
      <div class=\"col-md-6 col-sm-6 sm-margin-bottom-ten\">
        <div class=\"col-md-12 col-sm-12 no-padding\">
          <p class=\"text-large\">Hello, I'm a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University.</p>
          <ul class=\"list-line margin-ten text-med\">
            <li><span class=\"font-weight-600\">Name:</span> Andrew Smith</li>
            <li><span class=\"font-weight-600\">Email:</span>andrew@gmail.com</li>
            <li><span class=\"font-weight-600\">Phone:</span> (123) - 456-7890</li>
            <li><span class=\"font-weight-600\">Date of birth:</span> 23 February 1986</li>
            <li><span class=\"font-weight-600\">Nationality:</span> United States</li>
          </ul>
          <a class=\"highlight-button-dark btn btn-medium button\" href=\"#\">Download Resume</a>
        </div>
      </div>
    </div>
  </div>
</section>
", "themes/custom/portfolio/templates/region/region--about.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/region/region--about.html.twig");
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
