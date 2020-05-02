jQuery(document).ready(function($) {
    $("#FormConnect").submit(function() {
      var error = 0;
      $(this).find('input[type="text"]').each(function() {
        if ($(this).val() == '' || $(this).val() == ' ') {
          $(this).addClass('error_field');
        }
        else{
          $(this).removeClass('error_field');
        }
      });   
      var str = $(this).serialize();
      //var th = $(this);
          
      $.ajax({
        type: "POST",
        url: "https://itpremiumpartner.com/wp-content/themes/oceanwp/mailing.php",
        data: str,
        success: function(msg) {
          if(msg == 'OK') {
            result = '<div class="ok"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
            
            
          }
          
          
          else {result = msg;}
          $('.note').html(result);

          $("#FormConnect").find('input, textarea').each(function() {
            $(this).val('');
          });   
          
          setTimeout(function() {
            $('.formMain .note').hide();
          }, 3000);
          
         
        }
        
      });
       
      return false;
      
    });
    
  });

  


jQuery(function($) {
    $("#phoneNumber").mask("+7 (999) 999-9999");
    $("#phone2").mask("+7 (999) 999-9999");
});


jQuery(function($) {
    $('.headerBurger').click(function(e) {
    e.preventDefault(); 
    
    $('.mainMenu').addClass('mainMenu_open');
    });

    $('.headerNavClose').click(function(e) {
    e.preventDefault(); 
      
    $('.mainMenu').removeClass('mainMenu_open');
    });

    $('.mainMenu ul a').click(function(e) {
            
    $('.mainMenu').removeClass('mainMenu_open');
    });
});

jQuery(function($) {
  $('.footer_burger').click(function(e) {
  e.preventDefault(); 
  
  $('.footerMenuBurger').addClass('footerMenuBurger_open');
  });

  $('.footerNavClose').click(function(e) {
  e.preventDefault(); 
    
  $('.footerMenuBurger').removeClass('footerMenuBurger_open');
  });

  $('.footerMenuBurger ul a').click(function(e) {
          
  $('.footerMenuBurger').removeClass('footerMenuBurger_open');
  });
});








