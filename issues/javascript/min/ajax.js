var processURI="xmlhttprequest.html";var liveReq=false;if(window.XMLHttpRequest){liveReq=new XMLHttpRequest()}function AjaxLoad(a,c,b){if(liveReq&&liveReq.readyState<4){liveReq.abort()}if(window.XMLHttpRequest){}else{if(window.ActiveXObject){liveReq=new ActiveXObject("Microsoft.XMLHTTP")}}name=this.id;liveReq.onreadystatechange=function(){liveReqProcessReqChange(a,b)};liveReq.open("GET.html",processURI+"?"+c);document.getElementById(a).innerHTML=loading_lang;liveReq.send(null);return false}function liveReqProcessReqChange(a,b){if(liveReq.readyState==4){document.getElementById(a).innerHTML=liveReq.responseText;document.getElementById(b).innerHTML=""}};

