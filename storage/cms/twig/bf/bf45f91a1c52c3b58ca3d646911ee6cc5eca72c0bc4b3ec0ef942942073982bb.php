<?php

/* C:\wamp64\www\install-master/themes/hambern-hambern-blank-bootstrap-4/partials/home_navbar.htm */
class __TwigTemplate_66860825688d5c0984b16edc9167248f9e8336c96d65206f4dc5f9d8797ee9cf extends Twig_Template
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
            <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" /></a>
          </div>
          <div class=\"collapse navbar-collapse\" id=\"main-navbar\">
            <ul class=\"navbar-nav mr-auto w-100 justify-content-end\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/\">
                  ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Home"));
        echo "
                </a>
              </li>
               <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"coran\">
                  ";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Coran"));
        echo "
                </a>
              </li>
               <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">
                  ";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Daawa"));
        echo "
                </a>
              </li>
               <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">
                  ";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Carriere"));
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
            <form role=\"search\" class=\"navbar-form\">
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
          </div>
          <form class=\"navbar-form\">
          <div style=\"display:none\">";
        // line 58
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>
          </form>
        </div>
        <!-- Mobile Menu Start -->
        <ul class=\"wpb-mobile-menu\">
          <li>
            <a class=\"active\" href=\"index.html\">
            ";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Home"));
        echo "
            </a>
          </li>
          <li>
            <a class=\"active\" href=\"index.html\">
            ";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Coran"));
        echo "
            </a>
          </li>
          <li>
            <a class=\"active\" href=\"index.html\">
            ";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Daawa"));
        echo "
            </a>
          </li>
          <li>
            <a class=\"active\" href=\"index.html\">
            ";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Carriere"));
        echo "
            </a>
          </li>
         
        </ul>
        <!-- Mobile Menu End -->
      </nav>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/partials/home_navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 80,  125 => 75,  117 => 70,  109 => 65,  97 => 58,  70 => 34,  62 => 29,  54 => 24,  46 => 19,  37 => 13,  23 => 1,);
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
            <a class=\"navbar-brand\" href=\"index.html\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" /></a>
          </div>
          <div class=\"collapse navbar-collapse\" id=\"main-navbar\">
            <ul class=\"navbar-nav mr-auto w-100 justify-content-end\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/\">
                  {{'Home'|_}}
                </a>
              </li>
               <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"coran\">
                  {{'Coran'|_}}
                </a>
              </li>
               <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">
                  {{'Daawa'|_}}
                </a>
              </li>
               <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">
                  {{'Carriere'|_}}
                </a>
              </li>
             
            </ul>
            <!-- Search Box Start -->
            <div class=\"search-icon\">
              <span class=\"open-search\">
                <i class=\"mdi mdi-magnify btn btn-common\"></i>
              </span>
            </div>
            <form role=\"search\" class=\"navbar-form\">
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
          </div>
          <form class=\"navbar-form\">
          <div style=\"display:none\">{% component 'localePicker' %}</div>
          </form>
        </div>
        <!-- Mobile Menu Start -->
        <ul class=\"wpb-mobile-menu\">
          <li>
            <a class=\"active\" href=\"index.html\">
            {{'Home'|_}}
            </a>
          </li>
          <li>
            <a class=\"active\" href=\"index.html\">
            {{'Coran'|_}}
            </a>
          </li>
          <li>
            <a class=\"active\" href=\"index.html\">
            {{'Daawa'|_}}
            </a>
          </li>
          <li>
            <a class=\"active\" href=\"index.html\">
            {{'Carriere'|_}}
            </a>
          </li>
         
        </ul>
        <!-- Mobile Menu End -->
      </nav>", "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/partials/home_navbar.htm", "");
    }
}
