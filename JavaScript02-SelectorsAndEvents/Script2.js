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

	////////////////////////////////////////////////////////////////////

function tickCountdown()
{
	if (!document.getElementById("targetTime").disabled) return;
	let now = new Date();
	let targetDateControl = document.getElementById("targetDate");
	let targetTimeControl = document.getElementById("targetTime");
	let targetDate = targetDateControl.valueAsDate;
	let targetTime = targetTimeControl.valueAsDate;
	targetDate.setHours(targetDate.getHours() + targetDate.getTimezoneOffset() / 60);
	document.getElementById("targetDateValue").innerHTML = targetDate.toString();
	//targetTime.setDate(now.toDateString());
	targetTime.setHours(targetTime.getHours() + (targetTime.getTimezoneOffset() / 60));
	targetTime.setFullYear(targetDate.getFullYear());
	targetTime.setMonth(targetDate.getMonth());
	targetTime.setDate(targetDate.getDate());
	//document.getElementById("targetTimeValue").innerHTML = typeof(targetTime);
	document.getElementById("targetTimeValue").innerHTML = targetTime;
	let duration = targetTime;
	document.getElementById("result").innerHTML = duration + "<br>" + now;
	let timestamp = targetTime - now;
	console.log(timestamp);
	/*let time_offset = new Date(timestamp);
	time_offset.setFullYear(targetTime.getFullYear() - now.getFullYear());
	time_offset.setMonth(targetTime.getMonth() - now.getMonth());
	time_offset.setDate(targetTime.getDate() - now.getDate());

	time_offset.setHours(time_offset.getHours() + time_offset.getTimezoneOffset() / 60);
	let time_left = "";
	if (time_offset.getFullYear() > 0) time_left += `${time_offset.getFullYear()} лет,`;
	if (time_offset.getMonth() > 0) time_left += `${checkNumber(time_offset.getMonth())} месяцев,`;
	if (time_offset.getDate() > 0) time_left += `${checkNumber(time_offset.getDate())} дней,`;
	time_left += `${checkNumber(time_offset.getHours())}:${checkNumber(time_offset.getMinutes())}:${checkNumber(time_offset.getSeconds())};`;
	document.getElementById("result").innerHTML = time_left;*/
	//document.getElementById("result").innerHTML = time_offset.toTimeString();


	timestamp = Math.trunc(timestamp / 1000);
	timestamp *= 1000;

	const DAYS_IN_MONTH = 365 / 12;
	const SECONDS_IN_MONTH = 86400 * DAYS_IN_MONTH;
	const SECONDS_IN_WEEK = 86400 * 7;
	const SECONDS_IN_DAY = 86400;
	const SECONDS_IN_HOUR = 3600;
	const SECONDS_IN_MINUTE = 60;

	//const SECONDS_IN_YEAR = 31557600;//SECO
	const SECONDS_IN_YEAR = SECONDS_IN_DAY * 365 + SECONDS_IN_HOUR * 6;
	console.log(SECONDS_IN_YEAR);

	let timestamp_in_seconds = Math.floor(timestamp / 1000);
	let time_of_day = timestamp_in_seconds % SECONDS_IN_DAY;
	timestamp_in_seconds = Math.floor(timestamp_in_seconds / SECONDS_IN_DAY);
	timestamp_in_seconds = timestamp_in_seconds * SECONDS_IN_DAY;

	let years = Math.floor(timestamp_in_seconds / SECONDS_IN_YEAR);
	if (years > 0)
	{
		timestamp_in_seconds = (timestamp_in_seconds % (years * SECONDS_IN_YEAR));
		let years_unit = document.getElementById("years_unit");
		if (years_unit == null) {
			let display = document.getElementById("display");
			display.prepend(createTimeBlock("years", years));
		}
		else years_unit.innerHTML = years;
	}
	else
	{
		removeTimeBlock("years");
	}

	let month = Math.floor(timestamp_in_seconds / SECONDS_IN_MONTH);
	if (month > 0)
	{
		let display = document.getElementById("display");
		timestamp_in_seconds = (timestamp_in_seconds % (month * SECONDS_IN_MONTH));
		let month_unit = document.getElementById("month_unit");
		if (month_unit == null)
		{
			month_block = createTimeBlock("month", month);

			let years_unit = document.getElementById("years_unit");
			if (years_unit != null)
			{
				let years_block = years_unit.parentElement;
				years_block.after(month_block);
			}
			else
			{
				let display = document.getElementById("display");
				display.prepend(month_block);
			}
		}
		document.getElementById("month_unit").innerHTML = checkNumber(month);
	}
	else
	{
		removeTimeBlock("month");
	}

	let weeks = Math.floor(timestamp_in_seconds / SECONDS_IN_WEEK);
	if (weeks > 0)
	{
		timestamp_in_seconds = (timestamp_in_seconds % (weeks * SECONDS_IN_WEEK));
		let display = document.getElementById("display");
		let week_unit = document.getElementById("weeks_unit");
		if (week_unit == null)
		{
			let week_block = createTimeBlock("weeks", weeks);

			let month_unit = document.getElementById("month_unit");
			let year_unit = document.getElementById("years_unit");

			if (month_unit != null)
				month_unit.parentElement.after(week_block);
			else if (year_unit != null)
				year_unit.parentElement.after(week_block);
			else
				display.prepend(week_block);
		}
		else week_unit.innerHTML = checkNumber(weeks);
	}
	else
	{
		removeTimeBlock("weeks");
	}

	let days = Math.floor(timestamp_in_seconds / SECONDS_IN_DAY);
	let days_in_seconds = days * SECONDS_IN_DAY;
	if (days > 0) {
		timestamp_in_seconds = (timestamp_in_seconds % (days * SECONDS_IN_DAY));
		let days_unit = document.getElementById("days_unit");
		if (days_unit == null) {
			let days_block = createTimeBlock("days", days);
			let hours_unit = document.getElementById("hours_unit");
			let hours_block = hours_unit.parentElement;
			hours_block.before(days_block);
		}
		else days_unit.innerHTML = checkNumber(days);
	}
	else
		removeTimeBlock("days");
	//console.log(timestamp_in_seconds % days_in_seconds);

	let hours = Math.floor(time_of_day / 3600);
	if (hours > 0) time_of_day = (time_of_day % (hours * SECONDS_IN_HOUR));

	let minutes = Math.floor(time_of_day / SECONDS_IN_MINUTE);
	if (minutes > 0) time_of_day = (time_of_day % (minutes * 60));

	let seconds = Math.floor(time_of_day);

	//https://planetcalc.com/7741/
	document.getElementById("result").innerHTML = `${years} Years, ${month} Month, ${weeks} Weeks, ${days} Days, ${checkNumber(hours)} Hours, ${checkNumber(minutes)} Minutes, ${checkNumber(seconds)} Seconds;`;
	//document.getElementById("result").innerHTML = `Days: ${days} Hours: ${checkNumber(hours)} Minutes:${checkNumber(minutes)} Seconds:${checkNumber(seconds)}`;
	//document.getElementById("result").innerHTML = timestamp;

	document.getElementById("hours_unit").innerHTML = checkNumber(hours);
	document.getElementById("minutes_unit").innerHTML = checkNumber(minutes);
	document.getElementById("seconds_unit").innerHTML = checkNumber(seconds);

	if (duration > 0) setTimeout(tickCountdown, 1000);
}

/////////////////////////////////////////////////////////////////////////////////////////////

function createTimeBlock(name, value)
{
	let time_block = document.createElement("div");
	time_block.className = "time_block";

	let unit = document.createElement("div");
	unit.id = `${name}_unit`;
	unit.className = "time_unit";
	unit.innerHTML = checkNumber(value);

	let marker = document.createElement("div");
	marker.id = `${name}_marker`;
	marker.className = "time_marker";
	marker.innerHTML = name.charAt(0).toUpperCase() + name.slice(1);
	//https://stackoverflow.com/questions/1026069/how-do-i-make-the-first-letter-of-a-string-uppercase-in-javascript

	time_block.prepend(unit);
	time_block.append(marker);

	//let display = document.getElementById("display");
	//display.prepend(time_block);

	return time_block;
}
function removeTimeBlock(name)
{
	let unit = document.getElementById(`${name}_unit`);
	if (unit != null) {
		let block = unit.parentElement;
		//document.removeChild(years_time_block);
		let block_parent = block.parentElement;
		block_parent.removeChild(block);
	}
}