//跟随鼠标移动
window.onload = function() {
    var oTop = document.getElementById("box");
    document.onmousemove = function(event) {
        var oEvent = event || window.event;
        var scrollleft = document.documentElement.scrollLeft || document.body.scrollLeft;
        var scrolltop = document.documentElement.scrollTop || document.body.scrollTop;
        oTop.style.left = oEvent.clientX + scrollleft + 10 + "px";
        oTop.style.top = oEvent.clientY + scrolltop + 10 + "px";
    }
}
//离开当前标签页时更改标题
document.addEventListener('visibilitychange', changeTitle);
function changeTitle() {
    if(document.visibilityState == 'hidden') {
        normal_title = document.title;
        document.title = 'QAQ';
    } else document.title = normal_title;
}
//禁用右键并提醒
document.onmousedown = new Function("if(event.button==2)alert('Right button is forbidden!')");
document.oncontextmenu = new Function("event.returnValue=false");
//禁用选择
document.onselectstart = new Function("event.returnValue=false");  