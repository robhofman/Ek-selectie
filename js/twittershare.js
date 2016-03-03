document.getElementById("btnTwitterShare").onclick = function() {
	var twitterUrl = "https://twitter.com/share?";	
	var queryString = shareQueryString;
	var deURL = twitterUrl + shareQueryString;
	openWindow(deURL);
};


function openWindow(url) { 
  window.open(
    url
    //'feedDialog',
    //'toolbar=0,status=0,width=626,height=436'
  ); 
}