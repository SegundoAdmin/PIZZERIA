var i;
$(document).ready(function() {
   $('#1').css("display","block");
   i = 1;
   moverCarrusel();
});

$(document).on('click','#flechaDerecha',function(){
	i++;
	if(i==4)
		i=1;
	$('.imgcarrusel').css("display","none");
	$('#'+i).css("display","block");
});

$(document).on('click','#flechaIzquierda',function(){
	if(i==1){
		i = 3;
	}
	else{
		i--;
	}
	$('.imgcarrusel').css("display","none");
	$('#'+i).css("display","block");
});

function moverCarrusel(){
	setInterval(Timer,3000);
	i++;
}

function Timer(){
	if(i==4)
		i = 1;
	$('.imgcarrusel').css("display","none");
	$('#'+i).css("display","block");
	i++;
}