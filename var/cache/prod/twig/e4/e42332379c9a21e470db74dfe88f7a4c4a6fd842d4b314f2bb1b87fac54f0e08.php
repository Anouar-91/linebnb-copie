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

/* admin/account/login.html.twig */
class __TwigTemplate_f8b03c618c32ea9cdfee8df64a6a88378287976deb810b3f7308871382cc2196 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
    <title>Connexion à l'Administration</title>
    <style> 
        body{
            display: flex;
            justify-content: center;
            height : 100vh;
        }
        .card{
            margin-top : 10%;
        }
    </style>
</head>
<body>
<div class=\"col-md-4\">
    <div class=\"card bg-light\">
        <div class=\"card-header\">
           <h4 class=\"card-title\">
                <i class=\"fas fa-lock\"></i>
                Connexion à l'Administration
           </h4> 
        </div>
        <div class=\"card-body\">
        ";
        // line 31
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "            <div class=\"alert alert-warning\">
                <p>Les informations que vous avez fournies ne sont pas bonnes.</p>
            </div>
        ";
        }
        // line 36
        echo "            <form  method=\"post\">
                <div class=\"form-group\">
                    <label for=\"_username\">Email</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Adresse email...\" name=\"_username\" value=";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 39, $this->source); })()), "html", null, true);
        echo ">
                    <label for=\"_password\">Mot de passe</label>
                    <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe ...\" name=\"_password\">
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-lock-open\"></i> Connexion !</button>
                    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-link\">
                        <i class=\"fas fa-arrow-circle-left\"></i>
                        Retour au site
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 45,  85 => 39,  80 => 36,  74 => 32,  72 => 31,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
    <title>Connexion à l'Administration</title>
    <style> 
        body{
            display: flex;
            justify-content: center;
            height : 100vh;
        }
        .card{
            margin-top : 10%;
        }
    </style>
</head>
<body>
<div class=\"col-md-4\">
    <div class=\"card bg-light\">
        <div class=\"card-header\">
           <h4 class=\"card-title\">
                <i class=\"fas fa-lock\"></i>
                Connexion à l'Administration
           </h4> 
        </div>
        <div class=\"card-body\">
        {% if hasError %}
            <div class=\"alert alert-warning\">
                <p>Les informations que vous avez fournies ne sont pas bonnes.</p>
            </div>
        {% endif %}
            <form  method=\"post\">
                <div class=\"form-group\">
                    <label for=\"_username\">Email</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Adresse email...\" name=\"_username\" value={{ username }}>
                    <label for=\"_password\">Mot de passe</label>
                    <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe ...\" name=\"_password\">
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-lock-open\"></i> Connexion !</button>
                    <a href=\"{{ path('homepage') }}\" class=\"btn btn-link\">
                        <i class=\"fas fa-arrow-circle-left\"></i>
                        Retour au site
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>", "admin/account/login.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/account/login.html.twig");
    }
}
