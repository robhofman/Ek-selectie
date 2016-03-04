<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Wie gaat er mee naar Frankrijk?</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main ng-controller="shareSelectieController">
        <div id="checkboxes" class="spelersOverviewDiv">
            <div class="innerContainer" id="innerContainerCheckboxes">
                <ul id="overviewList">
                    <li class="speler" ng-repeat="speler in spelers"><img src="img/{{speler}}.png" alt="{{speler}}"></li>
                </ul>
            </div>
            <a href="http://sporza.be/cm/sporza/extra/1.2582529">
                <div class="sporzaButton overviewButton">
                    <p>Speel zelf!</p>
                </div>
            </a>
        </div>

    </main>
    <script src="lib/angular.js"></script>
    <script src="node_modules/ng-dialog/js/ngDialog.js"></script>
    <script src="app.js"></script>
    <script src="controllers/shareSelectieController.js"></script>
    <script src="controllers/selectieController.js"></script>
</body>
</html>