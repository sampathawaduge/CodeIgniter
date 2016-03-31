$(document).ready(function(){


		$("#idea_button").click(function(){

		    var comment=$.trim($("#comment").val());
			var selection=$.trim($("#category").val());
		if(comment && selection)
		{
			
			$.ajax({

				url:"http://localhost/CodeIgniter/index.php/login_controll/show",
				type:"POST",
				data:{comment:comment,subcat:selection},
				success:function(data)
				{
					alert("Submission add successfully!");
					location.reload();
				}
			});
		}
		else if(!comment)
		{
			alert("Submission Is Empty");
		}
		else if(!selection)
		{
			alert("Select Submission category");
		}
		

		});
});