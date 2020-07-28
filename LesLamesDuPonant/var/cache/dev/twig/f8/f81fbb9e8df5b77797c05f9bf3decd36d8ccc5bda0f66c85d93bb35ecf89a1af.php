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
        echo "<!DOCTYPE html>
<html>

\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>
\t\t<!--Import Google Icon Font-->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t\t<!--Import materialize.css-->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sass/materialize.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/> ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t\t</head>
\t\t<body>
\t\t\t<header>
\t\t\t\t<nav>
\t\t\t\t\t<div class=\"nav-wrapper  blue accent-4\">
\t\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " \" class=\"brand-logo \">Logo</a>
\t\t\t\t\t\t<a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\">
\t\t\t\t\t\t\t<i class=\"material-icons\">menu</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"right hide-on-med-and-down\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Les AMHE</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Boutique</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Forum</a>
\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" data-activates=\"mobile-demo\"  class=\"monProfilBtn\"> Mon profil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">se deconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">se connecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">s'enregistrer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 53
        echo "
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<ul class=\"side-nav\" id=\"mobile-demo\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"user-view\">
\t\t\t\t\t\t\t\t\t<div class=\"background\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://miro.medium.com/max/1080/1*hU0QQDiOnsKpX4qlIyn_4w.jpeg\">
\t\t\t\t\t\t\t\t\t</div>";
        // line 61
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && (isset($context["photoAvatarUser"]) || array_key_exists("photoAvatarUser", $context)))) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t<a href=\"#!user\"><img class=\"circle\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "photoAvatarUser", [], "any", false, false, false, 62), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t<a href=\"#!user\"><img class=\"circle\" src=\"uploads\\avatar.jpg\"></a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 67
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && (isset($context["PseudoUser"]) || array_key_exists("PseudoUser", $context)))) {
            // line 68
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"white-text name\">\tBonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "pseudoUser", [], "any", false, false, false, 68), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t<span class=\"white-text name\">\tBonjour \"Illustre inconnu\"</span>
\t\t\t\t\t\t\t\t\t<Small>Tu peux ajouter ton pseudo dans la partie mon profil ;)</Small>
\t\t\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"white-text email\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "email", [], "any", false, false, false, 74), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 76
        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>Les Lames Du Ponant</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">se connecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">s'enregistrer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">se deconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li></li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>

\t\t\t\t<div class=\"slider\">
\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"https://lorempixel.com/580/250/nature/1\">
\t\t\t\t\t\t\t<!-- random image -->
\t\t\t\t\t\t\t<div class=\"caption center-align\">
\t\t\t\t\t\t\t\t<h3>This is our big Tagline!</h3>
\t\t\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t\t\t\t<button class=\"btn\">hello</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"https://lorempixel.com/580/250/nature/2\">
\t\t\t\t\t\t\t<!-- random image -->
\t\t\t\t\t\t\t<div class=\"caption left-align\">
\t\t\t\t\t\t\t\t<h3>Left Aligned Caption</h3>
\t\t\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<button class=\"btn\">hello</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"https://lorempixel.com/580/250/nature/3\">
\t\t\t\t\t\t\t<!-- random image -->
\t\t\t\t\t\t\t<div class=\"caption right-align\">
\t\t\t\t\t\t\t\t<h3>Right Aligned Caption</h3>
\t\t\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t\t\t\t<button class=\"btn\">hello2</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"https://lorempixel.com/580/250/nature/4\">
\t\t\t\t\t\t\t<!-- random image -->
\t\t\t\t\t\t\t<div class=\"caption center-align\">
\t\t\t\t\t\t\t\t<h3>This is our big Tagline!</h3>
\t\t\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t\t\t\t<button class=\"btn\">hello3</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<main>
\t\t\t\t";
        // line 149
        $this->displayBlock('body', $context, $blocks);
        // line 150
        echo "
