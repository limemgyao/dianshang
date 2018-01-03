var timer;
$(".small li").on("mouseover", function () {
    //获取下表
    var index = $(this).index();
    //轮播图显示
    $(".big li").eq(index).addClass("disblock").siblings().removeClass("disblock")
  $(".small li").css({'opacity':0.5})
    $(this).css({'opacity':1});

})

//var index = 0;
//window.onload = function() {
//    index++;
//    $(".big").css("transform","translateY(-265px)")
//};