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
\t";
        // line 10
        echo "\t<link href=\"https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.14.0/css/all.css\"
\t\tintegrity=\"sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/united/bootstrap.min.css\"
\t\tintegrity=\"sha384-Uga2yStKRHUWCS7ORqIZhJ9LIAv4i7gZuEdoR1QAmw6H+ffhcf7yCOd0CvSoNwoz\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sass/style.css"), "html", null, true);
        echo "\">
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/App.js"), "html", null, true);
        echo "\"></script>
\t<title>
\t\t";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        // line 20
        echo "\t</title>
\t";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</head>

<body>
<header>
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-12 text-center imgHeader\">
\t\t\t\t\t\t<img src=\"images\\Logo LDP 2020.png\" height=\"420px\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light \">

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse justify-content-around\" id=\"navbarNavDropdown\">
\t\t\t\t\t<ul class=\"navbar-nav \">

\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tLes AMHE
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">La Féderation</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">L'association</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tLes Disciplines
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Viking</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">épée bocle</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">épée longue</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tcontactez nous
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Viking</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">épée bocle</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">épée longue</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a class=\"navbar-brand Accueil\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " \">Accueil</a>
\t\t\t\t\t<ul class=\"nav \">
\t\t\t\t\t\t<li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Vous connecter</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">vous enregistrer</a>
      </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t<li data-target=\"#carouselExampleCaptions\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t<li data-target=\"#carouselExampleCaptions\" data-slide-to=\"1\"></li>
\t\t\t\t\t<li data-target=\"#carouselExampleCaptions\" data-slide-to=\"2\"></li>
\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t<img src=\"images\\carousel1.jpg\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img src=\"images\\carousel1.jpg\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img src=\"images\\carousel1.jpg\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</header>
\t\t<div class=\"container presentation \">
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\"col-xl-12 \">
\t\t\t\t\t<h1 class=\"text-center\">Bienvenue sur le site des lames du Ponant</h1>
\t\t\t\t\t<div class=\"row homePresentation\">
\t\t\t\t\t\t<div class=\"col-xl-4\">

\t\t\t\t\t\t\t<img src=\"https://place-hold.it/300x300\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tprésentation de l'association</h3>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit ipsum minima explicabo quo possimus ab natus ducimus, repellat assumenda quasi repudiandae sit repellendus reprehenderit, similique corporis labore? Animi, quidem rerum.</p>
\t\t\t\t\t\t\t<a href=\"#\">En savoir plus</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center\">Actualité</h2>
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-xl-3 homePresentationActu \">
\t\t\t\t\t<img src=\"https://place-hold.it/250x250\" alt=\"\">
\t\t\t\t\t<h3></h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aspernatur, possimus eaque laudantium ducimus architecto ipsum libero, rerum itaque distinctio quis! Dolor repellendus, maxime dolore laborum non odit doloremque nulla?</p>
\t\t\t\t\t<a href=\"\">en savoir plus
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 homePresentationActu\">
\t\t\t\t\t<img src=\"https://place-hold.it/250x250\" alt=\"\">
\t\t\t\t\t<h3></h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur adipisicing elit. Maxime deserunt labore explicabo minima, id consequatur at similique distinctio esse eveniet quisquam, iste quia magni reiciendis eum animi officiis odio repellendus.</p>
\t\t\t\t\t<a href=\"\">en savoir plus
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 homePresentationActu\">
\t\t\t\t\t<img src=\"https://place-hold.it/250x250\" alt=\"\">
\t\t\t\t\t<h3></h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor distinctio, fugiat eaque illum similique voluptas ad itaque! Voluptate enim corporis, facilis sit nostrum quo ab repellat magni dolore pariatur quibusdam!
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"\">en savoir plus
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 homePresentationActu\">
\t\t\t\t\t<img src=\"https://place-hold.it/250x250\" alt=\"\">
\t\t\t\t\t<h3></h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sequi nemo praesentium itaque ducimus, consectetur temporibus molestiae vero dolor odio veritatis esse facilis maxime qui expedita natus numquam, officiis laudantium!</p>
\t\t\t\t\t<a href=\"\">en savoir plus
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid \">
\t\t\t<h2 class=\"text-center\">Calendrier des entrainements</h2>
\t\t\t<div class=\"row justify-content-around text-center\">
\t\t\t\t<div class=\"col-xl-6 \">
\t\t\t\t\t<img src=\"https://place-hold.it/850x300\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t<img src=\"https://place-hold.it/850x300\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</div>

\t";
        // line 189
        $this->displayBlock('body', $context, $blocks);
        // line 190
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 197
        echo "\t</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Lepticoin des bonnes affaires!
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
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

    // line 190
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 191
        echo "\t";
        // line 194
        echo "\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script><script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\">
