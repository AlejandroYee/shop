/*
 * xwmoban jslib
 * site:http://www.xwmoban.com
 */

if(!window['xwmoban']) window['xwmoban']={};

(function(){

    function byId(id){
        return  document.getElementById(id);
    }

     function $(id){
        return  document.getElementById(id);
    }

    function byTag(id,  tag){
        return id.getElementsByTagName(tag);
    }

    //hasClass
    function hasClass(ele,cls) {
        return ele.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
    }

    //add classname
    function addClass(ele,cls) {
        if (!this.hasClass(ele,cls)) ele.className += " "+cls;
    }

    // remove
    function removeClass(ele,cls) {
        if (hasClass(ele,cls)) {
            var reg = new RegExp('(\\s|^)'+cls+'(\\s|$)');
            ele.className=ele.className.replace(reg,' ');
    }
}


function byclassName(className, parentElement){
var elems = ($(parentElement)||document.body).getElementsByTagName("*");
var result=[];
for (i=0; j=elems[i]; i++){
  if ((" "+j.className+" ").indexOf(" "+className+" ")!=-1){
   result.push(j);
  }
}
return result;
}



    function d_print(element){

        document.write(element+'<br/>');

    }



    xwmoban['byId']=byId;
    xwmoban['$']=byId;
    xwmoban['byTag']=byTag;
    xwmoban['d_print'] =d_print;
    xwmoban['hasClass']=hasClass;
    xwmoban['addClass']=addClass;
    xwmoban['removeClass']=removeClass;
    xwmoban['byclassName']=byclassName;

})();


function getpreviousSibling(node){
    var pre = node.previousSibling;
    while(pre && pre.nodeType !== 1){
        pre = pre.previousSibling;
    }
    return pre;
}

function my_top10() {
    var my_top10 = xwmoban.$('mytop-10');
    var top_item = xwmoban.byclassName('top-item',my_top10);
    var last_item = top_item[top_item.length-1];
    var first_item =top_item[0];
    first_item.className = 'top-item top-item-on';
    last_item.className ='top-item top-item-off';

    for(var i = 0;i<top_item.length; i++){
        top_item[i].onmouseover = function() {

            setDefault();
            imgDefault();

            //如果不是最后一个元素；
            if(this!=last_item){

                this.className = 'top-item top-item-on';
            }
            //如果是最后一个元素，则加载样式off；
            else{
                this.className = 'top-item top-item-on top-item-off';
            }

            imgChange(this);

        }
    }//循环结束；

    //设置所有item为默认状态；
    function setDefault(){
        for(var j= 0;j<top_item.length; j++){

            if(top_item[j]!=last_item){

                top_item[j].className ='top-item';
            }
            else{
                top_item[j].className = 'top-item top-item-off';
            }
        }

    }//函数结束；

    //让on状态的img显示高亮；

    function imgChange(ele){
        var iimg = ele.getElementsByTagName('img');
        for(var n = 0;n<iimg.length; n++){
            if(iimg[n].className == 'iimg'){
                var onsrc = iimg[n].getAttribute('onsrc');
                //iimg[n].setAttribute(src,onsrc);
                iimg[n].src = onsrc;
            }
        }
    }//end imgChange;

    //让所有class 为iimg的图片复位；

    function imgDefault(){
        var my_top10 = document.getElementById('my-top10');
        var allimg = my_top10.getElementsByTagName('img');
        for(var s = 0 ; s<allimg.length; s++){

            if(allimg[s].className =='iimg'){
                var offsrc = allimg[s].getAttribute('offsrc');
                allimg[s].setAttribute('src'    ,offsrc);
            }
        }
    }

    //设置第一个item为激活状态；
    imgChange(top_item[0]);



}





