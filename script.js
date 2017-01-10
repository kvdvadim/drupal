 $(document).ready(function(){   
$("#hideform").hide();        
        $("#showform").click(function(){
      $("#hideform").toggle(500) ;
   });
   
        $("#send").click(function(){
                var znachname =$("#name").val();
            var znachemail=$("#email").val();
              
           $.ajax({  
                url:"mail.php",  
                method:"POST",  
                data:{zminnaname:znachname,zminnaemail:znachemail},  
                dataType:"html",  
                success:function(data)  
                {  
                     $("#outputs").html(data);  
                }
           });  
      });
             $("#buttonsend").click(function(){
                var znachphone =$("#phone").val();
           $.ajax({  
                url:"sql.php",  
                method:"POST",  
                data:{zminnaphone:znachphone},  
                dataType:"html",  
                success:function(data)  
                {  
                     $("#outputsql").html(data);  
                }
           });  
      });            
                 });