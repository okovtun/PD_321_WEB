// JavaScript source code
const DARK = "#323232"
const LIGHT = "#D8D8D8"

//body.onload = function () { document.body.style.backgroundColor = LIGHT; }

background_switch.onclick = function ()
{
	//let switch_image = document.getElementById("background_switch");

	//let filename = switch_image.currentSrc.split('/');
	//console.log(filename);
	//if (filename[filename.length - 1] === 'moon.png')
	//{
	//	switch_image.src = 'img/sun.png';
	//	document.body.className = "dark";
	//	//document.body.style.backgroundColor = DARK;
	//	//document.body.style.color = LIGHT;
	//}
	//else
	//{
	//	switch_image.src = 'img/moon.png';
	//	document.body.className = "light";
	//	//document.body.style.backgroundColor = LIGHT;
	//	//document.body.style.color = DARK;
	//}

	document.body.className = document.body.className === "light" ? "dark" : "light";
}

/////////////////////////////////////////////////////////////////////////////////////////////

document.addEventListener("mousemove", function (event)
{
	//let x = event.clientX;
	//let y = event.clientY;
	//let c = document.querySelector("#coord");
	//c.textContent = `X = ${x}, Y = ${y};`;
	document.querySelector("#coord").textContent = `X = ${event.clientX}, Y = ${event.clientY};`;
}
);

/////////////////////////////////////////////////////////////////////////////////////////////
function setImageVisibilityDelay()
{
	setTimeout("setImageVisibility()", 500);
}
function setImageVisibility()
{
	let image = document.getElementById("image");
	let button = document.getElementById("btnShowHide");
	if (button.innerHTML === 'Скрыть')
	{
		image.src = "img/transparent.png";
		button.innerHTML = "Показать";
	}
	else
	{
		image.src = "img/DrunkMonkey.jpg";
		button.innerHTML = "Скрыть";
	}
}

/////////////////////////////////////////////////////////////////////////////////////////////

document.write("<div id='animated'>Ах у дуба...............</div>")
let text = document.querySelector("#animated").innerHTML;
let size = text.length;
let i = 0;

window.addEventListener("load", animText);

function animText()
{
	if (i >= size) return;
	let id = document.querySelector("#animated");
	id.innerHTML = text.substring(0, i++);

	setTimeout(animText, 100);
}

/////////////////////////////////////////////////////////////////////////////////////////////
