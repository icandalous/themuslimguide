<?php

/* C:\wamp64\www\themuslimguide/themes/mslguige/pages/miracles-dans-le-coran.htm */
class __TwigTemplate_e9366a89ef5b715dae0f1d6ce1e91c83656de3176056890f7f8e361b9284d4bd extends Twig_Template
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
        echo "<div class=\"container-fluid representation-content\">
    <div class=\"row\">
        <div class=\"col-md-3\">
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar-menu-miracles-scientifique"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        
          <!--aside class=\"sidebar\">
            <nav class=\"nav\">
              <ul>
                <li class=\"active\"><a href=\"#\">Les astres et l'univers</a></li>
                <li><a href=\"#\">L'espace et le temps</a></li>
                <li><a href=\"#\">Le ciel et la terre</a></li>
                <li><a href=\"#\">L'humain</a></li>
                <li><a href=\"#\">Les merveilles de la créatures</a></li>
                <li><a href=\"#\">L'impact de l'islam sur l'homme</a></li>
                
              </ul>
            </nav>
          </aside-->
        </div>
   <div class=\"col-md-9\">
   <div class=\"row ligne1\">
      <div class=\"col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12\">
        <figure>
          <div class=\"media\" style=\"background-image:url(";
        // line 24
        echo $this->extensions['System\Twig\Extension']->mediaFilter("univers-hexagon.jpg");
        echo ");\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect id=\"alpha\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" class=\"alpha\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">L'ESPACE</text>
                  <text class=\"title\" dx=\"50%\" dy=\"3.5em\">ET</text>
                  <text class=\"title\" dx=\"50%\" dy=\"4.5em\">LE TEMPS</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
      <div class=\"col-lg-6 col-md-6 hidden-sm hidden-xs\">
        <figure>
          <div class=\"media\" style=\"background-image:url(";
        // line 43
        echo $this->extensions['System\Twig\Extension']->mediaFilter("1398245798_e5e430312c_b.jpg");
        echo ");\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask2\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect id=\"alpha2\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" class=\"alpha\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">LE CIEL</text>
                  <text class=\"title\" dx=\"50%\" dy=\"3.5em\">ET LA</text>
                  <text class=\"title\" dx=\"50%\" dy=\"4.5em\">TERRE</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base2\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
    </div>
    
    <div class=\"row ligne1\">
      <div class=\"col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12\">
        <figure>
          <div class=\"media\" style=\"background-image:url(";
        // line 65
        echo $this->extensions['System\Twig\Extension']->mediaFilter("585631cc733517a.jpg");
        echo ");\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask3\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect class=\"alpha\" id=\"alpha\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">L'HUMAIN</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base3\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
      <div class=\"col-lg-6 col-md-6 hidden-sm hidden-xs\">
        <figure>
          <div class=\"media\" style=\"background-image:url(";
        // line 82
        echo $this->extensions['System\Twig\Extension']->mediaFilter("homme-adoration.jpg");
        echo ");\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask4\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect id=\"alpha\" class=\"alpha\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">IMPACT</text>
                  <text class=\"title\" dx=\"50%\" dy=\"3.5em\">DE L'ISLAM</text>
                  <text class=\"title\" dx=\"50%\" dy=\"4.5em\">SUR</text>
                  <text class=\"title\" dx=\"50%\" dy=\"5.5em\">L'HOMME</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base4\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
    </div>
    
    <div class=\"row ligne2\">
      <div class=\"col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12\">
        <figure>
          <div class=\"media\" style=\"background-image:url(";
        // line 105
        echo $this->extensions['System\Twig\Extension']->mediaFilter("1557798396_80921_univers.jpg");
        echo ");\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask1\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect class=\"alpha\" id=\"alpha\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">LES ASTRES</text>
                  <text class=\"title\" dx=\"50%\" dy=\"3.5em\">ET</text>
                  <text class=\"title\" dx=\"50%\" dy=\"4.5em\">L'UNIVERS</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base1\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
      <div class=\"col-lg-6 col-md-6 hidden-sm hidden-xs\">
        <figure>
          <div class=\"media\" style=\"background-image:url(";
        // line 124
        echo $this->extensions['System\Twig\Extension']->mediaFilter("bee-hives-pictures-119647-7667448.jpg");
        echo ");\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask5\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect id=\"alpha\" class=\"alpha\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">LES</text>
                  <text class=\"title\" dx=\"50%\" dy=\"3.5em\">MERVEILLES</text>
                  <text class=\"title\" dx=\"50%\" dy=\"4.5em\">DE LA</text>
                  <text class=\"title\" dx=\"50%\" dy=\"5.5em\">CREATURE</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base5\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
    </div>
    
    
