/**
 * Created by 8570p on 3/03/2016.
 */
document.getElementById("jow").onclick = function() {
    console.log("Sharelink vanuit FB: " + sharelink);
    FB.ui({
        method: 'feed',
        link: sharelink,
        caption: "Dit is mijn selectie voor het EK 2016",
        picture: "http;//goudenduivels.sporzalb.be/selectiemaker/img/plane.png"


    }, function (response) {
    });
};