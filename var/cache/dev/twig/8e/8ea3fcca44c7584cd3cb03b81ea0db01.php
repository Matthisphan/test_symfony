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

/* student/list.html.twig */
class __TwigTemplate_19e7ec89aa316196fbf9ad4ebe779cc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "student/list.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "test_symfony | Liste";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
";
        // line 14
        $context["sortedStudents"] = twig_sort_filter($this->env, (isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 14, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 14, $this->source); })()), "lastName", [], "any", false, false, false, 14) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 14, $this->source); })()), "lastName", [], "any", false, false, false, 14)); });
        // line 15
        echo "
<section class=\"container\">
    <table>
        <caption>Liste des étudiants</caption>
        <thead>
            <tr>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
                <th scope=\"col\">Classe</th>
                <th scope=\"col\">Matière</th>
                <th scope=\"col\">Intitulé</th>
                <th scope=\"col\">Note</th>
                <th scope=\"col\">Coefficient</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sortedStudents"]) || array_key_exists("sortedStudents", $context) ? $context["sortedStudents"] : (function () { throw new RuntimeError('Variable "sortedStudents" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 32
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["student"], "marks", [], "any", false, false, false, 32))) {
                // line 33
                echo "                    ";
                $context["totalNote"] = 0;
                // line 34
                echo "                    ";
                $context["totalCoefficient"] = 0;
                // line 35
                echo "                    ";
                $context["totalMarks"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "marks", [], "any", false, false, false, 35));
                // line 36
                echo "
                    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["student"], "marks", [], "any", false, false, false, 37));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 38
                    echo "                        <tr>
                            ";
                    // line 39
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 39)) {
                        // line 40
                        echo "                                <td class=\"maj\" rowspan=\"";
                        echo twig_escape_filter($this->env, (isset($context["totalMarks"]) || array_key_exists("totalMarks", $context) ? $context["totalMarks"] : (function () { throw new RuntimeError('Variable "totalMarks" does not exist.', 40, $this->source); })()), "html", null, true);
                        echo "\" data-label=\"Nom\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "lastName", [], "any", false, false, false, 40), "html", null, true);
                        echo "</td>
                                <td rowspan=\"";
                        // line 41
                        echo twig_escape_filter($this->env, (isset($context["totalMarks"]) || array_key_exists("totalMarks", $context) ? $context["totalMarks"] : (function () { throw new RuntimeError('Variable "totalMarks" does not exist.', 41, $this->source); })()), "html", null, true);
                        echo "\" data-label=\"Prénom\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "firstName", [], "any", false, false, false, 41), "html", null, true);
                        echo "</td>
                                <td rowspan=\"";
                        // line 42
                        echo twig_escape_filter($this->env, (isset($context["totalMarks"]) || array_key_exists("totalMarks", $context) ? $context["totalMarks"] : (function () { throw new RuntimeError('Variable "totalMarks" does not exist.', 42, $this->source); })()), "html", null, true);
                        echo "\" data-label=\"Classe\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "classe", [], "any", false, false, false, 42), "html", null, true);
                        echo "</td>
                            ";
                    }
                    // line 44
                    echo "                            <td class=\"maj\" data-label=\"Matière\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grade"], "matiere", [], "any", false, false, false, 44), "html", null, true);
                    echo "</td>
                            <td class=\"maj\" data-label=\"Intitulé\">";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grade"], "getNomControle", [], "method", false, false, false, 45), "html", null, true);
                    echo "</td>
                            <td data-label=\"Note\">";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grade"], "note", [], "any", false, false, false, 46), "html", null, true);
                    echo "</td>
                            <td data-label=\"Coefficient\">";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grade"], "coefficient", [], "any", false, false, false, 47), "html", null, true);
                    echo "</td>
                            ";
                    // line 48
                    $context["totalNote"] = ((isset($context["totalNote"]) || array_key_exists("totalNote", $context) ? $context["totalNote"] : (function () { throw new RuntimeError('Variable "totalNote" does not exist.', 48, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["grade"], "note", [], "any", false, false, false, 48) * twig_get_attribute($this->env, $this->source, $context["grade"], "coefficient", [], "any", false, false, false, 48)));
                    // line 49
                    echo "                            ";
                    $context["totalCoefficient"] = ((isset($context["totalCoefficient"]) || array_key_exists("totalCoefficient", $context) ? $context["totalCoefficient"] : (function () { throw new RuntimeError('Variable "totalCoefficient" does not exist.', 49, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["grade"], "coefficient", [], "any", false, false, false, 49));
                    // line 50
                    echo "                        </tr>

                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "
                    <tr class=\"last_tr\">
                        <td colspan=\"7\" data-label=\"\"><strong>Moyenne Générale : ";
                // line 55
                ((((isset($context["totalCoefficient"]) || array_key_exists("totalCoefficient", $context) ? $context["totalCoefficient"] : (function () { throw new RuntimeError('Variable "totalCoefficient" does not exist.', 55, $this->source); })()) != 0)) ? (print (twig_escape_filter($this->env, ((isset($context["totalNote"]) || array_key_exists("totalNote", $context) ? $context["totalNote"] : (function () { throw new RuntimeError('Variable "totalNote" does not exist.', 55, $this->source); })()) / (isset($context["totalCoefficient"]) || array_key_exists("totalCoefficient", $context) ? $context["totalCoefficient"] : (function () { throw new RuntimeError('Variable "totalCoefficient" does not exist.', 55, $this->source); })())), "html", null, true))) : (print (0)));
                echo "</strong></td>
                    </tr>
                ";
            }
            // line 58
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "student/list.html.twig";
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
        return array (  254 => 59,  248 => 58,  242 => 55,  238 => 53,  222 => 50,  219 => 49,  217 => 48,  213 => 47,  209 => 46,  205 => 45,  200 => 44,  193 => 42,  187 => 41,  180 => 40,  178 => 39,  175 => 38,  158 => 37,  155 => 36,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  139 => 31,  121 => 15,  119 => 14,  116 => 13,  106 => 12,  94 => 9,  89 => 8,  79 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/student/list.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}test_symfony | Liste{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
{% endblock %}

{% block body %}

{% set sortedStudents = students|sort((a, b) => a.lastName <=> b.lastName) %}

<section class=\"container\">
    <table>
        <caption>Liste des étudiants</caption>
        <thead>
            <tr>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
                <th scope=\"col\">Classe</th>
                <th scope=\"col\">Matière</th>
                <th scope=\"col\">Intitulé</th>
                <th scope=\"col\">Note</th>
                <th scope=\"col\">Coefficient</th>
            </tr>
        </thead>
        <tbody>
            {% for student in sortedStudents %}
                {% if student.marks is not empty %}
                    {% set totalNote = 0 %}
                    {% set totalCoefficient = 0 %}
                    {% set totalMarks = student.marks|length %}

                    {% for grade in student.marks %}
                        <tr>
                            {% if loop.first %}
                                <td class=\"maj\" rowspan=\"{{ totalMarks }}\" data-label=\"Nom\">{{ student.lastName }}</td>
                                <td rowspan=\"{{ totalMarks }}\" data-label=\"Prénom\">{{ student.firstName }}</td>
                                <td rowspan=\"{{ totalMarks }}\" data-label=\"Classe\">{{ student.classe }}</td>
                            {% endif %}
                            <td class=\"maj\" data-label=\"Matière\">{{ grade.matiere }}</td>
                            <td class=\"maj\" data-label=\"Intitulé\">{{ grade.getNomControle() }}</td>
                            <td data-label=\"Note\">{{ grade.note }}</td>
                            <td data-label=\"Coefficient\">{{ grade.coefficient }}</td>
                            {% set totalNote = totalNote + (grade.note * grade.coefficient) %}
                            {% set totalCoefficient = totalCoefficient + grade.coefficient %}
                        </tr>

                    {% endfor %}

                    <tr class=\"last_tr\">
                        <td colspan=\"7\" data-label=\"\"><strong>Moyenne Générale : {{ (totalCoefficient != 0) ? totalNote / totalCoefficient : 0 }}</strong></td>
                    </tr>
                {% endif %}
            {% endfor %}
        </tbody>
    </table>
</section>
{% endblock %}

{#

#}", "student/list.html.twig", "C:\\Users\\matth\\Desktop\\test_symfony\\app\\templates\\student\\list.html.twig");
    }
}
