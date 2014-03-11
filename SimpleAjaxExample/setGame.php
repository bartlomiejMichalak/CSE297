<!DOCTYPE html>
<?php
include "SetGameController.php";
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script src=js/jquery-2.0.3.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script src='bootstrap-3.0.0/dist/js/bootstrap.min.js'></script>
        <link rel='stylesheet' type='text/css' href='css/styles.css'>
        <script src="http://tertullian.cse.lehigh.edu/socket.io/socket.io.min.js"></script>
        <script src="js/theHand.js" type="text/javascript"></script>
        <title>Ajax</title>

<!--        <script src ='js/theHand.js' type="text/javascript">
            $(document).ready(function() {
                alert("dot ready");
                createHand();
            });
        </script>-->
    </head>



    <body>

        <div class="row">
            <div class="col-md-12"><h1>Welcome to Set</h1></div>

        </div>

        <div class="row">
            <div class="col-md-6">

                <table id="myTable">
                    <tr> <td></td> <td></td> <td></td> </tr>
                    <tr> <td></td> <td></td> <td></td> </tr>
                    <tr> <td></td> <td></td> <td></td> </tr>
                    <tr> <td></td> <td></td> <td></td> </tr>
                </table>

            </div>

            <div class="col-md-6">
                <div id="commands">
                    <h2>Commands</h2>
                    <input type ="button" value="Set" onclick="setButton();"/>
                    <input type ="button" value="Add Row" onclick="setRow();"/>
                    <input type ="button" value="shuffle" onclick="setShuffle();"/>
                    <input type ="button" value="End" onclick="setEndGame();"/>
                </div>
                <br>
                <br>
                <div class='col-md-6' id="myPlayers">
                    <h2>Players</h2>
                    <thead>
                        <tr><td>Player Name </td> <td>Score</td> <td>R</td> <td>S</td> <td>E</td></tr>
                    </thead>
                    <table id='playerList'>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </body>
</html>
