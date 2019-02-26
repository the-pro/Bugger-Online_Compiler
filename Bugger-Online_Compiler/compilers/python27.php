<html>
<head>
<title>Output</title>
<link rel="icon" type="image/ico" href="b.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"></link>
<body>
<div id="header" style="text-align:centre"class="w3-container w3-green" >

<img src="b.png" width="200px" style="position:relative;top:7px;" alt="Bugger logo" />
<h1> The Online Compiler You Wanted</h1></div><br>
<h4>Output:</h4><br>
</body>
</html>
<?php
	$CC="python2.7";
	//$out="./a.out";
	$code=$_POST["code"];
	$input=$_POST["input"];
	$filename_code="main.py";
	$filename_in="input.txt";
	$filename_error="error.txt";
	//$executable="a.out";
	$command=$CC." ".$filename_code;
	$command_error=$command." 2>".$filename_error;

	//if(trim($code)=="")
	//die("The code area is empty");

	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	//exec("chmod 777 $executable");
	exec("chmod 777 $filename_error");

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($command);
		}
		else
		{
			$command=$command." < ".$filename_in;
			$output=shell_exec($command);
		}
		echo "<pre>$output</pre>";
	}
	else
	{
		echo "<pre>$error</pre>";
	}
	exec("rm $filename_code");
	exec("rm *.txt");
?>
