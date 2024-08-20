// JavaScript source code
function onLoad()
{
	alert("Page loaded");
}
function factorial()
{
	let factorialInput = document.getElementById("factorialInputNumber");
	let n = BigInt(factorialInput.value);
	let f = 1n;//'n' после числовой константы делает ее типа 'BigInt'
	for (let i = 1n; i <= n; i++)
	{
		f *= i;
	}
	let factorialResult = document.getElementById("factorialResultSpan");
	factorialResult.textContent = f;
}
function setColorOnHover()
{
	document.bgColor = "blue";
}
function setColorOnLeave()
{
	document.bgColor = "white";
}
function setBackgroundColor()
{
	document.bgColor = document.getElementById("chooseBgColor").value;
}
function setForegoundColor()
{
	//let tags = document.getElementsByTagName("h2");
	////.style.color = document.getElementById("chooseFgColor").value;
	////console.log(tag);
	//for (let i = 0; i < tags.length; i++)
	//{
	//	tags[i].style.backgroundColor = document.getElementById("chooseBgColor").value;
	//	tags[i].style.color = document.getElementById("chooseFgColor").value;
	//}

	//let elements = document.getElementsByClassName("Element");
	////.style.color = document.getElementById("chooseFgColor").value;
	////console.log(tag);
	//for (let i = 0; i < elements.length; i++)
	//{
	//	elements[i].style.backgroundColor = document.getElementById("chooseBgColor").value;
	//	elements[i].style.color = document.getElementById("chooseFgColor").value;
	//}

	let element = document.querySelector("h2");
	element.style.color = document.querySelector("#chooseFgColor").value;
	console.log(element.style.color);
}
function setImage()
{
	let chooseFiles = document.getElementById("imageFile");
	//let filename = chooseFiles[]
	console.log(chooseFiles.files[0].name);
	document.getElementById("photo").src = chooseFiles.files[0].name;
}

function setBoald()
{
	let chkBld = document.getElementById("itemsBoald");
	console.log(chkBld);
	let items = document.querySelectorAll('ol > li');
	let nested_items = document.querySelectorAll('li > ul');
	for (let i = 0; i < items.length; i++)
	{
		items[i].style.fontWeight = chkBld.checked ? 900 : 100;
	}
	for (let i = 0; i < nested_items.length; i++)
	{
		nested_items[i].style.fontWeight = 100;
	}
}