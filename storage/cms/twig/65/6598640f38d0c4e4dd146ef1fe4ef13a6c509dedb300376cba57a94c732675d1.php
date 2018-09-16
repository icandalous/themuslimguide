<?php

/* C:\wamp64\www\install-master/themes/hambern-hambern-blank-bootstrap-4/pages/coran.htm */
class __TwigTemplate_fea28690f354f4fedb81f6a4df3f8f21c021619f3f895513556dfcb96d3b5721 extends Twig_Template
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
        echo "<section class=\"Material-about-section section-padding\">
<div class=\"container\">
<div class=\"row\">

<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".2s\">
<div class=\"about-single\">
<div class=\"vedette tajweed\"><img src=\"";
        // line 7
        echo $this->extensions['System\Twig\Extension']->mediaFilter("quran/tajweed-course.png");
        echo "\" height=\"170px\" width=\"170px\" style=\"border-radius: 50%;\"/></div>
<h2 class=\"subtitle\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tajweed"));
        echo "</h2>
<p>";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Découvrez comment lire et prononcer sans erreurs le livre d’Allah"));
        echo "</p>
</div>
</div>

<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".3s\">
<div class=\"about-single\">
<div class=\"vedette stategie-memo\"><img src=\"";
        // line 15
        echo $this->extensions['System\Twig\Extension']->mediaFilter("quran/coran_photo.jpg");
        echo "\" /></div>
<h2 class=\"subtitle\">";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Stratégie de mémorisation"));
        echo "</h2>
<p>";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Découvrez comment mémoriser facilement le coran"));
        echo "</p>
</div>
</div>

<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".4s\">
<div class=\"about-single\">
<div class=\"vedette versets-simi\"><img src=\"";
        // line 23
        echo $this->extensions['System\Twig\Extension']->mediaFilter("quran/Bismillah-Islamic-HD-Wallpaper.jpg");
        echo "\" /></div>
<h2 class=\"subtitle\">";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Les versets similaires"));
        echo "</h2>
<p>";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Visualiser et distinguer les différents versets semblables  pour faciliter la mémorisation"));
        echo "</p>
</div>
</div>

<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".5s\">
<div class=\"about-single\">
<div class=\"vedette halaqat\"><img src=\"";
        // line 31
        echo $this->extensions['System\Twig\Extension']->mediaFilter("quran/21.jpg");
        echo "\" /></div>
<h2 class=\"subtitle\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Halaqat quran"));
        echo "</h2>
<p>";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cours d’apprentissage et de mémorisation coranique"));
        echo "</p>
</div>
</div>
</div>
</div>
</section>


<section class=\"cours section-padding section-dark\">
<div class=\"container\">
<div class=\"row\">

<div class=\"col-md-12 animated wow fadeInLeft\" data-wow-delay=\".2s\">
<h1 class=\"section-title\">";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Cours"));
        echo "</h1>
</div>
</div>
<div class=\"row wow animated fadeInUp\" data-wow-delay=\".4s\">
<div id=\"team-carousel\" class=\"owl-carousel owl-theme\">


</div> <!-- div caroussel  -->
</div>
</div>
</section>

<section id=\"liste-articles\">
<div class=\"container\">
<h1 class=\"section-title\">";
        // line 60
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Articles"));
        echo "</h1>
<div class=\"row\">
<div class=\"\">
<div class=\"row\">
";
        // line 64
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", array());
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 66
            echo "<div class=\"col-md-4 no-padding\">
<article class=\"single-blog-post\">

<div class=\"featured-image\">
<a href=\"#\">
";
            // line 71
            if ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null)) {
                // line 72
                echo "   <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null), "path", array()), "html", null, true);
                echo "\" alt=\"\"> 
";
            } else {
                // line 74
                echo "    <img src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("quran/08.jpg");
                echo "\" alt=\"\">
";
            }
            // line 76
            echo "
</a>
</div>

<div class=\"post-meta\">
<div class=\"post-date\">
<span><b>Jan 25 2018</b></span>
</div>

<a href=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\"><h2 class=\"subtitle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</h2></a>
<div class=\"description\"><p>";
            // line 86
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["post"], "summary", array()), 150));
            echo "</p></div>
</div>
<div class=\"meta-tags\">
<span class=\"comments\"><a href=\"#\"><i class=\"mdi mdi-comment-outline\"></i> ";
            // line 89
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo " Comments</a></span>

<a class=\"btn btn-round btn-fab\" href=\"blog-single.html\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
</div>
</article>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "

