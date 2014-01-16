<html>
<head>

<title>Space Tourism Survey Results</title>
<style type="text/css">
body {
	font-family: "Arial",Arial,sans-serif;
	background-color:black;
	color:silver;
}

.howdy {
	color: #4169E1;
	font-weight:bold;
}

h1 {
	color: yellow;
	text-align:center;
}

h2 {
	color:#FF2D3C;
}

</style>
</head>
<body>
<h1>Space Tourism Survey Results</h1>
<?php
error_reporting(E_ALL);
#echo "<h2>Your inputs </h2>";
#echo "<h3>General Questions</h3>";
$numq = 14; #number of questions
# Set to a value if not set yet.
for ($count=1; $count<=$numq;$count++) {
	if (!isset($_POST["qa".$count])) {
		$_POST['qa'.$count] = '';
	}
}

# Assign to new variables to simplify typing
for ($count=1; $count<=$numq;$count++) {
	${"qa".$count} = $_POST['qa'.$count];
}
#echo "<h3>Technical Questions</h3>";
	# Check if value was inputted in the first place!
	# Note that for answers with text inputs, there will be a value even if it's just ''
	# On the other hand, for radio boxes, no selection is not set (note: NOT equivalent to NULL) and value must be set manually!!
if (!isset($_POST['qb1'])) { # if it's not set
	$_POST['qb1'] = ''; # set to a value if not set
} 
	$qb1 = $_POST['qb1']; # assign regardless

if (!isset($_POST['qb2'])) { # if it's not set
	$_POST['qb2'] = ''; # set to a value if not set
} 
	$qb2 = $_POST['qb2']; # assign regardless

if (!isset($_POST['qb4'])) { # if it's not set
	$_POST['qb4'] = ''; # set to a value if not set
} 
	$qb4 = $_POST['qb4']; # assign regardless

if (!isset($_POST['qb5'])) { # if it's not set
	$_POST['qb5'] = ''; # set to a value if not set
} 
	$qb5 = $_POST['qb5']; # assign regardless

$qb3 = $_POST['qb3'];
$qb6 = $_POST['qb6'];
$qb7 = $_POST['qb7'];


#echo "<h3>Personal Questions</h3>";
$numq = 13; #number of questions
# Set to a value if not set yet!
for ($count=1; $count<=$numq-1;$count++) {
	if (!isset($_POST["qc".$count])) {
		$_POST['qc'.$count] = '';
	}
}

# Assign to new variables to save typing.
for ($count=1; $count<=$numq;$count++) {
	if (is_array($_POST["qc".$count])) {
		${"qc".$count} = serialize($_POST['qc'.$count]);
	}else {
		${"qc".$count} = $_POST['qc'.$count];
	}
}

# Connect to database
$db = mysql_connect("mendedarchives.db.blahblahblah.com","blahblahblah","somepassword"); 

if (!$db)
{
	echo "Error: Cannot connect!";
	die('Could not connect: ' . mysql_error());
	exit;
}
# Insert entries into database
mysql_select_db("mendedarchives", $db);
#Why does this not work?!
#$query = "insert into surveytable values ('$qa1','$qa2','$qa3','$qa4','$qa5','$qa6','$qa7','$qa8','$qa9','$qa10','$qa11','$qa12','$qa13','$qa14','$qb1',$qb2','$qb3','$qb4','$qb5','$qc1','$qc2','$qc3','$qc4','$qc5','$qc6','$qc7','$qc8','$qc9','$qc10')";

# Define what query to use.
# if (is_null($qb1)) {
# if ($qb1=='') {
#	$query = "insert into surveytable (qa1,qa2,qa3,qa4,qa5,qa6,qa7,qa8,qa9,qa10,qa11,qa12,qa13,qa14,qc1,qc2,qc3,qc4,qc5,qc6,qc7,qc8,qc9,qc10,qc11,qc12,qc13) values ('$qa1','$qa2','$qa3','$qa4','$qa5','$qa6','$qa7','$qa8','$qa9','$qa10','$qa11','$qa12','$qa13','$qa14','$qc1','$qc2','$qc3','$qc4','$qc5','$qc6','$qc7','$qc8','$qc9','$qc10','$qc11','$qc12','$qc13')";
# } else {
	$query = "insert into surveytable (qa1,qa2,qa3,qa4,qa5,qa6,qa7,qa8,qa9,qa10,qa11,qa12,qa13,qa14,qb1,qb2,qb3,qb4,qb5,qb6,qb7,qc1,qc2,qc3,qc4,qc5,qc6,qc7,qc8,qc9,qc10,qc11,qc12,qc13) values ('$qa1','$qa2','$qa3','$qa4','$qa5','$qa6','$qa7','$qa8','$qa9','$qa10','$qa11','$qa12','$qa13','$qa14','$qb1','$qb2','$qb3','$qb4','$qb5','$qb6','$qb7','$qc1','$qc2','$qc3','$qc4','$qc5','$qc6','$qc7','$qc8','$qc9','$qc10','$qc11','$qc12','$qc13')";
