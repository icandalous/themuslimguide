<?php

/* C:\wamp64\www\install-master/plugins/mohsin/carousel/components/carousel/default.htm */
class __TwigTemplate_27f523d8f878879f332515fb8c647ec9e2f19e9e7c6eb3c02bcf8ac634fdf0c3 extends Twig_Template
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
        echo "<div id=\"carousel-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
  ";
        // line 2
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", array()), "images", array())) > 1)) {
            // line 3
            echo "  <ol class=\"carousel-indicators\">
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", array()), "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 5
                echo "    <li data-target=\"#carousel-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", array()), "html", null, true);
                echo "\" data-slide-to=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) - 1), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo "></li>
  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </ol>
  ";
        }
        // line 9
        echo "
  ";
        // line 10
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", array()), "images", array())) > 0)) {
            // line 11
            echo "  <div class=\"carousel-inner\" role=\"listbox\">
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", array()), "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 13
                echo "    <div class=\"carousel-item";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                    echo " active";
                }
                echo "\">
      <img class=\"d-block w-100\" src=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
                echo "\">

      ";
                // line 17
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["image"], "title", array()) || twig_get_attribute($this->env, $this->source, $context["image"], "description", array()))) {
                    // line 18
                    echo "      <div class=\"carousel-caption d-none d-md-block\">

        ";
                    // line 20
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "title", array())) {
                        echo "<h5>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
                        echo "</h5>";
                    }
                    // line 21
                    echo "
        ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "description", array())) {
                        echo "<p>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", array()), "html", null, true);
                        echo "</p>";
                    }
                    // line 23
                    echo "
      </div>
      ";
                }
                // line 26
                echo "
    </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  </div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", array()), "images", array())) > 1)) {
            // line 33
            echo "    <a class=\"carousel-control-prev\" href=\"#carousel-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", array()), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel-";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", array()), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  ";
        }
        // line 42
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/plugins/mohsin/carousel/components/carousel/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 42,  176 => 37,  168 => 33,  166 => 32,  163 => 31,  159 => 29,  143 => 26,  138 => 23,  132 => 22,  129 => 21,  123 => 20,  119 => 18,  116 => 17,  109 => 14,  102 => 13,  85 => 12,  82 => 11,  80 => 10,  77 => 9,  73 => 7,  50 => 5,  33 => 4,  30 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"carousel-{{ __SELF__.id }}\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
  {% if __SELF__.carousel.images|length > 1 %}
  <ol class=\"carousel-indicators\">
  {% for i, image in __SELF__.carousel.images %}
    <li data-target=\"#carousel-{{ __SELF__.id }}\" data-slide-to=\"{{ loop.index - 1 }}\"{% if loop.first %} class=\"active\"{% endif %}></li>
  {% endfor %}
  </ol>
  {% endif %}

  {% if __SELF__.carousel.images|length > 0 %}
  <div class=\"carousel-inner\" role=\"listbox\">
    {% for i, image in __SELF__.carousel.images %}
    <div class=\"carousel-item{% if loop.first %} active{% endif %}\">
      <img class=\"d-block w-100\" src=\"{{ image.path }}\" alt=\"{{ image.title }}\">

      {# Show caption only if there is image title or description #}
      {% if image.title or image.description %}
      <div class=\"carousel-caption d-none d-md-block\">

        {% if image.title %}<h5>{{ image.title }}</h5>{% endif %}

        {% if image.description %}<p>{{ image.description }}</p>{% endif %}

      </div>
      {% endif %}

    </div>
    {% endfor %}
  </div>
  {% endif %}

  {% if __SELF__.carousel.images|length > 1 %}
    <a class=\"carousel-control-prev\" href=\"#carousel-{{ __SELF__.id }}\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel-{{ __SELF__.id }}\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  {% endif %}
</div>
", "C:\\wamp64\\www\\install-master/plugins/mohsin/carousel/components/carousel/default.htm", "");
    }
}