\t\t\t\t";
        // line 151
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "get", [0 => "_route"], "method", false, false, false, 151), "home"))) {
            // line 152
            echo "\t\t\t\t\t<div class=\"section white homeSectionPresentation\">
\t\t\t\t\t\t<div class=\"row container\">
\t\t\t\t\t\t\t<h2 class=\"header\">Parallax</h2>
\t\t\t\t\t\t\t<p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"parallax-container\">
\t\t\t\t\t\t<div class=\"parallax\"><img src=\"https://lorempixel.com/580/250/nature/8\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"section white homeSectionActivity\">
\t\t\t\t\t\t<div class=\"row container\">
\t\t\t\t\t\t\t<h2 class=\"header\">Parallax</h2>
\t\t\t\t\t\t\t<p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"parallax-container\">
\t\t\t\t\t\t<div class=\"parallax\"><img src=\"https://lorempixel.com/580/250/nature/7\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"section white homeSectionCalendar\">
\t\t\t\t\t\t<div class=\"row container\">
\t\t\t\t\t\t\t<h2 class=\"header\">Parallax</h2>
\t\t\t\t\t\t\t<p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 176
        echo "

\t\t\t\t</main>

\t\t\t\t<footer class=\"page-footer\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col l6 s12\">
\t\t\t\t\t\t\t\t<h5 class=\"white-text\">Footer Content</h5>
\t\t\t\t\t\t\t\t<p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col l4 offset-l2 s12\">
\t\t\t\t\t\t\t\t<h5 class=\"white-text\">Links</h5>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t© 2014 Copyright Text
\t\t\t\t\t\t\t<a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>

\t\t\t\t";
        // line 206
        $this->displayBlock('javascripts', $context, $blocks);
        // line 212
        echo "\t\t\t</body>
\t\t</body>
\t</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
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

    // line 14
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

    // line 149
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

    // line 206
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 207
        echo "\t\t\t\t\t<!--Import jQuery before materialize.js-->
\t\t\t\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js\"></script>
\t\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bin/materialize.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t";
        
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
        return array (  416 => 210,  411 => 207,  401 => 206,  383 => 149,  365 => 14,  346 => 8,  333 => 212,  331 => 206,  299 => 176,  273 => 152,  271 => 151,  268 => 150,  266 => 149,  207 => 93,  201 => 90,  195 => 87,  182 => 76,  176 => 74,  173 => 73,  168 => 70,  162 => 68,  160 => 67,  157 => 66,  153 => 64,  147 => 62,  145 => 61,  135 => 53,  129 => 50,  123 => 47,  120 => 46,  113 => 42,  107 => 38,  105 => 37,  97 => 32,  91 => 29,  85 => 26,  76 => 20,  69 => 15,  65 => 14,  58 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<title>
\t\t\t{% block title 'Lame Du Ponant ' %}
\t\t</title>
\t\t<!--Import Google Icon Font-->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t\t<!--Import materialize.css-->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('sass/materialize.css') }}\" media=\"screen,projection\"/> {% block stylesheets %}{% endblock %}
\t\t</head>
\t\t<body>
\t\t\t<header>
\t\t\t\t<nav>
\t\t\t\t\t<div class=\"nav-wrapper  blue accent-4\">
\t\t\t\t\t\t<a href=\"{{path('home')}} \" class=\"brand-logo \">Logo</a>
\t\t\t\t\t\t<a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\">
\t\t\t\t\t\t\t<i class=\"material-icons\">menu</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"right hide-on-med-and-down\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('home')}}\">Les AMHE</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('home')}}\"> Boutique</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('home')}}\">Forum</a>
\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY')%}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" data-activates=\"mobile-demo\"  class=\"monProfilBtn\"> Mon profil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_logout')}}\">se deconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_login')}}\">se connecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_register')}}\">s'enregistrer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<ul class=\"side-nav\" id=\"mobile-demo\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"user-view\">
\t\t\t\t\t\t\t\t\t<div class=\"background\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://miro.medium.com/max/1080/1*hU0QQDiOnsKpX4qlIyn_4w.jpeg\">
\t\t\t\t\t\t\t\t\t</div>{% if is_granted('IS_AUTHENTICATED_FULLY') and photoAvatarUser is defined  %}
\t\t\t\t\t\t\t\t\t<a href=\"#!user\"><img class=\"circle\" src=\"{{app.user.photoAvatarUser}}\"></a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a href=\"#!user\"><img class=\"circle\" src=\"uploads\\avatar.jpg\"></a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') and PseudoUser is defined  %}
\t\t\t\t\t\t\t\t\t\t<span class=\"white-text name\">\tBonjour {{app.user.pseudoUser}}</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"white-text name\">\tBonjour \"Illustre inconnu\"</span>
\t\t\t\t\t\t\t\t\t<Small>Tu peux ajouter ton pseudo dans la partie mon profil ;)</Small>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"white-text email\">{{ app.user.email }}</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>Les Lames Du Ponant</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_login')}}\">se connecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_register')}}\">s'enregistrer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_logout')}}\">se deconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li></li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>

