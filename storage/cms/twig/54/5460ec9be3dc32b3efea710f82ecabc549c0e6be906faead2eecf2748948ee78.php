<?php

/* C:\wamp64\www\themuslimguide/themes/mslguige/partials/quran_page_banner.htm */
class __TwigTemplate_acc39de9afd2901fbf656ce5aa596f083a3c883bb7bedddd8b6b0a866832649c extends Twig_Template
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
        echo "<!-- Call to action Section -->
    <section class=\"quran-page-banner-section\">
        <div class=\"row\">
          
          <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
      </div>
    </section>
    <!-- Call to action Section End -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\themuslimguide/themes/mslguige/partials/quran_page_banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Call to action Section -->
    <section class=\"quran-page-banner-section\">
        <div class=\"row\">
          
          <h1>{{this.page.title}}</h1>
      </div>
    </section>
    <!-- Call to action Section End -->", "C:\\wamp64\\www\\themuslimguide/themes/mslguige/partials/quran_page_banner.htm", "");
    }
}
