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

/* themes/custom/portfolio/templates/region/region--portfolio.html.twig */
class __TwigTemplate_c9b86d3c2f808116461132324fb4ae9d extends Template
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
        echo "<section id=\"portfolio\" class=\"no-padding-bottom xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">04</span><h3 class=\"section-title no-padding\">Portfolio</h3>
      </div>
      <!-- end section title -->
    </div>
  </div>
  <div class=\"container-fuild\">
    <div class=\"row no-margin\">
      <div class=\"col-md-12 text-center margin-five no-margin-bottom\">
        <div class=\"text-center\">
          <ul class=\"portfolio-filter nav nav-tabs margin-one no-margin-top xs-margin-bottom-seven\">
            <li class=\"nav active\"><a href=\"#\" data-filter=\"*\">All</a></li>
            <li class=\"nav\"><a href=\"#\" data-filter=\".design\">Design</a></li>
            <li class=\"nav\"><a href=\"#\" data-filter=\".graphics\">Graphics</a></li>
            <li class=\"nav\"><a href=\"#\" data-filter=\".branding\">Branding</a></li>
            <li class=\"nav\"><a href=\"#\" data-filter=\".photography\">Photography</a></li>
          </ul>
        </div>
      </div>
      <div class=\"grid-gallery overflow-hidden\">
        <div class=\"tab-content\">
          <ul class=\"masonry-items grid\">
            <!-- portfolio item -->
            <li class=\"photography graphics\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page1.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img57.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page1.html\" class=\"simple-ajax-popup-align-top\">Herbal Beauty Salon</a></h3>
                  <p>Ajax popup - Style #1</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"graphics design lightbox-gallery\">
              <figure>
                <div class=\"gallery-img\"><a href=\"images/big-portfolio-img8.jpg\" title><img src=\"images/portfolio-img59.jpg\" alt></a>
                  <a href=\"images/big-portfolio-img9.jpg\" title></a>
                  <a href=\"images/big-portfolio-img10.jpg\" title></a>
                </div>
                <figcaption>
                  <h3>Pixflow Studio</h3>
                  <p>Lightbox gallery</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"branding graphics design\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page3.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img60.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page3.html\" class=\"simple-ajax-popup-align-top\">Kaya Skin Care</a></h3>
                  <p>Ajax popup - Style #3</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"photography branding design graphics\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page5.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img62.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page1.html\" class=\"simple-ajax-popup-align-top\">Rubber Studio</a></h3>
                  <p>Ajax popup - Style #5</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"photography design branding\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page2.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img58.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page2.html\" class=\"simple-ajax-popup-align-top\">Tailoring Interior </a></h3>
                  <p>Ajax popup - Style #2</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"photography branding\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page4.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img61.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page5.html\" class=\"simple-ajax-popup-align-top\">Third Eye Glasses</a></h3>
                  <p>Ajax popup - Style #4</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"photography branding design graphics\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page5.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img63.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page1.html\" class=\"simple-ajax-popup-align-top\">Rubber Studio</a></h3>
                  <p>Ajax popup - Style #5</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/region/region--portfolio.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"portfolio\" class=\"no-padding-bottom xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">04</span><h3 class=\"section-title no-padding\">Portfolio</h3>
      </div>
      <!-- end section title -->
    </div>
  </div>
  <div class=\"container-fuild\">
    <div class=\"row no-margin\">
      <div class=\"col-md-12 text-center margin-five no-margin-bottom\">
        <div class=\"text-center\">
          <ul class=\"portfolio-filter nav nav-tabs margin-one no-margin-top xs-margin-bottom-seven\">
            <li class=\"nav active\"><a href=\"#\" data-filter=\"*\">All</a></li>
            <li class=\"nav\"><a href=\"#\" data-filter=\".design\">Design</a></li>
            <li class=\"nav\"><a href=\"#\" data-filter=\".graphics\">Graphics</a></li>
            <li class=\"nav\"><a href=\"#\" data-filter=\".branding\">Branding</a></li>
            <li class=\"nav\"><a href=\"#\" data-filter=\".photography\">Photography</a></li>
          </ul>
        </div>
      </div>
      <div class=\"grid-gallery overflow-hidden\">
        <div class=\"tab-content\">
          <ul class=\"masonry-items grid\">
            <!-- portfolio item -->
            <li class=\"photography graphics\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page1.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img57.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page1.html\" class=\"simple-ajax-popup-align-top\">Herbal Beauty Salon</a></h3>
                  <p>Ajax popup - Style #1</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"graphics design lightbox-gallery\">
              <figure>
                <div class=\"gallery-img\"><a href=\"images/big-portfolio-img8.jpg\" title><img src=\"images/portfolio-img59.jpg\" alt></a>
                  <a href=\"images/big-portfolio-img9.jpg\" title></a>
                  <a href=\"images/big-portfolio-img10.jpg\" title></a>
                </div>
                <figcaption>
                  <h3>Pixflow Studio</h3>
                  <p>Lightbox gallery</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"branding graphics design\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page3.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img60.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page3.html\" class=\"simple-ajax-popup-align-top\">Kaya Skin Care</a></h3>
                  <p>Ajax popup - Style #3</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"photography branding design graphics\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page5.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img62.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page1.html\" class=\"simple-ajax-popup-align-top\">Rubber Studio</a></h3>
                  <p>Ajax popup - Style #5</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"photography design branding\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page2.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img58.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page2.html\" class=\"simple-ajax-popup-align-top\">Tailoring Interior </a></h3>
                  <p>Ajax popup - Style #2</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"photography branding\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page4.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img61.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page5.html\" class=\"simple-ajax-popup-align-top\">Third Eye Glasses</a></h3>
                  <p>Ajax popup - Style #4</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <li class=\"photography branding design graphics\">
              <figure>
                <div class=\"gallery-img\"><a href=\"onepage-single-project-page5.html\" class=\"simple-ajax-popup-align-top\"><img src=\"images/portfolio-img63.jpg\" alt></a></div>
                <figcaption>
                  <h3><a href=\"onepage-single-project-page1.html\" class=\"simple-ajax-popup-align-top\">Rubber Studio</a></h3>
                  <p>Ajax popup - Style #5</p>
                </figcaption>
              </figure>
            </li>
            <!-- end portfolio item -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
", "themes/custom/portfolio/templates/region/region--portfolio.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/region/region--portfolio.html.twig");
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
