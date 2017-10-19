<?php

/* menu.html.twig */
class __TwigTemplate_0d5632447f5d7255f4f01e880e3d0f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"> Bienvenido </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
               
                <li class=\"dropdown\">
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("zdc_user_index");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Lista de usuarios  <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("zdc_user_index");
        echo "\"> Lista de Usuarios </a></li>
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("zdc_user_add");
        echo "\"> Nuevo Usuario </a></li>
                    </ul>
                </li>
                
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"\"></a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>






";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  44 => 21,  39 => 19,  19 => 1,);
    }
}
