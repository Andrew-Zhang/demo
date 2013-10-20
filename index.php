<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="baidu-tc-verification" content="7eb199ba3558ab20a465fdb897452a14" />
    <meta http-equiv="Cache-control" content="no-cache">
    <title>Let The Space Ship Take You Go!</title>
    <link rel="shortcut icon" href="favicon.ico" />
	<style type="text/css">
	a{color:white;}
	body{
		background-color:#503151;
		opacity:0.6;
		filter:alpha(opacity=60);
	}
	img:hover{
		-moz-transform:rotate(45deg);
		-webkit-transform:rotate(45deg);
		-o-transform:rotate(45deg);
		-ms-transform:rotate(45deg); /*IE9+*/
	}
	#welcome font{
		margin-left:20px;
		font-size:48px;
	}
	/*CSS of Time*/
	#time{
		margin:0 auto;
		width:636px;
	}
	#time p{
		float:left;	
		color:white;
	}
	#time p span{
		display:inline-block;
		float:left;
		margin:5px;
		width:5px;
		height:10px;
	}
	</style>
</head>
<body>
    <p style="text-align:center;font-size:14px;font-family:tahoma,Consolas;margin-top:180px;" id="welcome"><font color="#1943AF">W</font><font color="#B0BDCD">E</font><font color="#0072BC">L</font><font color="#01AAAD">C</font><font color="#EB030D">O</font><font color="#FFC20F">M</font><font color="#7B1B72">E</font><font color="#8CC63E">!</font></p>
    <p style="text-align:center;font-size:14px;font-family:tahoma,Consolas;margin-top:25px;"><a href="http://weibo.com/u/1736799387" target="_blank">@张亢亢Andrew</a></p>
    <p style="text-align:center;font-size:14px;font-family:tahoma,Consolas;margin-top:25px;"><a href="./blog" target="_blank">BLOG</a></p>
    <p><center><img style="width:50px;" src="./images/SpaceShip.png" title="Let The Space Ship Take You Go!" alt="Space Ship" /></center></p>
    <div id="time">
    	<p id="timeYear"></p>
    	<p id="timeMonth"></p> 
    	<p id="timeDate"></p> 
    	<p id="timeHour"></p>
   		<p id="timeMinute"></p> 
   		<p id="timeSecond"></p> 
    </div>
</body>
<!--
<script type="text/javascript" src="http://js.tongji.linezing.com/3129892/tongji.js"></script><noscript><a><img src="http://img.tongji.linezing.com/3129892/tongji.gif"/></a></noscript>
-->

<script type="text/javascript" src="./js/jquery-1.10.2.min.js"></script>
<!--Javascript of Time-->
<script type="text/javascript">
$(document).ready(function(){
function disTime(timeEach,where){//判断二进制有几位则生成几个框，再改变颜色！
	var arrEach=timeEach.split("");
	$("#"+where).html("<span></span>");
	$.each(arrEach,function(i){
		if(arrEach[i]==='1'){
			$("#"+where).children().eq(i).css("background-color","white");
		} else {
			$("#"+where).children().eq(i).css("background-color","black");	
		}
		$("#"+where).children().eq(i).after("<span></span>");//判断是否为最后一个，是则显示年！
	});			
}
(function timeOK(){
	var todayTime=new Date();
	var timeYear=parseInt(todayTime.getFullYear().toString().substr(-2,2)).toString(2);
	var timeMonth=(todayTime.getMonth()+1).toString(2);	
	var timeDate=todayTime.getDate().toString(2);
	var timeHour=todayTime.getHours().toString(2);
	var timeMinute=todayTime.getMinutes().toString(2);
	var timeSecond=todayTime.getSeconds().toString(2);
	disTime(timeYear,'timeYear');
	disTime(timeMonth,'timeMonth');
	disTime(timeDate,'timeDate');
	disTime(timeHour,'timeHour');
	disTime(timeMinute,'timeMinute');
	disTime(timeSecond,'timeSecond');
	setTimeout(timeOK,1000);
}());
});
</script>
</html>
