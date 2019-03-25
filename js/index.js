$(window).on('load', function(){
console.log("loaded");
});

$('#menu1').hover(
function(){changebg(1);},
function(){changebg(0);}
);
$('#menu2').hover(
function(){changebg(2);},
function(){changebg(0);}
);
$('#menu3').hover(
function(){changebg(3);},
function(){changebg(0);}
);
$('#menu4').hover(
function(){changebg(4);},
function(){changebg(0);}
);


function changebg(index){
$('body').css('background-image','url(./media/bg'+index+'.jpg)');
}
