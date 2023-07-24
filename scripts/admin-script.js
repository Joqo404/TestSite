function on_click_employees_button() {
	let employees_button = document.getElementById("left-button");
	let currencies_button = document.getElementById("currencies-button");
	let countries_button = document.getElementById("right-button");
	employees_button.style.backgroundColor = "#EBFAFA";
	currencies_button.style.backgroundColor = "#fff";
	countries_button.style.backgroundColor = "#fff";
}
function on_click_currencies_button() {
	let employees_button = document.getElementById("left-button");
	let currencies_button = document.getElementById("currencies-button");
	let countries_button = document.getElementById("right-button");
	employees_button.style.backgroundColor = "#fff";
	currencies_button.style.backgroundColor = "#EBFAFA";
	countries_button.style.backgroundColor = "#fff";
}
function on_click_countries_button() {
	let employees_button = document.getElementById("left-button");
	let currencies_button = document.getElementById("currencies-button");
	let countries_button = document.getElementById("right-button");
	employees_button.style.backgroundColor = "#fff";
	currencies_button.style.backgroundColor = "#fff";
	countries_button.style.backgroundColor = "#EBFAFA";
}

function on_click_panel_button() {
	let user_panel = document.getElementById("user-panel");
	if (user_panel.style.display == "flex") {
		user_panel.style.display = "none";
	} else {
		user_panel.style.display = "flex";
	}
}