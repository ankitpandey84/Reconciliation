<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl"> 

<p>Today's welcome message is:</p>

<p>Data : {{10 + 10}}</p>
<p>Status : {{endate}}</p>
<p>StatusText : {{accountdetails}}</p>

</div>

<p>The $http service requests a page on the server, and the response is set as the value of the "myWelcome" variable.</p>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("http://10.0.1.131/Account/accountfetch")
  .success(function(response){
  $scope.startdate = response.startdate;
  $scope.endate = response.enddate;
  $scope.accountdetails = response.accountdetails;
  
  
  });
  
});
</script>

</body>
</html>
