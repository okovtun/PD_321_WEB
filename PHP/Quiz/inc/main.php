<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="ltc.ico">
    <title></title>
</head>
<body onload="nextQuestion()">
    <!--<h1 id="question_number" name="question_number">Quitz</h1>-->
    <!--<form id="question" action="result.php" method="post">-->
    <form id="question_number" name="question_number" action="result.php" method="post">

        <!--<input type="button" value="next" onclick="nextQuestion()">-->
    </form>
    <script>
        var questionNumber = -1;
        function nextQuestion()
        {
			let request = new XMLHttpRequest();
            let answer = getAnswer();
            questionNumber++;
            request.onreadystatechange = function () {
                document.getElementById("question_number").innerHTML = request.responseText;
                //console.log(request.responseText);
            }
            //request.open("GET", "question.php?q="+questionNumber, true);
            if(answer == null)request.open("GET", "question.php?q="+questionNumber, true);
            else request.open("GET", "question.php?q="+questionNumber+"&a="+answer.value, true);
            request.send();
		}
		function prevQuestion()
        {
            if (questionNumber == 0) return;
            let answer = getAnswer();
            questionNumber--;
            let request = new XMLHttpRequest();
            request.onreadystatechange = function () {
                document.getElementById("question_number").innerHTML = request.responseText;
            }
            //request.open("GET", "question.php?q="+questionNumber, true);
            if(answer == null)request.open("GET", "question.php?q="+questionNumber, true);
            else request.open("GET", "question.php?q="+questionNumber+"&a="+answer.value, true);
            request.send();
        }
        function getAnswer()
        {
            //https://stackoverflow.com/questions/15839169/how-to-get-the-value-of-a-selected-radio-button
            let answer = document.querySelector(`input[name="question_${questionNumber}"]:checked`);
            //let answer = document.querySelector(`input[name="question_${questionNumber}"]:checked`);
            if (answer != null) console.log(answer.value);
            else console.log("No answer")
            //console.log(document.querySelectorAll("h1").innerHTML);
            return answer;
        }
		
    </script>
</body>
</html>