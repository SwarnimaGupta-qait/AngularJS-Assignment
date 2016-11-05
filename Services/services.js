app.factory('services',function($http){
	return{
	  submit: function(firstName, lastName, empId, supervisorName){
		 var request=$http({
				method : 'POST',
				url : 'Model/server.php' ,
				data: {
					'FirstName' : firstName,
					'SecondName' :  lastName,
					'EmployeID' : empId,
					'SupervisorName' : supervisorName
				     }			
			})
		 request.then(function(response){
				alert('Data sent successfully to modal.');	
				
			},function(error){
				alert('Error has occured.')
			});
	   }
	};		
});