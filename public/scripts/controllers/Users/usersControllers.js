/**
 * Created by taxque on 9/02/16.
 */

angular.module('ENES')
    .controller('UserController', function ($scope, $http, userFactory) {
        userFactory.getAllUsers()
        .success(function(data){
            $scope.data=data;
        })
        .error(function(error){
                console.log(error);
        });

        /*$scope.save = function($user){
            userFactory.save($user)
            .success(function(data){
                console.log(data);
            })
            .error(function(error){
                console.log(error);
            })
        }*/
    });