$(document).ready(function(){

		$("#add_idea_submit").click(function(){

		var idea=$.trim($("#idea_txt").val());
		if(idea!= null)
		{
			$.ajax({
				url:"http://localhost:81/CodeIgniter/index.php/comment_controller/add_idea",
				type:"POST",
				data:{comment:idea},
				success:function(data)
				{
					location.reload();
				}
			});
		}
		else
		{
			alert("idea Is Empty");
		}
		

		});
});