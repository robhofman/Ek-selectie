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
                $(this).find("i").addClass("hidden");
                $(this).removeClass('checked');
                $scope.$apply(function (){
                        $scope.aantalSpelers = $scope.aantalSpelers + 1;
                    });

            }
            else{
                this.firstChild.checked = true;
                $(this).addClass("checked");
                $(this).find("i").removeClass("hidden");
                $scope.$apply(function(){
                    $scope.aantalSpelers = $scope.aantalSpelers - 1;


                });
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
            getTeam();

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
                luikVallen();
                //spelers posten

                //allListItems.fadeOut("slow");


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
        $scope.bewaar = bewaar;



    };


    angular.module("app").controller("selectieController", ["$scope", "ngDialog", selectieController]);

})();