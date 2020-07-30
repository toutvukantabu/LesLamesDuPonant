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
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<!--Import Google Icon Font-->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t\t<!--Import materialize.css-->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sass/materialize.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/> ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t\t</head>
\t\t<body>
\t\t\t<header>
\t\t\t\t<div class=\"container \" id=\"HomeTitle\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col m12 s12 l12 xl12\">

\t\t\t\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/LogoLDP_Black_HD2.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"side-nav z-depth-4\" id=\"mobile-demo\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"user-view\">
\t\t\t\t\t\t\t<div class=\"background\">
\t\t\t\t\t\t\t\t<img src=\"https://miro.medium.com/max/1080/1*hU0QQDiOnsKpX4qlIyn_4w.jpeg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 31
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && (isset($context["photoAvatarUser"]) || array_key_exists("photoAvatarUser", $context)))) {
            // line 32
            echo "\t\t\t\t\t\t\t\t<a href=\"#!user\"><img class=\"circle\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "photoAvatarUser", [], "any", false, false, false, 32), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t\t\t\t<a href=\"#!user\"><img class=\"circle\" src=\"uploads\\avatar.jpg\"></a>
\t\t\t\t\t\t\t";
        }
        // line 36
        echo "
\t\t\t\t\t\t\t";
        // line 37
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && (isset($context["PseudoUser"]) || array_key_exists("PseudoUser", $context)))) {
            // line 38
            echo "\t\t\t\t\t\t\t\t<span class=\"white-text name\">
\t\t\t\t\t\t\t\t\tBonjour
\t\t\t\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "pseudoUser", [], "any", false, false, false, 40), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t\t\t<span class=\"white-text name\">
\t\t\t\t\t\t\t\t\tBonjour \"Illustre inconnu\"</span>
\t\t\t\t\t\t\t\t<Small>Tu peux modifier ton pseudo en cliquant sur \"Mes infos</Small>
\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 47
            echo "\t\t\t\t\t\t\t\t<span class=\"white-text email\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"white-text email\">
\t\t\t\t\t\t\t\t\t\tse déconnecter</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<h5 class=\"black-text center-align\">Les lames du Ponant</h5>
\t\t\t\t\t</li>
\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\t\t\t<span>Messagerie</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 69
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t<span>Modifier mes infos</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Les AMHE</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\t\t\tBoutique</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Forum</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t<nav class=\"\">
\t\t\t\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t\t\t\t<a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " \" class=\"brand-logo center\">Accueil</a>
\t\t\t\t\t\t\t<a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">menu</i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"left hide-on-med-and-down\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Les AMHE</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\t\t\t\t\t\tBoutique</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Forum</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 105
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("Role_Administrateur")) {
            // line 106
            echo "
\t\t\t\t\t\t\t\t\t<a href=\"#\">Administration</a>
\t\t\t\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"right hide-on-med-and-down\">

\t\t\t\t\t\t\t\t";
        // line 112
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 113
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-activates=\"mobile-demo\" class=\"monProfilBtn\">
\t\t\t\t\t\t\t\t\t\t\tMon profil</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">infos</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_message_new");
            echo "\">contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 124
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">se deconnecter</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 128
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">infos</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 131
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 134
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">se connecter</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 137
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">s'enregistrer</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 140
        echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"slider\">
\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/Parallax1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"caption center-align\">
\t\t\t\t\t\t\t\t<h3>This is our big Tagline!</h3>
\t\t\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t\t\t\t<button class=\"btn\">hello</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/Parallax2.jpg"), "html", null, true);
        echo "\">
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
        // line 189
        $this->displayBlock('body', $context, $blocks);
        // line 190
        echo "
\t\t\t\t";
        // line 191
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "request", [], "any", false, false, false, 191), "get", [0 => "_route"], "method", false, false, false, 191), "home"))) {
            // line 192
            echo "\t\t\t\t\t<div class=\"section white homeSectionPresentation\">
\t\t\t\t\t\t<div class=\"row container\">
\t\t\t\t\t\t\t<h2 class=\"header\">Parallax</h2>
\t\t\t\t\t\t\t<p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"parallax-container\">
\t\t\t\t\t\t<div class=\"parallax\"><img src=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/Parallax2.jpg"), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t<h5 class=\"white-text\" position=\"absolute\">nos activités</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"section white homeSectionActivity\">
\t\t\t\t\t\t<div class=\"row container\">
\t\t\t\t\t\t\t<h2 class=\"header\">Parallax</h2>
\t\t\t\t\t\t\t<p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"parallax-container\">
\t\t\t\t\t\t<div class=\"parallax\"><img src=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/Parallax3.jpg"), "html", null, true);
            echo "\"></div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"section white homeSectionCalendar\">
\t\t\t\t\t\t<div class=\"row container\">
\t\t\t\t\t\t\t<h2 class=\"header\">Parallax</h2>
\t\t\t\t\t\t\t<p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 220
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
        // line 250
        $this->displayBlock('javascripts', $context, $blocks);
        // line 256
        echo "\t\t\t</body>
\t\t</body>
\t</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
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

    // line 13
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

    // line 189
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

    // line 250
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 251
        echo "\t\t\t\t\t<!--Import jQuery before materialize.js-->
