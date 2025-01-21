<?php
	$for = "Introduction to PHP";

	//Constants:
	define('NAME', 'value');
	//const PI = 3.14;
	const PREFIX = 'OPTION';

	$int = 1024;

$heredoc_string = <<< HEREDOC_STRING
	<h3>Heredoc-строка:</h3>
	"Heredoc"-string (RAW-string) - это строка с форматированием.
	Такие строки игнорируют Escape-последовательности, и выводятся точно так же, как и задаются.
	Heredoc-строки часто исползуют для формирования размерки:
<p>
	<code>
		code here
	</code>
</p>
	!!! Heredoc строки раскрывают переменные, т.е., поддерживают интерполяцию: <code>$int</code>
HEREDOC_STRING;

$nowdoc_string = <<<'NOWDOC_STRING'
				<h3>Nowdoc-строка:</h3>
	!!! Единственное отличие от Heredoc-строки состоит в том, что Nowdoc-строка не поддерживает интерполяцию: <code>$int</code>
NOWDOC_STRING;

	$escape_sequences = <<<ESCAPE_SEQUENCES
	<h3>Escape-последовательности:</h3>
	<strong>Escape-последовательности</strong> &mdash; это символы, экранированные символом '\'.
	<strong>Backslash ('\')</strong> &mdash; это символ отмены специального значения другого символа:
	<ul>
		<li><code>\"</code>&mdash; отменяет специальное значение двойных кавычек;</li>
		<li><code>\'</code>&mdash; отменяет специальное значение одинарных кавычек;</li>
		<li><code></code></li>
	</ul>
	Но, некоторым символам <code>'\'</code> наоборот, придает специальное значение, например:
	<ul>
		<li><code>'\n'</code> &mdash; переход в начало следующей строки;</li>
		<li><code>'\t'</code> &mdash; символ табуляции;</li>
	</ul>
ESCAPE_SEQUENCES;

	require 'functions.php';
	require 'index.view.php';	//Так же как #include, встраивает содержимое целевого файла в наш файл.
	//Закрывающая метка в *.PHP-файле НЕ обяхательна
?>