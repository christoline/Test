<?php
.login-box{
	width: 400px;
	height: 450px;
	background: rgba(0, 0, 0, 0.5);
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 70px 30px;
	border-radius: 20px;
	position: relative;
	margin-top: 360px;
}
.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px; 
	left: calc(50% - 50px);
}
.login-box h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
	margin-top: 5px;
}
.login-box p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.login-box input{
	width: 100%;
	margin-bottom: 35px;
}
.login-box input[type="text"], input[type="password"]{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.login-box input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	background: #1c8adb;
	color: #fff;
	font-size:  18px;
	border-radius: 20px;
}
.login-box input[type="submit"]:hover{
	cursor: pointer;
	background: #46b8f3;
	color: #000;
}
.login-box a{
	text-decoration: none;
	font-size: 14px;
	color: #fff;

}
.login-box a:hover{
	color: #39dc79;
}
#footer{
	text-align: center;
	display: block;
	background-color: #0299ef;
	height: 100px;
	border-radius: 5px;
}
?>