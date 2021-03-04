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
class __TwigTemplate_321144e1021d9f444f934bebe3c3f00bcaf521bc88903373298c0b42e21fb2b7 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>LineBnB - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
        <link rel=\"stylesheet\" href=\"/css/app.css\">
";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        
    </head>
    <body>

        ";
        // line 17
        $this->loadTemplate("partials/header.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "

        
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->loadTemplate("partials/footer.html.twig", "base.html.twig", 24)->display($context);
        // line 25
        echo "
         
        
        <script src=\"/js/jquery.min.js\"></script>
        <script src=\"/js/popper.min.js\"></script>
        <script src=\"/js/bootstrap.min.js\"></script>

";
        // line 33
        echo "


        ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </body>

       
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
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
        return array (  125 => 36,  121 => 22,  117 => 21,  113 => 11,  109 => 10,  102 => 5,  94 => 37,  92 => 36,  87 => 33,  78 => 25,  76 => 24,  73 => 23,  71 => 21,  66 => 18,  64 => 17,  57 => 12,  54 => 10,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Applications/MAMP/htdocs/lineup/templates/base.html.twig");
    }
}
