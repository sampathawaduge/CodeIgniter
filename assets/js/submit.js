$(document).ready(function(){
	var selection=null;
	
	$("#category li").click(function(){
		selection=$(this).text();
	});

		$("#idea_button").click(function(){

		var comment=$.trim($("#comment").val());
		if(comment && selection)
		{
			
			$.ajax({

				url:"http://localhost:81/CodeIgniter/index.php/login_controll/show",
				type:"POST",
				data:{comment:comment,subcat:selection},
				success:function(data)
				{
					location.reload();
				}
			});
		}
		else if(!comment)
		{
			alert("Comment Is Empty");
		}
		else if(!selection)
		{
			alert("Select Sub category");
		}
		

		});
});