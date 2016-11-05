app.controller("studentController",function($scope,services) { 
	 $scope.firstName=" ";
	 $scope.lastName= " ";
	 $scope.empID= " ";
	 $scope.supervisorName= " ";
	 
	 $scope.submit=function(){
		 services.submit($scope.firstName, $scope.lastName, $scope.empID, $scope.supervisorName);
	 }
	
      $scope.submitAnotherResponse=function(){
    	 $scope.firstName=" ";
    	 $scope.lastName= " ";
    	 $scope.empID= " ";
    	 $scope.supervisorName= " ";
    	  }      
   });