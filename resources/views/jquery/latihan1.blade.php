<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>jquery goes to DOM-ville</title>
    <style>
        #change_me {
            position: absolute;
            top: 100px;
            left: 400px;
            font: 24px arial;
        }
        #move_up #move_down #color #disappear {
            padding; 5px;
        }
    </style>
    <script src="scripts/jquery-1.6.2.min.js"></script>
</head>
<body>
    <button id="move_up">Move Up</button>
    <button id="move_down">Move Down</button>
    <button id="color">Change Color</button>
    <button id="disappear">Disappear/Re-appear</button>

    <div id="change_me">Make Me Do Stuff!</div>
    <script>
        $(document).ready(function() {
            $('#move_up').click(function() {
                $("#change_me").animate({top:30}, 200);
            });
            $('#move_down').click(function() {
                $("#change_me").animate({top:500}, 2000);
            });
            $('#color').click(function() {
                $("#change_me").css("color", "purple");
            });
            $('#disappear').click(function() {
                $("#change_me").toggle("slow");
            });
        });
    </script>
</body>
</html>