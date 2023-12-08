<?php 
$page=1;
$thebox='word';
$ischecked='';
print_r ($ischecked);
if (isset($_POST['topagetwofromone'])){
	$page=2;
	if (isset($_POST['page1text1'])) {
	$firstboxfromone=$_POST['page1text1'];
} else {
	$firstboxfromone='';
}
if (isset($_POST['page1text2'])) {
	$secondboxfromone=$_POST['page1text2'];
} else {
	$secondboxfromone='';
}
if (isset($_POST['page2text1'])) {
	$firstboxfromtwo=$_POST['page2text1'];
} else {
	$firstboxfromtwo='';
}
if (isset($_POST['page2text1'])) {
	$returnfromoneboxone=$_POST['page2text1'];
	} else {
		$returnfromoneboxone='';
	}
	if (isset($_POST['page2text2'])) {
	$returnfromoneboxtwo=$_POST['page2text2'];
	} else {
		$returnfromoneboxtwo='';
	}
	if (isset($_POST['page2text3'])) {
	$returnfromoneboxthree=$_POST['page2text3'];
	} else {
		$returnfromoneboxthree='';
	}
	if (isset($_POST['page2text4'])) {
	$returnfromoneboxfour=$_POST['page2text4'];
	} else {
		$returnfromoneboxfour='';
	}
	
	if (isset($_POST['square']) && $_POST['square'] == 'word') {
		$ischecked='checked';
	} else {
		$ischecked='';
	}
}
if (isset($_POST['topageone'])){
	$page=1;
	if (isset($_POST['page2text1'])) {
		$firstboxfromtwo=$_POST['page2text1'];
	} 
	if (isset($_POST['page2text2'])) {
		$secondboxfromtwo=$_POST['page2text2'];
	} 
	if (isset($_POST['page2text3'])) {
		$thirdboxfromtwo=$_POST['page2text3'];
	} 
	if (isset($_POST['page2text4'])) {
		$fourthboxfromtwo=$_POST['page2text4'];
	}
	if (isset($_POST['square'])&& $_POST['square'] == 'word') {
		$ischecked='checked';
	} else {
		$ischecked='';
	}
}
if (isset($_POST['topagethree'])){
	$page=3;
$textone=$_POST['page1text1'];
$texttwo=$_POST['page1text2'];
$textthree=$_POST['page2text1'];
$textfour=$_POST['page2text2'];
$textfive=$_POST['page2text3'];
$textsix=$_POST['page2text4'];
if (isset($_POST['square'])&& $_POST['square'] == 'word') {
		$ischecked='checked';
	} else {
		$ischecked='';
	}
}
if (isset($_POST['topagetwofromthree'])){
	$page=2;
	if (isset($_POST['page1text1'])) {
	$firstboxfromone=$_POST['page1text1'];
} 
	

	if (isset($_POST['square'])&& $_POST['square'] == 'word') {
		$ischecked='checked';
	} else {
		$ischecked='';
	}

if (isset($_POST['page1text2'])) {
	$secondboxfromone=$_POST['page1text2'];
	} else {
		$secondboxfromone='';
	}
	if (isset($_POST['page2text1'])) {
	$returnfromoneboxone=$_POST['page2text1'];
	}
	if (isset($_POST['page2text2'])) {
	$returnfromoneboxtwo=$_POST['page2text2'];
	}
	if (isset($_POST['page2text3'])) {
	$returnfromoneboxthree=$_POST['page2text3'];
	}
	if (isset($_POST['page2text4'])) {
	$returnfromoneboxfour=$_POST['page2text4'];
	}
}

if ($page==1) {
if (isset($_POST['page2text1'])) {
	$returnfromoneboxone=$_POST['page2text1'];
	} else {
		$returnfromoneboxone='';
	}
	if (isset($_POST['page2text2'])) {
	$returnfromoneboxtwo=$_POST['page2text2'];
	} else {
		$returnfromoneboxtwo='';
	}
	if (isset($_POST['page2text3'])) {
	$returnfromoneboxthree=$_POST['page2text3'];
	} else {
		$returnfromoneboxthree='';
	}
	if (isset($_POST['page2text4'])) {
	$returnfromoneboxfour=$_POST['page2text4'];
	} else {
		$returnfromoneboxfour='';
	}

if (isset($_POST['page1text1'])) {
	$sentbackboxone=$_POST['page1text1'];
} else {
	$sentbackboxone='';
}
if (isset($_POST['page1text2'])) {
	$sentbackboxtwo=$_POST['page1text2'];
} else {
	$sentbackboxtwo='';
}
print "<html><body>

<form method='post' action=''>
Fill this in with whatever you want <br\n>
<input type='text' name='page1text1' value='$sentbackboxone'/>
<br\n><br\n>One more time <br\n>
<input type='text' name='page1text2' value='$sentbackboxtwo'/>
<br\n><br\n>This is a check box
<input type='checkbox' name='square' value='$thebox' $ischecked/>
<br\n>
<input type='submit' name='topagetwofromone' value='submit'/>

<input type='hidden' name='page2text1' value='$returnfromoneboxone'/>
<input type='hidden' name='page2text2' value='$returnfromoneboxtwo'/>
<input type='hidden' name='page2text3' value='$returnfromoneboxthree'/>
<input type='hidden' name='page2text4' value='$returnfromoneboxfour'/>
</form>
</body></html>";
} else if ($page==2) {

print "<html><body>

<form method='post' action=''>
You can Fill in this box
<input type='text' name='page2text1' value='$returnfromoneboxone'/><br\n><br\n>
And this one too
<input type='text' name='page2text2' value='$returnfromoneboxtwo'/><br\n><br\n>
Yet another box 
<input type='text' name='page2text3' value='$returnfromoneboxthree'/><br\n><br\n>
The absolute last box here
<input type='text' name='page2text4' value='$returnfromoneboxfour'/><br\n><br\n>
<input type='checkbox' name='square' value='$thebox' style='display:none' $ischecked />

<input type='hidden' name='page1text1' value='$firstboxfromone'/>
<input type='hidden' name='page1text2' value='$secondboxfromone'/>
<input type='submit' name='topageone' value='go back'/>
<input type='submit' name='topagethree' value='submit'/>
</form>
</body></html>";
} 
 else {
	print "<html><body>

this is what you have inputted <br\n>
$textone <br\n>
$texttwo <br\n>
$textthree <br\n>
$textfour <br\n>
$textfive <br\n>
$textsix <br\n>
<form method='post' action=''>
<input type='hidden' name='page1text1' value='$textone'/>
<input type='hidden' name='page1text2' value='$texttwo'/>
<input type='hidden' name='page2text1' value='$textthree'/>
<input type='hidden' name='page2text2' value='$textfour'/>
<input type='hidden' name='page2text3' value='$textfive'/>
<input type='hidden' name='page2text4' value='$textsix'/>
<input type='submit' name='topagetwofromthree' value='go back'/>
<input type='checkbox' name='square' value='$thebox' style='display:none' $ischecked/>
</form>";
if ($ischecked=='checked') {
print 'YES, the box is checked';
} else {
	print 'the box was NOT checked';
}
print "</body></html>";
}
?>