<?php

/* C:\wamp64\www\themuslimguide/themes/mslguige/layouts/default.htm */
class __TwigTemplate_e5876b02fc8e7a8bfeb8a1ff8d1aa46517a04ed3ca98d40b54e482e3a3284579 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    
     <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/materialdesignicons.min.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/material.min.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/ripples.min.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slicknav.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\" rel=\"stylesheet\">


    ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "
  </head>
  <body>
<header id=\"header\">
";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("carousel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "\t
</header>
    <!-- Header End -->
  
  

  <section id=\"page\" class=\"container m-b-3\">
    ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 35
        echo "  </section>
  
      <!--Footer-->
    <footer class=\"page-footer center-on-small-only  pt-0 footer-widget-container\">
      <!--Footer Links-->
      <div class=\"container pt-5 mb-5\">
        <div class=\"row\">
          <!--First column-->
          <div class=\"col-md-6 col-lg-3 col-xl-3 footer-contact-widget\">
              <h3 class=\"footer-title\">About</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates eos minus expedita ipsum soluta voluptatem sed architecto.</p>
              <ul>
                <li>
                  <a href=\"#\"><i class=\"mdi mdi-facebook\"></i></a>
                </li>
                <li>
                  <a href=\"#\"><i class=\"mdi mdi-twitter\"></i></a>
                </li>
                <li>
                  <a href=\"#\"><i class=\"mdi mdi-dribbble\"></i></a>
                </li>
                <li>
                  <a href=\"#\"><i class=\"mdi mdi-github-circle\"></i></a>
                </li>
                <li>
                  <a href=\"#\"><i class=\"mdi mdi-linkedin\"></i></a>
                 </li>
              </ul>
          </div>
          <!--/.First column-->

          <!--Second column-->
          <div class=\"col-md-6 col-lg-3 col-xl-3 recent-widget\">
            <h3 class=\"footer-title\">Recent Posts</h3>
            <p><a href=\"#\" class=\"dark-grey-text\">Growth Hacking 101</a></p>
            <p><a href=\"#\" class=\"dark-grey-text\">30 UX Tips and Tricks</a></p>
            <p><a href=\"#\" class=\"dark-grey-text\">How to Scale Your Business</a></p>
            <p><a href=\"#\" class=\"dark-grey-text\">Getting Started with Sketch</a></p>
            <p><a href=\"#\" class=\"dark-grey-text\"></a>10 Tips to Validate Your Idea</p>
            <p><a href=\"#\" class=\"dark-grey-text\">SEO Guideline for Designers</a></p>
          </div>
          <!--/.Second column-->

          <!--Third column-->
          <div class=\"col-md-6 col-lg-3 col-xl-3 link-widget\">
            <h3 class=\"footer-title\">Quick link</h3>
            <ul>
              <li><a href=\"about.html\">About Us</a></li>
              <li><a href=\"#\">Brands</a></li>
              <li><a href=\"portfolio-index.html\">Portfolio</a></li>
              <li><a href=\"#\">Support</a></li>
              <li><a href=\"contact.html\">Contact Us</a></li>
              <li><a href=\"#\">Site Map</a></li>
              <li><a href=\"#\">Privacy Policy</a></li>
              <li><a href=\"#\">Terms of Service</a></li>
            </ul>
          </div>
          <!--/.Third column-->

          <!--Fourth column-->
          <div class=\"col-md-6 col-lg-3 col-xl-3 footer-contact\">
              <h3 class=\"footer-title\">Our Gallery</h3>
              <div class=\"widget widget-gallery\">
                <ul class=\"magnific-gallery\">
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum1.jpg\" alt=\"instagram image\"></a></li>
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum2.jpg\" alt=\"instagram image\"></a></li>
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum3.jpg\" alt=\"instagram image\"></a></li>
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum4.jpg\" alt=\"instagram image\"></a></li>
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum5.jpg\" alt=\"instagram image\"></a></li>
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum6.jpg\" alt=\"instagram image\"></a></li>
                </ul>
              </div>
          </div>
          <!--/.Fourth column-->

        </div>
      </div>
      <!--/.Footer Links-->

      <!-- Copyright-->
      <div class=\"footer-copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <p>&copy; 2018 Material Studio, All right reserved. Designed with <i class=\"mdi mdi-heart\"></i> by <a href=\"#\">UIdeck</a></p>
                </div>
            </div>
          </div>
      </div>
      <!--/.Copyright -->

    </footer>
    <!--/.Footer-->


    <!-- Back To Top -->
    <a href=\"#\" class=\"back-to-top\">
      <div class=\"ripple-container\"></div>
      <i class=\"mdi mdi-arrow-up\">
      </i>
    </a>

    <!-- Preloader -->
    <div id=\"preloader\">
      <div class=\"loader\" id=\"loader-1\"></div>
    </div>
    
    

    <script src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/js/wow.js", 2 => "assets/js/popper.min.js", 3 => "assets/js/bootstrap.min.js", 4 => "assets/js/jquery.mixitup.min.js", 5 => "assets/js/jquery.inview.js", 6 => "assets/js/jquery.counterup.min.js", 7 => "assets/js/scroll-top.js", 8 => "assets/js/smoothscroll.js", 9 => "assets/js/material.min.js", 10 => "assets/js/ripples.min.js", 11 => "assets/js/owl.carousel.min.js", 12 => "assets/js/form-validator.min.js", 13 => "assets/js/contact-form-script.min.js", 14 => "assets/js/jquery.vide.js", 15 => "assets/js/jquery.magnific-popup.min.js", 16 => "assets/js/jquery.slicknav.js", 17 => "assets/js/main.js"));
        // line 165
        echo "\"></script>
    
    ";
        // line 167
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 168
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 169
        echo "    
    
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\themuslimguide/themes/mslguige/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 169,  235 => 168,  220 => 167,  216 => 165,  214 => 144,  103 => 35,  101 => 34,  92 => 27,  87 => 26,  83 => 25,  77 => 21,  74 => 20,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    
     <link href=\"{{ 'assets/css/bootstrap.min.css' |theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/css/materialdesignicons.min.css' |theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/css/material.min.css' |theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/css/ripples.min.css' |theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/css/owl.carousel.css' |theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/css/magnific-popup.css' |theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/css/slicknav.css' |theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/css/animate.css' |theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/css/style.css' |theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/css/responsive.css' |theme }}\" rel=\"stylesheet\">


    {% styles %}

  </head>
  <body>
