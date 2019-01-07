<?php

/* admin/add_users_to_group.html.twig */
class __TwigTemplate_06fd9876931c525e103321a6c25297347ab0b4c50722642469f5ec415105457b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/add_users_to_group.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_users_to_group.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_users_to_group.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row content-bar\">
        <div class=\"col-md-12\">
            <table class=\"table table-filter\">
                <thead>
                    <tr>
                        <th>Users</th>
                        <th>Groups</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                
                    
                        <tr>
                        \t<td>
                        \t\t<select name=\"user\" id=\"user\">
                        \t\t\t<option value=\"\">Select User</option>
                        \t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new Twig_Error_Runtime('Variable "customers" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 22
            echo "\t\t\t\t\t\t\t\t        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t\t\t\t    </select>
                        \t</td>

                        \t<td>
                        \t\t<select name=\"group\" id=\"group\">
                        \t\t\t<option value=\"\">Select Group</option>
                        \t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 31
            echo "\t\t\t\t\t\t\t\t        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t\t\t\t    </select>
                        \t</td>
                            
                            <td>
                            \t<input type=\"button\" value=\"Add\" id=\"add_to_group\" />
                            </td>
                        </tr>
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new Twig_Error_Runtime('Variable "customers" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 41
            echo "
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "                        <tr>
                            <td colspan=\"3\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>
        </div>
    </div>
 <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script>
        \$('#add_to_group').click(function () {
            var group_id = \$('#group').val();
            var user_id = \$('#user').val();
            if(user_id == \"\" || group_id ==\"\"){
            \talert('Select user & group to add');
            \treturn false;
            }
            // Request the neighborhoods of the selected city.
            \$.ajax({
                url: \"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_group");
        echo "\",
                type: \"POST\",
                dataType: \"JSON\",
                data: {
                    customer_id: user_id,
                    category_id: group_id
                },
                success: function (data) {
                    alert(data.message);
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
        return "admin/add_users_to_group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 62,  139 => 47,  130 => 43,  124 => 41,  119 => 40,  110 => 33,  99 => 31,  95 => 30,  87 => 24,  76 => 22,  72 => 21,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row content-bar\">
        <div class=\"col-md-12\">
            <table class=\"table table-filter\">
                <thead>
                    <tr>
                        <th>Users</th>
                        <th>Groups</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                
                    
                        <tr>
                        \t<td>
                        \t\t<select name=\"user\" id=\"user\">
                        \t\t\t<option value=\"\">Select User</option>
                        \t\t\t{% for customer in customers %}
\t\t\t\t\t\t\t\t        <option value=\"{{customer.id}}\">{{customer.name}}</option>
\t\t\t\t\t\t\t\t    {% endfor %}
\t\t\t\t\t\t\t    </select>
                        \t</td>

                        \t<td>
                        \t\t<select name=\"group\" id=\"group\">
                        \t\t\t<option value=\"\">Select Group</option>
                        \t\t\t{% for group in groups %}
\t\t\t\t\t\t\t\t        <option value=\"{{group.id}}\">{{group.name}}</option>
\t\t\t\t\t\t\t\t    {% endfor %}
\t\t\t\t\t\t\t    </select>
                        \t</td>
                            
                            <td>
                            \t<input type=\"button\" value=\"Add\" id=\"add_to_group\" />
                            </td>
                        </tr>
                    {% for customer in customers %}

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
        \$('#add_to_group').click(function () {
            var group_id = \$('#group').val();
            var user_id = \$('#user').val();
            if(user_id == \"\" || group_id ==\"\"){
            \talert('Select user & group to add');
            \treturn false;
            }
            // Request the neighborhoods of the selected city.
            \$.ajax({
                url: \"{{ path('add_to_group') }}\",
                type: \"POST\",
                dataType: \"JSON\",
                data: {
                    customer_id: user_id,
                    category_id: group_id
                },
                success: function (data) {
                    alert(data.message);
                },
                error: function (err) {
                    alert(err);
                }
            });
        });
    </script>
{% endblock %}

", "admin/add_users_to_group.html.twig", "/Users/dileepkumar/Documents/m/many-to-many/templates/admin/add_users_to_group.html.twig");
    }
}
