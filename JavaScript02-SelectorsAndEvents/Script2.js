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

	let backgroundDelay = document.getElementById("bkgDelay");
	//let backgroundSwitch = document.getElementById("background_switch");
	console.log(backgroundDelay.style);
	let delay = backgroundDelay.value;
	console.log(document.body.style);
	document.body.style.transition = `background-color ${delay / 1000}s, color ${delay / 1000}s`;
	document.getElementById("background_switch").style.transition = `background-image ${delay / 1000}s`;
	console.log(document.body.style);
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
	let delay = document.getElementById("numDelay").value;
	setTimeout("setImageVisibility()", Number(delay));
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

//let date = new Date();
//let result = "<h3>Дата и время</h3>";
//result += `Полная дата: ${date}<br>`;
//result += `Только дата: ${date.toDateString()}<br>`;
//result += `Только дата: ${date.getFullYear()}.${checkNumber(date.getMonth() + 1)}.${checkNumber(date.getDate())}<br>`;
//result += `День: ${date.getDay()}<br>`;
//result += `Только время: ${date.toTimeString()}<br>`;
//document.getElementById("DateAndTime").innerHTML = result;

document.body.onload = function tick_timer()
{
	let time = new Date();
	let hh = checkNumber(time.getHours());
	let mm = checkNumber(time.getMinutes());
	let ss = checkNumber(time.getSeconds());
	document.getElementById("timer_display").innerHTML = `${hh}:${mm}:${ss}`;

	let checkBoxShowDate = document.getElementById("cbShowDate").checked;
	if (checkBoxShowDate == true)
	{
		let yyyy = time.getFullYear();
		let MM = checkNumber(time.getMonth() + 1);
		let dd = checkNumber(time.getDate());
		document.getElementById("date_display").innerHTML = `${yyyy}/${MM}/${dd}`;
	}
	else
	{
		document.getElementById("date_display").innerHTML = "";
	}
	setTimeout(tick_timer, 1000);
}

function checkNumber(i)
{
	return i < 10 ? "0" + i : i;
}

/////////////////////////////////////////////////////////////////////////////////////////////

//									Countdown timer
document.getElementById("btnStart").onclick =
	function startCountdown()
	{
		//DOM - Document Object Model
		let targetDate = document.getElementById("targetDate")
		let targetTime = document.getElementById("targetTime")
		let btnStart = document.getElementById("btnStart");
		targetDate.disabled = targetTime.disabled = !targetTime.disabled;
		//btnStart.value = btnStart.value == "Start" ? "Stop" : "Start";
		if (btnStart.value == "Start")
		{
			btnStart.value = "Stop"
			tickCountdown();
		}
		else
		{
			btnStart.value = "Start";
		}

		//let date = document.getElementById("targetDate").valueAsDate;
		//let time = document.getElementById("targetTime").valueAsDate;
		//let result = `Дата: ${date.getFullYear()}/${checkNumber(date.getMonth() + 1)}/${checkNumber(date.getDate())}`;
		//result += `<br>Время:${checkNumber(time.getHours())}:${checkNumber(time.getMinutes())}:${checkNumber(time.getSeconds())}`;
		//document.getElementById("result").innerHTML = result;

		//let element = document.getElementById("countdownTimer");
		//let p_date = document.createElement("p");
		//let p_time = document.createElement("p");
		////p_date.append(document.createTextNode(`Дата: ${date}`));
		////p_time.append(document.createTextNode(`Время:${time}`));
		//p_date.append(document.createTextNode(`Дата: ${date.getFullYear()}/${checkNumber(date.getMonth()+1)}/${checkNumber(date.getDate())}`));
		//p_time.append(document.createTextNode(`Время:${time.getHours()}:${time.getMinutes()}:${time.getSeconds()}`));

		//element.append(p_date);
		//element.append(p_time);
	}

function tickCountdown()
{
	if (!document.getElementById("targetTime").disabled) return;
	let now = new Date();
	let targetTimeControl = document.getElementById("targetTime");
	let targetTime = targetTimeControl.valueAsDate;
	//targetTime.setDate(now.toDateString());
	targetTime.setFullYear(now.getFullYear());
	targetTime.setMonth(now.getMonth());
	targetTime.setDate(now.getDate());
	//document.getElementById("targetTimeValue").innerHTML = typeof(targetTime);
	targetTime.setHours(targetTime.getUTCHours());
	document.getElementById("targetTimeValue").innerHTML = targetTime;
	let duration = targetTime;
	document.getElementById("result").innerHTML = duration + "<br>" + now;
	let timestamp = targetTime - now;
	document.getElementById("result").innerHTML = new Date(timestamp).toTimeString();
	if (duration > 0) setTimeout(tickCountdown, 1000);
}

/////////////////////////////////////////////////////////////////////////////////////////////