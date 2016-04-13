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
        echo "<section id=\"layout-title\" style=\"background: url(";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
        echo ") no-repeat center center; background-size: cover;\">
    <div class=\"container\">
        <h3>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">
            <div class=\"blog\">
                <img src=\"";
        // line 11
        echo $this->env->getExtension('System')->appFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "avatar", array()), "path", array()));
        echo "\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h5>
                    <hr />
                    <p><strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt", array()), "html", null, true);
        echo "</strong></p>
                    <p class=\"text-muted\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "last_name", array()), "html", null, true);
        echo "</span>&nbsp;/&nbsp;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('CMS')->pageFilter("blog/post");
        echo "\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
        echo "\" alt=\"\"></a>
                    <div class=\"html-content\">
                        ";
        // line 19
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 24
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "count", array()) > 0)) {
            // line 25
            echo "                <h4 class=\"headline\"><span>Các Tin Liên Quan</span></h4>
                <div class=\"blog-roll\">
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 28
                echo "                    ";
                $context["postUrl"] = $this->env->getExtension('System')->appFilter(((("news/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "categories", array()), 0, array(), "array"), "slug", array())) . "/") . $this->getAttribute($context["post"], "slug", array())));
                // line 29
                echo "
                    ";
                // line 30
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['post'] = $context["post"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("blog/blog-compact"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </div>
            ";
        }
        // line 34
        echo "
            <!-- Pagination -->
            <!-- <ul class=\"pager pull-right\">
                <li class=\"previous\">
                    <a href=\"#\">
                        <span class=\"fui-arrow-left\"></span>
                        Previous
                    </a>
                </li>
                <li class=\"next\">
                    <a href=\"#\">
                        Next
                        <span class=\"fui-arrow-right\"></span>
                    </a>
                </li>
            </ul> -->
            <div class=\"clearfix\"></div>

        </div>
        <div class=\"col-sm-3\">

            ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 56
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
        return array (  133 => 56,  129 => 55,  106 => 34,  102 => 32,  96 => 31,  91 => 30,  88 => 29,  85 => 28,  81 => 27,  77 => 25,  75 => 24,  67 => 19,  58 => 17,  50 => 16,  46 => 15,  41 => 13,  36 => 11,  25 => 3,  19 => 1,);
    }
}
/* <section id="layout-title" style="background: url({{ post.featured_images[0].path }}) no-repeat center center; background-size: cover;">*/
/*     <div class="container">*/
/*         <h3>{{ post.title }}</h3>*/
/*     </div>*/
/* </section>*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-9">*/
/*             <div class="blog">*/
/*                 <img src="{{ post.user.avatar.path|app }}" alt="">*/
/*                 <div class="blog-desc">*/
/*                     <h5>{{ post.title }}</h5>*/
/*                     <hr />*/
/*                     <p><strong>{{ post.excerpt }}</strong></p>*/
/*                     <p class="text-muted">{{ post.user.first_name }} {{ post.user.last_name }}</span>&nbsp;/&nbsp;{{ post.published_at|date('d-m-Y') }}</p>*/
/*                     <a href="{{ 'blog/post'|page }}"><img class="img-responsive" src="{{ post.featured_images[0].path }}" data-src="{{ post.featured_images[0].path }}" alt=""></a>*/
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
/*             <!-- Pagination -->*/
/*             <!-- <ul class="pager pull-right">*/
/*                 <li class="previous">*/
/*                     <a href="#">*/
/*                         <span class="fui-arrow-left"></span>*/
/*                         Previous*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="next">*/
/*                     <a href="#">*/
/*                         Next*/
/*                         <span class="fui-arrow-right"></span>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul> -->*/
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
