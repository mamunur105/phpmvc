<!DOCTYPE html>
<html>
<head>
	<title>OPP</title>
<!--	<link rel="stylesheet" type="text/css" href="css/style.css">-->
<style type="text/css">
	*{margin: 0; padding: 0;}
body{}
.body{
	width: 90%;
margin: 0 auto;
color: #1F59BF;
background: #B6DD9E;
}
.Header{
	background: #2894FF;
font-size: 15px;
color: #000;
text-align: center;
padding: 15px 0;
margin-bottom: 5px;
}
.content{
background: #fff;
min-height: 500px;
border: 5px solid;
padding: 20px;
color: #000;
}
.footer{    font-size: 10px;
    text-align: center;
    color: #000000;
    padding: 10px 0;
    background: #2894FF;
}

	.fix{
		overflow: hidden;
	}
	.left-content{
		width: 80%;
		float: left;

	}
	.sidebar{
		float: right;
		width: 20%;
		background: #ccc;
		    box-sizing: border-box;
		    border-left: 1px solid #ccc ;
	}
	.post{width: 100%;margin-bottom: 20px;}
	.sidebar{
		background: #ccc;
		padding: 10px;

	}
	.sidebar ul li {
		margin-bottom: 5px;
		
	}
	.sidebar ul li a{
		color: #fff ;
		font-size: 20px;
		padding: 5px;
		display: block;

	}
	.sidebar ul{
		margin-bottom: 10px;
		background: green ;
	}
	.main-menu{border-bottom: 1px solid #000 ;margin-bottom: 30px;}
	.main-menu ul {
		display: flex;
		flex-wrap: wrap;
		list-style: none;
	}
	.main-menu li{
		/*width: 70px;*/
		
	}
	.main-menu li a{
		display: block;
		padding: 10px 14px;
		/*color: #fff ;*/
	}



</style>

</head>
<body>
	<div class="body">
		<div class="Header">
			<h1>Tutorial 23 </h1>
			<h1>This is Object oriented programming MVC</h1>
			<h1><a href="//<?php echo $_SERVER['SERVER_NAME'];?>/phpmvc/backup.php">Db backup</a></h1>
		</div>
		<div class="content">

			<div class="wraper fix">
				<div class="main-menu fix">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
					</ul>
				</div>