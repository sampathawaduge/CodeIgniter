$(document).ready(function(){
    
     $("#submit").click(function(){

        var username=$.trim($("#username").val());
        var email=$.trim($("#email").val());
        var password=$.trim($("#password").val());
        var category=$.trim($("#category").val());

         if(username&&email&&password&&category)
         {

             $.ajax({

                 url:"http://localhost/CodeIgniter/index.php/register_controller/register",
                 type:"POST",
                 data:{username:username,email:email,password:password,category:category},
                 success:function(data)
                 {
                     alert("Registration complete...!");
                     window.location.href="http://localhost/CodeIgniter/index.php/login";
                     //location.reload();
                 }
             });
         }
         else
         {
             alert("There can not be Empty Fields");
         }
   
         });
});