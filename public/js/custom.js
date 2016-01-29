
var app = angular.module('myApp',[]);
app.controller('UserController', ['$scope','$http', function($scope,$http) {
    $http.get("/angular-crud/public/all-users")
        .then(function(response) {
            $scope.users = response.data;
        });
}]);