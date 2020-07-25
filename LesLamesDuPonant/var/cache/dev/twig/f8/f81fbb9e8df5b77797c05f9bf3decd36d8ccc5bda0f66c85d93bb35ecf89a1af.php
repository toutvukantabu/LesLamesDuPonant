<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_a34750d87bd6bb1b33f170df28786b55d2c062a07afa82275d67284a300e3f1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<title>
\t\t";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t</title>
\t  <!--Import Google Icon Font-->
      <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
      <!--Import materialize.css-->
      <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sass/materialize.css"), "html", null, true);
        echo "\"  media=\"screen,projection\"/>
\t";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>
<body>
  <nav>
    <div class=\"nav-wrapper\">
      <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " \" class=\"brand-logo\">Logo</a>
      <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">se connecter</a></li>
        <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">s'enregistrer</a></li>
        <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">se deconnecter</a></li>
        <li><a href=\"mobile.html\">Mobile</a></li>
      </ul>
      <ul class=\"side-nav\" id=\"mobile-demo\">
        <li><a href=\"sass.html\">Sass</a></li>
        <li><a href=\"badges.html\">Components</a></li>
        <li><a href=\"collapsible.html\">Javascript</a></li>
        <li><a href=\"mobile.html\">Mobile</a></li>
      </ul>
    </div>
  </nav>
  </header>
<div class=\"carousel carousel-slider center\" data-indicators=\"true\">
    <div class=\"carousel-fixed-item center\">
      <a class=\"btn waves-effect white grey-text darken-text-2\">button</a>
    </div>
    <div class=\"carousel-item red white-text\" href=\"#one!\">
    <img src=\"https://lorempixel.com/800/400/food/4\">
      <h2>First Panel</h2>
      <p class=\"white-text\">This is your first panel</p>
    </div>
    <div class=\"carousel-item amber white-text\" href=\"#two!\">
    <img src=\"https://lorempixel.com/800/400/food/3\">
      <h2>Second Panel</h2>
      <p class=\"white-text\">This is your second panel</p>
    </div>
    <div class=\"carousel-item green white-text\" href=\"#three!\">
    <img src=\"https://lorempixel.com/800/400/food/3\">
      <h2>Third Panel</h2>
      <p class=\"white-text\">This is your third panel</p>
    </div>
    <div class=\"carousel-item blue white-text\" href=\"#four!\">
    <img src=\"https://lorempixel.com/800/400/food/3\">
      <h2>Fourth Panel</h2>
      <p class=\"white-text\">This is your fourth panel</p>
    </div>
  </div>
        
  <div class=\"parallax-container\">
  <div class=\"section white\">
    <div class=\"row container\">
      <h2 class=\"header\">Parallax</h2>
      <p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>
    <div class=\"parallax\"><img src=\"https://ostdugriffonnoir.com/wp-content/uploads/2017/01/9.jpg\"></div>
  </div>
  <div class=\"section white\">
    <div class=\"row container\">
      <h2 class=\"header\">Parallax</h2>
      <p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>
  <div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"https://ostdugriffonnoir.com/wp-content/uploads/2017/01/9.jpg\"></div>
  </div>


\t";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "\t</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Lame Du Ponant ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "\t<!--Import jQuery before materialize.js-->
      <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bin/materialize.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 87,  224 => 84,  206 => 83,  188 => 15,  169 => 9,  157 => 89,  154 => 84,  152 => 83,  91 => 25,  87 => 24,  83 => 23,  77 => 20,  71 => 16,  69 => 15,  65 => 14,  59 => 10,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<title>
\t\t{% block title 'Lame Du Ponant ' %}
\t</title>
\t  <!--Import Google Icon Font-->
      <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
      <!--Import materialize.css-->
      <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('sass/materialize.css') }}\"  media=\"screen,projection\"/>
\t{% block stylesheets %}{% endblock %}
</head>
<body>
  <nav>
    <div class=\"nav-wrapper\">
      <a href=\"{{path('home')}} \" class=\"brand-logo\">Logo</a>
      <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"{{path('app_login')}}\">se connecter</a></li>
        <li><a href=\"{{path('app_register')}}\">s'enregistrer</a></li>
        <li><a href=\"{{path('app_logout')}}\">se deconnecter</a></li>
        <li><a href=\"mobile.html\">Mobile</a></li>
      </ul>
      <ul class=\"side-nav\" id=\"mobile-demo\">
        <li><a href=\"sass.html\">Sass</a></li>
        <li><a href=\"badges.html\">Components</a></li>
        <li><a href=\"collapsible.html\">Javascript</a></li>
        <li><a href=\"mobile.html\">Mobile</a></li>
      </ul>
    </div>
  </nav>
  </header>
<div class=\"carousel carousel-slider center\" data-indicators=\"true\">
    <div class=\"carousel-fixed-item center\">
      <a class=\"btn waves-effect white grey-text darken-text-2\">button</a>
    </div>
    <div class=\"carousel-item red white-text\" href=\"#one!\">
    <img src=\"https://lorempixel.com/800/400/food/4\">
      <h2>First Panel</h2>
      <p class=\"white-text\">This is your first panel</p>
    </div>
    <div class=\"carousel-item amber white-text\" href=\"#two!\">
    <img src=\"https://lorempixel.com/800/400/food/3\">
      <h2>Second Panel</h2>
      <p class=\"white-text\">This is your second panel</p>
    </div>
    <div class=\"carousel-item green white-text\" href=\"#three!\">
    <img src=\"https://lorempixel.com/800/400/food/3\">
      <h2>Third Panel</h2>
      <p class=\"white-text\">This is your third panel</p>
    </div>
    <div class=\"carousel-item blue white-text\" href=\"#four!\">
    <img src=\"https://lorempixel.com/800/400/food/3\">
      <h2>Fourth Panel</h2>
      <p class=\"white-text\">This is your fourth panel</p>
    </div>
  </div>
        
  <div class=\"parallax-container\">
  <div class=\"section white\">
    <div class=\"row container\">
      <h2 class=\"header\">Parallax</h2>
      <p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>
    <div class=\"parallax\"><img src=\"https://ostdugriffonnoir.com/wp-content/uploads/2017/01/9.jpg\"></div>
  </div>
  <div class=\"section white\">
    <div class=\"row container\">
      <h2 class=\"header\">Parallax</h2>
      <p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>
  <div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"https://ostdugriffonnoir.com/wp-content/uploads/2017/01/9.jpg\"></div>
  </div>


\t{% block body %}{% endblock %}
\t{% block javascripts %}\t<!--Import jQuery before materialize.js-->
      <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('js/bin/materialize.js') }}\"></script>
{% endblock %}
\t</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\LesLamesDuPonant\\LesLamesDuPonant\\templates\\base.html.twig");
    }
}
