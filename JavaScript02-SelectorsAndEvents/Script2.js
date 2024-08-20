// JavaScript source code
const DARK  = "#323232"
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