# }

# Actually do what query says!
$result = mysql_query($query);

if ($result) {
	echo mysql_affected_rows()." entry inserted into database. Take a look at the results after your entry...<br />";
}
else {
	echo "Nothing inserted! Something went wrong. <br />";
	die('Error: ' . mysql_error());
}

#### Output some immediate results ####
# These questions gauge extent of interest: 
# 1, 2, 3, 4, 5, 9
$query = "SELECT qa1, qa2, qa3, qa4, qa5, qa9, qa10, qa11, qa12, qa13, qa14, qc2, qc8, qc9 FROM surveytable";
$result = mysql_query($query);

# Declare variables
$nointerest = 0; $someinterest = 0; $muchinterest = 0;
$malemuchinterest = 0;
$nointerest1 = 0;
$nointerest2 = 0;
$nointerest3 = 0;
$nointerest4 = 0;
$nointerest5 = 0;
$someinterest1 = 0;
$someinterest2 = 0;
$someinterest3 = 0;
$someinterest4 = 0;
$someinterest5 = 0;
$muchinterest1 = 0;
$muchinterest2 = 0;
$muchinterest3 = 0;
$muchinterest4 = 0;
$muchinterest5 = 0;
	$plaa=0; $plab=0; $plac=0; $plad=0; $plae=0; $plaf=0; $plag=0; $plah=0; $plai=0; $plaj=0; $plak=0; $plal=0; $plam=0;	
	$plaatotal=0; $plabtotal=0; $plactotal=0; $pladtotal=0; $plaetotal=0; $plaftotal=0; $plagtotal=0; $plahtotal=0; $plaitotal=0; $plajtotal=0; $plaktotal=0; $plaltotal=0; $plamtotal=0;	
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	$numas = 0; $numes = 0; # reset 
	if ($row['qa1'] == 'a') {
		$numas++;
	} elseif ($row['qa1']=='e') {
		$numes++;  
	}
	if ($row['qa2'] == 'a') {
		$numas++;
	} elseif ($row['qa2']=='f') {
		$numes++;  
	}
	if ($row['qa3'] == 'a') {
		$numas++;
	} elseif ($row['qa3']=='e') {
		$numes++;  
	}
	if ($row['qa4'] == 'a') {
		$numas++;
	} elseif ($row['qa4']=='e') {
		$numes++;  
	}
	if ($row['qa5'] == 'a') {
		$numas++;
	} elseif ($row['qa5']=='e') {
		$numes++;  
	}
	if ($row['qa9'] == 'a') {
		$numas++;
	} elseif ($row['qa9']=='e') {
		$numes++;  
	}
	if ($row['qa10'] == 'a') {
		$numas++;
	} elseif ($row['qa10']=='e') {
		$numes++;  
	}
	if ($row['qa11'] == 'a') {
		$numas++;
	} elseif ($row['qa11']=='e') {
		$numes++;  
	}
	if ($row['qa12'] == 'a') {
		$numas++;
	} elseif ($row['qa12']=='e') {
		$numes++;  
	}
	if ($row['qa13'] == 'a') {
		$numas++;
	} elseif ($row['qa13']=='e') {
		$numes++;  
	}
	if ($row['qa14'] == 'a') {
		$numas++;
	} 

	# Decide this entry's interest level according to number of a's, e's, or other
	if ($numas > 4) {
		$nointerest++;
	} elseif ($numes > 4) {
		$muchinterest++;
		# Determine male/female linkage to high interest
		if ($row['qc2']=='a') { # if male
			$malemuchinterest++;
		} 
	}
	else {
		$someinterest++;
	}

	# Determine place with max interest
	# Increment number of people with max interest in the region
	$pla = $row['qc9'];
	if ($numes > 4) { # if has much interest
		if ($pla=='a') {
			$plaa++;
		} elseif ($pla=='b') {
			$plab++;
		} elseif ($pla=='c') {	
			$plac++;
		} elseif ($pla=='d') {
			$plad++;
		} elseif ($pla=='e') {
			$plae++;
		} elseif ($pla=='f') {
			$plaf++;
		} elseif ($pla=='g') {
			$plag++;
		} elseif ($pla=='h') {
			$plah++;
		} elseif ($pla=='i') {
			$plai++;
		} elseif ($pla=='j') {
			$plaj++;
		} elseif ($pla=='k') {
			$plak++;
		} elseif ($pla=='l') {
			$plal++;
		} elseif ($pla=='m') {
			$plam++;
		} 
	}	
	# Increment number of people who took the survey in that region
		if ($pla=='a') {
			$plaatotal++;
		} elseif ($pla=='b') {
			$plabtotal++;
		} elseif ($pla=='c') {	
			$plactotal++;
		} elseif ($pla=='d') {
			$pladtotal++;
		} elseif ($pla=='e') {
			$plaetotal++;
		} elseif ($pla=='f') {
			$plaftotal++;
		} elseif ($pla=='g') {
			$plagtotal++;
		} elseif ($pla=='h') {
			$plahtotal++;
		} elseif ($pla=='i') {
			$plaitotal++;
		} elseif ($pla=='j') {
			$plajtotal++;
		} elseif ($pla=='k') {
			$plaktotal++;
		} elseif ($pla=='l') {
			$plaltotal++;
		} elseif ($pla=='m') {
			$plamtotal++;
		}


	# Determine correlation of interest to number of space-related activites done
	$dat =  unserialize($row['qc8']);
	$numspace = count($dat);

	if ($numspace==1) {
		if ($numas > 4) { # no interest
			$nointerest1++;
		} elseif ($numes > 4) { # lots of interest
			$muchinterest1++;
		} else {
			$someinterest1++;
		}
	} elseif ($numspace==2) {
		if ($numas > 4) { # no interest
			$nointerest2++;
		} elseif ($numes > 4) { # lots of interest
			$muchinterest2++;
		} else {
			$someinterest2++;
		}
	} elseif ($numspace==3) {
		if ($numas > 4) { # no interest
			$nointerest3++;
		} elseif ($numes > 4) { # lots of interest
			$muchinterest3++;
		} else {
			$someinterest3++;
		}
	} elseif ($numspace==4) {
		if ($numas > 4) { # no interest
			$nointerest4++;
		} elseif ($numes > 4) { # lots of interest
			$muchinterest4++;
		} else {
			$someinterest4++;
		}
	} elseif ($numspace==5) {
		if ($numas > 4) { # no interest
			$nointerest5++;
		} elseif ($numes > 4) { # lots of interest
			$muchinterest5++;
#			echo "WoW!";
		} else {
			$someinterest5++;
		}
	} 	
