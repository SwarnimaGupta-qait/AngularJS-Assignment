<!doctype html>
<html ng-app="app"  ng-controller="studentController">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="Config/app.js"></script>
<script src="Controller/controller.js"></script>
<script src="Model/server.php"></script>
<script src="Services/services.js"></script>
</head>
<body>
 
<form name = "studentForm" novalidate>
<p> Enter First Name: </p>
<input  type = "text" ng-model = "firstName" required></input>
<p> Enter Second Name: </p>
<input  type = "text" ng-model = "lastName" required></input>
<p> Enter Employee ID: </p>
<input  type = "text" ng-model = "empID" required></input>
<p> Enter Supervisor Name: </p>
<input  type = "text" ng-model = "supervisorName" required></input>
</form>

<br></br>
<button ng-click="submit()">SUBMIT</button>
<button ng-click="submitAnotherResponse()">Submit Another Response</button>
</form>
</body>
</html>

