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

/* admin/student_field.html.twig */
class __TwigTemplate_d79e4a82422e4f798118b26341432ba9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/student_field.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/student_field.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ( !(null === (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 4, $this->source); })()), "getFirstName", [], "method", false, false, false, 4), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 4, $this->source); })()), "getLastName", [], "method", false, false, false, 4), "html", null, true);
            echo "
";
        } else {
            // line 6
            echo "    (Aucun étudiant)
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/student_field.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  56 => 6,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/admin/student_field.html.twig #}

{% if student is not null %}
    {{ student.getFirstName() }} {{ student.getLastName() }}
{% else %}
    (Aucun étudiant)
{% endif %}", "admin/student_field.html.twig", "C:\\Users\\matth\\Desktop\\test_symfony\\app\\templates\\admin\\student_field.html.twig");
    }
}