#	foreach ($qc8 as $values){
#		echo  "$values"."<br />";
#	}		

} 

# Calculate percentages of people region with most interest
if ($plaatotal == 0) {
	$percentplaa = 0;
} else {
	$percentplaa = 100*$plaa/$plaatotal;
}
if ($plabtotal == 0) {
	$percentplab = 0;
} else {
$percentplab = 100*$plab/$plabtotal;
}
if ($plactotal == 0) {
	$percentplac = 0;
} else {
$percentplac = 100*$plac/$plactotal;
}
if ($pladtotal == 0) {
	$percentplad = 0;
} else {
$percentplad = 100*$plad/$pladtotal;
}
if ($plaetotal == 0) {
	$percentplae = 0;
} else {
$percentplae = 100*$plae/$plaetotal;
}
if ($plaftotal == 0) {
	$percentplaf = 0;
} else {
$percentplaf = 100*$plaf/$plaftotal;
}
if ($plagtotal == 0) {
	$percentplag = 0;
} else {
$percentplag = 100*$plag/$plagtotal;
}
if ($plahtotal == 0) {
	$percentplah = 0;
} else {
$percentplah = 100*$plah/$plahtotal;
}
if ($plaitotal == 0) {
	$percentplai = 0;
} else {
$percentplai = 100*$plai/$plaitotal;
}
if ($plajtotal == 0) {
	$percentplaj = 0;
} else {
$percentplaj = 100*$plaj/$plajtotal;
}
if ($plaktotal == 0) {
	$percentplak = 0;
} else {
$percentplak = 100*$plak/$plaktotal;
}
if ($plaltotal == 0) {
	$percentplal = 0;
} else {
$percentplal = 100*$plal/$plaltotal;
}
if ($plamtotal == 0) {
	$percentplam = 0;
} else {
$percentplam = 100*$plam/$plamtotal;
}
?>

	<h2>Percentage of People in Region with Most Interest</h2>US:
