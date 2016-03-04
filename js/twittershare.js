
$(document).ready(function(){
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));

});

/*
document.getElementById("btnTwitterShare").onclick = function() {
	var twitterUrl = "https://twitter.com/share";
	var queryString = shareQueryString;
	var deURL = twitterUrl + encodeURI("?http://goudenduivels.sporzalb.be/selectiemaker/overview.php"+encodeURIComponent("?"+shareQueryString));
	var result = encodeURI(deURL);
	openWindow(deURL);
};



function openWindow(url) { 
  window.open(
    url,
    'feedDialog',
    'toolbar=0,status=0,width=626,height=436'
  ); 
}*/

function twitterInit(){

    twttr.ready(
        //setTimeout(function(){
            twttr.widgets.createShareButton(
                "http://goudenduivels.sporzalb.be/selectiemaker/overview.php?"+encodeURIComponent(shareQueryString),
                document.getElementById('rootTwitter'),
                {
                    text: 'Dit is mijn selectie',
                    size: "large"
                }
            )
        // }, 500)


    );
}
