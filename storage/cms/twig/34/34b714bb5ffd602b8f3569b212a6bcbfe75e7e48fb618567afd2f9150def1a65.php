<?php

/* C:\wamp64\www\themuslimguide/themes/mslguige/layouts/quran_page.htm */
class __TwigTemplate_3fc87b1048b2423d9660c6547f678b7e33ba82a0ce47adb40aada194e610071e extends Twig_Template
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
    
     ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("quran_css"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "     

  </head>
  <body>
<header id=\"header\">
\t";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("coran_navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "</header>
    <!-- Header End -->
  ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("quran_page_banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "
 <section id=\"page\" class=\"\">
    ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 21
        echo "  </section>

";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer_quran"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\themuslimguide/themes/mslguige/layouts/quran_page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  65 => 23,  61 => 21,  59 => 20,  55 => 18,  51 => 17,  47 => 15,  43 => 14,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    
     {% partial 'quran_css' %}
     

  </head>
  <body>
<header id=\"header\">
\t{% partial 'coran_navbar' %}
</header>
    <!-- Header End -->
  {% partial 'quran_page_banner' %}

 <section id=\"page\" class=\"\">
    {% page %}
  </section>

{% partial 'footer_quran' %}

</body>
</html>", "C:\\wamp64\\www\\themuslimguide/themes/mslguige/layouts/quran_page.htm", "");
    }
}
