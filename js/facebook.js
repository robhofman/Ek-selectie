function intifb(){
    FB.ui({
        method: 'feed',
        link: 'https://robhofman.vlaanderen/',
        caption: 'An example caption'
    }, function(response){});
}

