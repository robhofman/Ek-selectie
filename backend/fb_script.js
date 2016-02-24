/**
 * Created by 8570p on 24/02/2016.
 */
$(function() {
    initFacebookSDK();
});

function initFacebookSDK () {
    $('body').prepend('<div id="fb-root"></div>');

    window.fbAsyncInit = function() {
        // init the FB JS SDK
        FB.init({
            appId      : '1237217742959497',                 // App ID from the app dashboard
            status     : false,                              // Check Facebook Login status
            xfbml      : false                               // Look for social plugins on the page
        });
        // Additional initialization code such as adding Event Listeners goes here

        facebookReady = true;
    };

    // If we've already installed the SDK, we're done
    if (document.getElementById('facebook-jssdk')) {return;}
    // Get the first script element, which we'll use to find the parent node
    var firstScriptElement = document.getElementsByTagName('script')[0];
    // Create a new script element and set its id
    var facebookJS = document.createElement('script');
    facebookJS.id = 'facebook-jssdk';
    // Set the new script's source to the source of the Facebook JS SDK
    facebookJS.src = '//connect.facebook.net/en_US/all.js';
    // Insert the Facebook JS SDK into the DOM
    firstScriptElement.parentNode.insertBefore(facebookJS, firstScriptElement);
}