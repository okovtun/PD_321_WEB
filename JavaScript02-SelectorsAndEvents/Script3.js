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

let u_list = document.createElement("ul");

for (let i = 0; i < 8; i++)
{
	let item = document.createElement("li");
	item.innerHTML = `Элемент списка ${i + 1}`;
	u_list.append(item);
}

let headers2 = document.getElementsByTagName("h2");
console.log(headers2);

headers2[0].after(u_list);

//console.log(document.getElementsByTagName("ul")[0].lastChild);

headers2[0].insertAdjacentHTML('beforeend', '<p>Этот текст доьавлен при помощи <strong><code>insertAdjacentHTML</code><strong></p>');
/*
	Вставка при помощи insertAdjacentHTML('куда_вставить', 'что_вставить');
	beforebegin - перед открывающим дескриптором;
	afterbegin  - после открывающего дескриптора;
	beforeend   - перед закрывающим дескриптором;
	afterend    - после закрывающего дескриптора;
 */

let script = document.getElementsByTagName("script");
let ol_header = document.createElement("h2");
ol_header.innerHTML = "Создаем нумерованный список при помощи JS:";
script[0].insertAdjacentHTML('beforebegin', ol_header.outerHTML);
let ol = document.createElement("ol");
for (let i = 1; i <= 5; i++)
{
	let item = document.createElement("li");
	item.innerHTML = `Элемент ${i}`;
	ol.insertAdjacentHTML('beforeend', item.outerHTML);
}
script[0].insertAdjacentHTML('beforebegin', ol.outerHTML);
console.log(ol);

let header2_clone = header2.cloneNode(true);
header2_clone.innerHTML = "Клонирование элементов (этот заголовок склонирован с <strong><code>header2</code></strong>)";
script[0].insertAdjacentHTML('beforebegin', header2_clone.outerHTML);

let u_list_clone = u_list.cloneNode(true);
for (let i = 0; i < u_list_clone.children.length; i++)
{
	u_list_clone.children[i].innerHTML += " CLONE";
}
script[0].insertAdjacentHTML("beforebegin", u_list_clone.outerHTML);


script[0].insertAdjacentText("beforebegin", "Вставляем сосдний текст");
let header_3 = document.createElement("h3");
header_3.innerHTML = "Добавляем элемент при помощи функции <strong><code>insertAdjacentElement()</code></strong>"
script[0].insertAdjacentElement("beforebegin", header_3);

//let header_3_clone = header_3.cloneNode(true);
//header_3_clone.innerHTML = "Удаление элементов со страницы:";

//u_list.remove();
for (let i = 0; i < 5; i++)
{
	console.log(u_list.children[i]);
	//if (i > 3)
	//	u_list.children[i].remove();
	u_list.lastChild.remove();
}

u_list.tagName = "ol";
u_list.nodeName = "OL";
u_list.localName = "ol";