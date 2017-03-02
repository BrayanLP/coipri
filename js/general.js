  $(document).ready(function(){
 //-------------- [Scroll] --------------//
    var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome/') > -1;
    var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox/') > -1;
    var is_safari = navigator.userAgent.toLowerCase().indexOf('safari/') > -1;
    var is_opera = navigator.userAgent.toLowerCase().indexOf('opera/') > -1;
    var is_ie = navigator.userAgent.toLowerCase().indexOf('msie') > -1;
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    if (isMobile.any()) {
    } else {
        /* NiceScroll proys */
    $("html").niceScroll({
        touchbehavior:false,
        cursorcolor:"#124788",
        cursoropacitymax:16,
        cursorborder:"0px dashed #ffffff",
        cursorwidth:15,
        cursorborderradius:"7.5px",
        background:"#fff",
        zindex:9999
       });
        switch (true) {
            case (is_chrome):
                break;
            case (is_firefox):
                break;
            case (is_safari):
                break;
            case (is_opera):
                break;
            default:
                $('body').addClass('iexplorer');
                break;
        }
    }
        
    //-------------- [Fin Scroll] --------------//
    //-------------- [ MODAL ] --------------//
    
    $('.modal-trigger').leanModal();
    $(".button-collapse").sideNav();
    //-------------- [ FIN MODAL ] --------------//
    $("#owl-auspiciadores").owlCarousel({
 
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 3,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
     
    });
    //-------------- [ Validator ] --------------//
      $("#ok").hide();

      $("#formid").validate({
          rules: {
            nombres: { required: false, minlength: 2}, 
            correo: { required: true, email: true},
            telefono: { required:true, minlength: 7, number:true},
            celular: { required:true, minlength: 9, number:true},
            mensaje: { required:false, minlength: 4}
          },
          messages: {
            nombres: "",
            correo: "",
            telefono: "",
            celular: "", 
            mensaje: "",
          },

      });

    //-------------- [ FIN Validator ] --------------//
    // $("#owl-blog").owlCarousel({ 
    //       navigation : true, // Show next and prev buttons
    //       slideSpeed : 300,
    //       paginationSpeed : 400,
    //       singleItem:true
     
    //       // "singleItem:true" is a shortcut for:
    //       // items : 1, 
    //       // itemsDesktop : false,
    //       // itemsDesktopSmall : false,
    //       // itemsTablet: false,
    //       // itemsMobile : false
     
    //   });
    

    

});