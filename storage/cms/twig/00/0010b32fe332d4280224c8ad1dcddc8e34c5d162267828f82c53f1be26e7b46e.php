<?php

/* /Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/pages/blog/post.htm */
class __TwigTemplate_6b7f0bb36f2f502fffa46e55ac1640af50d74fa4bfc306aef9ed2cb75facaa54 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array")) {
            // line 2
            echo "    <section id=\"layout-title\" style=\"background: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
            echo ") no-repeat center center; background-size: cover;\">
";
        } else {
            // line 4
            echo "    <section id=\"layout-title\" style=\"background: #efefef url(";
            echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo-pattern.png");
            echo ") repeat 0 0 ;\">
";
        }
        // line 6
        echo "    <div class=\"container\">
        <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">
            <div class=\"blog\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "avatar", array()), "path", array()), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h5>
                    <hr />
                    <p><strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt", array()), "html", null, true);
        echo "</strong></p>
                    <p class=\"text-muted\"><span>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "last_name", array()), "html", null, true);
        echo "</span>&nbsp;/&nbsp;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <p class=\"featured-image\"><a href=\"";
        // line 21
        echo $this->env->getExtension('CMS')->pageFilter("blog/post");
        echo "\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
        echo "\" alt=\"\"></a></p>
                    <div class=\"html-content\">
                        ";
        // line 23
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 28
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "count", array()) > 0)) {
            // line 29
            echo "                <h4 class=\"headline\"><span>Các Tin Liên Quan</span></h4>
                <div class=\"blog-roll\">
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 32
                echo "                    ";
                $context["postUrl"] = $this->env->getExtension('System')->appFilter(((("news/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "categories", array()), 0, array(), "array"), "slug", array())) . "/") . $this->getAttribute($context["post"], "slug", array())));
                // line 33
                echo "
                    ";
                // line 34
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['post'] = $context["post"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("blog/blog-compact"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 35
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </div>
            ";
        }
        // line 38
        echo "
            <div class=\"clearfix\"></div>

        </div>
        <div class=\"col-sm-3\">

            ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  125 => 44,  117 => 38,  113 => 36,  107 => 35,  102 => 34,  99 => 33,  96 => 32,  92 => 31,  88 => 29,  86 => 28,  78 => 23,  69 => 21,  61 => 20,  57 => 19,  52 => 17,  47 => 15,  36 => 7,  33 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if post.featured_images[0]  %}*/
/*     <section id="layout-title" style="background: url({{ post.featured_images[0].path }}) no-repeat center center; background-size: cover;">*/
/* {% else %}*/
/*     <section id="layout-title" style="background: #efefef url({{ 'assets/images/logo-pattern.png'|theme }}) repeat 0 0 ;">*/
/* {% endif %}*/
/*     <div class="container">*/
/*         <h3>{{ post.title }}</h3>*/
/*     </div>*/
/* </section>*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-9">*/
/*             <div class="blog">*/
/*                 <img src="{{ post.user.avatar.path }}" alt="">*/
/*                 <div class="blog-desc">*/
/*                     <h5>{{ post.title }}</h5>*/
/*                     <hr />*/
/*                     <p><strong>{{ post.excerpt }}</strong></p>*/
/*                     <p class="text-muted"><span>{{ post.user.first_name }} {{ post.user.last_name }}</span>&nbsp;/&nbsp;{{ post.published_at|date('d-m-Y') }}</p>*/
/*                     <p class="featured-image"><a href="{{ 'blog/post'|page }}"><img class="img-responsive" src="{{ post.featured_images[0].path }}" data-src="{{ post.featured_images[0].path }}" alt=""></a></p>*/
/*                     <div class="html-content">*/
/*                         {{ post.content_html|raw }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% if posts.count > 0 %}*/
/*                 <h4 class="headline"><span>Các Tin Liên Quan</span></h4>*/
/*                 <div class="blog-roll">*/
/*                 {% for post in posts %}*/
/*                     {% set postUrl = ( 'news/' ~ post.categories[0].slug ~ '/' ~ post.slug )|app %}*/
/* */
/*                     {% partial "blog/blog-compact" post=post %}*/
/*                 {% endfor %}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*         </div>*/
/*         <div class="col-sm-3">*/
/* */
/*             {% partial 'blog/sidebar' %}*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
