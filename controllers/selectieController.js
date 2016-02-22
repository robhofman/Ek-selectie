/**
 * Created by robhofman on 17/02/16.
 */
(function () {
    "use strict";
    var selectieController = function($scope, ngDialog) {
            //this is the controller
        $scope.aantalSpelers = 23;
        $scope.alleSpelers = [];
        $scope.aantalIsNietVoldoende = true;

        $scope.selectie = [];


        var getAllPlayers = function(){
            var main = document.getElementById("gameSpace");
            var listitems = main.getElementsByTagName("li");
            $scope.alleSpelers = listitems;
        };


        var checkAantalSpelers = function(){
            if($scope.aantalSpelers == 0){
                $scope.$apply(function(){
                    $scope.aantalIsNietVoldoende = false;
                    openPopup();
                });
            }
            else{
                $scope.$apply(function(){
                    $scope.aantalIsNietVoldoende = true;

                });
            }
        };


        var openPopup = function () {
            ngDialog.open({
                template: 'externalTemplate.html',
                scope: $scope
            });
        };

        var selectInnerCheckbox = function(){
            if(this.firstChild.checked == true){
                this.firstChild.checked = false;
                $(this).removeClass('checked');
                $scope.$apply(function (){
                        $scope.aantalSpelers = $scope.aantalSpelers + 1;

                    });

            }
            else{
                this.firstChild.checked = true;
                $(this).addClass("checked");
                $scope.$apply(function(){
                    $scope.aantalSpelers = $scope.aantalSpelers - 1;

                });
            }
            checkAantalSpelers();
        };

        var hideOthers  = function(e){
            e.preventDefault();
            $("#btnBekijkTeam").addClass("hidden");
            var allListItems = $('.speler');
            for (var i=0;  i<allListItems.length; i++) {
                if(allListItems[i].firstChild.checked == false) $(allListItems[i]).addClass("hidden");
            }
            //this.className += 'hidden';
            $("#btnWijzig").removeClass("hidden");
            $("#btnBewaar").removeClass("hidden");
            getTeam();

        };



        var bewaar = function(e){
            //e.preventDefault();
            var allListItems = $('.speler');
            var selectie = [];
            var lengte = allListItems.length;
            for (var i=0;  i<lengte; i++) {
                if(allListItems[i].firstChild.checked == true) selectie.push(allListItems[i]);
            }
            if(selectie.length != 23){
                alert("gelieve juist 23 spelers te selecteren, u heeft er "+selectie.length);
            }
            else{
                luikVallen();

                //spelers posten

                //spelers outfaden
                //allListItems[0].fadeOut("slow");
                console.log($scope.alleSpelers[0]);
                allListItems.fadeOut("slow");
                //treintje weg
                $("#btnWijzig").css('visibility', 'hidden');
                $("#btnBewaar").hide();

            }
        };


        var luikVallen = function () {
            $("#canvasLuik").removeClass("hidden");
            var t = $("#trein");
            t.animate({
                top: "500px"
            }, {
                duration: "slow",
                easing: "easeOutBounce"
            });

            var b = $("#luikBackground");
            b.animate({
                height: "500px"
            },{
                duration: "slow",
                easing: "easeOutBounce"
            });
            setTimeout(function(){ t.addClass('driveAway');}, 1000);





        };


        var wijzig = function(e){
            e.preventDefault();
            $(this).addClass("hidden");
            $("#btnBewaar").addClass('hidden');
            //document.getElementById("btnBekijkTeam").className = "";
            $("#btnBekijkTeam").removeClass("hidden");

            var allListItems = document.getElementsByTagName('li');
            for (var i=0;  i<allListItems.length; i++) {
                //allListItems[i].className = '';
                $(allListItems[i]).removeClass("hidden");
            }
        };

        var init = function(){
            var submit = document.getElementById('btnBekijkTeam');
            submit.addEventListener("click", hideOthers);

            var btnWijzig = document.getElementById("btnWijzig");
            btnWijzig.addEventListener("click", wijzig);

            var btnBewaar = document.getElementById("btnBewaar");
            btnBewaar.addEventListener("click", bewaar);

            var allListItems = document.getElementsByClassName('speler');
            for (var i=0;  i<allListItems.length; i++) {
                allListItems[i].addEventListener("click", selectInnerCheckbox);
            }

        };



        var getTeam = function () {
            $scope.selectie = [];
            $("#gameSpace input:checked").each(function(){
                console.log("koekoek");
                $scope.selectie.push($(this).val());
            });
        };


        getAllPlayers();
        init();
        $scope.bewaar = bewaar;

        //luikVallen();
    };


    angular.module("app").controller("selectieController", ["$scope", "ngDialog", selectieController]);

})();