
//    console.log(main_lis_width);
//    console.log(main_lis);
//    console.log(main1_ul);
var p=document.getElementById("parent_id");
var con1=document.getElementById("content1");
con1.innerHTML=con1.innerHTML+con1.innerHTML;
var timer,i;
function scrollT(){
    if(p.scrollTop%35==0){ //往上卷去距离是li行高的倍数
        clearInterval(timer); //清除定时器，停止走动
        i=setTimeout(move,1000); //延迟1s后，继续往上走
    }
    if(p.scrollTop>=con1.scrollHeight/2){
//				p.scrollTop=0;
        p.scrollTop=p.scrollTop-con1.scrollHeight/2;
    }else{
        p.scrollTop++;
    }
}
function move(){
    p.scrollTop++;  //p.scrollTop默认刚开始时是0, 能够除尽行高 记得先进行一次+1
    timer=setInterval(scrollT,50);
}
move();
p.onmouseover=function(){
    clearInterval(timer);
    clearTimeout(i);
}
p.onmouseout=function(){
    timer=setInterval(scrollT,50);
}
//    for(var i =0;i<main_lis.length;i++){
//        console.log(main_lis.length);
//    }


//var ul = document.querySelector(".main1 ul")
//var lis = document.querySelectorAll('.main1 ul li')
//console.log(lis.length);
//var lis_width = document.querySelectorAll('.main1 ul li')[0].offsetWidth;
//var con = document.querySelector('.con')
//var i = 0;
//console.log(lis.length * lis_width);
//var time = setInterval(function () {
//    i++;
//    if(i>lis.length){
//        ul.style.left = 0;
//        i = 0;
//        clearInterval(timer)
//    }
//    animate(ul,-i*lis_width);
//},1000)
//文字轮播
$(function(){
    $('.logos').liMarquee();
    $('.cooperation1').liMarquee({
        direction: 'up',
        scrollamount: 20,
        showSpeed: 1000
    });
});
//图片轮播