\t</script>";
        
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
        return array (  342 => 194,  340 => 191,  330 => 190,  312 => 189,  294 => 21,  274 => 18,  262 => 197,  259 => 190,  257 => 189,  142 => 77,  136 => 74,  130 => 71,  79 => 22,  77 => 21,  74 => 20,  72 => 18,  67 => 16,  63 => 15,  56 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t{# FONT
\t==== #}
\t<link href=\"https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.14.0/css/all.css\"
\t\tintegrity=\"sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/united/bootstrap.min.css\"
\t\tintegrity=\"sha384-Uga2yStKRHUWCS7ORqIZhJ9LIAv4i7gZuEdoR1QAmw6H+ffhcf7yCOd0CvSoNwoz\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"{{asset(\"sass/style.css\")}}\">
\t<script src=\"{{asset(\"js/App.js\")}}\"></script>
\t<title>
\t\t{% block title %}Lepticoin des bonnes affaires!
\t\t{% endblock %}
\t</title>
\t{% block stylesheets %}{% endblock %}
</head>

<body>
<header>
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-12 text-center imgHeader\">
\t\t\t\t\t\t<img src=\"images\\Logo LDP 2020.png\" height=\"420px\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light \">

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse justify-content-around\" id=\"navbarNavDropdown\">
\t\t\t\t\t<ul class=\"navbar-nav \">

\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tLes AMHE
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">La Féderation</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">L'association</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tLes Disciplines
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Viking</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">épée bocle</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">épée longue</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tcontactez nous
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Viking</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">épée bocle</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">épée longue</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a class=\"navbar-brand Accueil\" href=\"{{path('home')}} \">Accueil</a>
\t\t\t\t\t<ul class=\"nav \">
\t\t\t\t\t\t<li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('app_login')}}\">Vous connecter</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('app_register')}}\">vous enregistrer</a>
      </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t<li data-target=\"#carouselExampleCaptions\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t<li data-target=\"#carouselExampleCaptions\" data-slide-to=\"1\"></li>
\t\t\t\t\t<li data-target=\"#carouselExampleCaptions\" data-slide-to=\"2\"></li>
\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t<img src=\"images\\carousel1.jpg\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img src=\"images\\carousel1.jpg\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img src=\"images\\carousel1.jpg\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</header>
\t\t<div class=\"container presentation \">
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\"col-xl-12 \">
\t\t\t\t\t<h1 class=\"text-center\">Bienvenue sur le site des lames du Ponant</h1>
\t\t\t\t\t<div class=\"row homePresentation\">
\t\t\t\t\t\t<div class=\"col-xl-4\">

\t\t\t\t\t\t\t<img src=\"https://place-hold.it/300x300\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\tprésentation de l'association</h3>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit ipsum minima explicabo quo possimus ab natus ducimus, repellat assumenda quasi repudiandae sit repellendus reprehenderit, similique corporis labore? Animi, quidem rerum.</p>
\t\t\t\t\t\t\t<a href=\"#\">En savoir plus</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center\">Actualité</h2>
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-xl-3 homePresentationActu \">
\t\t\t\t\t<img src=\"https://place-hold.it/250x250\" alt=\"\">
\t\t\t\t\t<h3></h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aspernatur, possimus eaque laudantium ducimus architecto ipsum libero, rerum itaque distinctio quis! Dolor repellendus, maxime dolore laborum non odit doloremque nulla?</p>
\t\t\t\t\t<a href=\"\">en savoir plus
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 homePresentationActu\">
\t\t\t\t\t<img src=\"https://place-hold.it/250x250\" alt=\"\">
\t\t\t\t\t<h3></h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur adipisicing elit. Maxime deserunt labore explicabo minima, id consequatur at similique distinctio esse eveniet quisquam, iste quia magni reiciendis eum animi officiis odio repellendus.</p>
\t\t\t\t\t<a href=\"\">en savoir plus
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 homePresentationActu\">
\t\t\t\t\t<img src=\"https://place-hold.it/250x250\" alt=\"\">
\t\t\t\t\t<h3></h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor distinctio, fugiat eaque illum similique voluptas ad itaque! Voluptate enim corporis, facilis sit nostrum quo ab repellat magni dolore pariatur quibusdam!
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"\">en savoir plus
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 homePresentationActu\">
\t\t\t\t\t<img src=\"https://place-hold.it/250x250\" alt=\"\">
\t\t\t\t\t<h3></h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sequi nemo praesentium itaque ducimus, consectetur temporibus molestiae vero dolor odio veritatis esse facilis maxime qui expedita natus numquam, officiis laudantium!</p>
\t\t\t\t\t<a href=\"\">en savoir plus
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid \">
\t\t\t<h2 class=\"text-center\">Calendrier des entrainements</h2>
\t\t\t<div class=\"row justify-content-around text-center\">
\t\t\t\t<div class=\"col-xl-6 \">
\t\t\t\t\t<img src=\"https://place-hold.it/850x300\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t<img src=\"https://place-hold.it/850x300\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</div>

\t{% block body %}{% endblock %}
\t{% block javascripts %}
\t{# <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
\tintegrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\">
\t</script> #}
\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script><script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\">
\t</script>{% endblock %}
\t</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\LesLamesDuPonant\\LesLamesDuPonant\\templates\\base.html.twig");
    }
}
