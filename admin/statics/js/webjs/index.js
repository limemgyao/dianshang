//公告轮播
var ti=setInterval(newl,1000);
	var n=35;
function newl(){
	$("#content1").css({"top":-n+'px',"transition":'all 0.3s'});
	n=n+35;
	if(n>630){
	$("#content1").css({"top":0+'px',"transition":'all 0s'});
	n=35;
	}
}
$("#content1").mouseover(function(){
	clearInterval(ti)
	console.log(ti)
})
$("#content1").mouseleave(function(){
ti=setInterval(newl,1000);
})

var time2=setInterval(newl,1000);