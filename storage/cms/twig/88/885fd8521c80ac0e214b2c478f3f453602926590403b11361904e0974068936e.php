<?php

/* /Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/partials/nav.htm */
class __TwigTemplate_a5efae1538b2bc9f5c6c6e000a7b52b5b50af240c2da51bd1f71096ea29e3f25 extends Twig_Template
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
        echo "<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button id=\"main-nav-trigger\" type=\"button\" class=\"navbar-toggle collapsed\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">IronMan70.3Vietnam</a>
        </div>
        <div class=\"navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li ";
        // line 13
        echo ((($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) ? ("class=\"active\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\" title=\"Trang Chủ\">Trang Chủ</a>
                <li ";
        // line 14
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), array(0 => "blog-blog", 1 => "blog-post"))) ? ("class=\"active\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog");
        echo "\" title=\"Tin Tức\">Tin Tức</a>
                <li ";
        // line 15
        echo ((($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "gallery")) ? ("class=\"active\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("gallery");
        echo "\" title=\"Thư Viện\">Thư Viện</a>
                <li ";
        // line 16
        echo ((($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "games")) ? ("class=\"active\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("games");
        echo "\" title=\"Games\">Games</a>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  48 => 15,  42 => 14,  36 => 13,  29 => 9,  19 => 1,);
    }
}
/* <nav id="layout-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button id="main-nav-trigger" type="button" class="navbar-toggle collapsed">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ 'home'|page }}">IronMan70.3Vietnam</a>*/
/*         </div>*/
/*         <div class="navbar-collapse navbar-main-collapse">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li {{ this.page.id == 'home' ? 'class="active"' : '' }}><a href="{{ 'home'|page }}" title="Trang Chủ">Trang Chủ</a>*/
/*                 <li {{ this.page.id in ['blog-blog', 'blog-post'] ? 'class="active"' : '' }}><a href="{{ 'blog/blog'|page }}" title="Tin Tức">Tin Tức</a>*/
/*                 <li {{ this.page.id == 'gallery' ? 'class="active"' : '' }}><a href="{{ 'gallery'|page }}" title="Thư Viện">Thư Viện</a>*/
/*                 <li {{ this.page.id == 'games' ? 'class="active"' : '' }}><a href="{{ 'games'|page }}" title="Games">Games</a>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
