/**
 * Created by 8570p on 24/02/2016.
 */
function openWindow(url) {
    window.open(
        url,
        'feedDialog',
        'toolbar=0,status=0,width=626,height=436'
    );
}


$(document).ready(function() {

    $.ajaxSetup({ cache: true });
    $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
        FB.init({
            appId: '1237217742959497',
            version: 'v2.5' // or v2.0, v2.1, v2.2, v2.3
        });
        //$('#loginbutton,#feedbutton').removeAttr('disabled');
        FB.getLoginStatus(updateStatusCallback);
    });



    function myFacebookLogin() {
        FB.login(function(){
            // Note: The call will only work if you accept the permission request
            FB.api('/me/feed', 'post', {message: 'Hello, world!'});
        }, {scope: 'publish_actions'});
    }


    console.log("ik wordt ingeladen");
    $('#twittershare').click(function () {
        openWindow('https://twitter.com/intent/tweet');
    });


    $('#facebookshare').click(function () {
        openWindow('https://facebook.com/sharer.php?');
    });



});
