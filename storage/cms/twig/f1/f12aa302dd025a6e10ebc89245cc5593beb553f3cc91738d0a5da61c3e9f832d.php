<?php

/* /home/kennabi/uat/ironman703vietnam/themes/responsiv-flat/partials/blog/blog-compact.htm */
class __TwigTemplate_6d5dcc6e7a8262145f54d3e67411251035a097c64f23de57a53e3c9a457f117a extends Twig_Template
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
        $context["postUrl"] = $this->env->getExtension('System')->appFilter(((("news/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()), 0, array(), "array"), "slug", array())) . "/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array())));
        // line 2
        echo "<div class=\"blog-compact\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["postUrl"]) ? $context["postUrl"] : null), "html", null, true);
        echo "\">
        <div class=\"post-image\" style=\"background-image: url(";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "path", array())) : ($this->env->getExtension('CMS')->themeFilter("assets/images/logo-pattern.png"))), "html", null, true);
        echo "); background-size: ";
        echo (($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array")) ? ("cover") : ("150px auto"));
        echo "; background-position: 50% 50%; background-repeat: no-repeat;\">
            <img style=\"display: none;\" class=\"img-responsive\" data-src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "last_name", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"blog-info\">
            <p class=\"blog-cate\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</p>
            <p class=\"blog-post-date\">";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "d-m-Y"), "html", null, true);
        echo "</p>
        </div>

        <h5>";
        // line 13
        echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), 50, "..."));
        echo "</h5>
        <p class=\"blog-creator\">
            <span><img src=\"";
        // line 15
        echo $this->env->getExtension('System')->appFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "avatar", array()), "path", array()));
        echo "\" alt=\"\" onerror=\"this.src='";
        echo $this->env->getExtension('System')->appFilter("");
        echo "'\"></span> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "last_name", array()), "html", null, true);
        echo "
        </p>

        <p class=\"blog-excerpt\">";
        // line 18
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt", array())) {
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt", array()), 150, "..."));
        } else {
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "summary", array()), 150, "..."));
        }
        echo "</p>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kennabi/uat/ironman703vietnam/themes/responsiv-flat/partials/blog/blog-compact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  60 => 15,  55 => 13,  49 => 10,  45 => 9,  34 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set postUrl = ( 'news/' ~ post.categories[0].slug ~ '/' ~ post.slug )|app %}*/
/* <div class="blog-compact">*/
/*     <a href="{{ postUrl }}">*/
/*         <div class="post-image" style="background-image: url({{ post.featured_images[0] ? post.featured_images[0].path : 'assets/images/logo-pattern.png'|theme }}); background-size: {{ post.featured_images[0] ? 'cover' : '150px auto' }}; background-position: 50% 50%; background-repeat: no-repeat;">*/
/*             <img style="display: none;" class="img-responsive" data-src="{{ post.featured_images[0].path }}" alt="{{ post.user.first_name }} {{ post.user.last_name }}">*/
/*         </div>*/
/* */
/*         <div class="blog-info">*/
/*             <p class="blog-cate">{{ post.categories[0].name }}</p>*/
/*             <p class="blog-post-date">{{ post.published_at|date('d-m-Y') }}</p>*/
/*         </div>*/
/* */
/*         <h5>{{ str_limit( post.title, 50, '...' ) }}</h5>*/
/*         <p class="blog-creator">*/
/*             <span><img src="{{ post.user.avatar.path|app }}" alt="" onerror="this.src='{{ ''|app }}'"></span> {{ post.user.first_name }} {{ post.user.last_name }}*/
/*         </p>*/
/* */
/*         <p class="blog-excerpt">{% if post.excerpt %}{{ str_limit( post.excerpt, 150, '...' ) }}{% else %}{{ str_limit( post.summary, 150, '...' ) }}{% endif %}</p>*/
/*     </a>*/
/* </div>*/
