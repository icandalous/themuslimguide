<?php

/* C:\wamp64\www\themuslimguide/themes/mslguige/partials/coran_navbar.htm */
class __TwigTemplate_0efaca04dcf135756e5bc2fb31b237247ef286ab84790249e3892eee17b23426 extends Twig_Template
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
        echo "<!-- Header Start -->
    
      <nav class=\"navbar navbar-expand-lg fixed-top scrolling-navbar nav-bg\">
        <div class=\"container\">
         <!-- Brand and toggle get grouped for better mobile display -->
          <div class=\"navbar-header\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-navbar\" aria-controls=\"main-navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"mdi mdi-menu\"></span>
              <span class=\"mdi mdi-menu\"></span>
              <span class=\"mdi mdi-menu\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" /></a>
          </div>
          <div class=\"collapse navbar-collapse\" id=\"main-navbar\">
            <ul class=\"navbar-nav mr-auto w-100 justify-content-end\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 18
        echo url("coran");
        echo "\">
                  ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Home"));
        echo "
                </a>
              </li>
               <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  ";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cours"));
        echo "
                </a>
              </li>
               <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  ";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tajweed"));
        echo "
                </a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  ";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Articles"));
        echo "
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"dropdown-item\"><a href=\"#\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Explications et méditations"));
        echo "</a></li>
                  <li class=\"dropdown-item\"><a href=\"#\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Miracles dans le coran"));
        echo "</a></li>
                  <li class=\"dropdown-item\"><a href=\"#\">";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Les disciplines des récitateurs de Coran"));
        echo "</a></li>
                  <li class=\"dropdown-item\"><a href=\"#\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Les expériences de mémorisation"));
        echo "</a></li>
                </ul>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  ";
        // line 45
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mémorisation"));
        echo "
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"";
        // line 48
        echo url("coran/strategie-de-memorisation");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Stratégies de mémorisation"));
        echo "</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 49
        echo url("coran/mutashab");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Les versets similaires"));
        echo "</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Apps utiles pour mémorisation"));
        echo "</a></li>
                </ul>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 54
        echo url("/coran/miracles-dans-le-coran");
        echo "\">
                  ";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Miracles dans le coran"));
        echo "
                </a>
              </li>
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/coran\">
                  ";
        // line 60
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Contact"));
        echo "
                </a>
              </li>
            </ul>
            
            <!-- Search Box Start -->
            <div class=\"search-icon\">
              <span class=\"open-search\">
                <i class=\"mdi mdi-magnify btn btn-common\"></i>
              </span>
            </div>
            <form role=\"search\" class=\"navbar-form navbar-search\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"form-group has-feedback\">
                    <input type=\"text\" placeholder=\"Type and search ...\" class=\"form-control\">
                    <div class=\"close\"><i class=\"mdi mdi-close\"></i></div>
                  </div>
                </div>
              </div>
            </form>
            <!-- Search Box End -->
            
            <form class=\"form-language\">
              ";
        // line 84
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 85
        echo "              </form>
          
          </div>
          
        </div>
        <!-- Mobile Menu Start -->
        <ul class=\"wpb-mobile-menu\">
          <li>
            <a class=\"active\" href=\"/\">
            ";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Home"));
        echo "
            </a>
          </li>
          <li>
            <a class=\"active\" href=\"index.html\">
            ";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cours"));
        echo "
            </a>
          </li>
          <li>
            <a class=\"active\" href=\"index.html\">
            ";
        // line 104
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tajweed"));
        echo "
            </a>
          </li>
          <li>
            <a href=\"#\">
            ";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Articles"));
        echo "
            </a>
            <ul class=\"dropdown\">
              <li class=\"dropdown-item\"><a href=\"about-us2.html\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Explications et méditations"));
        echo "</a></li>
                  <li><a href=\"#\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Miracles dans le coran"));
        echo "</a></li>
                  <li><a href=\"#\">";
        // line 114
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Les disciplines des récitateurs de Coran"));
        echo "</a></li>
                  <li><a href=\"#\">";
        // line 115
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Les expériences de mémorisation"));
        echo "</a></li>
            </ul>
          </li>
          <li>
            <a href=\"#\">
            ";
        // line 120
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mémorisation"));
        echo "
            </a>
            <ul class=\"dropdown\">
              <li class=\"dropdown-item\"><a href=\"#\">";
        // line 123
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("stratégies de mémorisation"));
        echo "</a></li>
                  <li><a href=\"";
        // line 124
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("coran/mutashab");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Les versets similaires"));
        echo "</a></li>
                  <li><a href=\"#\">";
        // line 125
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Les disciplines des récitateurs de Coran"));
        echo "</a></li>
                  <li><a href=\"#\">";
        // line 126
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Apps utiles pour mémorisation"));
        echo "</a></li>
            </ul>
          </li>
          
          
          <li>
            <a href=\"#\">
            ";
        // line 133
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Contact Us"));
        echo "
            </a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\themuslimguide/themes/mslguige/partials/coran_navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 133,  248 => 126,  244 => 125,  238 => 124,  234 => 123,  228 => 120,  220 => 115,  216 => 114,  212 => 113,  208 => 112,  202 => 109,  194 => 104,  186 => 99,  178 => 94,  167 => 85,  163 => 84,  136 => 60,  128 => 55,  124 => 54,  117 => 50,  111 => 49,  105 => 48,  99 => 45,  91 => 40,  87 => 39,  83 => 38,  79 => 37,  73 => 34,  65 => 29,  57 => 24,  49 => 19,  45 => 18,  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header Start -->
    
      <nav class=\"navbar navbar-expand-lg fixed-top scrolling-navbar nav-bg\">
        <div class=\"container\">
         <!-- Brand and toggle get grouped for better mobile display -->
          <div class=\"navbar-header\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-navbar\" aria-controls=\"main-navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"mdi mdi-menu\"></span>
              <span class=\"mdi mdi-menu\"></span>
              <span class=\"mdi mdi-menu\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" /></a>
          </div>
          <div class=\"collapse navbar-collapse\" id=\"main-navbar\">
            <ul class=\"navbar-nav mr-auto w-100 justify-content-end\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ url('coran') }}\">
                  {{ 'Home'|_}}
                </a>
              </li>
               <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  {{ 'Cours'|_}}
                </a>
              </li>
               <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  {{ 'Tajweed'|_}}
                </a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  {{ 'Articles'|_}}
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"dropdown-item\"><a href=\"#\">{{ 'Explications et méditations'|_}}</a></li>
                  <li class=\"dropdown-item\"><a href=\"#\">{{ 'Miracles dans le coran'|_}}</a></li>
                  <li class=\"dropdown-item\"><a href=\"#\">{{ 'Les disciplines des récitateurs de Coran'|_}}</a></li>
                  <li class=\"dropdown-item\"><a href=\"#\">{{ 'Les expériences de mémorisation'|_}}</a></li>
                </ul>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  {{ 'Mémorisation'|_}}
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"{{ url('coran/strategie-de-memorisation') }}\">{{ 'Stratégies de mémorisation'|_}}</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ url('coran/mutashab') }}\">{{ 'Les versets similaires'|_}}</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">{{ 'Apps utiles pour mémorisation'|_}}</a></li>
                </ul>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{url('/coran/miracles-dans-le-coran')}}\">
                  {{ 'Miracles dans le coran'|_}}
                </a>
              </li>
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/coran\">
                  {{ 'Contact'|_}}
                </a>
              </li>
            </ul>
            
            <!-- Search Box Start -->
            <div class=\"search-icon\">
              <span class=\"open-search\">
                <i class=\"mdi mdi-magnify btn btn-common\"></i>
              </span>
            </div>
            <form role=\"search\" class=\"navbar-form navbar-search\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"form-group has-feedback\">
                    <input type=\"text\" placeholder=\"Type and search ...\" class=\"form-control\">
                    <div class=\"close\"><i class=\"mdi mdi-close\"></i></div>
                  </div>
                </div>
              </div>
            </form>
            <!-- Search Box End -->
            
            <form class=\"form-language\">
              {% component 'localePicker' %}
              </form>
          
          </div>
          
        </div>
        <!-- Mobile Menu Start -->
        <ul class=\"wpb-mobile-menu\">
          <li>
            <a class=\"active\" href=\"/\">
            {{ 'Home'|_}}
            </a>
          </li>
          <li>
            <a class=\"active\" href=\"index.html\">
            {{ 'Cours'|_}}
            </a>
          </li>
          <li>
            <a class=\"active\" href=\"index.html\">
            {{ 'Tajweed'|_}}
            </a>
          </li>
          <li>
            <a href=\"#\">
            {{ 'Articles'|_}}
            </a>
            <ul class=\"dropdown\">
              <li class=\"dropdown-item\"><a href=\"about-us2.html\">{{ 'Explications et méditations'|_}}</a></li>
                  <li><a href=\"#\">{{ 'Miracles dans le coran'|_}}</a></li>
                  <li><a href=\"#\">{{ 'Les disciplines des récitateurs de Coran'|_}}</a></li>
                  <li><a href=\"#\">{{ 'Les expériences de mémorisation'|_}}</a></li>
            </ul>
          </li>
          <li>
            <a href=\"#\">
            {{ 'Mémorisation'|_}}
            </a>
            <ul class=\"dropdown\">
              <li class=\"dropdown-item\"><a href=\"#\">{{ 'stratégies de mémorisation'|_}}</a></li>
                  <li><a href=\"{{ 'coran/mutashab'|page }}\">{{ 'Les versets similaires'|_}}</a></li>
                  <li><a href=\"#\">{{ 'Les disciplines des récitateurs de Coran'|_}}</a></li>
                  <li><a href=\"#\">{{ 'Apps utiles pour mémorisation'|_}}</a></li>
            </ul>
          </li>
          
          
          <li>
            <a href=\"#\">
            {{ 'Contact Us'|_}}
            </a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>", "C:\\wamp64\\www\\themuslimguide/themes/mslguige/partials/coran_navbar.htm", "");
    }
}
