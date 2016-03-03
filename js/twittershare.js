document.getElementById("btnTwitterShare").onclick = function() {
	var twitterUrl = "https://twitter.com/share?";	
	var queryString = shareQueryString;
	openWindow(twitterUrl + shareQueryString);
};


function openWindow(url) { 
  window.open(
    url, 
    'feedDialog', 
    'toolbar=0,status=0,width=626,height=436'
  ); 
}