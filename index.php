<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>URAAAA</title>
	<style type="text/css">
		*{
			margin: 0;
			color: white;
		}
		html,body{
			background: conic-gradient(#722,black);
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 100%;
			height: 100%;
		}
		/*.blur{
			position: absolute;
			height: 100%;
			width: 100%;
			background-color: #fff1;
			backdrop-filter: blur(5px);
			z-index: 1;*/
		}
		.getout{
			width: 250px;
			transform: translate(-130px);
			text-align: right;
		}
		.breh{
			height: 20px;
			width: 20px;
			background-color: #fff5;
			border: 3px #fff ridge;
			border-radius: 50%;
			margin: auto;
			opacity: .2;
			transition: all .2s;
			z-index: 2;
		}
		.breh:hover{
			transform: translateY(-10px);
			opacity: 1;
			height: 50px;
			width: 50px;
		}
		.breh ~ .blur{
			background-color: #fff4;
		}
	</style>
</head>
<body>
	<div class="blur"></div>
	<div class="getout">
		<h2><br>OI U NUTS ?!?</h2>
		<h4>get out!!!</h4>
	</div>
	<a href="mefiles/LBRTStat_Setup.exe" class="breh"></a>
</body>
</html>