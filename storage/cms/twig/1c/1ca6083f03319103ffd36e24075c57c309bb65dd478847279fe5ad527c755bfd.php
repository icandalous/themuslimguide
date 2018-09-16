<?php

/* C:\wamp64\www\install-master/themes/hambern-hambern-blank-bootstrap-4/pages/mutashab.htm */
class __TwigTemplate_d9749f1d19932766debfa26ee31a3b21849a954f55ec0b66a3d78b8d063fb208 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
var quranApiUrl = \"";
        // line 2
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = call_user_func_array($this->env->getFunction('config')->getCallable(), array("app.mutashab_api_url"))) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "environment", array())] ?? null) : null), "html", null, true);
        echo "\";
</script>
\t<div class=\"container\">
    <br/>
\t<div class=\"row justify-content-center\">
                        <div class=\"col-12 col-md-10 col-lg-8\">
                            <form class=\"card card-sm form-control-borderless\">
                                <div class=\"card-body row no-gutters align-items-center\">
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-search h4 text-body\"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class=\"col\">
                                        <input id=\"search-text\" class=\"form-control form-control-lg form-control-borderless\" type=\"search\" placeholder=\"Search topics or keywords\">
                                    </div>
                                    <!--end of col-->
                                    <div class=\"col-auto\">
                                        <button id=\"btn-search-ayats\" class=\"btn btn-lg btn-success\" type=\"submit\">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>

\t<main class=\"cd-main-content\">
\t\t<div class=\"cd-tab-filter-wrapper\">
\t\t\t<div class=\"cd-tab-filter\" id=\"filter-sourate-nav\">
\t\t\t</div> <!-- cd-tab-filter -->
\t\t</div> <!-- cd-tab-filter-wrapper -->

\t\t<section class=\"cd-gallery\">
\t\t\t
\t\t\t<div class=\"list-group\">
\t\t\t<ul id=\"list-mutashabihates\">
\t\t\t
\t\t\t</ul>
\t\t</div>

\t\t\t<div class=\"cd-fail-message\">No results found</div>
\t\t</section> <!-- cd-gallery -->

\t\t<div class=\"cd-filter\">
\t\t\t<form>
\t\t\t\t<div class=\"cd-filter-block\">
\t\t\t\t\t<h4>Search</h4>
\t\t\t\t\t
\t\t\t\t\t<div class=\"cd-filter-content\">
\t\t\t\t\t\t<input type=\"search\" placeholder=\"sourate, juz...\">
\t\t\t\t\t</div> <!-- cd-filter-content -->
\t\t\t\t</div> <!-- cd-filter-block -->
\t\t\t\t
\t\t\t\t<div class=\"cd-filter-block\">
\t\t\t\t\t<h4>Page filter</h4>
\t\t\t\t\t
\t\t\t\t\t<div class=\"cd-filter-content\">
\t\t\t\t\t\t<div class=\"slidecontainer\" id=\"page-filter-zone\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p id=\"show-page\"></p>
\t\t\t\t\t</div> <!-- cd-filter-content -->
\t\t\t\t</div> <!-- cd-filter-block -->

\t\t\t\t<div class=\"cd-filter-block\">
\t\t\t\t\t<h4>Select</h4>
\t\t\t\t\t
\t\t\t\t\t<div class=\"cd-filter-content\">
\t\t\t\t\t\t<div class=\"cd-select cd-filters\" id=\"juz-filter\">
\t\t\t\t\t\t\t<select class=\"filter\" name=\"selectThis\" id=\"selectThis\">
\t\t\t\t\t\t\t\t<option value=\"\">Choose a Juz</option>
\t\t\t\t\t\t\t\t<option value=\".juz-1\">Juz 1</option>
\t\t\t\t\t\t\t\t<option value=\".juz-2\">Juz 2</option>
\t\t\t\t\t\t\t\t<option value=\".juz-3\">Juz 3</option>
\t\t\t\t\t\t\t\t<option value=\".juz-4\">Juz 4</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div> <!-- cd-select -->
\t\t\t\t\t</div> <!-- cd-filter-content -->
\t\t\t\t</div> <!-- cd-filter-block -->

\t\t\t</form>

