<?php

/* /Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/partials/blog/sidebar.htm */
class __TwigTemplate_864b940569a64b9c630c32b7c652bd137f114cf7f38a52811d9213a32a29d863 extends Twig_Template
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
        echo "<div class=\"blog-sidebar\">
    <!-- Search -->
    <form role=\"form\" action=\"";
        // line 3
        echo $this->env->getExtension('System')->appFilter("news");
        echo "\" method=\"get\">
        <div class=\"well\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Tìm Kiếm Bài Viết...\" name=\"s\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["searchQuery"]) ? $context["searchQuery"] : null), "html", null, true);
        echo "\" />
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" type=\"button\"><i class=\"icon-search\"></i></button>
                </span>
            </div>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/gaumup/Projects/ironmanvn/themes/responsiv-flat/partials/blog/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="blog-sidebar">*/
/*     <!-- Search -->*/
/*     <form role="form" action="{{ 'news'|app }}" method="get">*/
/*         <div class="well">*/
/*             <div class="input-group">*/
/*                 <input type="text" class="form-control" placeholder="Tìm Kiếm Bài Viết..." name="s" value="{{ searchQuery }}" />*/
/*                 <span class="input-group-btn">*/
/*                     <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
