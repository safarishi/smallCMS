/**
 * JavaScript函数库
 * Created by safari on 2015/2/19.
 */

/**
 * 获得ajax对象，创建ajax引擎
 * @returns {*}
 */
function getXmlHttpObject(){
    var xmlHttpRequest;
    // 不同浏览器获取对象xmlHttpRequest的方法不一样
    if(window.ActiveXObject){ // 判断
		// code for IE6, IE5
        xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
		// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlHttpRequest = new XMLHttpRequest();
    }
    return xmlHttpRequest;
}

/**
 * 通过一个id号来获取一个对象
 * @param id id属性
 * @returns {HTMLElement} HTML元素
 */
function byId(id){
    return document.getElementById(id);
}

