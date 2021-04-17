(function($){
  /*
  Place your custom JavaScript code in this file.
  It will be loaded on the pages where your form is displayed.
  The file is saved in your theme folder: /wp-content/themes/bold-photography-child/js/get-scouted-form.js  */
  $(document).ready(function(){

    var sliderHeights = [];

    $(".container.cf7sg-collapsible.glider-slide > .row").each(function(){
      sliderHeights.push(parseInt($(this).css('height')));
    });
    
      $('.cf7sg-slider-section .glider').css('height',(sliderHeights[0]+50));

    function checkIfFormHasEmpty(){
      var check = true;
      $('.cf7sg-slider-section input[aria-required="true"]').each(function(){
        if($(this).val().length === 0 || $(this).val() == "" || $(this).val() == " "){
          check = false;
        }
      });	
      return check;
    }

    var counter = 0;

    $('.cf7sg-slider-section .glider').css('transition','1s all ease-in-out');

    $('.slider-control.slider-next.ui-button').click(function(){

      console.log(parseInt($(".container.cf7sg-collapsible.glider-slide.active.center.visible .row").css('height')));

      counter++;
      $('.cf7sg-slider-section .glider').css('height',(sliderHeights[counter]+50));
      if(counter == 2){
        if(checkIfFormHasEmpty() && $('#user-disclaimer input').is(':checked')){
          $(".cf7-smart-grid.has-grid .cf7sg-slider-section>input.wpcf7-submit").attr("disabled",false);
        }else{
          $(".cf7-smart-grid.has-grid .cf7sg-slider-section>input.wpcf7-submit").attr("disabled",true);
        }
      }
    });
    $('.slider-control.slider-prev.ui-button').click(function(){
      counter--;
      $('.cf7sg-slider-section .glider').css('height',(sliderHeights[counter]+50));
    });

    $(".cf7-smart-grid.has-grid .cf7sg-slider-section>input.wpcf7-submit").attr("disabled",true);





    $('#user-disclaimer input').click(function(){
      if($(this).is(':checked')){
        console.log()
        if(checkIfFormHasEmpty()){
          $(".cf7-smart-grid.has-grid .cf7sg-slider-section>input.wpcf7-submit").attr("disabled",false);
        }
      }else{
        $(".cf7-smart-grid.has-grid .cf7sg-slider-section>input.wpcf7-submit").attr("disabled",true);
      }
    });




  });

})(jQuery)
                                                                                                                                                                                                                                                                                                      