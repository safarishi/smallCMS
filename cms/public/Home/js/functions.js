/**
 * JavaScript������
 * Created by safari on 2015/2/19.
 */

/**
 * ���ajax���󣬴���ajax����
 * @returns {*}
 */
function getXmlHttpObject(){
    var xmlHttpRequest;
    // ��ͬ�������ȡ����xmlHttpRequest�ķ�����һ��
    if(window.ActiveXObject){ // �ж�
		// code for IE6, IE5
        xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
		// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlHttpRequest = new XMLHttpRequest();
    }
    return xmlHttpRequest;
}

/**
 * ͨ��һ��id������ȡһ������
 * @param id id����
 * @returns {HTMLElement} HTMLԪ��
 */
function byId(id){
    return document.getElementById(id);
}

