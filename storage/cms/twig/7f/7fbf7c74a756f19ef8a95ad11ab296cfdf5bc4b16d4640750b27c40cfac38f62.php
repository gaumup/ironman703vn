<?php

/* /Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/pages/blog/blog.htm */
class __TwigTemplate_b76bb277572b0a0e9344d4d48bba6a7a7ea99b7c3ce5acadcf2ff853ed804fae extends Twig_Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Tin Tức</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            ";
        // line 11
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "count", array()) > 0)) {
            // line 12
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 13
                echo "                    ";
                $context["postUrl"] = $this->env->getExtension('System')->appFilter(((("news/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "categories", array()), 0, array(), "array"), "slug", array())) . "/") . $this->getAttribute($context["post"], "slug", array())));
                // line 14
                echo "                    <div class=\"blog\">
                        <img src=\"";
                // line 15
                echo $this->env->getExtension('System')->appFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "user", array()), "avatar", array()), "path", array()));
                echo "\" alt=\"\">
                        <div class=\"blog-desc\">
                            <h5>
                                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["postUrl"]) ? $context["postUrl"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a>
                            </h5>
                            <hr />
                            <p class=\"text-muted\"><span>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "first_name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "last_name", array()), "html", null, true);
                echo "</span>&nbsp;/&nbsp;";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "d-m-Y"), "html", null, true);
                echo "</p>
                            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["postUrl"]) ? $context["postUrl"] : null), "html", null, true);
                echo "\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                echo "\" data-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                echo "\" /></a>
                            <p>";
                // line 23
                if ($this->getAttribute($context["post"], "excerpt", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "excerpt", array()), "html", null, true);
                } else {
                    echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "summary", array()), 250, "..."));
                }
                echo "</p>
                            <a class=\"btn btn-lg btn-default\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, (isset($context["postUrl"]) ? $context["postUrl"] : null), "html", null, true);
                echo "\">Xem chi tiết...</a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                <!-- Pagination -->
                ";
            // line 29
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['base'] = "blog?p="            ;
            $context['__cms_partial_params']['total'] = $this->getAttribute(            // line 31
(isset($context["posts"]) ? $context["posts"] : null), "total", array(), "method")            ;
            $context['__cms_partial_params']['perPage'] = $this->getAttribute(            // line 32
(isset($context["posts"]) ? $context["posts"] : null), "perPage", array(), "method")            ;
            $context['__cms_partial_params']['first'] = ""            ;
            $context['__cms_partial_params']['last'] = $this->getAttribute(            // line 34
(isset($context["posts"]) ? $context["posts"] : null), "lastPage", array(), "method")            ;
            $context['__cms_partial_params']['current'] = $this->getAttribute(            // line 35
(isset($context["posts"]) ? $context["posts"] : null), "currentPage", array(), "method")            ;
            $context['__cms_partial_params']['hasMorePages'] = $this->getAttribute(            // line 36
(isset($context["posts"]) ? $context["posts"] : null), "hasMorePages", array(), "method")            ;
            $context['__cms_partial_params']['nextPageUrl'] = $this->getAttribute(            // line 37
(isset($context["posts"]) ? $context["posts"] : null), "nextPageUrl", array(), "method")            ;
            $context['__cms_partial_params']['prevPageUrl'] = $this->getAttribute(            // line 38
(isset($context["posts"]) ? $context["posts"] : null), "previousPageUrl", array(), "method")            ;
            echo $this->env->getExtension('CMS')->partialFunction("blog/pagination"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 40
            echo "            ";
        } else {
            // line 41
            echo "                <p class=\"no-posts\">Chưa có bài viết</p>
            ";
        }
        // line 43
        echo "            <div class=\"clearfix\"></div>
        </div>
        <div class=\"col-sm-3\">

            ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/pages/blog/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  128 => 47,  122 => 43,  118 => 41,  115 => 40,  111 => 38,  109 => 37,  107 => 36,  105 => 35,  103 => 34,  100 => 32,  98 => 31,  95 => 29,  92 => 28,  82 => 24,  74 => 23,  66 => 22,  58 => 21,  50 => 18,  44 => 15,  41 => 14,  38 => 13,  33 => 12,  31 => 11,  19 => 1,);
    }
}
/* <section id="layout-title">*/
/*     <div class="container">*/
/*         <h3>Tin Tức</h3>*/
/*     </div>*/
/* </section>*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-9">*/
/* */
/*             {% if posts.count > 0 %}*/
/*                 {% for post in posts %}*/
/*                     {% set postUrl = ( 'news/' ~ post.categories[0].slug ~ '/' ~ post.slug )|app %}*/
/*                     <div class="blog">*/
/*                         <img src="{{ post.user.avatar.path|app }}" alt="">*/
/*                         <div class="blog-desc">*/
/*                             <h5>*/
/*                                 <a href="{{ postUrl }}">{{ post.title }}</a>*/
/*                             </h5>*/
/*                             <hr />*/
/*                             <p class="text-muted"><span>{{ post.user.first_name }} {{ post.user.last_name }}</span>&nbsp;/&nbsp;{{ post.published_at|date('d-m-Y') }}</p>*/
/*                             <a href="{{ postUrl }}"><img class="img-responsive" src="{{ post.featured_images[0].path }}" data-src="{{ post.featured_images[0].path }}" /></a>*/
/*                             <p>{% if post.excerpt %}{{ post.excerpt }}{% else %}{{ str_limit( post.summary, 250, '...' ) }}{% endif %}</p>*/
/*                             <a class="btn btn-lg btn-default" href="{{ postUrl }}">Xem chi tiết...</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*                 <!-- Pagination -->*/
/*                 {% partial "blog/pagination"*/
/*                     base='blog?p='*/
/*                     total=posts.total()*/
/*                     perPage=posts.perPage()*/
/*                     first=""*/
/*                     last=posts.lastPage()*/
/*                     current=posts.currentPage()*/
/*                     hasMorePages=posts.hasMorePages()*/
/*                     nextPageUrl=posts.nextPageUrl()*/
/*                     prevPageUrl=posts.previousPageUrl()*/
/*                 %}*/
/*             {% else %}*/
/*                 <p class="no-posts">Chưa có bài viết</p>*/
/*             {% endif %}*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/* */
/*             {% partial 'blog/sidebar' %}*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
