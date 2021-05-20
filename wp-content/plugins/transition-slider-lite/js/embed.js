"use strict";
(function($) {
    $(document).ready(function() {
        var sliders = $(".slider_instance");

        $.each(sliders, function() {
            var optionsString = this.dataset.options;
            this.removeAttribute("data-options")
            if (!optionsString) return;
            var o = JSON.parse(optionsString);


            convertStrings(o);

            if (o.navigation && !o.navigation.enable) o.navigation = false;
            if (o.pagination && !o.pagination.enable) o.pagination = false;
            if (o.thumbs && !o.thumbs.enable) o.thumbs = false;
            if (o.keyboard && !o.keyboard.enable) o.keyboard = false;
            if (o.autoplay && !o.autoplay.enable) o.autoplay = false;
            if (o.hashNavigation && !o.hashNavigation.enable) o.hashNavigation = false;
            if (o.shadow && o.shadow == "off") o.shadow = null;

            for (var key in o.slides) {
                if (o.slides[key].elements) {
                    for (var key2 in o.slides[key].elements) {
                        delete o.slides[key].elements[key2].node;
                    }
                }
                for (var key3 in o.slides[key]) {
                    if (typeof o.slides[key][key3] == "undefined") delete o.slides[key][key3];
                }
                o.slides[key].urlTarget = o.slides[key].urlTarget == true || o.slides[key].urlTarget == "_blank" ? "_blank" : "_self";
            }

            if (!o.pagination) o.pagination = { enable: false };
            o.pagination.type = "bullets";

            o.pagination.normal = {
                backgroundColor: o.pagination.backgroundColor,
                border: o.pagination.border,
                width: o.pagination.width,
                height: o.pagination.height,
                opacity: o.pagination.opacity,
                borderRadius: o.pagination.borderRadius,
                boxShadow: o.pagination.boxShadow
            };

            o.pagination.active = {};
            o.pagination.hover = {};

            for (var key in o.pagination.normal) {
                o.pagination.active[key] = o.pagination[key + "Active"];
                o.pagination.hover[key] = o.pagination[key + "Hover"];
            }

            var slider = $(this).transitionSlider(o);
            var slider_container = this

            if(o.preloadFirstSlide){

                var sliderLoading = true

                                $(slider.data("transitionSlider")).trigger("hideLoading")

                $(slider.data("transitionSlider")).on("hideLoading", function(){
                    if(sliderLoading){
                        slider_container.removeChild(slider_container.children[0])
                        slider_container.removeChild(slider_container.children[0])
                        slider_container.style.height = "initial"
                    }
                    sliderLoading = false
                })
            }
        });

        function convertStrings(obj) {
            $.each(obj, function(key, value) {
                if (typeof value == "object" || typeof value == "array") {
                    convertStrings(value);
                } else if (!isNaN(value)) {
                    if (obj[key] === "") delete obj[key];
                    else obj[key] = Number(value);
                } else if (value === "true") {
                    obj[key] = true;
                } else if (value === "false") {
                    obj[key] = false;
                }
            });
        }
    });
})(jQuery);
