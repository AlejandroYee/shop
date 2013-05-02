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



function qq_menu() {

    var my_cat = xwmoban.$('qq_category');
    var myli = xwmoban.byclassName('li_1',my_cat);

    //取得最后一个li元素；
    var myli_last = myli[myli.length-1];
    myli_last.className ='li_1 li_1_last';

    for(var i = 0 ;i <myli.length;i++){

        myli[i].onmouseover = function() {

            if(this!=myli_last){
                this.className = 'li_1 qq_active';
                    if(getpreviousSibling(this)){
                        //让前一个兄弟结点背景off;
                        getpreviousSibling(this).className ='li_1 off';
                     }
            }

            else{
                    this.className = 'li_1 qq_active last';
                    getpreviousSibling(this).className ='li_1 off';
            }
        }

        myli[i].onmouseout = function() {

            if(this!=myli_last){

                    this.className ='li_1';
                    if(getpreviousSibling(this)){

                        if(getpreviousSibling(this).className =='li_1 off'){
                                getpreviousSibling(this).className = 'li_1';

                        }
                    }

            }

            else{

                this.className = 'li_1 li_1_last';
                getpreviousSibling(this).className ='li_1'
            }
        }

}

}





