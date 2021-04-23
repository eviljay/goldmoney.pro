



function Effects(){
    $('.effects').css('left','310px');
    $('.effects').show();
    $('.effects').animate({top:180, left:530}, 330, "linear", function(){
	$('.effects').hide();
	setTimeout("Effects();",5000);
    });
}

$(document).ready(function() {
   setTimeout("Effects();",5000);
}); 






function Response(response){
   if(!response) return false;
   var resp =  response.toString().split('response=');
   if(response.substr(0,8) != 'response' && response) alert(response);
   for(var j=1;j<resp.length;j++){
	   var out = resp[j];
	   if(out) var p =  out.toString().split('^');
       var func = p[0];
	   window[func](p[1], p[2], p[3], p[4], p[5], p[6], p[7], p[8], p[9], p[10]);
   }
}

  
function _link(obj){
   var val = $(obj).val();
   $('#link').html(val);
}


function selects(){
    $('.select select').bind('change', function () {
	   var selected  = $('select option:selected');  
       var selected  = $(this).find('option:selected');  
	   for(var j=0;j<selected.length;j++){
        if(selected[j]){
			var val = $(selected[j]).html();
			$(selected[j]).parent().parent().find('.text').html(val);
        }
       }
    });
    var selected  = $('select option:selected');  
    for(var j=0;j<selected.length;j++){
        if(selected[j]){
			var val = $(selected[j]).html();
			$(selected[j]).parent().parent().find('.text').html(val);
        }
    }
}

function effects(){
 	$('.error').fadeTo(0,0);
	$('.error').fadeTo(2400,1);
	$('.effect').fadeTo(0,0);
    $('.effect').fadeTo(1000,1);
}


 
function newsEffect(){
  $('.top_news .line').fadeTo(0,1);
  $('.top_news .line').css('right','-1000px');
  $('.top_news .line').animate({top:0, right:0}, 15000, "linear", function(){
		setTimeout("newsHide();",5000);
		setTimeout("newsEffect();",8000);

  });
}

function newsHide(){
  $('.top_news .line').fadeTo(0,1);
  $('.top_news .line').fadeTo(3000,0);
}


var window_status = 0;

function openWindow(url){
    $('.openwindow').show();
    $('.openwindow_bg').show();
	$('.openwindow').fadeTo(0,0);
 	$('.openwindow').fadeTo(500,1);
	$('.openwindow_bg').fadeTo(0,0);
 	$('.openwindow_bg').fadeTo(500,0.5);
    setTimeout(function() {
       this.window_status = 1;
    }, 500);
	$.ajax({
		url: url,
		type: 'get',
		cache: false,
		success: function(response){
             $('.openwindow').html(response);
		}
	});
	return  false;
}


function closeWindow(){
	if(this.window_status == 0) return false;
	$('.openwindow').fadeTo(0,1);
 	$('.openwindow').fadeTo(500,0);
	$('.openwindow_bg').fadeTo(0,0.5);
 	$('.openwindow_bg').fadeTo(500,0);
    setTimeout(function() {
        $('.openwindow').hide();
        $('.openwindow_bg').hide();
		this.window_status = 0;
    }, 500);
	return  false;
}




function counters(){
	 $.ajax({
		url: '/ru/counter',
		type: 'get',
		cache: false,
		success: function(response){
             $('#counter').html(response);
			 //setTimeout('counters()', 10000);
		}
	 });
}




$(document).ready(function() {
   selects();
   effects();
   newsEffect();
   counters();
}); 



function openVideo(){
	$('.window').fadeTo(0,0);
    $('.window').fadeTo(1000,1);
	$.ajax({
		url: '/ru/stat/video',
		type: 'get',
		cache: false,
		success: function(data){
             
		}
	});
}


