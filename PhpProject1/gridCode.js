var myImgs = new Array();
var myBlank = 16;

/*$(document).ready(function() {
 
 $(".img").on('click', function(event) {
 alert("here click");
 move(event.target.id);
 
 });
 
 });*/


function generatePuzzle(mode) {

    var j;

    if (mode === 1)
        j = "1/numbers";
    else if (mode === 2)
        j = "2/beach";
    else if (mode === 3)
        j = "3/kimi";
    else
        j = "4/lehigh";

    for (var i = 1; i < 16; i++) {
        var img = new Image();
        img.src = j + i + ".jpeg";
        img.class = "img";

        img.id = Math.floor((i));
        img.onclick = function(event) {
            move(event.target.parentNode);
        };

        myImgs[i] = img;
    }



}


function updateTable() {

    /*$("#tablepuzzle td").each(function(index, ele) {
     $(ele).html('');
     $(ele).append(myImgs[index]);
     });*/



    for (var i = 1; i <= 16; i++) {
        $('#' + i).append(myImgs[i]);
    }


    /*for (var i = 1; i < 17; i++)
     $("#" + i + "> img").click(move(i));*/
}

function shuffle(difficulty) {

    while (difficulty > 0) {
        var tiles = getGoodTiles();
        var rand = randTile();

        var img = myImgs[myBlank];
        myImgs[myBlank] = myImgs[rand];
        myImgs[rand] = img;
        myBlank = rand;

        difficulty--;
    }
    updateTable();

}



function randTile() {
    return Math.random() * 2;
}

function move(cell) {

    var index = parseInt(cell.id);
    var good = false;


    /*for(var i =0;i<tiles.length;i++){
     
     if (index === tiles[i]){
     
     good =true;
     }
     }*/

    if (checkTile(index) === true) {

        var img = new Image();
        img = myImgs[myBlank];
        myImgs[myBlank] = myImgs[index];
        myImgs[index] = img;
        myBlank = index;
        updateTable();
        checkWin();
    }

}


function checkWin() {
    var win = false;
    /* if (myBlank !== 15) {
     for (var i = 0; i < 4; i++) {
     if ($("#" + i).children('img').id !== Math.floor((i - 1) / 10)) {
     win = false;
     }
     }
     }*/
    for (var i = 0; i < myImgs.length; i++) {
        if (parseInt(myImgs[i].id) === i) {
            win = true;
        }
    }
    if (win === true)
        alert("You win");

}



function checkTile(index) {
    var adjacentTiles = new Array();
    var good = false;
    var above = myBlank - 4;
    var below = myBlank + 4;
    var next = myBlank + 1;
    var prev = myBlank - 1;
    if (above <= 16 && above >= 1) {
        if (above === index) {
            good = true;
        }

        adjacentTiles.push(above);
    }
    if (below <= 16 && below >= 1) {

        if (below === index) {
            good = true;
        }

        adjacentTiles.push(below);
    }
    if (prev <= 16 && prev >= 1 && prev !== 4 && prev !== 8 && prev !== 12 && prev !== 16) {

        if (prev === index) {
            good = true;
        }

        adjacentTiles.push(prev);
    }

    if (next <= 16 && next >= 1 && next !== 1 && next !== 5 && next !== 9 && next !== 13) {

        if (next === index) {
            good = true;
        }

        adjacentTiles.push(next);
    }


    return good;
}

