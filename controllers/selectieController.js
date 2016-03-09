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
        $scope.aantalDeelnames = 0;
        $scope.percentageLijstNietGekozen = [];
        $scope.percentageLijstGekozen = [];
        $scope.top23 = [];
        $scope.thuisBlijvers = [];
        $scope.aantalKeepers = 0;
        $scope.keepers = [];
        $scope.aanvallers = [];
        $scope.verdedigers = [];
        $scope.middenvelders = [];
        $scope.url = "";
        var hoogteLijst = 0;


       /* var getUrlToShare = function (spelers) {
            var lengte = spelers.length;
            var urleerstedeel = window.location.href+"/overview.php";
            var urlTweedeDeel = "?";
            for(var i=0; i<lengte; i++){
                var speler = spelers[i];
                urlTweedeDeel +="player"+i+"="+ speler;
                if(i!=lengte-1)urlTweedeDeel +="&";
            }
            $scope.urlToShare = urleerstedeel + encodeURIComponent(urlTweedeDeel.trim());
        };*/



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



        var openKeeperPopup = function () {
            ngDialog.open({
                template: 'keeperTemplate'
            });
        };

        var openPopup = function () {


            ngDialog.open({
                template: 'testTemplate',
                scope: $scope
            });
            var value = 0;
            var hoogteLijst = $("#checkboxes").height();
            var body = $("body").width();

            //android
            if(!(navigator.userAgent.match(/iPhone/i)) && !(navigator.userAgent.match(/iPod/i)) &&(body < 600)) {
                value = hoogteLijst-1200+"px";
                setTimeout(function(){
                    $('.ngdialog-content').css("height", value);
                }, 300);
            }

            //desktop
            else if(body > 640){
                value = hoogteLijst-350+"px";
                setTimeout(function(){
                    $('.ngdialog-content').css("height", value);
                }, 300);
            }

            //iphone
            else{
                setTimeout(function(){
                    $('.ngdialog-content').children("div").children("img").css("display", "none");
                }, 300);
            }


        };


        var generateTwitterLink = function(){
            //$('.twitter-share-button').attr('data-url', sharelink);
        };

        var selectInnerCheckbox = function(){
            //speler is reeds geselecteerd => ontchecken
            var parent = $(this).parent().attr('id');
            if(parent == "GK"){
                var max = 3;
                var lengte = $(this).parent().children("li").children(':checked').length;
                if(lengte>=max && this.firstChild.checked==false){
                    this.firstChild.checked = false;
                    return;
                }
            }

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



        var aantalInzendingenOphalen = function(){
            $scope.aantalDeelnames = totaalAantalInzendingen;
        };

        var checkSpelersInSelectie = function(){
            var length = statistics.length;
            var aantalKeepers = 0;

            for(var i = 0; i<length; i++){
                var speler;
                var naam = statistics[i].spelernaam;
                var positie = statistics[i].positie;
                //var teller = 23;
                //console.log(naam);
                /*var bijdetop = false;
                if(i<teller){
                    bijdetop = true;
                }*/
                if($.inArray(naam, $scope.selectie)>-1){


                    //accentcontrole
                    if(statistics[i].spelernaam == "Dembele") {
                        statistics[i].spelernaam = "Dembélé"
                    }
                    //


                    speler = new Speler(statistics[i].spelernaam, 'gekozen', statistics[i].percentage, positie);
                    $scope.percentageLijstGekozen.push(speler);

                    if($scope.top23.length<23){
                        if(speler.positie == "GK"){
                            if(aantalKeepers<3){
                                $scope.top23.unshift(speler);
                            }
                            else{
                                $scope.thuisBlijvers.push(speler);
                            }
                            $scope.keepers.push(speler);
                            aantalKeepers += 1;
                        }
                        else{
                            if(speler.positie == "A"){
                                $scope.aanvallers.push(speler);
                            }
                            else if(speler.positie == "M"){
                                $scope.middenvelders.push(speler);
                            }
                            else if(speler.positie == "V"){
                                $scope.verdedigers.push(speler);
                            }
                            $scope.top23.push(speler);

                        }
                    }


                    /*if(bijdetop){
                        $scope.top23.push(speler);
                    }*/
                    else{
                        if(speler.positie=="GK"){
                            $scope.keepers.push(speler);
                        }
                        else if(speler.positie=="V"){
                            $scope.verdedigers.push(speler);
                        }
                        else if(speler.positie=="A"){
                            $scope.aanvallers.push(speler);
                        }
                        else if(speler.positie =="M"){
                            $scope.middenvelders.push(speler);
                        }
                        $scope.thuisBlijvers.push(speler);
                    }
                }
                else{
                    speler = new Speler(statistics[i].spelernaam, "nietgekozen", statistics[i].percentage, positie);
                    $scope.percentageLijstNietGekozen.push(speler);
                    if($scope.top23.length<23){
                        if(speler.positie == "GK"){
                            if(aantalKeepers<3){
                                $scope.top23.unshift(speler);
                            }
                            else{
                                $scope.thuisBlijvers.push(speler);
                            }
                            aantalKeepers += 1;
                        }
                        else{
                            $scope.top23.push(speler);

                        }

                    }
                    else{
                        $scope.thuisBlijvers.push(speler);
                    }
                }

                //keeper plaats 3 op 1 en 1 op 3


            }
            var b = $scope.top23[0];
            $scope.top23[0] = $scope.top23[2];
            $scope.top23[2] = b;
            aantalInzendingenOphalen();

        };

        var bewaarPopUp = function(e){
            //e.preventDefault();
            $("#btnHidden").click();
            ngDialog.close();
            var allListItems = $('.speler');
            var selectie = [];
            $scope.selectie = selectie;
            var lengte = allListItems.length;
            for (var i=0;  i<lengte; i++) {
                if(allListItems[i].firstChild.checked == true){
                    selectie.push(allListItems[i].firstChild.value);
                }
            }
            var listitems = $("#GK").children("li");
            var keeperCheckboxes = listitems.children(":checked");
            if(keeperCheckboxes.length != 3){
                openKeeperPopup();
                selectie = [];
                return;
            }
            if(selectie.length != 23){
                alert("gelieve juist 23 spelers te selecteren, u heeft er "+selectie.length);
            }
            else{
                $scope.selectie = selectie;
                luikVallen();
                generateTwitterLink();
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

            if($("body").width()<600){
                relevanteHoogte = 2900;
            }
            else{
                relevanteHoogte += 800
            }

            $("#canvasLuik").css({height: relevanteHoogte+50 }).removeClass("hidden");
            var b = $("#luikBackground");

            //b.css({"margin-top": "-16px" });

            t.animate({
                top: relevanteHoogte/2+"px"
            }, {
                duration: "slow",
                easing: "easeOutBounce"
            });

            b.animate({
                height: relevanteHoogte + 70+"px"
            },{
                duration: "slow",
                easing: "easeOutBounce"
            });

            $("#checkboxes").addClass("hidden");

            setTimeout(function(){
                t.removeClass("hidden");
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
            $("#resultatenLijst").removeClass("hidden")
                /*.css({height: hoogte})*/
                .animate({opacity: 1}, 3000);
            $("#resultatenLijstNietGekozen").removeClass("hidden")
                /*.css({height: hoogte})*/
                .animate({opacity: 1}, 3000);
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

            //var btnSelecteer23 = document.getElementById("btnSelecteer23");
            //btnSelecteer23.addEventListener("click", selecteer23);

            //setTimeout(function(){luikVallen();}, 1000);


        };



        getAllPlayers();
        init();
        $scope.bewaar = bewaarPopUp;
        $scope.wijzig = wijzig;



    };


    angular.module("app").controller("selectieController", ["$scope", "ngDialog", selectieController]);

})();