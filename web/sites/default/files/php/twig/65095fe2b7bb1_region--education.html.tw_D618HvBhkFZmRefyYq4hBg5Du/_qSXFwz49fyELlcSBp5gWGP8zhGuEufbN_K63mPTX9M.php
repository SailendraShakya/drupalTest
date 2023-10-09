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

/* themes/custom/portfolio/templates/region/region--education.html.twig */
class __TwigTemplate_94b3024c5acb9a7627fcb301a3388079 extends Template
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
        echo "<section id=\"education\" class=\"xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row margin-ten no-margin-top\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">03</span><h3 class=\"section-title no-padding\">Education</h3>
      </div>
      <!-- end section title -->
    </div>
    <div class=\"row\">
      <div id=\"owl-demo-small\" class=\"col-md-12 owl-carousel owl-theme dark-pagination owl-no-pagination dark-pagination-without-next-prev-arrow position-relative no-padding\">
        <div class=\"item\">
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 sm-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-laptop black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2012  - 2014</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Bachelor of Arts</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 sm-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-video black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2010  - 2012</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Visual Art & Design</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 xs-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-camera black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2008  - 2010</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Degree of Web Design</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-picture black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2008  - 2006</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Visual Art & Graphics</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
        </div>
        <div class=\"item\">
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 sm-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-laptop black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2012  - 2014</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Bachelor of Arts</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 sm-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-video black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2010  - 2012</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Visual Art & Design</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 xs-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-camera black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2008  - 2010</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Degree of Web Design</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-picture black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2008  - 2006</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Visual Art & Graphics</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class=\"fix-background\" style=\"background-image:url(&#x27;images/onepage-personal-img2.jpg&#x27;);\">
  <div class=\"overlay-gray\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-5 col-sm-10 text-center center-col\">
        <p class=\"title-small black-text\">Awards can give you a tremendous amount of encouragement to keep getting better, no matter how young or old you are.</p>
      </div>
    </div>
    <div class=\"row margin-five no-margin-bottom\">
      <div class=\"col-md-10 col-sm-12 text-center center-col\">
        <!-- awards item -->
        <div class=\"col-md-4 col-sm-4 xs-margin-bottom-ten\">
          <div class=\"award-box clearfix\">
            <div class=\"col-md-4 col-sm-12\">
              <i class=\"icon-trophy black-text\"></i>
            </div>
            <div class=\"col-md-8 col-sm-12 text-left text-uppercase black-text letter-spacing-1 sm-text-center sm-margin-top-five\">International Design Awards</div>
          </div>
        </div>
        <!-- end awards item -->
        <!-- awards item -->
        <div class=\"col-md-4 col-sm-4 xs-margin-bottom-ten\">
          <div class=\"award-box clearfix\">
            <div class=\"col-md-4 col-sm-12\">
              <i class=\"icon-circle-compass black-text\"></i>
            </div>
            <div class=\"col-md-8 col-sm-12 text-left text-uppercase black-text letter-spacing-1 sm-text-center sm-margin-top-five\">Asian Design Fest 2014</div>
          </div>
        </div>
        <!-- end awards item -->
        <!-- awards item -->
        <div class=\"col-md-4 col-sm-4\">
          <div class=\"award-box clearfix\">
            <div class=\"col-md-4 col-sm-12\">
              <i class=\"icon-camera black-text\"></i>
            </div>
            <div class=\"col-md-8 col-sm-12 text-left text-uppercase black-text letter-spacing-1 sm-text-center sm-margin-top-five\">European Design Awards</div>
          </div>
        </div>
        <!-- end awards item -->
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/region/region--education.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"education\" class=\"xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row margin-ten no-margin-top\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">03</span><h3 class=\"section-title no-padding\">Education</h3>
      </div>
      <!-- end section title -->
    </div>
    <div class=\"row\">
      <div id=\"owl-demo-small\" class=\"col-md-12 owl-carousel owl-theme dark-pagination owl-no-pagination dark-pagination-without-next-prev-arrow position-relative no-padding\">
        <div class=\"item\">
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 sm-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-laptop black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2012  - 2014</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Bachelor of Arts</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 sm-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-video black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2010  - 2012</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Visual Art & Design</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 xs-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-camera black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2008  - 2010</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Degree of Web Design</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-picture black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2008  - 2006</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Visual Art & Graphics</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
        </div>
        <div class=\"item\">
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 sm-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-laptop black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2012  - 2014</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Bachelor of Arts</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 sm-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-video black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2010  - 2012</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Visual Art & Design</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6 xs-margin-bottom-ten\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-camera black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2008  - 2010</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Degree of Web Design</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
          <!-- education item -->
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"education-box-main text-center\">
              <div class=\"education-box\">
                <i class=\"icon-picture black-text\"></i>
                <span class=\"year text-large gray-text display-block margin-five\">2008  - 2006</span>
                <span class=\"university text-uppercase display-block black-text letter-spacing-2 font-weight-600\">Boston State University</span>
                <div class=\"separator-line bg-black margin-ten\"></div>
              </div>
              <div class=\"namerol\"><span class=\"text-uppercase display-block black-text letter-spacing-2 margin-five no-margin-top\">Visual Art & Graphics</span>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                <span class=\"result text-uppercase white-text font-weight-600 letter-spacing-1\">Grade A++</span>
              </div>
            </div>
          </div>
          <!-- end education item -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class=\"fix-background\" style=\"background-image:url(&#x27;images/onepage-personal-img2.jpg&#x27;);\">
  <div class=\"overlay-gray\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-5 col-sm-10 text-center center-col\">
        <p class=\"title-small black-text\">Awards can give you a tremendous amount of encouragement to keep getting better, no matter how young or old you are.</p>
      </div>
    </div>
    <div class=\"row margin-five no-margin-bottom\">
      <div class=\"col-md-10 col-sm-12 text-center center-col\">
        <!-- awards item -->
        <div class=\"col-md-4 col-sm-4 xs-margin-bottom-ten\">
          <div class=\"award-box clearfix\">
            <div class=\"col-md-4 col-sm-12\">
              <i class=\"icon-trophy black-text\"></i>
            </div>
            <div class=\"col-md-8 col-sm-12 text-left text-uppercase black-text letter-spacing-1 sm-text-center sm-margin-top-five\">International Design Awards</div>
          </div>
        </div>
        <!-- end awards item -->
        <!-- awards item -->
        <div class=\"col-md-4 col-sm-4 xs-margin-bottom-ten\">
          <div class=\"award-box clearfix\">
            <div class=\"col-md-4 col-sm-12\">
              <i class=\"icon-circle-compass black-text\"></i>
            </div>
            <div class=\"col-md-8 col-sm-12 text-left text-uppercase black-text letter-spacing-1 sm-text-center sm-margin-top-five\">Asian Design Fest 2014</div>
          </div>
        </div>
        <!-- end awards item -->
        <!-- awards item -->
        <div class=\"col-md-4 col-sm-4\">
          <div class=\"award-box clearfix\">
            <div class=\"col-md-4 col-sm-12\">
              <i class=\"icon-camera black-text\"></i>
            </div>
            <div class=\"col-md-8 col-sm-12 text-left text-uppercase black-text letter-spacing-1 sm-text-center sm-margin-top-five\">European Design Awards</div>
          </div>
        </div>
        <!-- end awards item -->
      </div>
    </div>
  </div>
</section>
", "themes/custom/portfolio/templates/region/region--education.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/region/region--education.html.twig");
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
