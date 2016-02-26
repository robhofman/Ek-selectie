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
        $scope.resultLijst = [];
        $scope.selectie = [];
        $scope.percentageLijst = [];
        $scope.urlToShare = "";
        var hoogteLijst = 0;


        var getUrlToShare = function () {

        };

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
            //speler is reeds geselecteerd => ontchecken
            if(this.firstChild.checked == true){
                this.firstChild.checked = false;
                $(this).find(".check").addClass("hidden");
                $(this).removeClass('checked');
                /*$scope.$apply(function (){
                        $scope.aantalSpelers = $scope.aantalSpelers + 1;
                    });
                */
                $scope.aantalSpelers = $scope.aantalSpelers + 1;
                $scope.$apply();

            }

            //nieuwe speler => checken
            else{
                if($scope.aantalSpelers == 0){
                    openPopup();
                    return;
                }
                this.firstChild.checked = true;
                $(this).addClass("checked");
                $(this).find(".check").removeClass("hidden");
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
            hoogteLijst = $("#checkboxes").height();

            $("#btnBekijkTeam").addClass("hidden");
            var allListItems = $('.speler');
            for (var i=0;  i<allListItems.length; i++) {
                var item = allListItems[i].firstChild;
                if(item.checked == false) $(allListItems[i]).addClass("hidden");
            }

            $("#checkboxes").css({height: hoogteLijst});
            //this.className += 'hidden';
            $("#btnWijzig").removeClass("hidden");
            $("#btnBewaar").removeClass("hidden");
            //getTeam();

        };



        var checkSpelersInSelectie = function(){
            var length = statistics.length;
            var result = [];
            for(var i = 0; i<length; i++){
                var speler;
                var naam = statistics[i].spelernaam;
                console.log(naam);
                if($.inArray(naam, $scope.selectie)>-1){
                    speler = new Speler(statistics[i].spelernaam, 'gekozen', statistics[i].percentage);
                }
                else{
                    speler = new Speler(statistics[i].spelernaam, "nietgekozen", statistics[i].percentage);
                }
                result.push(speler);
            }
            $scope.percentageLijst = result;

        };

        var bewaarPopUp = function(e){
            //e.preventDefault();
            $("#btnHidden").click();
            ngDialog.close();
            var allListItems = $('.speler');
            var selectie = [];
            var lengte = allListItems.length;
            for (var i=0;  i<lengte; i++) {
                if(allListItems[i].firstChild.checked == true){
                    selectie.push(allListItems[i].firstChild.value);
                }
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
                checkSpelersInSelectie();
            }
        };

        var luikVallen = function () {
            //$("#canvasLuik").removeClass("hidden");
            window.scrollTo($("#gameSpace"), { duration: 0});
            $(".aantal").addClass("hidden");
            var t = $("#trein");
            var hoogte = $("#checkboxes").height();
            var windowhoogte =$(window).height();
            var relevanteHoogte;
            if(hoogte > windowhoogte){
                relevanteHoogte = windowhoogte;
            }
            else{
                relevanteHoogte = hoogte + 16;
            }
            $("#canvasLuik").css({height: relevanteHoogte }).removeClass("hidden");
            var b = $("#luikBackground");

            //b.css({"margin-top": "-16px" });

            t.animate({
                top: relevanteHoogte/2+"px"
            }, {
                duration: "slow",
                easing: "easeOutBounce"
            });

            b.animate({
                height: relevanteHoogte+"px"
            },{
                duration: "slow",
                easing: "easeOutBounce"
            });

            $("#checkboxes").addClass("hidden");

            setTimeout(function(){
                t.animate({
                    left: -700+"px",
                    top: -700+"px",
                    borderSpacing: 30

                },{
                    step: function(now,fx) {
                        $(this).css('-webkit-transform','rotate('+now+'deg)');
                        $(this).css('-moz-transform','rotate('+now+'deg)');
                        $(this).css('transform','rotate('+now+'deg)');
                    },
                    duration: 5000
                });
                /*t.animate({  borderSpacing: 30 }, {
                    step: function(now,fx) {
                        $(this).css('-webkit-transform','rotate('+now+'deg)');
                        $(this).css('-moz-transform','rotate('+now+'deg)');
                        $(this).css('transform','rotate('+now+'deg)');
                    },
                    duration:2000
                },'linear');*/
            }, 1000);


            setTimeout(function(){ showResultList(hoogte);}, 1000);





        };

        var showResultList = function (hoogte) {
            $("#resultatenLijst").removeClass("hidden").css({height: hoogte}).animate({opacity: 1}, 3000);
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
                $(allListItems[i]).find(".check").removeClass("hidden");
                $scope.aantalSpelers = 0;
                $scope.$apply()
            }

        };

        var init = function(){
            var submit = document.getElementById('btnBekijkTeam');
            submit.addEventListener("click", hideOthers);

            var btnWijzig = document.getElementById("btnWijzig");
            btnWijzig.addEventListener("click", wijzig);

            //var btnBewaar = document.getElementById("btnBewaar");
            //btnBewaar.addEventListener("click", bewaar);

            var allListItems = document.getElementsByClassName('speler');
            for (var i=0;  i<allListItems.length; i++) {
                allListItems[i].addEventListener("click", selectInnerCheckbox);
            }

            var btnSelecteer23 = document.getElementById("btnSelecteer23");
            btnSelecteer23.addEventListener("click", selecteer23);

            //setTimeout(function(){luikVallen();}, 1000);
            var btnfb = document.getElementById("shareFb");
            btnfb.addEventListener("click", intifb);

        };



        getAllPlayers();
        init();
        $scope.bewaar = bewaarPopUp;
        $scope.wijzig = wijzig;



    };


    angular.module("app").controller("selectieController", ["$scope", "ngDialog", selectieController]);

})();