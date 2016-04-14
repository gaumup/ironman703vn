<?php

/* /home/kennabi/uat/ironman703vietnam/themes/responsiv-flat/partials/gallery-popup.htm */
class __TwigTemplate_6f7c263e692790a7d981c8fc05464e10a4f31102d049a8f28727525104ec4101 extends Twig_Template
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
        echo "<!-- <div class=\"gallery-popup\" id=\"gallery-popup\">
    <a href=\"#\" title=\"\" class=\"gallery-popup-close-btn\"><i class=\"svg-icon svg-icon-x\"></i></a>    

    <div class=\"gallery-popup-content\"></div>

    <a href=\"#\" title=\"\" class=\"gallery-nav-btn gallery-nav-btn--prev\"><i class=\"svg-icon svg-icon-arrow--alt-01\"></i></a>
    <a href=\"#\" title=\"\" class=\"gallery-nav-btn gallery-nav-btn--next\"><i class=\"svg-icon svg-icon-arrow--alt-01\"></i></a>
</div> -->

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" id=\"gallery-popup\">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class=\"pswp__bg\"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class=\"pswp__scroll-wrap\">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class=\"pswp__container\">
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class=\"pswp__ui pswp__ui--hidden\">

            <div class=\"pswp__top-bar\">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class=\"pswp__counter\"></div>

                <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>

                <button class=\"pswp__button pswp__button--share\" title=\"Share\"></button>

                <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>

                <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class=\"pswp__preloader\">
                    <div class=\"pswp__preloader__icn\">
                      <div class=\"pswp__preloader__cut\">
                        <div class=\"pswp__preloader__donut\"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                <div class=\"pswp__share-tooltip\"></div> 
            </div>

            <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\">
            </button>

            <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\">
            </button>

            <div class=\"pswp__caption\">
                <div class=\"pswp__caption__center\"></div>
            </div>

        </div>

    </div>
</div>

<div class=\"video-popup hidden\" id=\"video-popup\">
    <div class=\"video-counter\" id=\"video-counter\"></div>

    <a href=\"#\" title=\"\" class=\"video-btn video-popup-close\"></a>

    <a href=\"#next-video\" title=\"\" class=\"video-btn video-popup-nav video-popup-prev\"></a>
    <a href=\"#next-video\" title=\"\" class=\"video-btn video-popup-nav video-popup-next\"></a>

    <div class=\"video-popup-content loading loading--display\" id=\"video-popup-content\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kennabi/uat/ironman703vietnam/themes/responsiv-flat/partials/gallery-popup.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- <div class="gallery-popup" id="gallery-popup">*/
/*     <a href="#" title="" class="gallery-popup-close-btn"><i class="svg-icon svg-icon-x"></i></a>    */
/* */
/*     <div class="gallery-popup-content"></div>*/
/* */
/*     <a href="#" title="" class="gallery-nav-btn gallery-nav-btn--prev"><i class="svg-icon svg-icon-arrow--alt-01"></i></a>*/
/*     <a href="#" title="" class="gallery-nav-btn gallery-nav-btn--next"><i class="svg-icon svg-icon-arrow--alt-01"></i></a>*/
/* </div> -->*/
/* */
/* <!-- Root element of PhotoSwipe. Must have class pswp. -->*/
/* <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" id="gallery-popup">*/
/* */
/*     <!-- Background of PhotoSwipe. */
/*          It's a separate element as animating opacity is faster than rgba(). -->*/
/*     <div class="pswp__bg"></div>*/
/* */
/*     <!-- Slides wrapper with overflow:hidden. -->*/
/*     <div class="pswp__scroll-wrap">*/
/* */
/*         <!-- Container that holds slides. */
/*             PhotoSwipe keeps only 3 of them in the DOM to save memory.*/
/*             Don't modify these 3 pswp__item elements, data is added later on. -->*/
/*         <div class="pswp__container">*/
/*             <div class="pswp__item"></div>*/
/*             <div class="pswp__item"></div>*/
/*             <div class="pswp__item"></div>*/
/*         </div>*/
/* */
/*         <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->*/
/*         <div class="pswp__ui pswp__ui--hidden">*/
/* */
/*             <div class="pswp__top-bar">*/
/* */
/*                 <!--  Controls are self-explanatory. Order can be changed. -->*/
/* */
/*                 <div class="pswp__counter"></div>*/
/* */
/*                 <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>*/
/* */
/*                 <button class="pswp__button pswp__button--share" title="Share"></button>*/
/* */
/*                 <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>*/
/* */
/*                 <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>*/
/* */
/*                 <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->*/
/*                 <!-- element will get class pswp__preloader--active when preloader is running -->*/
/*                 <div class="pswp__preloader">*/
/*                     <div class="pswp__preloader__icn">*/
/*                       <div class="pswp__preloader__cut">*/
/*                         <div class="pswp__preloader__donut"></div>*/
/*                       </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">*/
/*                 <div class="pswp__share-tooltip"></div> */
/*             </div>*/
/* */
/*             <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">*/
/*             </button>*/
/* */
/*             <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">*/
/*             </button>*/
/* */
/*             <div class="pswp__caption">*/
/*                 <div class="pswp__caption__center"></div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* <div class="video-popup hidden" id="video-popup">*/
/*     <div class="video-counter" id="video-counter"></div>*/
/* */
/*     <a href="#" title="" class="video-btn video-popup-close"></a>*/
/* */
/*     <a href="#next-video" title="" class="video-btn video-popup-nav video-popup-prev"></a>*/
/*     <a href="#next-video" title="" class="video-btn video-popup-nav video-popup-next"></a>*/
/* */
/*     <div class="video-popup-content loading loading--display" id="video-popup-content"></div>*/
/* </div>*/
