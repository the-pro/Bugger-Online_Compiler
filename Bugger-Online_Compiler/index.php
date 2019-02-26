<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: registration/signup.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style-com.css">
  <link rel="icon" type="image/ico" href="b.png" />
  <title>Bugger compiler</title>
  <meta name="keywords" content="Online,Compiler" />
  <link rel="shortcut icon" href="../styles/favicon.ico" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Custom Theme files -->
  <link href="registration/signup.css" rel="stylesheet" type="text/css" media="all" />
  <!-- //Custom Theme files -->
  <!-- web font -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- //web font -->
</head>
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
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <div class="main-w3layouts wrappre">
        <div>
      <div id="xyz">

      <img src="b.png" width="200px" style="position:relative;top:7px;" alt="Bugger logo" />
      <h1> The Online Compiler You Wanted</h1></div>
      <!--<img class="top_bar" src="bar.png" width="400px" height="6px" alt="bar" />-->
<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <div id="content" id="xyz">
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
      <p id="logout">Click <a href="registration/logout.php">Here</a> to logout!!</p><br>
      </table>
      </div>
    </div>
    <div class="colorlibcopy-agile">
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

    <?php endif ?>
</div>

</body>
</html>
