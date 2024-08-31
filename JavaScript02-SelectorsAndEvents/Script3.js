// JavaScript source code
//console.log(document.body.innerHTML);
let headers = document.body.getElementsByTagName("h1");
let paragraph = document.createElement("p");
paragraph.innerHTML = `Это <strong>${headers[0].innerHTML} &ndash; Объектная модель документа</strong>, детка.` +
	`Этот абзац добавлен функцией <code><strong>append()</strong></code>.`;
//document.body.append(paragraph);	//Добавляет объект в самый конец ноды, а именно, добавляет элемент перед закрывающим дестриптором.
//document.body.prepend(paragraph);	//Добавляет объект в начало ноды, а именно, добавляет элемент после открывающего дескриптора.
//document.body.before(paragraph);	//Добавляет объект перед открывающим дескриптором.
//document.body.after(paragraph);	//Добавляет объект после закрывающего дескриптора.

//console.log(document.body.childNodes);
document.body.lastChild.before(paragraph);

let header2 = document.createElement("h2");
header2.innerHTML = paragraph.innerHTML;
paragraph.replaceWith(header2);