<?php	for ($count=1; $count<=$percentplaa;$count++) { ?>
	<span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplaa."<br />"; ?>Canada:
<?php	for ($count=1; $count<=$percentplab;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplab."<br />"; ?>Hispanic America:
<?php	for ($count=1; $count<=$percentplac;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplac."<br />"; ?>Russia or Former Soviet Republic:
<?php	for ($count=1; $count<=$percentplad;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplad."<br />"; ?>China:
<?php	for ($count=1; $count<=$percentplae;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplae."<br />"; ?>India:
<?php	for ($count=1; $count<=$percentplaf;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplaf."<br />"; ?>Middle East or North Africa:
<?php	for ($count=1; $count<=$percentplag;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplag."<br />"; ?>Europe:
<?php	for ($count=1; $count<=$percentplah;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplah."<br />"; ?>Subsaharan Africa:
<?php	for ($count=1; $count<=$percentplai;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplai."<br />"; ?>Australia or Oceania:
<?php	for ($count=1; $count<=$percentplaj;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplaj."<br />"; ?>Asia (other):
<?php	for ($count=1; $count<=$percentplak;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplak."<br />"; ?>Japan:
<?php	for ($count=1; $count<=$percentplal;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplal."<br />"; ?>Korea:
<?php	for ($count=1; $count<=$percentplam;$count++) { ?>
	 <span style='background-color:#FF0000;'>&nbsp;</span>
<?php	} echo $percentplam."<br />"; ?>

<h2>Correlation between Interest in Space and Interest in Space Tourism</h2>
<table border="1" bordercolor="#002366">
<tr>
<td># space activities people do >>> </td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>5</td>
</tr>
<tr>
<td>People with no interest in space tourism did this many activities: </td>
<td> <?php echo "$nointerest1"; ?> </td>
<td> <?php echo "$nointerest2"; ?> </td>
<td> <?php echo "$nointerest3"; ?> </td>
<td> <?php echo "$nointerest4"; ?> </td>
<td> <?php echo "$nointerest5"; ?> </td>
</tr>
<tr>
<td>People with some interest in space tourism did this many activities: </td>
<td> <?php echo "$someinterest1"; ?> </td>
<td> <?php echo "$someinterest2"; ?> </td>
<td> <?php echo "$someinterest3"; ?> </td>
<td> <?php echo "$someinterest4"; ?> </td>
<td> <?php echo "$someinterest5"; ?> </td>
</tr>
<tr>
<td>People with huge interest in space tourism did this many activities: </td>
<td> <?php echo "$muchinterest1"; ?> </td>
<td> <?php echo "$muchinterest2"; ?> </td>
<td> <?php echo "$muchinterest3"; ?> </td>
<td> <?php echo "$muchinterest4"; ?> </td>
<td> <?php echo "$muchinterest5"; ?> </td>
</tr>
</table>

<?php
$totalpeople = $nointerest + $muchinterest + $someinterest;
echo "<h2>Number of People Surveyed: ".$totalpeople."</h2>";
echo "No interest: ";
for ($count=1; $count<=$nointerest;$count++) {
	echo "<span style='background-color:#FF0000;'>&nbsp;</span>";
}
echo $nointerest."<br />";
echo "Some interest: ";
for ($count=1; $count<=$someinterest;$count++) {
?>
	<span style='background-color:#FF0000;'>&nbsp;</span>
<?php
}
echo $someinterest."<br />";
echo "Much interest: ";
for ($count=1; $count<=$muchinterest;$count++) {
	echo "<span style='background-color:#FF0000;'>&nbsp;</span>";
}
echo $muchinterest."<br /><br />";

echo "<h2>Male vs Females with Great Interest </h2>";
echo "Male: ";
for ($count=1; $count<=$malemuchinterest;$count++) {
	echo "<span style='background-color:#FF0000;'>&nbsp;</span>";
}
echo $malemuchinterest."<br />";
$femalemuchinterest = $totalpeople - $malemuchinterest;
echo "Female: ";
for ($count=1; $count<=$femalemuchinterest;$count++) {
	echo "<span style='background-color:#FF0000;'>&nbsp;</span>";
}
echo $femalemuchinterest."<br />";

# Count # of tables in database
/* $sql = "SHOW TABLES"; 
 $result = mysql_query($sql); 
 $num_of_tables = mysql_num_rows($result); 
 echo $num_of_tables;
*/
?>
<br />
<div align='center'>Thank you for taking the survey!<br />
<a href="javascript:close();">Close window</a>
</div>

</body>

</html>