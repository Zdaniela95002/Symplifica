<?php

/* ZdcUserBundle:User:view.html.twig */
class __TwigTemplate_cf5187b0dc70b9a7303bcafd3f9d6bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-md-9\">
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firtsName"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "</h2>
            <br>
            <dl>
                <dt>Usuario</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "  

                </dd>
                <br>

               <dt>Nombres:</dt>
                <dd>
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firtsName"), "html", null, true);
        echo "  
                </dd>
                <br>

                <dt>Apellidos:</dt>
                <dd>
                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "  
                </dd>
                <br>

                <dt>Email:</dt>
                <dd>
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "  
                </dd>
                <br>
 
                <dt>Role:</dt>
                <dd>
                    ";
        // line 37
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role") == "ROLE_ADMIN")) {
            // line 38
            echo "                    <strong> Administrador</strong>
                    ";
        } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role") == "ROLE_USER")) {
            // line 40
            echo "                    <strong> Usuario</strong>
                    ";
        }
        // line 42
        echo "                    
                </dd>
                <br>

                <dt>Activo:</dt>
                <dd>
                    ";
        // line 48
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isActive") == 1)) {
            // line 49
            echo "                    <span class=\"text-success\"> Habilitado </span>
                    ";
        } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isActive") == 0)) {
            // line 51
            echo "                    <span class=\"text-success\"> Deshabilitado </span>
                    ";
        }
        // line 52
        echo "      
                </dd>
                <br>
            </dl>
 </div> 
            <div class=\"col-md-3\">
                <h3>Acciones</h3>
                <p>
                <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zdc_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary  lg-btn btn-block \">
                <span class=\"glyphicon glyphicon-edit\"></span>
                Editatr Usuario
            </a>
            </p>

          <p>
            ";
        // line 67
        echo twig_include($this->env, $context, "ZdcUserBundle:User:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form"))));
        echo "

            </p>
        </div>

            </div>

         
    </div>
";
    }

    public function getTemplateName()
    {
        return "ZdcUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 67,  123 => 60,  113 => 52,  109 => 51,  105 => 49,  103 => 48,  95 => 42,  91 => 40,  87 => 38,  85 => 37,  76 => 31,  67 => 25,  58 => 19,  48 => 12,  38 => 7,  31 => 4,  28 => 3,);
    }
}
