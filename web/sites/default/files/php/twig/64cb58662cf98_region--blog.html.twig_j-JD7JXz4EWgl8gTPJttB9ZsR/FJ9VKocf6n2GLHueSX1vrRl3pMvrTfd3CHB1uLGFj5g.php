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

/* themes/custom/portfolio/templates/region/region--blog.html.twig */
class __TwigTemplate_bdef725d168a435c993656a169edcfc3 extends Template
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
        echo "<section id=\"blog\" class=\"xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">05</span><h3 class=\"section-title no-padding\">Recent Blog</h3>
      </div>
      <!-- end section title -->
    </div>
    <div class=\"row margin-ten no-margin-bottom\">
      <!-- blog item -->
      <div class=\"col-md-4 col-sm-4 wow fadeInUp\">
        <div class=\"blog-post\">
          <div class=\"blog-post-images\"><a href=\"blog-grid-3columns.html\"><img src=\"images/portfolio-img51.jpg\" alt></a></div>
          <div class=\"post-details\">
            <a href=\"blog-grid-3columns.html\" class=\"post-title\">Standard post with picture</a>
            <span class=\"post-author\">Posted by Michael Freemon | 10 January 2015</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <!-- end blog item -->
      <!-- blog item -->
      <div class=\"col-md-4 col-sm-4 wow fadeInUp\">
        <div class=\"blog-post\">
          <div class=\"blog-post-images\"><a href=\"blog-masonry-3columns.html\"><img src=\"images/portfolio-img53.jpg\" alt></a></div>
          <div class=\"post-details\">
            <a href=\"blog-masonry-3columns.html\" class=\"post-title\">Post with featured picture</a>
            <span class=\"post-author\">Posted by Colin Powell | 02 January 2015</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <!-- end blog item -->
      <!-- blog item -->
      <div class=\"col-md-4 col-sm-4 wow fadeInUp\">
        <div class=\"blog-post\">
          <div class=\"blog-post-images\"><a href=\"blog-right-sidebar.html\"><img src=\"images/portfolio-img31.jpg\" alt></a></div>
          <div class=\"post-details\">
            <a href=\"blog-right-sidebar.html\" class=\"post-title\">Standard post with slider</a>
            <span class=\"post-author\">Posted by Vince Lombardi | 02 January 2015</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <!-- end blog item -->
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/region/region--blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"xs-onepage-section\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- section title -->
      <div class=\"col-md-12 text-center\">
        <span class=\"title-number\">05</span><h3 class=\"section-title no-padding\">Recent Blog</h3>
      </div>
      <!-- end section title -->
    </div>
    <div class=\"row margin-ten no-margin-bottom\">
      <!-- blog item -->
      <div class=\"col-md-4 col-sm-4 wow fadeInUp\">
        <div class=\"blog-post\">
          <div class=\"blog-post-images\"><a href=\"blog-grid-3columns.html\"><img src=\"images/portfolio-img51.jpg\" alt></a></div>
          <div class=\"post-details\">
            <a href=\"blog-grid-3columns.html\" class=\"post-title\">Standard post with picture</a>
            <span class=\"post-author\">Posted by Michael Freemon | 10 January 2015</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <!-- end blog item -->
      <!-- blog item -->
      <div class=\"col-md-4 col-sm-4 wow fadeInUp\">
        <div class=\"blog-post\">
          <div class=\"blog-post-images\"><a href=\"blog-masonry-3columns.html\"><img src=\"images/portfolio-img53.jpg\" alt></a></div>
          <div class=\"post-details\">
            <a href=\"blog-masonry-3columns.html\" class=\"post-title\">Post with featured picture</a>
            <span class=\"post-author\">Posted by Colin Powell | 02 January 2015</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <!-- end blog item -->
      <!-- blog item -->
      <div class=\"col-md-4 col-sm-4 wow fadeInUp\">
        <div class=\"blog-post\">
          <div class=\"blog-post-images\"><a href=\"blog-right-sidebar.html\"><img src=\"images/portfolio-img31.jpg\" alt></a></div>
          <div class=\"post-details\">
            <a href=\"blog-right-sidebar.html\" class=\"post-title\">Standard post with slider</a>
            <span class=\"post-author\">Posted by Vince Lombardi | 02 January 2015</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <!-- end blog item -->
    </div>
  </div>
</section>
", "themes/custom/portfolio/templates/region/region--blog.html.twig", "/Users/sailendrashakya/php/portfolio/web/themes/custom/portfolio/templates/region/region--blog.html.twig");
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
