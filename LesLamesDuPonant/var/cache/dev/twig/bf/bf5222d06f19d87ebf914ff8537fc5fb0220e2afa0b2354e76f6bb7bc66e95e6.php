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

/* security/login.html.twig */
class __TwigTemplate_a17ab5140d79225fa9021d6cd0ba4d065f3c5daeeea015e77570973c0092ed7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container\">
\t<div class=\"row formRegister z-depth-5\">
\t\t<form method=\"post\">
\t\t\t";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 13
        echo "
\t\t\t";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "username", [], "any", false, false, false, 17), "html", null, true);
            echo ",
\t\t\t\t\t<a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 21
        echo "
\t\t\t<h5 class=\"center-align \">Connexion \"Lames Du Ponant\"</h5>
\t\t\t<div class=\"input-field col s12 l12 m12 \">
\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t<input type=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t</div>
\t\t\t<div class=\"input-field col s12 l12 m12\">
\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
\t\t\t</div>
\t\t\t<div class=\" col s12 l12 m12 loginResetPassword\">
\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo " \">
\t\t\t\t\tMot de passe oublié ?</a>
               
\t\t\t</div class=\"row\">
\t\t\t<div class=\"col s6 l6 m6\">
\t\t\t\t<button class=\"btn btn-lg btn-primary btnLogin\" type=\"submit\">
\t\t\t\t\tVous connecter
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col s6 l6 m6\">
           <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t <p>
\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\" id=\"test5\">
\t\t\t\t<label for=\"test5\">\tse souvenir de moi
\t\t\t\t</label> 
                </p>
\t\t\t
\t\t\t</div>
\t\t</div>


\t</form>
</div></div ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 42,  137 => 32,  127 => 25,  121 => 21,  115 => 18,  111 => 17,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!
{% endblock %}

{% block body %}
<div class=\"container\">
\t<div class=\"row formRegister z-depth-5\">
\t\t<form method=\"post\">
\t\t\t{% if error %}
\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{% endif %}

\t\t\t{% if app.user %}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t{{ app.user.username }},
\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t<h5 class=\"center-align \">Connexion \"Lames Du Ponant\"</h5>
\t\t\t<div class=\"input-field col s12 l12 m12 \">
\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t</div>
\t\t\t<div class=\"input-field col s12 l12 m12\">
\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
\t\t\t</div>
\t\t\t<div class=\" col s12 l12 m12 loginResetPassword\">
\t\t\t\t\t<a href=\"{{path('app_forgot_password_request')}} \">
\t\t\t\t\tMot de passe oublié ?</a>
               
\t\t\t</div class=\"row\">
\t\t\t<div class=\"col s6 l6 m6\">
\t\t\t\t<button class=\"btn btn-lg btn-primary btnLogin\" type=\"submit\">
\t\t\t\t\tVous connecter
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col s6 l6 m6\">
           <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t <p>
\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\" id=\"test5\">
\t\t\t\t<label for=\"test5\">\tse souvenir de moi
\t\t\t\t</label> 
                </p>
\t\t\t
\t\t\t</div>
\t\t</div>


\t</form>
</div></div {% endblock %}
", "security/login.html.twig", "C:\\wamp64\\www\\LesLamesDuPonant\\LesLamesDuPonant\\templates\\security\\login.html.twig");
    }
}