";
        // line 98
        if (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()) > 1) && false)) {
            // line 99
            echo "    <ul class=\"pagination\">
        ";
            // line 100
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 101
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 103
            echo "
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 105
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 106
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "
        ";
            // line 110
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()))) {
                // line 111
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 113
            echo "    </ul>
";
        }
        // line 115
        echo "</div>
</div>
</div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/pages/coran.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 115,  244 => 113,  238 => 111,  236 => 110,  233 => 109,  222 => 106,  217 => 105,  213 => 104,  210 => 103,  204 => 101,  202 => 100,  199 => 99,  197 => 98,  193 => 96,  180 => 89,  174 => 86,  168 => 85,  157 => 76,  151 => 74,  145 => 72,  143 => 71,  136 => 66,  132 => 65,  130 => 64,  123 => 60,  106 => 46,  90 => 33,  86 => 32,  82 => 31,  73 => 25,  69 => 24,  65 => 23,  56 => 17,  52 => 16,  48 => 15,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"Material-about-section section-padding\">
<div class=\"container\">
<div class=\"row\">

<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".2s\">
<div class=\"about-single\">
<div class=\"vedette tajweed\"><img src=\"{{ 'quran/tajweed-course.png' |media}}\" height=\"170px\" width=\"170px\" style=\"border-radius: 50%;\"/></div>
<h2 class=\"subtitle\">{{ \"Tajweed\"|_}}</h2>
<p>{{ \"Découvrez comment lire et prononcer sans erreurs le livre d’Allah\" |_}}</p>
</div>
</div>

<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".3s\">
<div class=\"about-single\">
<div class=\"vedette stategie-memo\"><img src=\"{{ 'quran/coran_photo.jpg' |media}}\" /></div>
<h2 class=\"subtitle\">{{ \"Stratégie de mémorisation\"|_}}</h2>
<p>{{ \"Découvrez comment mémoriser facilement le coran\" |_}}</p>
</div>
</div>

<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".4s\">
<div class=\"about-single\">
<div class=\"vedette versets-simi\"><img src=\"{{ 'quran/Bismillah-Islamic-HD-Wallpaper.jpg' |media}}\" /></div>
<h2 class=\"subtitle\">{{ \"Les versets similaires\"|_}}</h2>
<p>{{ \"Visualiser et distinguer les différents versets semblables  pour faciliter la mémorisation\" |_}}</p>
</div>
</div>

<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".5s\">
<div class=\"about-single\">
<div class=\"vedette halaqat\"><img src=\"{{ 'quran/21.jpg' |media}}\" /></div>
<h2 class=\"subtitle\">{{ \"Halaqat quran\"|_}}</h2>
<p>{{ \"Cours d’apprentissage et de mémorisation coranique\" |_}}</p>
</div>
</div>
</div>
</div>
</section>


<section class=\"cours section-padding section-dark\">
<div class=\"container\">
<div class=\"row\">

<div class=\"col-md-12 animated wow fadeInLeft\" data-wow-delay=\".2s\">
<h1 class=\"section-title\">{{ \"Cours\"|_}}</h1>
</div>
</div>
<div class=\"row wow animated fadeInUp\" data-wow-delay=\".4s\">
<div id=\"team-carousel\" class=\"owl-carousel owl-theme\">


</div> <!-- div caroussel  -->
</div>
</div>
</section>

<section id=\"liste-articles\">
<div class=\"container\">
<h1 class=\"section-title\">{{ \"Articles\"|_}}</h1>
<div class=\"row\">
<div class=\"\">
<div class=\"row\">
{% set posts = blogPosts.posts %}
{% for post in posts %}
<div class=\"col-md-4 no-padding\">
<article class=\"single-blog-post\">

<div class=\"featured-image\">
<a href=\"#\">
{% if post.featured_images[0] %}
   <img src=\"{{ post.featured_images[0].path }}\" alt=\"\"> 
{% else %}
    <img src=\"{{ 'quran/08.jpg' |media }}\" alt=\"\">
{% endif %}

</a>
</div>

<div class=\"post-meta\">
<div class=\"post-date\">
<span><b>Jan 25 2018</b></span>
</div>

<a href=\"{{ post.url }}\"><h2 class=\"subtitle\">{{ post.title }}</h2></a>
<div class=\"description\"><p>{{ post.summary|raw|truncate(150) }}</p></div>
</div>
<div class=\"meta-tags\">
<span class=\"comments\"><a href=\"#\"><i class=\"mdi mdi-comment-outline\"></i> {{ noPostsMessage }} Comments</a></span>

<a class=\"btn btn-round btn-fab\" href=\"blog-single.html\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
</div>
</article>
</div>
{% endfor %}


{% if posts.lastPage > 1 and false%}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
</div>
</div>
</div>
</div>
</section>", "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/pages/coran.htm", "");
    }
}
