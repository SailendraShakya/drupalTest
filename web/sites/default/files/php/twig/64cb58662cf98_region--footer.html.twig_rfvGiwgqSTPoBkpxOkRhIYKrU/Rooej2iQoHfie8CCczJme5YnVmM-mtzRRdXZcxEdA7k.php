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

/* themes/custom/portfolio/templates/region/region--footer.html.twig */
class __TwigTemplate_85c8cae199700107935e4e3aea2823ef extends Template
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
        echo "<footer>
  <div class=\" bg-white footer-top\">
    <div class=\"container\">
      <div class=\"row margin-four\">
        <!-- phone -->
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-phone small-icon black-text\"></i><h6 class=\"black-text margin-two no-margin-bottom\">123-456-7890</h6></div>
        <!-- end phone -->
        <!-- address -->
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-map-pin small-icon black-text\"></i><h6 class=\"black-text margin-two no-margin-bottom\">Victoria, United States</h6></div>
        <!-- end address -->
        <!-- email -->
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-envelope small-icon black-text\"></i><h6 class=\"margin-two no-margin-bottom\"><a href=\"mailto:no-reply@domain.com\" class=\"black-text\">no-reply@domain.com</a></h6></div>
        <!-- end email -->
      </div>
    </div>
  </div>
  <div class=\"container onepage-footer-middle\">
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 footer-social text-right text-center\">
        <!-- social media link -->
        <a target=\"_blank\" href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a>
        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a>
        <a target=\"_blank\" href=\"https://plus.google.com\"><i class=\"fa fa-google-plus\"></i></a>
        <a target=\"_blank\" href=\"https://dribbble.com/\"><i class=\"fa fa-dribbble\"></i></a>
        <a target=\"_blank\" href=\"https://www.youtube.com/\"><i class=\"fa fa-youtube\"></i></a>
        <a target=\"_blank\" href=\"https://www.linkedin.com/\"><i class=\"fa fa-linkedin\"></i></a>
        <!-- end social media link -->
      </div>
    </div>
  </div>
  <div class=\"container-fluid bg-dark-gray footer-bottom\">
    <div class=\"container\">
      <div class=\"row margin-three\">
        <!-- copyright -->
        <div class=\"col-md-6 col-sm-6 col-xs-12 copyright text-left letter-spacing-1 xs-text-center xs-margin-bottom-one\">
          © 2015 H-Code is proudly powered by ThemeZaa.
        </div>
        <!-- end copyright -->
        <!-- logo -->
        <div class=\"col-md-6 col-sm-6 col-xs-12 footer-logo text-right xs-text-center\">
          <a href=\"index.html\"><img src=\"images/logo-light-gray.png\" alt></a>
        </div>
        <!-- end logo -->
      </div>

    </div>
  </div>
  <!-- scroll to top -->
  <a href=\"javascript:;\" class=\"scrollToTop\"><i class=\"fa fa-angle-up\"></i></a>
  <!-- scroll to top end... -->
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/region/region--footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
  <div class=\" bg-white footer-top\">
    <div class=\"container\">
      <div class=\"row margin-four\">
        <!-- phone -->
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-phone small-icon black-text\"></i><h6 class=\"black-text margin-two no-margin-bottom\">123-456-7890</h6></div>
        <!-- end phone -->
        <!-- address -->
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-map-pin small-icon black-text\"></i><h6 class=\"black-text margin-two no-margin-bottom\">Victoria, United States</h6></div>
        <!-- end address -->
        <!-- email -->
        <div class=\"col-md-4 col-sm-4 text-center\"><i class=\"icon-envelope small-icon black-text\"></i><h6 class=\"margin-two no-margin-bottom\"><a href=\"mailto:no-reply@domain.com\" class=\"black-text\">no-reply@domain.com</a></h6></div>
        <!-- end email -->
      </div>
    </div>
  </div>
  <div class=\"container onepage-footer-middle\">
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 footer-social text-right text-center\">
        <!-- social media link -->
        <a target=\"_blank\" href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a>
        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a>
        <a target=\"_blank\" href=\"https://plus.google.com\"><i class=\"fa fa-google-plus\"></i></a>
        <a target=\"_blank\" href=\"https://dribbble.com/\"><i class=\"fa fa-dribbble\"></i></a>
        <a target=\"_blank\" href=\"https://www.youtube.com/\"><i class=\"fa fa-youtube\"></i></a>
        <a target=\"_blank\" href=\"https://www.linkedin.com/\"><i class=\"fa fa-linkedin\"></i></a>
        <!-- end social media link -->
      </div>
    </div>
  </div>
  <div class=\"container-fluid bg-dark-gray footer-bottom\">
    <div class=\"container\">
      <div class=\"row margin-three\">
        <!-- copyright -->
        <div class=\"col-md-6 col-sm-6 col-xs-12 copyright text-left letter-spacing-1 xs-text-center xs-margin-bottom-one\">
          © 2015 H-Code is proudly powered by ThemeZaa.
        </div>
        <!-- end copyright -->
        <!-- logo -->
        <div class=\"col-md-6 col-sm-6 col-xs-12 footer-logo text-right xs-text-center\">
          <a href=\"index.html\"><img src=\"images/logo-light-gray.png\" alt></a>
        </div>
        <!-- end logo -->
      </div>

    </div>
  </div>
  <!-- scroll to top -->
  <a href=\"javascript:;\" class=\"scrollToTop\"><i class=\"fa fa-angle-up\"></i></a>
  <!-- scroll to top end... -->
</footer>
", "themes/custom/portfolio/templates/region/region--footer.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/region/region--footer.html.twig");
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
