<?php

/* C:\wamp64\www\themuslimguide/themes/mslguige/partials/quran_css.htm */
class __TwigTemplate_c0833c36023be6e0193b1bf3120620ade79a91f9276581ab44169e3843df70f3 extends Twig_Template
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
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/materialdesignicons.min.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/ripples.min.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slicknav.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/colors/yellow.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/component.css");
        echo "\" rel=\"stylesheet\">
<!--link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/demo.css");
        echo "\" rel=\"stylesheet\"-->


";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\themuslimguide/themes/mslguige/partials/quran_css.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  73 => 14,  69 => 13,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ 'assets/css/bootstrap.min.css' |theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/materialdesignicons.min.css' |theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/ripples.min.css' |theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/owl.carousel.css' |theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/magnific-popup.css' |theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/slicknav.css' |theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/animate.css' |theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/style.css' |theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/responsive.css' |theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/colors/yellow.css' |theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/main.css' |theme }}\" rel=\"stylesheet\">

<link href=\"{{ 'assets/css/component.css' |theme }}\" rel=\"stylesheet\">
<!--link href=\"{{ 'assets/css/demo.css' |theme }}\" rel=\"stylesheet\"-->


{% styles %}", "C:\\wamp64\\www\\themuslimguide/themes/mslguige/partials/quran_css.htm", "");
    }
}
