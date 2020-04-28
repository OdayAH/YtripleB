$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});
if (window.innerWidth < 720)
{
    function addText0(){
    document.getElementById('p0').style.display="block";
    document.getElementById('p100').style.display="block";
    document.getElementById('p110').style.display="block";
}

function removeText0(){
    document.getElementById('p0').style.display="none";
    document.getElementById('p100').style.display="none";
    document.getElementById('p110').style.display="none";
}
}


function addText(){
    document.getElementById('p').style.display="block";
    document.getElementById('p90').style.display="block";
}
function removeText(){
    document.getElementById('p').style.display="none";
    document.getElementById('p90').style.display="none";
}
function removeText1(){
    document.getElementById('p1').style.display="none";
    document.getElementById('p60').style.display="none";
}
function addText1(){
    document.getElementById('p1').style.display="block";
    document.getElementById('p60').style.display="block";
}
function addText2(){
    document.getElementById('p2').style.display="block";
    document.getElementById('p80').style.display="block"
}
function addText3(){
    document.getElementById('p3').style.display="block";
    document.getElementById('p50').style.display="block";
}
function addText4(){
    document.getElementById('p4').style.display="block";
    document.getElementById('p40').style.display="block";
}
function addText5(){
    document.getElementById('p5').style.display="block";
    document.getElementById('p70').style.display="block";
}
function addText6(){
    document.getElementById('p6').style.display="block";
    document.getElementById('p20').style.display="block";
    document.getElementById('h1').style.display="block";
}
function addText7(){
    document.getElementById('p7').style.display="block";
    document.getElementById('p30').style.display="block";
}
function removeText2(){
    document.getElementById('p2').style.display="none";
    document.getElementById('p80').style.display="none";
}
function removeText3(){
    document.getElementById('p3').style.display="none";
    document.getElementById('p50').style.display="none";
}
function removeText4(){
    document.getElementById('p4').style.display="none";
    document.getElementById('p40').style.display="none";
}
function removeText5(){
    document.getElementById('p5').style.display="none";
    document.getElementById('p70').style.display="none";
}
function removeText6(){
    document.getElementById('p6').style.display="none";
    document.getElementById('p20').style.display="none";
    document.getElementById('h1').style.display="none";
}
function removeText7(){
    document.getElementById('p7').style.display="none";
    document.getElementById('p30').style.display="none";
}
function f1(){
document.getElementsByClassName("title").style.backgroundSize= "4px 50px";
document.getElementsByClassName("title").style.color= "white";

}
function appear(){
    document.getElementById("p30").style.display="block";
    document.getElementById("continue").style.display="none";

}
function appear2(){
    document.getElementById("p20").style.display="block";
    document.getElementById("continue2").style.display="none";

}
function appear3(){
    document.getElementById("p40").style.display="block";
    document.getElementById("continue3").style.display="none";

}
function appear5(){
    document.getElementById("p50").style.display="block";
    document.getElementById("continue5").style.display="none";

}
function appear6(){
    document.getElementById("p60").style.display="block";
    document.getElementById("continue6").style.display="none";

}