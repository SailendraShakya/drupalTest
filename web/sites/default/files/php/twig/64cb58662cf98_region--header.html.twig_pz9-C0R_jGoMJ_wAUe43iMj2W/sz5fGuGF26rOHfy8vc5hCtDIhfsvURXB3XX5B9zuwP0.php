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

/* themes/custom/portfolio/templates/region/region--header.html.twig */
class __TwigTemplate_9684f8ef7c2e6945298ab19a20a86c92 extends Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-border-bottom no-transition\" role=\"navigation\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 col-sm-2 col-xs-6\"><a class=\"logo-light\" href=\"index.html\"><img alt src=\"images/logo-light.png\" class=\"logo\"></a><a class=\"logo-dark\" href=\"index.html\"><img alt src=\"images/logo-light.png\" class=\"logo\"></a></div>
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
      </div>
      <div class=\"col-md-9 col-sm-10 text-right\">
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#slider\" class=\"inner-link\">Home</a> </li>
            <li><a href=\"#features\" class=\"inner-link\">About</a> </li>
            <li><a href=\"#skills\" class=\"inner-link\">Skills</a></li>
            <li><a href=\"#education\" class=\"inner-link\">Education</a></li>
            <li><a href=\"#portfolio\" class=\"inner-link\">Portfolio</a></li>
            <li><a href=\"#blog\" class=\"inner-link\">Blog</a> </li>
            <li><a href=\"#contact-us\" class=\"inner-link\">Contact</a> </li>
            <li><a href=\"index.html\" class=\"inner-link\">Demos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/region/region--header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-border-bottom no-transition\" role=\"navigation\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 col-sm-2 col-xs-6\"><a class=\"logo-light\" href=\"index.html\"><img alt src=\"images/logo-light.png\" class=\"logo\"></a><a class=\"logo-dark\" href=\"index.html\"><img alt src=\"images/logo-light.png\" class=\"logo\"></a></div>
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
      </div>
      <div class=\"col-md-9 col-sm-10 text-right\">
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#slider\" class=\"inner-link\">Home</a> </li>
            <li><a href=\"#features\" class=\"inner-link\">About</a> </li>
            <li><a href=\"#skills\" class=\"inner-link\">Skills</a></li>
            <li><a href=\"#education\" class=\"inner-link\">Education</a></li>
            <li><a href=\"#portfolio\" class=\"inner-link\">Portfolio</a></li>
            <li><a href=\"#blog\" class=\"inner-link\">Blog</a> </li>
            <li><a href=\"#contact-us\" class=\"inner-link\">Contact</a> </li>
            <li><a href=\"index.html\" class=\"inner-link\">Demos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
", "themes/custom/portfolio/templates/region/region--header.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/region/region--header.html.twig");
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
