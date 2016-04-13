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
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Trang Chủ"), "news" => array(0 => "blog/blog", 1 => "Tin Tức"), "gallery" => array(0 => "portfolio/portfolio", 1 => "Thư Viện"));
        // line 9
        echo "
";
        // line 30
        echo "
";
        // line 31
        $context["nav"] = $this;
        // line 32
        echo "
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 42
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">IronMan70.3Vietnam</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 46
        echo $context["nav"]->getrender_menu((isset($context["links"]) ? $context["links"] : null));
        echo "
            </ul>
        </div>
    </div>
</nav>";
    }

    // line 10
    public function getrender_menu($__links__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 12
                echo "        <li class=\"";
                echo ((($context["code"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 14
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('CMS')->pageFilter((($this->getAttribute($context["link"], "page", array())) ? ($this->getAttribute($context["link"], "page", array())) : ($this->getAttribute($context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 15
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 16
                echo "                class=\"";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 18
                echo twig_escape_filter($this->env, (($this->getAttribute($context["link"], "name", array())) ? ($this->getAttribute($context["link"], "name", array())) : ($this->getAttribute($context["link"], 1, array(), "array"))), "html", null, true);
                echo "
                ";
                // line 19
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 20
                echo "            </a>
            ";
                // line 21
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    // line 22
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 24
                    echo $this->getAttribute($this, "render_menu", array(0 => $this->getAttribute($context["link"], "sublinks", array())), "method");
                    echo "
                </ul>
            ";
                }
                // line 27
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        return array (  119 => 27,  113 => 24,  109 => 22,  107 => 21,  104 => 20,  100 => 19,  96 => 18,  90 => 16,  86 => 15,  82 => 14,  74 => 12,  69 => 11,  57 => 10,  48 => 46,  41 => 42,  29 => 32,  27 => 31,  24 => 30,  21 => 9,  19 => 2,);
    }
}
/* {# Note: Only one levels of sublinks are supported by Bootstrap 3 #}*/
/* {% set*/
/*     links = {*/
/*         'home': ['home', 'Trang Chủ'],*/
/*         'news': ['blog/blog', 'Tin Tức'],*/
/*         'gallery': ['portfolio/portfolio', 'Thư Viện'],*/
/*     }*/
/* %}*/
/* */
/* {% macro render_menu(links) %}*/
/*     {% for code, link in links %}*/
/*         <li class="{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}">*/
/*             <a*/
/*                 href="{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}"*/
/*                 {% if link.sublinks %}data-toggle="dropdown"{% endif %}*/
/*                 class="{{ link.sublinks ? 'dropdown-toggle' }}"*/
/*             >*/
/*                 {{ link.name ?: link[1] }}*/
/*                 {% if link.sublinks %}<span class="caret"></span>{% endif %}*/
/*             </a>*/
/*             {% if link.sublinks %}*/
/*                 <span class="dropdown-arrow"></span>*/
/*                 <ul class="dropdown-menu">*/
/*                     {{ _self.render_menu(link.sublinks) }}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as nav %}*/
/* */
/* <nav id="layout-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ 'home'|page }}">IronMan70.3Vietnam</a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse navbar-main-collapse">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 {{ nav.render_menu(links) }}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