<header id=\"header\">
{% component 'carousel' %}
\t{% partial 'home_navbar' %}
\t
</header>
    <!-- Header End -->
  
  

  <section id=\"page\" class=\"container m-b-3\">
    {% page %}
  </section>
  
      <!--Footer-->
    <footer class=\"page-footer center-on-small-only  pt-0 footer-widget-container\">
      <!--Footer Links-->
      <div class=\"container pt-5 mb-5\">
        <div class=\"row\">
          <!--First column-->
          <div class=\"col-md-6 col-lg-3 col-xl-3 footer-contact-widget\">
              <h3 class=\"footer-title\">About</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates eos minus expedita ipsum soluta voluptatem sed architecto.</p>
              <ul>
                <li>
                  <a href=\"#\"><i class=\"mdi mdi-facebook\"></i></a>
                </li>
                <li>
                  <a href=\"#\"><i class=\"mdi mdi-twitter\"></i></a>
                </li>
                <li>
                  <a href=\"#\"><i class=\"mdi mdi-dribbble\"></i></a>
                </li>
                <li>
                  <a href=\"#\"><i class=\"mdi mdi-github-circle\"></i></a>
                </li>
                <li>
                  <a href=\"#\"><i class=\"mdi mdi-linkedin\"></i></a>
                 </li>
              </ul>
          </div>
          <!--/.First column-->

          <!--Second column-->
          <div class=\"col-md-6 col-lg-3 col-xl-3 recent-widget\">
            <h3 class=\"footer-title\">Recent Posts</h3>
            <p><a href=\"#\" class=\"dark-grey-text\">Growth Hacking 101</a></p>
            <p><a href=\"#\" class=\"dark-grey-text\">30 UX Tips and Tricks</a></p>
            <p><a href=\"#\" class=\"dark-grey-text\">How to Scale Your Business</a></p>
            <p><a href=\"#\" class=\"dark-grey-text\">Getting Started with Sketch</a></p>
            <p><a href=\"#\" class=\"dark-grey-text\"></a>10 Tips to Validate Your Idea</p>
            <p><a href=\"#\" class=\"dark-grey-text\">SEO Guideline for Designers</a></p>
          </div>
          <!--/.Second column-->

          <!--Third column-->
          <div class=\"col-md-6 col-lg-3 col-xl-3 link-widget\">
            <h3 class=\"footer-title\">Quick link</h3>
            <ul>
              <li><a href=\"about.html\">About Us</a></li>
              <li><a href=\"#\">Brands</a></li>
              <li><a href=\"portfolio-index.html\">Portfolio</a></li>
              <li><a href=\"#\">Support</a></li>
              <li><a href=\"contact.html\">Contact Us</a></li>
              <li><a href=\"#\">Site Map</a></li>
              <li><a href=\"#\">Privacy Policy</a></li>
              <li><a href=\"#\">Terms of Service</a></li>
            </ul>
          </div>
          <!--/.Third column-->

          <!--Fourth column-->
          <div class=\"col-md-6 col-lg-3 col-xl-3 footer-contact\">
              <h3 class=\"footer-title\">Our Gallery</h3>
              <div class=\"widget widget-gallery\">
                <ul class=\"magnific-gallery\">
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum1.jpg\" alt=\"instagram image\"></a></li>
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum2.jpg\" alt=\"instagram image\"></a></li>
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum3.jpg\" alt=\"instagram image\"></a></li>
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum4.jpg\" alt=\"instagram image\"></a></li>
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum5.jpg\" alt=\"instagram image\"></a></li>
                  <li><a href=\"#\"><img src=\"assets/images/gallery/thum6.jpg\" alt=\"instagram image\"></a></li>
                </ul>
              </div>
          </div>
          <!--/.Fourth column-->

        </div>
      </div>
      <!--/.Footer Links-->

      <!-- Copyright-->
      <div class=\"footer-copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <p>&copy; 2018 Material Studio, All right reserved. Designed with <i class=\"mdi mdi-heart\"></i> by <a href=\"#\">UIdeck</a></p>
                </div>
            </div>
          </div>
      </div>
      <!--/.Copyright -->

    </footer>
    <!--/.Footer-->


    <!-- Back To Top -->
    <a href=\"#\" class=\"back-to-top\">
      <div class=\"ripple-container\"></div>
      <i class=\"mdi mdi-arrow-up\">
      </i>
    </a>

    <!-- Preloader -->
    <div id=\"preloader\">
      <div class=\"loader\" id=\"loader-1\"></div>
    </div>
    
    

    <script src=\"{{ [
        'assets/vendor/jquery/dist/jquery.min.js',
        
        'assets/js/wow.js',
        'assets/js/popper.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/jquery.mixitup.min.js',
        'assets/js/jquery.inview.js',
        'assets/js/jquery.counterup.min.js',
        'assets/js/scroll-top.js',
        'assets/js/smoothscroll.js',
        'assets/js/material.min.js',
        'assets/js/ripples.min.js',
        'assets/js/owl.carousel.min.js',
        'assets/js/form-validator.min.js',
        'assets/js/contact-form-script.min.js',
        
        'assets/js/jquery.vide.js',
        'assets/js/jquery.magnific-popup.min.js',
        'assets/js/jquery.slicknav.js',
        'assets/js/main.js'
    ]|theme }}\"></script>
    
    {% framework extras %}
    {% scripts %}
    
    
  </body>
</html>", "C:\\wamp64\\www\\themuslimguide/themes/mslguige/layouts/default.htm", "");
    }
}
