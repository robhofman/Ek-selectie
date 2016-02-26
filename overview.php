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
        <ul>
            <li ng-repeat="speler in spelers">{{speler}}</li>
        </ul>
    </main>
    <script src="lib/angular.js"></script>
    <script src="node_modules/ng-dialog/js/ngDialog.js"></script>
    <script src="app.js"></script>
    <script src="controllers/shareSelectieController.js"></script>
</body>
</html>