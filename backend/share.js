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
});
