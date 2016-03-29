$(document).ready(function(){
    
     $("#submit").click(function(){

        var username=$.trim($("#username").val());
        var email=$.trim($("#email").val());
        var password=$.trim($("#password").val());
        var category=$.trim($("#category").val());

         if(username&&email&&password&&category)
         {

             $.ajax({

                 url:"http://localhost:81/CodeIgniter/index.php/register_controller/register",
                 type:"POST",
                 data:{username:username,email:email,password:password,category:category},
                 success:function(data)
                 {
                     alert("Registration complete...!");
                     //location.reload();
                 }
             });
         }
         else
         {
             alert("field Is Empty");
         }
   
         });
});