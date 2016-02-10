/**
 * Created by taxque on 9/02/16.
 */

angular.module('ENES')
    .factory('userFactory', function ($http) {
        return{
            getAllUsers : function(){
                return $http.get('api/users')
            }
        }
    });