\t\t\t<a href=\"#0\" class=\"cd-close\">Close</a>
\t\t</div> <!-- cd-filter -->

\t\t<a href=\"#0\" class=\"cd-filter-trigger\">Filters</a>
\t</main> <!-- cd-main-content -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/pages/mutashab.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
var quranApiUrl = \"{{ config('app.mutashab_api_url')[this.environment] }}\";
</script>
\t<div class=\"container\">
    <br/>
\t<div class=\"row justify-content-center\">
                        <div class=\"col-12 col-md-10 col-lg-8\">
                            <form class=\"card card-sm form-control-borderless\">
                                <div class=\"card-body row no-gutters align-items-center\">
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-search h4 text-body\"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class=\"col\">
                                        <input id=\"search-text\" class=\"form-control form-control-lg form-control-borderless\" type=\"search\" placeholder=\"Search topics or keywords\">
                                    </div>
                                    <!--end of col-->
                                    <div class=\"col-auto\">
                                        <button id=\"btn-search-ayats\" class=\"btn btn-lg btn-success\" type=\"submit\">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>

\t<main class=\"cd-main-content\">
\t\t<div class=\"cd-tab-filter-wrapper\">
\t\t\t<div class=\"cd-tab-filter\" id=\"filter-sourate-nav\">
\t\t\t</div> <!-- cd-tab-filter -->
\t\t</div> <!-- cd-tab-filter-wrapper -->

\t\t<section class=\"cd-gallery\">
\t\t\t
\t\t\t<div class=\"list-group\">
\t\t\t<ul id=\"list-mutashabihates\">
\t\t\t
\t\t\t</ul>
\t\t</div>

\t\t\t<div class=\"cd-fail-message\">No results found</div>
\t\t</section> <!-- cd-gallery -->

\t\t<div class=\"cd-filter\">
\t\t\t<form>
\t\t\t\t<div class=\"cd-filter-block\">
\t\t\t\t\t<h4>Search</h4>
\t\t\t\t\t
\t\t\t\t\t<div class=\"cd-filter-content\">
\t\t\t\t\t\t<input type=\"search\" placeholder=\"sourate, juz...\">
\t\t\t\t\t</div> <!-- cd-filter-content -->
\t\t\t\t</div> <!-- cd-filter-block -->
\t\t\t\t
\t\t\t\t<div class=\"cd-filter-block\">
\t\t\t\t\t<h4>Page filter</h4>
\t\t\t\t\t
\t\t\t\t\t<div class=\"cd-filter-content\">
\t\t\t\t\t\t<div class=\"slidecontainer\" id=\"page-filter-zone\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p id=\"show-page\"></p>
\t\t\t\t\t</div> <!-- cd-filter-content -->
\t\t\t\t</div> <!-- cd-filter-block -->

\t\t\t\t<div class=\"cd-filter-block\">
\t\t\t\t\t<h4>Select</h4>
\t\t\t\t\t
\t\t\t\t\t<div class=\"cd-filter-content\">
\t\t\t\t\t\t<div class=\"cd-select cd-filters\" id=\"juz-filter\">
\t\t\t\t\t\t\t<select class=\"filter\" name=\"selectThis\" id=\"selectThis\">
\t\t\t\t\t\t\t\t<option value=\"\">Choose a Juz</option>
\t\t\t\t\t\t\t\t<option value=\".juz-1\">Juz 1</option>
\t\t\t\t\t\t\t\t<option value=\".juz-2\">Juz 2</option>
\t\t\t\t\t\t\t\t<option value=\".juz-3\">Juz 3</option>
\t\t\t\t\t\t\t\t<option value=\".juz-4\">Juz 4</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div> <!-- cd-select -->
\t\t\t\t\t</div> <!-- cd-filter-content -->
\t\t\t\t</div> <!-- cd-filter-block -->

\t\t\t</form>

\t\t\t<a href=\"#0\" class=\"cd-close\">Close</a>
\t\t</div> <!-- cd-filter -->

\t\t<a href=\"#0\" class=\"cd-filter-trigger\">Filters</a>
\t</main> <!-- cd-main-content -->", "C:\\wamp64\\www\\install-master/themes/hambern-hambern-blank-bootstrap-4/pages/mutashab.htm", "");
    }
}
