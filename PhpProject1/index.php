<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>15Puzzle</title>       
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>        
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        <script src="gridCode.js"></script>
    </head>
    <body>
        <div data-role="page" id="welcomeScreen">
            <h1>Welcome to 15</h1>
            
            <p>Enjoy the Game!</p>
            
            <div data-role="content">       
                
                <h2>Choose puzzle skin:</h2>
                <a href="#nextDiv" data-role="button" onclick="generatePuzzle(1);">Numbers</a>
                
                <a href="#nextDiv"><img src="2/myBeach.jpg" onclick="generatePuzzle(2);" />A Beautiful Beach</a>
                
                <a href="#nextDiv"><img src="3/myKimi.jpg" onclick="generatePuzzle(3);" />Ferrari Driver Kimi Raikonnen</a>
                
                <a href="#nextDiv"><img src="4/myLehigh.jpg" onclick="generatePuzzle(4);" />Lehigh Lock</a>
                
            </div>
        </div>

        <div data-role="page" id="nextDiv">
            <h1>Welcome to 15Puzzle.</h1>
            <p>Please choose a difficulty(from easy to very hard)</p>
            <a href="#myPuzzle" data-role="button" onclick="generatePuzzle(1);">Easy</a>
            
            <a href="#myPuzzle" data-role="button" onclick="generatePuzzle(2);">Medium</a>
            
            <a href="#myPuzzle" data-role="button" onclick="generatePuzzle(3);">Hard</a>
            
            <a href="#myPuzzle" data-role="button" onclick="shuffle(5);">Very Hard</a>
        </div>
        <div data-role="page" id="myPuzzle">
            <table id="tablepuzzle">
                <thead>Can you solve the puzzle?</thead>
                
                <tbody>
                    
                    <tr><td id="1"></td><td id="2"></td><td id="3"></td><td id="4"></td></tr>
                    <tr><td id="5"></td><td id="6"></td><td id="7"></td><td id="8"></td></tr>
                    <tr><td id="9"></td><td id="10"></td><td id="11"></td><td id="12"></td></tr>
                    <tr><td id="13"></td><td id="14"></td><td id="15"></td><td id="16"></td></tr>
                </tbody>
                
            </table>

            <a href="#welcomeScreen" data-role="button" onclick="generatePuzzle(1);">Start Over</a>
        </div>

    </body>
</html>