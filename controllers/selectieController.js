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

        var hoogteLijst = 0;

        var getAllPlayers = function(){
            var main = document.getElementById("gameSpace");
            var listitems = main.getElementsByTagName("li");
            $scope.alleSpelers = listitems;
        };


        var checkAantalSpelers = function(){
            if($scope.aantalSpelers == 0){
                /*$scope.$apply(function(){
                    $scope.aantalIsNietVoldoende = false;
                    openPopup();
                });*/
                $scope.aantalIsNietVoldoende = false;
                openPopup();
                $scope.$apply();
            }
            else{
                /*$scope.$apply(function(){
                    $scope.aantalIsNietVoldoende = true;

                });*/
                $scope.aantalIsNietVoldoende = true;
                $scope.$apply();
            }
        };


        var openPopup = function () {
            ngDialog.open({
                template: 'testTemplate',
                scope: $scope
            });
        };

        var selectInnerCheckbox = function(){
            if(this.firstChild.checked == true){
                this.firstChild.checked = false;
                $(this).find("i").addClass("hidden");
                $(this).removeClass('checked');
                /*$scope.$apply(function (){
                        $scope.aantalSpelers = $scope.aantalSpelers + 1;
                    });
                */
                $scope.aantalSpelers = $scope.aantalSpelers + 1;
                $scope.$apply();

            }
            else{
                this.firstChild.checked = true;
                $(this).addClass("checked");
                $(this).find("i").removeClass("hidden");
                /*$scope.$apply(function(){
                    $scope.aantalSpelers = $scope.aantalSpelers - 1;


                });*/
                $scope.aantalSpelers = $scope.aantalSpelers - 1;
                $scope.$apply();
            }
            checkAantalSpelers();
        };

        var hideOthers  = function(e){
            e.preventDefault();
            hoogteLijst = $("#lijstAlleSpelers").height();

            $("#btnBekijkTeam").addClass("hidden");
            var allListItems = $('.speler');
            for (var i=0;  i<allListItems.length; i++) {
                var item = allListItems[i].firstChild;
                if(item.checked == false) $(allListItems[i]).addClass("hidden");
            }

            $("#lijstAlleSpelers").css({height: hoogteLijst});
            //this.className += 'hidden';
            $("#btnWijzig").removeClass("hidden");
            $("#btnBewaar").removeClass("hidden");
            //getTeam();

        };



        var bewaar = function(e){
            //e.preventDefault();
            ngDialog.close();
            var allListItems = $('.speler');
            var selectie = [];
            var lengte = allListItems.length;
            for (var i=0;  i<lengte; i++) {
                if(allListItems[i].firstChild.checked == true) selectie.push(allListItems[i].firstChild.value);
            }
            if(selectie.length != 23){
                alert("gelieve juist 23 spelers te selecteren, u heeft er "+selectie.length);
            }
            else{
                $scope.selectie = selectie;
                $scope.$apply();
                luikVallen();
                $("#btnWijzig").addClass("verborgen");
                $("#btnBewaar").addClass("hidden");
                $("#btnBekijkTeam").addClass("hidden");

            }
        };


        var bewaarPopUp = function(e){
            //e.preventDefault();
            ngDialog.close();
            var allListItems = $('.speler');
            var selectie = [];
            var lengte = allListItems.length;
            for (var i=0;  i<lengte; i++) {
                if(allListItems[i].firstChild.checked == true) selectie.push(allListItems[i].firstChild.value);
            }
            if(selectie.length != 23){
                alert("gelieve juist 23 spelers te selecteren, u heeft er "+selectie.length);
            }
            else{
                $scope.selectie = selectie;
                luikVallen();
                $("#btnWijzig").addClass("verborgen");
                $("#btnBewaar").addClass("hidden");
                $("#btnBekijkTeam").addClass("hidden");

            }
        };

        var luikVallen = function () {
            //$("#canvasLuik").removeClass("hidden");
            var t = $("#trein");
            var hoogte = $("#lijstAlleSpelers").height();
            $("#canvasLuik").css({height: hoogte }).removeClass("hidden");
            var b = $("#luikBackground");

            b.css({"margin-top": "-16px" });


            t.animate({
                top: hoogte+"px"
            }, {
                duration: "slow",
                easing: "easeOutBounce"
            });


            b.animate({
                height: hoogte+"px"
            },{
                duration: "slow",
                easing: "easeOutBounce"
            });
            setTimeout(function(){ t.addClass('driveAway');}, 1000);

            setTimeout(function(){ showResultList();}, 1000);





        };

        var showResultList = function () {
            $("#resultatenLijst").animate({opacity: 1}, 3000);
        };


        var wijzig = function(e){
            //e.preventDefault();
            ngDialog.close();
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

        var selecteer23 = function () {
            var allListItems = document.getElementsByClassName('speler');
            for (var i=0;  i<23; i++) {
                allListItems[i].firstChild.checked = true;
                $(allListItems[i]).addClass("checked");
                $(allListItems[i]).find("i").removeClass("hidden");
                $scope.aantalSpelers = 0;
                $scope.$apply()
            }

        }

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

            var btnSelecteer23 = document.getElementById("btnSelecteer23");
            btnSelecteer23.addEventListener("click", selecteer23);

            //setTimeout(function(){luikVallen();}, 1000);

        };



        var getTeam = function () {
            $scope.selectie = [];
            $("#gameSpace input:checked").each(function(){
                var value = $(this).val();
                $scope.$digest(function () {
                    $scope.selectie.push(value);
                });

            });
        };


        getAllPlayers();
        init();
        $scope.bewaar = bewaarPopUp;
        $scope.wijzig = wijzig;



    };


    angular.module("app").controller("selectieController", ["$scope", "ngDialog", selectieController]);

})();