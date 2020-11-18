

$(document).ready(function(){

    var total;
      $('#reviewForm').validate({
        rules:
        {
            review:
            {
                required:true
            }
        },
        messages:
        {
            review:
            {
                required:"Please give a review before submitting!"
            }
        },
        submitHandler: function(form, event) {
            event.preventDefault();
            $.ajax({
                url:'/sendReview',
                type:'post',
                data:$('#reviewForm').serialize(),
                success:function(){
                    alert("Thanks for reviewing us!!");
                    
                }
            });
            $("#reviewForm").trigger("reset");
          }
    }); 
    
    $('#contactForm').validate({
        rules:
        {
            email:
            {
                required:true,
                email:true
            },
            message:
            {
                required:true
            }
        },
        messages:
        {
            email:
            {
                required:"Please enter a valid email!"
            },
            message:
            {
                required:"Please tell us why you are contacting us!"
            }
        },
        submitHandler: function(form, event){
            event.preventDefault();
            $.ajax({
                url:'/sendForm',
                type:'post',
                data:$('#contactForm').serialize(),
                success:function(){
                    alert("Thank you form submitted!!");
                    
                }
            });
            $("#contactForm").trigger("reset");
        }
    });
    
    
   

  

$('#orderForm').on('change', '#sel1', function(){
    if($( "#sel1 option:selected" ).text() === 'Window Cleaning')
   { $('#orderForm').hide();
   $('#windowForm').show();
  
}
});


    $('#orderForm').on('change', '#sel1', function(){
        $('#summaryDiv').show();
        $('#sh1').text($(this).val());
    });

    $('#orderForm').on('change', '#sel2', function(){
        $('#sh2').text($( "#sel2 option:selected" ).text());
        $('#sh3').text($( "#sel3 option:selected" ).text());
        var somethingData = parseFloat($( "#sel3 option:selected" ).text());
        total = somethingData * 26;
        $('#sh6').text('Total            ' + total + ' Euros');
    });
    
       $('#orderForm').on('change', '#sel3', function(){
        $('#sh3').text($( "#sel3 option:selected" ).text());
        $('#gift').val('');
        var somethingData = parseFloat($( "#sel3 option:selected" ).text());
        total = somethingData * 26;
        $('#sh6').text('Total            ' + total + ' Euros');
    });


    $('#orderForm').on('change', '#time', function(){
        $('#sh4').text($(this).val());
    });

    $('#orderForm').on('change', '#address', function(){
        $('#sh5').text($(this).val());
    });

   $('#orderForm').on('change', '#freq', function(){
        $('#sh7').text($(this).val());
    });

    $('#windowForm').on('change', '#window', function(){
        $('#summaryDiv').hide();
        $('#windowDiv').show();
        $('#idOne').text($(this).val());
        
    });

    $('#windowForm').on('change', '#small', function(){
        $('#idTwo').text($(this).val());
        
    });

    $('#windowForm').on('change', '#pane', function(){
        $('#idThree').text($(this).val());
        
    });

    $('#windowForm').on('change', '#address', function(){
        $('#idFour').text($(this).val());
        
    });



    
    
     $('#orderForm').validate({
        rules:
        {
            service:
            {
                required:true
            },
            size:
            {
                required:true
            },
            hours:
            {
                required:true
            },
            freq:
            {
                required:true
            },
            name:
            {
                required:true
            },
            phone:
            {
                required:true
            },
            email:
            {
                required:true,
                email:true
            },
            address:
            {
                required:true
            },
            time:
            {
                required:true
            }
        },
        messages:
        {
            service:
            {
                required:"Please select a service!"
            },
            size:
            {
                required:"How big is the cleaning area?"
            },
            hours:
            {
                required:"How much do you think it will take"
            },
            freq:
            {
                required:"How often should the cleaning be done?"
            },
            name:
            {
                required:"Please tell us your name"
            },
            phone:
            {
                required:"Please enter a valid number"
            },
            email:
            {
                required:"Please enter a valid email"
            },
            address:
            {
                required:"Please enter your address"
            },
            time:
            {
                required:"Please tell us what cleaning time is suitable for you."
            }
        },
        
        submitHandler: function(form, event) {
                event.preventDefault();
                $.ajax({
                    url:'/newSale',
                    type:'post',
                    data:$('#orderForm').serialize(),
                    success:function(){
                        alert("Order sent! you will recieve confirmation email soon.");
                        history.go(0);
                    }
                });
                $("#orderForm").trigger("reset");
            
          }
    });


    
      $('#windowForm').validate({
        rules:
        {
            window:
            {
                required:true
            },
            name:
            {
                required:true
            },
            phone:
            {
                required:true
            },
            email:
            {
                required:true,
                email:true
            },
            address:
            {
                required:true
            },
            time:
            {
                required:true
            }
        },
        messages:
        {
            window:
            {
             required:"How many windows need cleaning?"
            },
             name:
            {
                required:"What is your name!"
            },
            phone:
            {
                required:"Please tell us your number"
            },
            email:
            {
                required:"Please give a valid email"
            },
            address:
            {
                required:"Where will the cleaning take place"
            },
            time:
            {
                required:"What time should the cleaning be done?"
            }
        },
        submitHandler: function(form, event){
          event.preventDefault();
        $.ajax({
            url:'/newSaleWindow',
            type:'post',
            data:$('#windowForm').serialize(),
            success:function(){
                alert("Thanks for your order confirmatin email will be sent soon!");
                history.go(0);
            }
        });
        $("#windowForm").trigger("reset");
        }
    });




    $("#sel2").change(function() {
    var selected1 = $(this).children("option:selected").val();
    if(selected1 == 1){
        $( "#sel3 option:selected" ).text("2 (recommended)").val('1');
    } else if(selected1 == 2){
        $( "#sel3 option:selected" ).text("2.5 (recommended)").val('2');
    }  else if(selected1 == 3){
        $( "#sel3 option:selected" ).text("3 (recommended)").val('3');
    }  else if(selected1 == 4){
        $( "#sel3 option:selected" ).text("3.5 (recommended)").val('4');
    } else if(selected1 == 5){
        $( "#sel3 option:selected" ).text("4 (recommended)").val('5');
    }  else if(selected1 == 6){
        $( "#sel3 option:selected" ).text("4.5 (recommended)").val('6');
    }  else if(selected1 == 7){
        $( "#sel3 option:selected" ).text("5 (recommended)").val('7');
    } else if(selected1 == 8){
        $( "#sel3 option:selected" ).text("5.5 (recommended)").val('8');
    } else if(selected1 == 9){
        $( "#sel3 option:selected" ).text("6 (recommended)").val('9');
    } else if(selected1 == 10){
        $( "#sel3 option:selected" ).text("6.5 recommended").val('10');
    }  else if(selected1 == 11){
        $( "#sel3 option:selected" ).text("7 recommended").val('11');
    } 
    else
    $( "#sel3 option:selected" ).text("8 (recommended)").val('12');
    
      });
    

$('#gift').change(function(){
    let giftCard = $('#gift').val();
    if(!(giftCard === '')){
        total = 0;
        $('#sh6').text('Total            ' + total + ' Euros');
         
    }
});
    

   
});