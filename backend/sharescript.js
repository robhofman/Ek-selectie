/**
 * Created by 8570p on 3/03/2016.
 */
document.getElementById("jow").onclick = function() {
    console.log("Sharelink vanuit FB: " + sharelink);
    FB.ui({
        method: 'share',
        href: sharelink

    }, function (response) {
    });
}