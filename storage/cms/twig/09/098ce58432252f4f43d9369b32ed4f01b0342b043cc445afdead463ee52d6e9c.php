<?php

/* C:\wamp64\www\install-master/themes/hambern-hambern-blank-bootstrap-4/layouts/coran_home.htm */
class __TwigTemplate_f5b83854bc36936b9658eee8bd554af105c97201ae58f48ac1eebec2896770ec extends Twig_Template
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
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["activeLocale"] ?? null), "html", null, true);
        echo "\">
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("quran_home_banner"        , $context['__cms_partial_params']        , true        );
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
        return "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/layouts/coran_home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  67 => 22,  63 => 20,  61 => 19,  57 => 17,  53 => 16,  49 => 14,  45 => 13,  39 => 9,  35 => 8,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ activeLocale }}\">
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
  {% partial 'quran_home_banner' %}

 <section id=\"page\" class=\"\">
    {% page %}
  </section>

{% partial 'footer_quran' %}

</body>
</html>", "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/layouts/coran_home.htm", "");
    }
}
