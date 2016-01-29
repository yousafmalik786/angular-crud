@include('header')
<div class="container" ng-controller="UserController as UserCtrl">
    <div class="row top40">
        <div class="col-md-12">
            <h3>Records</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Created On</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr ng-repeat="user in users">
                        <td>@{{user.id}}</td>
                        <td>@{{user.first_name}}</td>
                        <td>@{{user.last_name}}</td>
                        <td>@{{user.user_name}}</td>
                        <td>@{{user.email}}</td>
                        <td>@{{user.created_on}}</td>
                        <td>
                            <a href="#"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('footer')

<script type="text/javascript">
    var app = angular.module('myApp',[]);

    app.controller('UserController', ['$scope','$http', function($scope,$http) {
        //$scope.users = [{"id":"1","first_name":"Ali","last_name":"Ahmed","email":"ali@gmail.com","user_name":"Ali.Ahmed06","created_on":"2016-01-18"}]
        $http.get("/angular-crud/public/all-users")
                .then(function(response) {
                    $scope.users = response.data;
                });
    }]);
</script>


