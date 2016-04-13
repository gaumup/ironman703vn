<?php

/* /Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_434a9e2e3946c8cb6efbdd0f4194eb1633015883f46a0059a46c36bcfffd80a7 extends Twig_Template
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
        echo "<section class=\"home-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"home-slider\" class=\"home-slider owl-carousel\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 6
            echo "                    ";
            if (preg_match("{^<video>}", $this->getAttribute($context["image"], "description", array()))) {
                // line 7
                echo "                        ";
                $context["video"] = true;
                // line 8
                echo "                    ";
            } else {
                // line 9
                echo "                        ";
                $context["video"] = false;
                // line 10
                echo "                    ";
            }
            // line 11
            echo "
                    ";
            // line 12
            if ((isset($context["video"]) ? $context["video"] : null)) {
                // line 13
                echo "                        <div class=\"home-slider__item\">
                            <a class=\"owl-video\" href=\"";
                // line 14
                echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), array("strip", $this->getAttribute($context["image"], "description", array())));
                echo "\"></a>
                        </div>
                    ";
            } else {
                // line 17
                echo "                        <div class=\"home-slider__item\">
                            ";
                // line 18
                if (preg_match("{^<url>}", $this->getAttribute($context["image"], "description", array()))) {
                    // line 19
                    echo "                            <a href=\"";
                    echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), array("strip", $this->getAttribute($context["image"], "description", array())));
                    echo "\" target=\"_blank\" title=\"\">
                                <img class=\"banner-img\" src=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                    echo "\" />
                            </a>
                            ";
                } else {
                    // line 23
                    echo "                                <img class=\"banner-img\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                    echo "\" />
                            ";
                }
                // line 25
                echo "                        </div>
                    ";
            }
            // line 27
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
        </div>
    </div>
</section>

<div class=\"container\">

    <div class=\"recent-tweets\">
        <h4 class=\"headline\"><span>Hot Nhất</span></h4>

        <!-- Hot posts -->
        ";
        // line 39
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "count", array()) > 0)) {
            // line 40
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["posts"]) ? $context["posts"] : null), 0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 41
                echo "                ";
                $context["postUrl"] = $this->env->getExtension('System')->appFilter(((("news/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "categories", array()), 0, array(), "array"), "slug", array())) . "/") . $this->getAttribute($context["post"], "slug", array())));
                // line 42
                echo "
                <div class=\"tweet\">
                    <i class=\"icon-rss\"></i>
                    <p>
                        <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["postUrl"]) ? $context["postUrl"] : null), "html", null, true);
                echo "\">";
                if ($this->getAttribute($context["post"], "excerpt", array())) {
                    echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "excerpt", array()), 250, "..."));
                } else {
                    echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "summary", array()), 250, "..."));
                }
                echo "</a>
                        <span>";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "d-m-Y"), "html", null, true);
                echo "</span>
                    </p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
        }
        // line 52
        echo "
        <br />

        <!-- List 8 newest posts -->
        <h4 class=\"headline\"><span>Tin Tức Mới Nhất</span></h4>

        ";
        // line 58
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "count", array()) > 0)) {
            // line 59
            echo "            <div class=\"blog-roll\">
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["posts"]) ? $context["posts"] : null), 2));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 61
                echo "                ";
                $context["postUrl"] = $this->env->getExtension('System')->appFilter(((("news/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "categories", array()), 0, array(), "array"), "slug", array())) . "/") . $this->getAttribute($context["post"], "slug", array())));
                // line 62
                echo "
                ";
                // line 63
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['post'] = $context["post"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("blog/blog-compact"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 64
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </div>
        ";
        }
        // line 67
        echo "    </div>

</div>

<br />";
    }

    public function getTemplateName()
    {
        return "/Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 67,  176 => 65,  170 => 64,  165 => 63,  162 => 62,  159 => 61,  155 => 60,  152 => 59,  150 => 58,  142 => 52,  139 => 51,  129 => 47,  119 => 46,  113 => 42,  110 => 41,  105 => 40,  103 => 39,  90 => 28,  84 => 27,  80 => 25,  74 => 23,  68 => 20,  63 => 19,  61 => 18,  58 => 17,  52 => 14,  49 => 13,  47 => 12,  44 => 11,  41 => 10,  38 => 9,  35 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section class="home-title">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div id="home-slider" class="home-slider owl-carousel">*/
/*                 {% for image in slider.images %}*/
/*                     {% if ( image.description matches '{^<video>}' ) %}*/
/*                         {% set video = true %}*/
/*                     {% else %}*/
/*                         {% set video = false %}*/
/*                     {% endif %}*/
/* */
/*                     {% if video %}*/
/*                         <div class="home-slider__item">*/
/*                             <a class="owl-video" href="{{ html_strip(image.description) }}"></a>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         <div class="home-slider__item">*/
/*                             {% if ( image.description matches '{^<url>}' ) %}*/
/*                             <a href="{{ html_strip(image.description) }}" target="_blank" title="">*/
/*                                 <img class="banner-img" src="{{ image.path }}" />*/
/*                             </a>*/
/*                             {% else %}*/
/*                                 <img class="banner-img" src="{{ image.path }}" />*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <div class="container">*/
/* */
/*     <div class="recent-tweets">*/
/*         <h4 class="headline"><span>Hot Nhất</span></h4>*/
/* */
/*         <!-- Hot posts -->*/
/*         {% if posts.count > 0 %}*/
/*             {% for post in posts|slice(0,2) %}*/
/*                 {% set postUrl = ( 'news/' ~ post.categories[0].slug ~ '/' ~ post.slug )|app %}*/
/* */
/*                 <div class="tweet">*/
/*                     <i class="icon-rss"></i>*/
/*                     <p>*/
/*                         <a href="{{ postUrl }}">{% if post.excerpt %}{{ str_limit( post.excerpt, 250, '...' ) }}{% else %}{{ str_limit( post.summary, 250, '...' ) }}{% endif %}</a>*/
/*                         <span>{{ post.published_at|date('d-m-Y') }}</span>*/
/*                     </p>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <br />*/
/* */
/*         <!-- List 8 newest posts -->*/
/*         <h4 class="headline"><span>Tin Tức Mới Nhất</span></h4>*/
/* */
/*         {% if posts.count > 0 %}*/
/*             <div class="blog-roll">*/
/*             {% for post in posts|slice(2) %}*/
/*                 {% set postUrl = ( 'news/' ~ post.categories[0].slug ~ '/' ~ post.slug )|app %}*/
/* */
/*                 {% partial "blog/blog-compact" post=post %}*/
/*             {% endfor %}*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <br />*/
