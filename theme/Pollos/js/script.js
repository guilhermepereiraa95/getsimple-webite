$(document).ready(function(){
    $(window).scroll(function() {
      
        if ($(document).scrollTop() > 48) {
        
            $('header img').css("max-width","45%");
        
        }else {
               
            
            $('header img').css("max-width","60%");

            
      }
    });
    
				$('img').addClass('img-responsive');
				$('#fotos .fotos img').addClass('margin-bottom');

    $('header .navbar ul.nav li.open > a').on('click', function(e) {
        e.preventDefault();
        $(this).attr('rel','nofollow');
    });
    
    $(".navbar-toggle").click(function(){
        
        var content     = $('.navbar-collapse');
        var nav         = $('.navbar-nav');
        var body        = $('body,html');
        var over        = $('#over');
        
        if( content.width() > 0 ){ 
            content.css("width", "0");
            nav.css("display", "none"); 
            body.css('overflow','auto'); 
            body.css('position','static');
            over.css('display', 'none');
       
        } else {
            console.log('teste');
            content.css("width", "85%");
            nav.css("display", "block");
            body.css('overflow','hidden'); 
            body.css('position','static');
            over.css('display', 'block');

            $("#over").click(function(){
                content.css("width", "0");
                nav.css("display", "none");
                body.css('overflow','auto'); 
                body.css('position','static');
                over.css('display', 'none');
            });
        }
    });



$('#form-contato').on('submit', function (e){

        if (!e.isDefaultPrevented()) {

            e.preventDefault();
            var url         = "/theme/Pollos/email/envia.php"; 
            var btn         = $('#btn-contato');
            var formData    = new FormData($('#form-contato')[0]);

            $.ajax({
                type: "POST",
                contentType: false,
                processData: false,
                url: url,
                data: formData,
                beforeSend: function(){
                    btn.html("<i style='color:#fff;' class='fa fa-spinner fa-pulse fa-fw'></i> Enviando...");
                },
                success: function(data){
                    setTimeout(function(){
                        $('#confirm-contato .modal-body').html(data);
                        $('#confirm-contato').modal('show');
                        $("#btn-contato").html("<i class='fa fa-share'></i> ENVIAR");
                        $('#form-contato').each (function(){this.reset();});
                        btn.html("Enviar Mensagem");
                    }, 2000);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    $("#btn-contato").html("<i class='fa fa-exclamation' aria-hidden='true'></i>");
                    $('#form-contato').each (function(){this.reset();});
                    btn.html('Enviar Mensagem');
                 }
            });
        }
    });

   

}) ;