\t\t\t\t<div class=\"slider\">
\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"https://lorempixel.com/580/250/nature/1\">
\t\t\t\t\t\t\t<!-- random image -->
\t\t\t\t\t\t\t<div class=\"caption center-align\">
\t\t\t\t\t\t\t\t<h3>This is our big Tagline!</h3>
\t\t\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t\t\t\t<button class=\"btn\">hello</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"https://lorempixel.com/580/250/nature/2\">
\t\t\t\t\t\t\t<!-- random image -->
\t\t\t\t\t\t\t<div class=\"caption left-align\">
\t\t\t\t\t\t\t\t<h3>Left Aligned Caption</h3>
\t\t\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<button class=\"btn\">hello</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"https://lorempixel.com/580/250/nature/3\">
\t\t\t\t\t\t\t<!-- random image -->
\t\t\t\t\t\t\t<div class=\"caption right-align\">
\t\t\t\t\t\t\t\t<h3>Right Aligned Caption</h3>
\t\t\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t\t\t\t<button class=\"btn\">hello2</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"https://lorempixel.com/580/250/nature/4\">
\t\t\t\t\t\t\t<!-- random image -->
\t\t\t\t\t\t\t<div class=\"caption center-align\">
\t\t\t\t\t\t\t\t<h3>This is our big Tagline!</h3>
\t\t\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t\t\t\t<button class=\"btn\">hello3</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<main>
\t\t\t\t{% block body %}{% endblock %}

\t\t\t\t{% if app.request.get('_route') == 'home' %}
\t\t\t\t\t<div class=\"section white homeSectionPresentation\">
\t\t\t\t\t\t<div class=\"row container\">
\t\t\t\t\t\t\t<h2 class=\"header\">Parallax</h2>
\t\t\t\t\t\t\t<p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"parallax-container\">
\t\t\t\t\t\t<div class=\"parallax\"><img src=\"https://lorempixel.com/580/250/nature/8\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"section white homeSectionActivity\">
\t\t\t\t\t\t<div class=\"row container\">
\t\t\t\t\t\t\t<h2 class=\"header\">Parallax</h2>
\t\t\t\t\t\t\t<p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"parallax-container\">
\t\t\t\t\t\t<div class=\"parallax\"><img src=\"https://lorempixel.com/580/250/nature/7\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"section white homeSectionCalendar\">
\t\t\t\t\t\t<div class=\"row container\">
\t\t\t\t\t\t\t<h2 class=\"header\">Parallax</h2>
\t\t\t\t\t\t\t<p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}


\t\t\t\t</main>

\t\t\t\t<footer class=\"page-footer\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col l6 s12\">
\t\t\t\t\t\t\t\t<h5 class=\"white-text\">Footer Content</h5>
\t\t\t\t\t\t\t\t<p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col l4 offset-l2 s12\">
\t\t\t\t\t\t\t\t<h5 class=\"white-text\">Links</h5>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t© 2014 Copyright Text
\t\t\t\t\t\t\t<a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>

\t\t\t\t{% block javascripts %}
\t\t\t\t\t<!--Import jQuery before materialize.js-->
\t\t\t\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js\"></script>
\t\t\t\t\t<script type=\"text/javascript\" src=\"{{ asset('js/bin/materialize.js') }}\"></script>
\t\t\t\t{% endblock %}
\t\t\t</body>
\t\t</body>
\t</html>
", "base.html.twig", "C:\\wamp64\\www\\leslamesduPonant\\LesLamesDuPonant\\LesLamesDuPonant\\templates\\base.html.twig");
    }
}
