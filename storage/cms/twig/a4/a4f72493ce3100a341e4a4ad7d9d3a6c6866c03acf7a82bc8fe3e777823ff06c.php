<?php

/* /home/kennabi/uat/ironman703vn/themes/responsiv-flat/pages/404.htm */
class __TwigTemplate_5934fde44594a6b8b81d5e3febb1797f02a71f5de8223feab71c547769b2bd26 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-2 text-center\">
                <br />
                <img src=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/svg/compas.svg");
        echo "\" alt=\"\">
            </div>
            <div class=\"col-xs-10\">
                <h1>You appear to be lost...</h1>
                <p>We're very sorry, but the page you requested <em>cannot be found</em> here.</p>
                <p>Try returning to where you started with this compass.</p>
                <p><small><em>Error code: 404</em></small>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kennabi/uat/ironman703vn/themes/responsiv-flat/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-2 text-center">*/
/*                 <br />*/
/*                 <img src="{{ 'assets/images/icons/svg/compas.svg'|theme }}" alt="">*/
/*             </div>*/
/*             <div class="col-xs-10">*/
/*                 <h1>You appear to be lost...</h1>*/
/*                 <p>We're very sorry, but the page you requested <em>cannot be found</em> here.</p>*/
/*                 <p>Try returning to where you started with this compass.</p>*/
/*                 <p><small><em>Error code: 404</em></small>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
