<?php
    if ($_POST["groupcode"]=="groupXenter")
    {
        ?>
<html>
<head>
<link rel="icon" type="image/ico" href="b.png" />
<title>Bugger compiler</title>
<meta name="keywords" content="Online,Compiler" />
<link rel="shortcut icon" href="../styles/favicon.ico" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"></link>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/compile.js"></script>
<script type="text/javascript" src="js/tab.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script></head>
<script type="text/javascript">
$(document).ready(function() {
                  $('#form').ajaxForm(function(msg) {
                                      $('#output').html(msg);
                                      });
                  });
window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
</script>
<style>
*{
    box-sizing:border-box;
}
textarea {
overflow: scroll;
margin: auto;
background: #f4f4f9;
outline:2px;
    font-family: Courier, sans-serif;
    font-size: 20px;
}
#whol
{
    background-color:#424242;
}
body
{
color:;
}
.header {
padding: 10px 16px;
background: #555;
color: #f1f1f1;
}
.content {
padding: 16px;
}
.sticky {
position: fixed;
top: 0;
width: 100%
}
.sticky + .content {
    padding-top: 102px;
}
.content {
padding: 16px;
}
#xyz
{
    text-align:center;
}
</style>
<body>
<div id="whole">
<div class="w3-container w3-green" id="xyz">

<img src="b.png" width="200px" style="position:relative;top:7px;" alt="Bugger logo" />
<h1> The Online Compiler You Wanted</h1></div>
<!--<img class="top_bar" src="bar.png" width="400px" height="6px" alt="bar" />-->
<div id="content">
<table class="code">
<td class="code">

<form action="compilercom.php" method="post" id="form">
The language you want to code in:
<select name="language" id="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="java">Java</option>
<option value="python2.7">Python</option>
<option value="python3.2">Python3</option>
</select>
<br />
<strong>Enter Your code here:<br/></strong>
<textarea name="code" rows=25 cols=100 placeholder="You can code in c and java as of now . Python is still not working ." onkeydown=insertTab(this,event) id="code"></textarea><br/>
<span id="errorCode" class="error"></span><br/><br/>
<strong>Sample Input please:<br/></strong>
<textarea name="input" rows=7 cols=100 placeholder="Enter your input . Each input in different line ." id="input"></textarea><br/><br/>
<input type="submit" value="Run" id="submit">
<input type="reset" value="Reset"><br/>
</form>
</td>
<!--<td class="code">
<p>
If you want to upload your files.Choose one.You can only compile c files .</p>
<form action="compilercom.php" method="post" enctype="multipart/form-data" id="form2">
<p>Select Language of Interest:
<select name="language">
<option value="1">C</option>
<option value="2">Python</option>
<option value="3">Java</option>
</select>
</p>
<label for="file">Filename:</label>
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Submit" />
<input type="reset" value="Reset"><br/>
</form>
</td>-->
<tr>
<td class="code"><strong>Output:</strong>
<span id="output"></span><br/>
<?php
    if(isset($_REQUEST['submit']))
    {
        echo "<pre>$output</pre>";
    }
    ?>
</td>
<!--<td class="code"><strong>Output:</strong>
<span id="output2"></span><br/></td>-->
</tr>
</div>
<table>
<p id="logout">Click <a href="logout.php">Here</a> to logout!!</p><br>
</table>
</div>

</body>
</html>
<?php
    }
    else
    {
        echo "<h1>Enter the correct groupcode given to you.</h1>";
    }
