<?php

/* C:\wamp64\www\themuslimguide/themes/mslguige/layouts/coran_home.htm */
class __TwigTemplate_aac7707633b14774896aa784a019b6a08f51c8e7350872281f75b1d7c3ae1e11 extends Twig_Template
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
     <script type=\"text/javascript\">
var coursApiUrl = \"";
        // line 11
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = call_user_func_array($this->env->getFunction('config')->getCallable(), array("app.cours_api_url"))) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "environment", array())] ?? null) : null), "html", null, true);
        echo "\";
</script>

  </head>
  <body>
<header id=\"header\">
\t";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("coran_navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "</header>
    <!-- Header End -->
  ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("quran_home_banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "
 <section id=\"page\" class=\"\">
    ";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 24
        echo "  </section>

";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer_quran"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\themuslimguide/themes/mslguige/layouts/coran_home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  74 => 26,  70 => 24,  68 => 23,  64 => 21,  60 => 20,  56 => 18,  52 => 17,  43 => 11,  39 => 9,  35 => 8,  26 => 2,  23 => 1,);
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
     
     <script type=\"text/javascript\">
var coursApiUrl = \"{{ config('app.cours_api_url')[this.environment] }}\";
</script>

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
</html>", "C:\\wamp64\\www\\themuslimguide/themes/mslguige/layouts/coran_home.htm", "");
    }
}
