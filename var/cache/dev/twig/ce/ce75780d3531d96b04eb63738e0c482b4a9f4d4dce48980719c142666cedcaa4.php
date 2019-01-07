<?php

/* admin/index.html.twig */
class __TwigTemplate_937cb24e35d108b0cd4c8a9b5e9188e0d46c4cfbda177b79d0bdbf0b0178eedd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customer index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row content-bar\">
        <div class=\"col-md-12\">
            <table class=\"table table-filter\">
                <thead>
                    <tr>
                        <th>Users</th>
                        <th>User Associated Groups</th>
                    </tr>
                </thead>
                <tbody>
                
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "                        <tr>
                            <td>
                                ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "getCustomerGroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user_groups"]) {
                // line 24
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user_groups"], "getCategoryId", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 25
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "getName", array(), "method"), "html", null, true);
                    echo "
                                    <input type=\"button\" value=\"Remove\" group_id=\"";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_groups"], "id", array()), "html", null, true);
                    echo "\" customer_id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                    echo "\" category_id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", array()), "html", null, true);
                    echo "\" class=\"delete_from_group\" />
                                    <br/>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_groups'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                        <tr>
                            <td colspan=\"3\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
            </table>
        </div>
    </div>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script>
        \$('.delete_from_group').click(function () {
            var group_id = \$(this).attr('group_id')
            var customer_id = \$(this).attr('customer_id')
            var category_id = \$(this).attr('category_id')
            //alert(group_id);
            // Request the neighborhoods of the selected city.
            \$.ajax({
                url: \"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_from_group");
        echo "\",
                type: \"POST\",
                dataType: \"JSON\",
                data: {
                    group_id: group_id,
                    customer_id: customer_id,
                    category_id: category_id
                },
                success: function (data) {
                    if(data.message == \"Success!\"){
                        alert(data.message);
                        window.location.reload();
                    }
                    
                },
                error: function (err) {
                    alert(err);
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  149 => 37,  140 => 33,  133 => 30,  127 => 29,  114 => 26,  109 => 25,  104 => 24,  100 => 23,  94 => 20,  90 => 18,  85 => 17,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Customer index{% endblock %}

{% block body %}
    <div class=\"row content-bar\">
        <div class=\"col-md-12\">
            <table class=\"table table-filter\">
                <thead>
                    <tr>
                        <th>Users</th>
                        <th>User Associated Groups</th>
                    </tr>
                </thead>
                <tbody>
                
                    {% for user in users %}
                        <tr>
                            <td>
                                {{user.name}}
                            </td>
                            <td>
                            {% for user_groups in user.getCustomerGroups %}
                                {% for group in user_groups.getCategoryId %}
                                    {{group.getName()}}
                                    <input type=\"button\" value=\"Remove\" group_id=\"{{user_groups.id}}\" customer_id=\"{{user.id}}\" category_id=\"{{group.id}}\" class=\"delete_from_group\" />
                                    <br/>
                                {% endfor %}
                            {% endfor %}
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\">no records found</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script>
        \$('.delete_from_group').click(function () {
            var group_id = \$(this).attr('group_id')
            var customer_id = \$(this).attr('customer_id')
            var category_id = \$(this).attr('category_id')
            //alert(group_id);
            // Request the neighborhoods of the selected city.
            \$.ajax({
                url: \"{{ path('remove_from_group') }}\",
                type: \"POST\",
                dataType: \"JSON\",
                data: {
                    group_id: group_id,
                    customer_id: customer_id,
                    category_id: category_id
                },
                success: function (data) {
                    if(data.message == \"Success!\"){
                        alert(data.message);
                        window.location.reload();
                    }
                    
                },
                error: function (err) {
                    alert(err);
                }
            });
        });
    </script>
{% endblock %}
", "admin/index.html.twig", "/Users/dileepkumar/Documents/m/many-to-many/templates/admin/index.html.twig");
    }
}
