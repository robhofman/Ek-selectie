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
    console.log("ik wordt ingeladen");
    $('#twittershare').click(function () {
        openWindow('https://twitter.com/intent/tweet');
    });


    window.fbAsyncInit = function() {
        FB.init({
            appId      : 'your-app-id',
            xfbml      : true,
            version    : 'v2.5'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
});