</div>    
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\themuslimguide/themes/mslguige/pages/miracles-dans-le-coran.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 124,  146 => 105,  120 => 82,  100 => 65,  75 => 43,  53 => 24,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid representation-content\">
    <div class=\"row\">
        <div class=\"col-md-3\">
        {% partial 'sidebar-menu-miracles-scientifique' %}
        
          <!--aside class=\"sidebar\">
            <nav class=\"nav\">
              <ul>
                <li class=\"active\"><a href=\"#\">Les astres et l'univers</a></li>
                <li><a href=\"#\">L'espace et le temps</a></li>
                <li><a href=\"#\">Le ciel et la terre</a></li>
                <li><a href=\"#\">L'humain</a></li>
                <li><a href=\"#\">Les merveilles de la créatures</a></li>
                <li><a href=\"#\">L'impact de l'islam sur l'homme</a></li>
                
              </ul>
            </nav>
          </aside-->
        </div>
   <div class=\"col-md-9\">
   <div class=\"row ligne1\">
      <div class=\"col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12\">
        <figure>
          <div class=\"media\" style=\"background-image:url({{'univers-hexagon.jpg'|media}});\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect id=\"alpha\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" class=\"alpha\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">L'ESPACE</text>
                  <text class=\"title\" dx=\"50%\" dy=\"3.5em\">ET</text>
                  <text class=\"title\" dx=\"50%\" dy=\"4.5em\">LE TEMPS</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
      <div class=\"col-lg-6 col-md-6 hidden-sm hidden-xs\">
        <figure>
          <div class=\"media\" style=\"background-image:url({{'1398245798_e5e430312c_b.jpg' |media}});\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask2\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect id=\"alpha2\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" class=\"alpha\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">LE CIEL</text>
                  <text class=\"title\" dx=\"50%\" dy=\"3.5em\">ET LA</text>
                  <text class=\"title\" dx=\"50%\" dy=\"4.5em\">TERRE</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base2\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
    </div>
    
    <div class=\"row ligne1\">
      <div class=\"col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12\">
        <figure>
          <div class=\"media\" style=\"background-image:url({{'585631cc733517a.jpg'|media}});\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask3\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect class=\"alpha\" id=\"alpha\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">L'HUMAIN</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base3\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
      <div class=\"col-lg-6 col-md-6 hidden-sm hidden-xs\">
        <figure>
          <div class=\"media\" style=\"background-image:url({{'homme-adoration.jpg'|media}});\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask4\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect id=\"alpha\" class=\"alpha\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">IMPACT</text>
                  <text class=\"title\" dx=\"50%\" dy=\"3.5em\">DE L'ISLAM</text>
                  <text class=\"title\" dx=\"50%\" dy=\"4.5em\">SUR</text>
                  <text class=\"title\" dx=\"50%\" dy=\"5.5em\">L'HOMME</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base4\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
    </div>
    
    <div class=\"row ligne2\">
      <div class=\"col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12\">
        <figure>
          <div class=\"media\" style=\"background-image:url({{'1557798396_80921_univers.jpg'|media}});\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask1\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect class=\"alpha\" id=\"alpha\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">LES ASTRES</text>
                  <text class=\"title\" dx=\"50%\" dy=\"3.5em\">ET</text>
                  <text class=\"title\" dx=\"50%\" dy=\"4.5em\">L'UNIVERS</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base1\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
      <div class=\"col-lg-6 col-md-6 hidden-sm hidden-xs\">
        <figure>
          <div class=\"media\" style=\"background-image:url({{'bee-hives-pictures-119647-7667448.jpg'|media}});\"></div>
          <figcaption>
            <svg viewBox=\"0 0 200 200\" version=\"1.1\" preserveAspectRatio=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <defs>
                <mask class=\"mask\" id=\"mask5\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\">
                  <rect id=\"alpha\" class=\"alpha\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
                  <text class=\"title\" dx=\"50%\" dy=\"2.5em\">LES</text>
                  <text class=\"title\" dx=\"50%\" dy=\"3.5em\">MERVEILLES</text>
                  <text class=\"title\" dx=\"50%\" dy=\"4.5em\">DE LA</text>
                  <text class=\"title\" dx=\"50%\" dy=\"5.5em\">CREATURE</text>
                </mask>
              </defs>
              <rect class=\"base\" id=\"base5\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"></rect>
            </svg>
            
          </figcaption><a href=\"#\"></a>
        </figure>
      </div>
    </div>
    
    
</div>    
</div>", "C:\\wamp64\\www\\themuslimguide/themes/mslguige/pages/miracles-dans-le-coran.htm", "");
    }
}
