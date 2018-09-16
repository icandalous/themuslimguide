<?php

/* C:\wamp64\www\install-master/themes/hambern-hambern-blank-bootstrap-4/partials/quran_home_banner.htm */
class __TwigTemplate_9014dd3c22ffa3c82770ef8b2c91ad734d583d3303c85eec24e308f30be0cfd6 extends Twig_Template
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
    <section class=\"coran-banner-section\">
      <div class=\"\">
        <div class=\"row\">
          
          <div class=\"col-md-6 col-lg-6 col-xs-12\" >
          </div>
          <div class=\"col-md-6 col-lg-6 col-xs-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
          <h1> </h1><br>
              <h1>« ";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Celui qui récite le coran parfaitement est avec les généreux anges et celui qui le lit avec difficulté a deux récompenses"));
        echo " ».</h1>
              <small class=\"reference\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Rapporté par Boukhari dans son Sahih n°4937 et Mouslim dans son Sahih n°798"));
        echo "</small>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to action Section End -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/partials/quran_home_banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Call to action Section -->
    <section class=\"coran-banner-section\">
      <div class=\"\">
        <div class=\"row\">
          
          <div class=\"col-md-6 col-lg-6 col-xs-12\" >
          </div>
          <div class=\"col-md-6 col-lg-6 col-xs-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
          <h1> </h1><br>
              <h1>« {{ 'Celui qui récite le coran parfaitement est avec les généreux anges et celui qui le lit avec difficulté a deux récompenses' |_}} ».</h1>
              <small class=\"reference\">{{ 'Rapporté par Boukhari dans son Sahih n°4937 et Mouslim dans son Sahih n°798' |_}}</small>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to action Section End -->", "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/partials/quran_home_banner.htm", "");
    }
}
