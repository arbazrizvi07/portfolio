/**
 * @author Vidya Shevale
 */


jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deleteProject", function(){
		var projectId = $(this).data("projectId"),
			hitURL = baseURL + "deleteProject",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this Project ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { projectId : projectId } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("Project successfully deleted"); }
				else if(data.status = false) { alert("Project deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	
	jQuery(document).on("click", ".searchList", function(){
		
	});
	
});