\t\t\t\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js\"></script>
\t\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 254
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
        return array (  506 => 254,  501 => 251,  491 => 250,  473 => 189,  455 => 13,  436 => 7,  423 => 256,  421 => 250,  389 => 220,  377 => 211,  362 => 199,  353 => 192,  351 => 191,  348 => 190,  346 => 189,  310 => 156,  299 => 148,  289 => 140,  283 => 137,  277 => 134,  271 => 131,  265 => 128,  262 => 127,  256 => 124,  250 => 121,  244 => 118,  237 => 113,  235 => 112,  230 => 109,  225 => 106,  223 => 105,  218 => 103,  211 => 99,  204 => 95,  195 => 89,  186 => 83,  179 => 79,  173 => 76,  166 => 71,  160 => 69,  158 => 68,  150 => 63,  138 => 53,  130 => 48,  125 => 47,  122 => 46,  116 => 42,  111 => 40,  107 => 38,  105 => 37,  102 => 36,  98 => 34,  92 => 32,  90 => 31,  77 => 21,  68 => 14,  64 => 13,  57 => 8,  55 => 7,  47 => 1,);
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
\t\t\t\t<div class=\"container \" id=\"HomeTitle\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col m12 s12 l12 xl12\">

\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/LogoLDP_Black_HD2.png')}}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"side-nav z-depth-4\" id=\"mobile-demo\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"user-view\">
\t\t\t\t\t\t\t<div class=\"background\">
\t\t\t\t\t\t\t\t<img src=\"https://miro.medium.com/max/1080/1*hU0QQDiOnsKpX4qlIyn_4w.jpeg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') and photoAvatarUser is defined  %}
\t\t\t\t\t\t\t\t<a href=\"#!user\"><img class=\"circle\" src=\"{{app.user.photoAvatarUser}}\"></a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"#!user\"><img class=\"circle\" src=\"uploads\\avatar.jpg\"></a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') and PseudoUser is defined  %}
\t\t\t\t\t\t\t\t<span class=\"white-text name\">
\t\t\t\t\t\t\t\t\tBonjour
\t\t\t\t\t\t\t\t\t{{app.user.pseudoUser}}</span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"white-text name\">
\t\t\t\t\t\t\t\t\tBonjour \"Illustre inconnu\"</span>
\t\t\t\t\t\t\t\t<Small>Tu peux modifier ton pseudo en cliquant sur \"Mes infos</Small>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t<span class=\"white-text email\">{{ app.user.email }}</span>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_logout')}}\">
\t\t\t\t\t\t\t\t\t<span class=\"white-text email\">
\t\t\t\t\t\t\t\t\t\tse déconnecter</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<h5 class=\"black-text center-align\">Les lames du Ponant</h5>
\t\t\t\t\t</li>
\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('home')}}\">
\t\t\t\t\t\t\t<span>Messagerie</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY')%}
\t\t\t\t\t\t\t<a href=\"{{path('user_edit',{'id': app.user.id })}}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<span>Modifier mes infos</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('home')}}\">Les AMHE</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('home')}}\">
\t\t\t\t\t\t\tBoutique</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('home')}}\">Forum</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t<nav class=\"\">
\t\t\t\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t\t\t\t<a href=\"{{path('home')}} \" class=\"brand-logo center\">Accueil</a>
\t\t\t\t\t\t\t<a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">menu</i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"left hide-on-med-and-down\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('home')}}\">Les AMHE</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('home')}}\">
\t\t\t\t\t\t\t\t\t\tBoutique</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('home')}}\">Forum</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% if is_granted('Role_Administrateur')%}

\t\t\t\t\t\t\t\t\t<a href=\"#\">Administration</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"right hide-on-med-and-down\">

\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY')%}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-activates=\"mobile-demo\" class=\"monProfilBtn\">
\t\t\t\t\t\t\t\t\t\t\tMon profil</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_login')}}\">infos</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('contact_message_new')}}\">contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_logout')}}\">se deconnecter</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_login')}}\">infos</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_login')}}\">contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_login')}}\">se connecter</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_register')}}\">s'enregistrer</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"slider\">
\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/Parallax1.jpg')}}\">
\t\t\t\t\t\t\t<div class=\"caption center-align\">
\t\t\t\t\t\t\t\t<h3>This is our big Tagline!</h3>
\t\t\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t\t\t\t<button class=\"btn\">hello</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/Parallax2.jpg')}}\">
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
\t\t\t\t\t\t<div class=\"parallax\"><img src=\"{{ asset('uploads/Parallax2.jpg')}}\">

\t\t\t\t\t\t\t<h5 class=\"white-text\" position=\"absolute\">nos activités</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"section white homeSectionActivity\">
\t\t\t\t\t\t<div class=\"row container\">
\t\t\t\t\t\t\t<h2 class=\"header\">Parallax</h2>
\t\t\t\t\t\t\t<p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"parallax-container\">
\t\t\t\t\t\t<div class=\"parallax\"><img src=\"{{ asset('uploads/Parallax3.jpg')}}\"></div>

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
