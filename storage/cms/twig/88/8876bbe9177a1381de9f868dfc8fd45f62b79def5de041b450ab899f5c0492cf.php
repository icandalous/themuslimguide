<?php

/* C:\wamp64\www\install-master/themes/hambern-hambern-blank-bootstrap-4/layouts/quran_page.htm */
class __TwigTemplate_54401e25d1bdff987cc4d9bfb9af3b9fb52af379c114f7345c1e9faee333e918 extends Twig_Template
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
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("coran_navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "</header>
    <!-- Header End -->
  ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("quran_page_banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "
 <section id=\"page\" class=\"\">
    ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 20
        echo "  </section>

";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer_quran"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/layouts/quran_page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  64 => 22,  60 => 20,  58 => 19,  54 => 17,  50 => 16,  46 => 14,  42 => 13,  36 => 9,  32 => 8,  23 => 1,);
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
</html>", "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/layouts/quran_page.htm", "");
    }
}
