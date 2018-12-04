var lifeArr = [];
var innerArr = [];
var playing;
var makeType = 0;
var len = 10;
var wid = 10;
//jquery to manipulate dom
function createGrid(x,y) {
    lifeArr = [];
    for (var rows = 0; rows < y; rows++) {
        innerArr = [];
        for (var columns = 0; columns < x; columns++) {
            //use array to index each block by id with a separator "s"
            $("#container").append("<div class='grid' id='"+rows+"s"+columns+"'></div>");
            innerArr.push(0);
        }
        lifeArr.push(innerArr);
    }
    $(".grid").width(1000/x);
    $(".grid").height(1000/x);
};
//fetch any cell by index
function getGridCell(x,y){
    return(document.getElementById(x+"s"+y));
}
// function that clears the grid
function clearGrid(){
    $(".grid").remove();
    lifeArr=[];
}
function play(){
    if (!playing) {
        playing = setInterval(function(){lifeIter()},500);
    } else {
        clearInterval(playing);
        playing = null;
    }
}
function lifeIter(){
    var transit = [];

    for (var i = 0; i < lifeArr.length; i++)
        transit[i] = lifeArr[i].slice();
    var tl = transit.length;
    for (var i = 0;i<tl;i++){
        var tll = transit[i].length;
        for(var j=0;j<tll;j++){
           if(rulesHere(i,j,tl,tll,transit,transit[i][j])){
                life(i,j);
           }
           else
            death(i,j);

        }
    }   
}

function rulesHere(y,x,tll,tl,transit,isDead){
    var checks = [[x+1,y+1],[x+1,y],[x+1,y-1],[x,y+1],[x,y-1],[x-1,y+1],[x-1,y],[x-1,y-1]];
    var cl = [];
    //remove all indices which will go outside grid
    for(var i=0;i<checks.length;i++){
        if(checks[i][0]!=-1&&checks[i][1]!=-1&&checks[i][1]!=tll&&checks[i][0]!=tl){
            cl.push(checks[i]);
        }
    }
    var neighbors = 0;
    for(var i=0;i<cl.length;i++){
        var inner=transit[cl[i][1]];
        if(inner[cl[i][0]]==1){
            if(y==2)
                console.log(x+","+y+" neighbor found at "+cl[i][0]+","+cl[i][1]);
            neighbors++;
        }
    }
    if(isDead == 0){
        if(neighbors == 3){
            return true;
        }
        else{
            return false;
        }
    }
    else{
        if(neighbors<2){
            return false;
        }
        else if(neighbors>3){
            return false;
        }
        else{
            return true;
        }
    }
}
function life(x,y){ 
    getGridCell(x,y).style.backgroundColor = "black";
    lifeArr[x][y]=1;
}
function death(x,y){
     getGridCell(x,y).style.backgroundColor = "white";
    lifeArr[x][y]=0;
}
// function that prompts the user to select the number of boxes in a new grid
// the function then also creates that new grid
function newGrid(){
    wid = parseInt(prompt("Width?"));
    len = parseInt(prompt("Height?"));
    lifeArr = [];
    clearGrid();
    createGrid(wid,len);
}

$(document).ready(function() {
    createGrid(wid,len);
    var str = "";
    var xInd = "";
    var yInd = "";
    $(".grid").click(function() {
        str = $(this).attr("id");
        xInd = parseInt(str.substr(0, str.indexOf('s')));
        yInd = parseInt(str.substr(str.indexOf('s')+1, str.length));
        if(makeType==0){
            if(lifeArr[xInd][yInd]==0){
                $(this).css("background-color", "black");
                lifeArr[xInd][yInd]=1;
            }
            else if(lifeArr[xInd][yInd]==1){
                $(this).css("background-color", "white");
                lifeArr[xInd][yInd]=0;
            }
        }
        else if(makeType==1){
            makeBlock(xInd,yInd,wid,len);
        }
        else if(makeType==2){
            makeBlinker(xInd,yInd,wid,len);
        }
        else if(makeType==3){
            makeBeacon(xInd,yInd,wid,len);
        }
        else if(makeType==4){
            makeGlider(xInd,yInd,wid,len);
        }
        });
    $("#start").click(function(){
        if(!playing){
            $(this).css("background-color","red");
        }
        else
            $(this).css("background-color","#b3c6ff");
        play();
        

    });
    $("#it1").click(function(){
        lifeIter();
        

    });
    $("#it23").click(function(){
        for(var i = 0;i<23;i++){
            lifeIter();
        }
    });
    $("#normal").click(function(){
        makeType=0;
    });
    $("#block").click(function(){
        makeType=1;
    });
    $("#blinker").click(function(){
        makeType=2;
    });
    $("#beacon").click(function(){
        makeType=3;
    });
    $("#glider").click(function(){
        makeType=4;
    });
    $(document).keydown(function(e){
        if(e.keyCode == 32){
        lifeIter();
      }
      });
    $("#reset").click(function(){
        newGrid();
        var str = "";
        var xInd = "";
        var yInd = "";
        $(".grid").click(function() {
            str = $(this).attr("id");
            xInd = parseInt(str.substr(0, str.indexOf('s')));
            yInd = parseInt(str.substr(str.indexOf('s')+1, str.length));
            if(makeType==0){
                if(lifeArr[xInd][yInd]==0){
                    $(this).css("background-color", "black");
                    lifeArr[xInd][yInd]=1;
                }
                else if(lifeArr[xInd][yInd]==1){
                    $(this).css("background-color", "white");
                    lifeArr[xInd][yInd]=0;
                }
            }
            else if(makeType==1){
                makeBlock(xInd,yInd,wid,len);
            }
            else if(makeType==2){
                makeBlinker(xInd,yInd,wid,len);
            }
            else if(makeType==3){
                makeBeacon(xInd,yInd,wid,len);
            }
            else if(makeType==4){
                makeGlider(xInd,yInd,wid,len);
            }
          });
    });
})
