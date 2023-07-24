<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin panel</title>
		<link rel="stylesheet" type="text/css" href="./styles/admin-style.css">
	</head>
	<body>
		<div id="header">
			<img src="images/logo.svg" id="logo">
			<button class="menu" id="left-button" onmousedown="on_click_employees_button()">Employees</button>
			<button class="menu" id="currencies-button" onmousedown="on_click_currencies_button()">Currencies</button>
			<button class="menu" id="right-button" onmousedown="on_click_countries_button()">Countries</button>
			<button id="panel-button" onmousedown="on_click_panel_button()"><img src="images/avatar.svg"></button>
			<div id="user-panel">
				<div id="user-panel-content">
					<img src="images/avatar.svg">
					<div>
						<p id="panel-user-name">Pogodin Igor</p>
						<p id="panel-user-status">Administrator</p>
					</div>
				</div>
				<hr class="panel-line" id="first-panel-line">
				<a href="#" class="user-panel-ref" id="first-panel-button">My Profile</a>
				<hr class="panel-line" id="last-panel-line">
				<a href="#" class="user-panel-ref" id="last-panel-button">Sign Out</a>
			</div>
		</div>
		<div>
			<div id="date">
				<h4>Employee information</h4>
				<input type="date" name="">
				<input type="date" name="">
				<select>
					<option>Igor Pogodin</option>
				</select>
			</div>
			<div id="info">
				
			</div>
		</div>
		<script src="scripts/admin-script.js"></script> 
	</body>
</html>