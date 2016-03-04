/**
 * Created by robhofman on 26/02/16.
 */
(function () {
    "use strict";
    var shareSelectieController = function ($scope) {

        $scope.spelers = [];




        var getParameterByName = function(name, url){
            {
                //if (!url) url = window.location.href;
                if (!url) url = parent.window.location.href;

                url = decodeURIComponent(url);
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, " "));
            }
        };

        var getPlayers = function () {

                for(var i =1; i<24; i++){
                var speler = getParameterByName("s"+i);
                if(speler)
                $scope.spelers.push(speler);
            }

        };

        getPlayers();

    };

    angular.module("app").controller("shareSelectieController", ["$scope", shareSelectieController]);

})();