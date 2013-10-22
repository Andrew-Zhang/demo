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
		/*opacity:0.6;
		filter:alpha(opacity=60);*/
	}
	img:hover{
		-moz-transform:rotate(45deg);
		-webkit-transform:rotate(45deg);
		-o-transform:rotate(45deg);
		-ms-transform:rotate(45deg); /*IE9+*/
	}
	#welcome font{
		margin-left:20px;
		font-size:42px;
	}
	/*CSS of Time*/
	#time{
		margin:0 auto;
		width:555px;
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
    <p style="text-align:center;font-size:14px;font-family:tahoma,Consolas;margin-top:150px;" id="welcome"><font color="#1943AF">Let</font><font color="#B0BDCD">The</font><font color="#0072BC">Space</font><font color="#01AAAD">Ship</font><font color="#EB030D">Take</font><font color="#FFC20F">You</font><font color="#7B1B72">Go</font><font color="#8CC63E">!</font></p>
    <p style="text-align:center;font-size:14px;font-family:tahoma,Consolas;margin-top:120px;"><a href="http://weibo.com/u/1736799387" target="_blank">@张亢亢Andrew</a></p>
    <p style="text-align:center;font-size:14px;font-family:tahoma,Consolas;margin-top:25px;"><a href="./blog" target="_blank">BLOG</a></p>
    <p><center><img style="width:50px;" src="SpaceShip.png" title="Let The Space Ship Take You Go!" alt="Space Ship" /></center></p>
    <div id="time"> </div>
</body>
<!--
<script type="text/javascript" src="http://js.tongji.linezing.com/3129892/tongji.js"></script><noscript><a><img src="http://img.tongji.linezing.com/3129892/tongji.gif"/></a></noscript>
-->

<script type="text/javascript" src="./js/jquery-1.10.2.min.js"></script>
<!--Javascript of Time-->
<script type="text/javascript">
$(document).ready(function(){
	function disTime(timeAll){
		var _p = '<p></p>';
		var _span = '<span></span>';
		var arrTime=timeAll.split("|");
		$("#time").html(_p);
		$("#time p").html(_span);
		for (var j=0;j<6;j++){
			var arrTimeEach=arrTime[j].split("");
			$.each(arrTimeEach,function(i){
				if(arrTimeEach[i]==='1'){
					$("#time").children().eq(j).children().eq(i).css("background-color","white");
				} else {
					$("#time").children().eq(j).children().eq(i).css("background-color","black");	
				}
				$("#time").children().eq(j).children().eq(i).after(_span);//判断是否为最后一个，是则显示年！
			});
		$("#time").children().eq(j).after(_p);
		$("#time").children().eq(j+1).html(_span);
		}
		
	}
	(function timeHandle(){
		var todayTime=new Date();
		var timeYear=parseInt(todayTime.getFullYear().toString().substr(-2,2)).toString(2);
		var timeMonth=(todayTime.getMonth()+1).toString(2);	
		var timeDate=todayTime.getDate().toString(2);
		var timeHour=todayTime.getHours().toString(2);
		var timeMinute=todayTime.getMinutes().toString(2);
		var timeSecond=todayTime.getSeconds().toString(2);	
		disTime(timeYear+'|'+timeMonth+'|'+timeDate+'|'+timeHour+'|'+timeMinute+'|'+timeSecond);
		setTimeout(timeHandle,1000);
	}());
});
</script>
</html>
