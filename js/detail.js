/*******显示购物车*********/
for(var i=0;i<$('.goods_hover').length;i++){
    $('.hover_display>.cart').eq(i).attr({'data-toggle':"tooltip",'title':"不登录也能加入购物车",'data-placement':'bottom'})
}
$('.goods_hover').mouseenter( function () {
    $(this).find('.hover_display').show('fast');
}).mouseleave(function () {
    $(this).find('.hover_display').hide('fast');
})
/*****提示框******/
$(function () {
    $("[data-toggle='tooltip']").tooltip();
});
/*大图*/
var items_img=$('.items ul li img');
items_img.eq(0).css('opacity', 1);
//鼠标经过预览图片函数
function preview(img){
    $("#preview .jqzoom img").attr("src",$(img).attr("bimg"));
    $("#preview .jqzoom img").attr("jqimg",$(img).attr("bimg"));
    for(var i=0;i<items_img.length;i++){
        items_img.eq(i).css('opacity', 0.6);
        items_img.eq(i).parent().css({'border':'1px solid #ccc','margin':'2px'});
    }
    $(img).css('opacity', 1);
    $(img).parent().css({'border':'2px solid #FF6600','margin':'1px'});
}
//图片放大镜效果
$(function(){
    $(".jqzoom").jqueryzoom({xzoom:380,yzoom:410});
});

//图片预览小图移动效果,页面加载时触发
$(function(){
    var tempLength = 0; //临时变量,当前移动的长度
    var viewNum = 5; //设置每次显示图片的个数量
    var moveNum = 2; //每次移动的数量
    var moveTime = 300; //移动速度,毫秒
    var scrollDiv = $(".spec-scroll .items ul"); //进行移动动画的容器
    var scrollItems = $(".spec-scroll .items ul li"); //移动容器里的集合
    var moveLength = scrollItems.eq(0).width() * moveNum; //计算每次移动的长度
    var countLength = (scrollItems.length - viewNum) * scrollItems.eq(0).width(); //计算总长度,总个数*单个长度

    //下一张
    $(".spec-scroll .next").bind("click",function(){
        if(tempLength < countLength){
            if((countLength - tempLength) > moveLength){
                scrollDiv.animate({left:"-=" + moveLength + "px"}, moveTime);
                tempLength += moveLength;
            }else{
                scrollDiv.animate({left:"-=" + (countLength - tempLength) + "px"}, moveTime);
                tempLength += (countLength - tempLength);
            }
        }
    });
    //上一张
    $(".spec-scroll .prev").bind("click",function(){
        if(tempLength > 0){
            if(tempLength > moveLength){
                scrollDiv.animate({left: "+=" + moveLength + "px"}, moveTime);
                tempLength -= moveLength;
            }else{
                scrollDiv.animate({left: "+=" + tempLength + "px"}, moveTime);
                tempLength = 0;
            }
        }
    });
});
//手风琴
$('[data-toggle="collapse"]').click(function () {
    if($(this).attr('aria-expanded')=='true'){
        $(this).find('.change_icon').text("+");
    }else {
        $(this).find('.change_icon').text("-");
    }
})
//产品数量
var num_value=1;
$('.reduce').click(function () {
    num_value=Number($('.num_value').val());
    if(num_value>1){
        $('.num_value').val(num_value-1)
    }else {
        $('.num_value').val(1)
    }
})
$('.plus').click(function () {
    num_value=Number($('.num_value').val());
    $('.num_value').val(num_value+1)
})