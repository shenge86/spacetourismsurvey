<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Space Tourism Survey</title>
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

<script language="JavaScript"><!--

function uncheckbuttons(qname) {
	for (var i=0; i<qname.length; i++) {
  		qname[i].checked = false;
	}	
 }

function validateOnSubmit() {
	var errs = 0; // initialize # of errors to be 0 initially

	// Nested function to check radio buttons
function getSelectedRadio(buttonGroup) {
   // returns the array number of the selected radio button or -1 if no button is selected
   if (buttonGroup[0]) { // if the button group is an array (one button is not an array)
      for (var i=0; i<buttonGroup.length; i++) {
         if (buttonGroup[i].checked) {
            return i
         }
      }
   } else {
      if (buttonGroup.checked) { return 0; } // if the one button is checked, return zero
   }
   // if we get to this point, no radio button is selected
   return -1;
} // Ends the "getSelectedRadio" function


/* WHY DOES THIS LOOP NOT WORK? WHY CAN I NOT USE STRBLAH?
	for (var i=1; i<15; i++) {
		var strblah = "document.myform.qa" + i;
		if (getSelectedRadio(strblah) == -1) {
			alert(strblah);
			errs++;
		}
	}
*/

	if (getSelectedRadio(document.myform.qa1) == -1) {
		var oldHTML = document.getElementById('qA1').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA1').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa2) == -1) {
		var oldHTML = document.getElementById('qA2').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA2').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa3) == -1) {
		var oldHTML = document.getElementById('qA3').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA3').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa4) == -1) {
		var oldHTML = document.getElementById('qA4').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA4').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa5) == -1) {
		var oldHTML = document.getElementById('qA5').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA5').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa6) == -1) {
		var oldHTML = document.getElementById('qA6').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA6').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa7) == -1) {
		var oldHTML = document.getElementById('qA7').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA7').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa8) == -1) {
		var oldHTML = document.getElementById('qA8').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA8').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa9) == -1) {
		var oldHTML = document.getElementById('qA9').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA9').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa10) == -1) {
		var oldHTML = document.getElementById('qA10').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA10').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa11) == -1) {
		var oldHTML = document.getElementById('qA11').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA11').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa12) == -1) {
		var oldHTML = document.getElementById('qA12').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA12').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa13) == -1) {
		var oldHTML = document.getElementById('qA13').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA13').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qa14) == -1) {
		var oldHTML = document.getElementById('qA14').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qA14').innerHTML = newHTML;
		errs++;
	}

	// Personal question validation
	if (getSelectedRadio(document.myform.qc1) == -1) {
		var oldHTML = document.getElementById('qC1').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC1').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qc2) == -1) {
		var oldHTML = document.getElementById('qC2').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC2').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qc3) == -1) {
		var oldHTML = document.getElementById('qC3').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC3').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qc4) == -1) {
		var oldHTML = document.getElementById('qC4').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC4').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qc5) == -1) {
		var oldHTML = document.getElementById('qC5').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC5').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qc6) == -1) {
		var oldHTML = document.getElementById('qC6').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC6').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qc7) == -1) {
		var oldHTML = document.getElementById('qC7').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC7').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qc9) == -1) {
		var oldHTML = document.getElementById('qC9').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC9').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qc10) == -1) {
		var oldHTML = document.getElementById('qC10').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC10').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qc11) == -1) {
		var oldHTML = document.getElementById('qC11').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC11').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qc12) == -1) {
		var oldHTML = document.getElementById('qC12').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qC12').innerHTML = newHTML;
		errs++;
	}

	var lastindexofqc13 = document.myform.qc13.length-1; // -1 to account for array start 0
	if (document.myform.qc13[lastindexofqc13].value == "") { // first check if textbox is empty
//		alert(lastindexofqc13);
		if (getSelectedRadio(document.myform.qc13) == -1) {
			var oldHTML = document.getElementById('qC13').innerHTML;
			var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
			document.getElementById('qC13').innerHTML = newHTML;
			errs++;
		}
	}

	// Professional question validation
	if (getSelectedRadio(document.myform.qb1) == -1) {
		var oldHTML = document.getElementById('qB1').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qB1').innerHTML = newHTML;
		errs++;
	}
	if (getSelectedRadio(document.myform.qb2) == -1) {
		var oldHTML = document.getElementById('qB2').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qB2').innerHTML = newHTML;
		errs++;
	}
	
	var lastindexofqb3 = document.myform.qb3.length-1; // -1 to account for array start 0
	if (document.myform.qb3[lastindexofqb3].value == "") { // first check if textbox is empty
//		alert(lastindexofqb3);
		if (getSelectedRadio(document.myform.qb3) == -1) {
			var oldHTML = document.getElementById('qB3').innerHTML;
			var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
			document.getElementById('qB3').innerHTML = newHTML;
			errs++;
		}
	}

	if (getSelectedRadio(document.myform.qb4) == -1) {
		var oldHTML = document.getElementById('qB4').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qB4').innerHTML = newHTML;
		errs++;
	}

	if (getSelectedRadio(document.myform.qb5) == -1) {
		var oldHTML = document.getElementById('qB5').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qB5').innerHTML = newHTML;
		errs++;
	}

	if (document.myform.qb6.value == "") {
		var oldHTML = document.getElementById('qB6').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qB6').innerHTML = newHTML;
		errs++;
	}

	if (document.myform.qb7.value == "") {
		var oldHTML = document.getElementById('qB7').innerHTML;
		var newHTML = "<span style='color:red'>" + oldHTML + "  <<< REQUIRED. </span>";
		document.getElementById('qB7').innerHTML = newHTML;
		errs++;
	}

	if (errs > 0) {
		alert('Some questions have not been answered! See those highlighted red.');
	}

	return (errs==0);
}

//--></script>


</head>
<body>
   
   <h1>Space Tourism Survey</h1>

<p>Please answer <span class="howdy">ALL</span> questions as honestly as you can except those under Professional if you feel that you lack the credentials to make a judgment. Limit one survey to one person to not skew results please!</p>


<!--<form name="myform" onsubmit="return validateOnSubmit()" action="spacetourismsurveysubmit.php" method="POST">-->
<form name="myform" action="spacetourismsurveysubmit.php" method="POST">
<table>
<tr>
<td colspan="2"><h2>General Questions</h2></td>
</tr>
<tr>
<td colspan="2" class="howdy" id="qA1">
1.	With $400K, how much will you be willing to pay for a half hour suborbital flight?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa1" value="a">Unwilling to pay for any price!</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa1" value="b">$25K</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa1" value="c">$75K</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa1" value="d">$200K</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa1" value="e">$400K</td> 
</tr>
<tr>
<td colspan="2" class="howdy" id="qA2">
2.	If you have $50M, how much will you be willing to pay for an orbital flight to the ISS for two weeks?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa2" value="a">Unwilling to pay for any price!</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa2" value="b">$500K</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa2" value="c">$1M</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa2" value="d">$10M</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa2" value="e">$25M</td> 
</tr>
<tr>
<td>f.</td>
<td><input type="radio" name="qa2" value="f">$50M</td> 
</tr>
<tr>
<td colspan="2" class="howdy" id="qA3">
3.	What is the most important reason that you want to go into space?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa3" value="a">Not interested in going into space</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa3" value="b">Pioneer</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa3" value="c">Look at Earth and ponder</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa3" value="d">Look at the stars and what's out there without an atmosphere</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa3" value="e">Lifelong dream!</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA4">
4.	What is the most important reason that you do not want to go into space?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa4" value="a">Other things are more important to me in terms of money and time!</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa4" value="b">Too dangerous!</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa4" value="c">Too expensive!</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa4" value="d">Too limited! Just the ISS is not worth it.</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa4" value="e">Literally impossible due to my physical condition!</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA5">
5.	If there's a habitable commercial space station, will you be more interested in flying into space?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa5" value="a">No</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa5" value="b">A little</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa5" value="c">Somewhat</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa5" value="d">Likely</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa5" value="e">Yes</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA6">
6.	If you can bring a companion with you on the journey, will you be more interested?	
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa6" value="a">No</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa6" value="b">A little</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa6" value="c">Somewhat</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa6" value="d">Likely</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa6" value="e">Yes</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA7">
7.	Which of these if any will negatively affect your likelihood of going into space?	
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa7" value="a">Privately-developed space vehicle with limited flight history</td>
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa7" value="b">Strapped into seat throughout trip</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa7" value="c">Required intense 1-week training session</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa7" value="d">Too many or too little other passengers</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa7" value="e">None of them!</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA8">
8.	Which of these will you feel that you have missed out the most if you cannot do so in space?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa8" value="a">View the Earth.</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa8" value="b">See the stars!</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa8" value="c">Float around and enjoy reduced gravity.</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa8" value="d">Spacewalk</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa8" value="e">Conduct research that's impossible on Earth</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA9">
9.	How much do you care about post-flight physical discomfort? (dizziness, etc.)
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa9" value="a">A lot!</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa9" value="b">To a high degree</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa9" value="c">Somewhat care</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa9" value="d">Hardly care</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa9" value="e">Don't care</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA10">
10.	Do you believe that space tourism can open up the way for increased public interest and funding for "more serious" space missions?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa10" value="a">No, space tourism is a waste of money and time.</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa10" value="b">A little but not likely. Probably it'll be mostly just another status symbol for the already super wealthy or famous.</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa10" value="c">Somewhat.</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa10" value="d">Probably, there is much value in tourism in generating public interest.</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa10" value="e">Yes, space tourism can really excite and motivate the public to spend more money on space research and exploration.</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA11">
11. How long would you want to stay in a space station for a vacation?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa11" value="a">I don't want to go up there.</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa11" value="b">A week.</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa11" value="c">A month.</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa11" value="d">A few months to a year.</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa11" value="e">At least a few years. I want to live in space.</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA12">
12. Assuming a space tourism company is planning trips that go beyond low Earth orbit to more exotic locations like the moon or an asteroid, will you be more interested?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa12" value="a">No, I never had an interest in leaving Earth.</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa12" value="b">No, around Earth is good enough for me.</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa12" value="c">A little.</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa12" value="d">Probably.</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa12" value="e">Definitely, landing on an extraterrestrial object will be cool!</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA13">
13. A commercial space tourism company will require a commercial spaceport to launch its spacecraft. Will you be inclined to have part of your tax money go into supporting the construction of a spaceport near your home?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa13" value="a">Nope, I won't allow the government to waste my money for some rich people's thrill rides.</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa13" value="b">Not likely, there's hardly any real benefit to society as far as I can see.</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa13" value="c">Maybe, depends on how much it'll be.</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa13" value="d">Probably.</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa13" value="e">Sure!</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qA14">
14. What's the main benefit of space tourism that you can see?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qa14" value="a">I don't see any benefit to it.</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qa14" value="b">Economic revitalization. A new arena of profitable investment can be created from such ventures.</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qa14" value="c">Environmental protection. Research and development into cheaper more efficient vehicles will inevitably reduce cost of environment-monitoring satellites. Also, space-based solar power can be a potential which will be an entirely carbon free energy source.</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qa14" value="d">Education and inspiration. There's so much out there that we don't know. Space tourism can inspire and open up new doors for the dreams of the next generation.</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qa14" value="e">Resources. Extraterrestrial bodies like asteroids, moons, comets, and planets provides an almost infinite supply of resources. We need to start developing the spacecraft technology now so we can effectively harvest them in the future. Space tourism can provide the initial market and investment to develop these technologies.</td> 
</tr>


<tr>
<td colspan="2"><h2>Personal Questions</h2></td>
</tr>

<tr>
<td colspan="2" class="howdy" id="qC1">
1. How old are you?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qc1" value="a">< 18</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc1" value="b">19-27</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc1" value="c">28-45</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc1" value="d">46-60</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc1" value="e">> 61</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qC2">
2.	What is your gender?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qc2" value="a">Male</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc2" value="b">Female</td> 
</tr>
<td colspan="2" class="howdy" id="QC3">
3.	How often do you play some sort of sport or exercise?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qc3" value="a">Never</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc3" value="b">Once a month</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc3" value="c">1-2xs/week</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc3" value="d">3-4xs/week</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc3" value="e">Everyday</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qC4">
4.	Which of these do you consider of comparable risk as space travel?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qc4" value="a">None of them! Space travel is riskier than any terrestrial activity.</td>
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc4" value="b">Skydiving</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc4" value="c">Flying in a private aircraft</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc4" value="d">Skiing/snowboarding</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc4" value="e">None of them. Space travel isn't that risky</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qC5">
5. How much time do you spend vacationing annually?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qc5" value="a">1 week</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc5" value="b">2 weeks</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc5" value="c">1 month</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc5" value="d">2-6 months</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc5" value="e">Everyday</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qC6">
6. What's your background?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qc6" value="a">Business</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc6" value="b">Law</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc6" value="c">Science/Engineering</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc6" value="d">Liberal Arts</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc6" value="e">Other</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qC7">
7. What's your current job status?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qc7" value="a">Unemployed</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc7" value="b">Part-time</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc7" value="c">Self-employed</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc7" value="d">Employed</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc7" value="e">Student</td> 
</tr>
<tr>
<td>f.</td>
<td><input type="radio" name="qc7" value="f">Retired</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qC8">
8.	Which of the following have you done? [Can choose more than one.]
</td>
<tr>
<td>a.</td>
<td><input type="checkbox" name="qc8[]" value="a">Visited planetarium or space museum</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="checkbox" name="qc8[]" value="b">Visited launch site</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="checkbox" name="qc8[]" value="c">Attended manned spacecraft launch</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="checkbox" name="qc8[]" value="d">Built a rocket</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="checkbox" name="qc8[]" value="e">Went to space camp</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qC9">
9.	Where are you from? (Place you called home the longest)	
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qc9" value="a">US</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc9" value="b">Canada</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc9" value="c">Mexico, Central America, or South America</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc9" value="d">Russia or a former Soviet Republic</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc9" value="e">China</td> 
</tr>
<tr>
<td>f.</td>
<td><input type="radio" name="qc9" value="f">India</td> 
</tr>
<tr>
<td>g.</td>
<td><input type="radio" name="qc9" value="g">Middle East or North Africa</td> 
</tr>
<tr>
<td>h.</td>
<td><input type="radio" name="qc9" value="h">Europe</td> 
</tr>
<tr>
<td>i.</td>
<td><input type="radio" name="qc9" value="i">Subsaharan Africa</td> 
</tr>
<tr>
<td>j.</td>
<td><input type="radio" name="qc9" value="j">Australia, New Zealand, or Oceania</td> 
</tr>
<tr>
<td>k.</td>
<td><input type="radio" name="qc9" value="k">Elsewhere in Asia (not India, China, Japan, or Korea) </td> 
</tr>
<tr>
<td>l.</td>
<td><input type="radio" name="qc9" value="l">Japan</td> 
</tr>
<tr>
<td>m.</td>
<td><input type="radio" name="qc9" value="m">Korea</td> 
</tr>
<tr>
<td colspan="2" class="howdy" id="qC10">
10.	What is your socioeconomic strata? (How much do you make annually?)
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qc10" value="a"><$25K</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc10" value="b">$25K-$50K</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc10" value="c">$50K-$100K</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc10" value="d">$100K-$500K</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc10" value="e">>$500K</td> 
</tr>
<tr>
<td colspan="2" class="howdy" id="qC11">
11. How would you classify your willingness to seek out thrills?
</td></tr>
<tr>
<td>a.</td>
<td><input type="radio" name="qc11" value="a">Completely opposed.</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc11" value="b">Somewhat opposed.</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc11" value="c">Neutral.</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc11" value="d">Somewhat so.</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc11" value="e">Strongly so.</td> 
</tr>
<tr>
<td colspan="2" class="howdy" id="qC12">
12. What is your favorite genre of movie or literature?
</td></tr>
<tr>
<td>a.</td>
<td><input type="radio" name="qc12" value="a">Musical</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc12" value="b">Family</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc12" value="c">Comedy</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc12" value="d">Science fiction or fantasy</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc12" value="e">Drama</td> 
</tr>
<tr>
<td>f.</td>
<td><input type="radio" name="qc12" value="f">Action</td> 
</tr>
<tr>
<td colspan="2" class="howdy" id="qC13">
13. As a child, what did you most dream of doing?
</td>
</tr>
<tr>
<td>a.</td>
<td><input type="radio" name="qc13" value="a" onClick="javascript:document.myform.qc13[5].value='a';">I didn't have a childhood dream or I don't remember.</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qc13" value="b" onClick="javascript:document.myform.qc13[5].value='b';">Get a decent job that I like and a good family. Live comfortably.</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qc13" value="c" onClick="javascript:document.myform.qc13[5].value='c';">Do something to get rich or famous.</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qc13" value="d" onClick="javascript:document.myform.qc13[5].value='d';">Pursue my childhood interest to the fullest.</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qc13" value="e" onClick="javascript:document.myform.qc13[5].value='e';">Explore new places and see new sights.</td> 
</tr><tr>
<td>f.</td>
<td>Some other dream (or one of the letters above): <input type="text" name="qc13" value="" size="50" maxlength="50" onFocus="javascript:uncheckbuttons(document.myform.qc13)"></td>
</tr>

<tr>
<td colspan="2"><h2>Professional Questions (skip if you lack the knowledge)</h2></td>
</tr>

<tr>
<td colspan="2" class="howdy" id="qB1">
1.	Which of the following do you consider will have the largest impact in developing space commercially within the next twenty years?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qb1" value="a">Short tourism flights to suborbital</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qb1" value="b">More satellites launched commercially</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qb1" value="c">Rapid intercontinental transport via hypersonic vehicles</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qb1" value="d">Space stations for scientific research or tourists</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qb1" value="e">Establishing a permanent base on an extraterrestrial object</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qB2">
2.	What is the acceptable rate of safety for space tourism, i.e. what's an acceptable mortality rate?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qb2" value="a">1/25 (NASA space shuttle mortality rate)</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qb2" value="b">1/100 (Soyuz mortality rate)</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qb2" value="c">1/1000</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qb2" value="d">1/10000</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qb2" value="e">1/100000</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qB3">
3. 	Of the currently operating private space flight companies, which do you forsee being the most successful over the next 10 years?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qb3" value="a" onClick="javascript:document.myform.qb3[12].value='a';">Space Exploration Technologies Group (SpaceX)</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qb3" value="b" onClick="javascript:document.myform.qb3[12].value='b';">Virgin Galactic + Scaled Composites</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qb3" value="c" onClick="javascript:document.myform.qb3[12].value='c';">Blue Origin</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qb3" value="d" onClick="javascript:document.myform.qb3[12].value='d';">Armadillo Aerospace</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qb3" value="e" onClick="javascript:document.myform.qb3[12].value='e';">Bigelow Aerospace</td> 
</tr><tr>
<tr>
<td>f.</td>
<td><input type="radio" name="qb3" value="f" onClick="javascript:document.myform.qb3[12].value='f';">Space Adventures</td> 
</tr><tr>
<tr>
<td>g.</td>
<td><input type="radio" name="qb3" value="g" onClick="javascript:document.myform.qb3[12].value='g';">Rocketplane Kistler</td> 
</tr><tr>
<tr>
<td>h.</td>
<td><input type="radio" name="qb3" value="h" onClick="javascript:document.myform.qb3[12].value='h';">SpaceDev + Benson</td> 
</tr><tr>
<td>i.</td>
<td><input type="radio" name="qb3" value="i" onClick="javascript:document.myform.qb3[12].value='i';">Xcor</td> 
</tr><tr>
<td>j.</td>
<td><input type="radio" name="qb3" value="j" onClick="javascript:document.myform.qb3[12].value='j';">EADS Astrium</td> 
</tr><tr>
<td>k.</td>
<td><input type="radio" name="qb3" value="k" onClick="javascript:document.myform.qb3[12].value='k';">PlanetSpace</td> 
</tr><tr>
<td>l.</td>
<td><input type="radio" name="qb3" value="l" onClick="javascript:document.myform.qb3[12].value='l';">Starchaser</td> 
</tr><tr>
<td>m.</td>
<td>Some other company (or one of the letters above): <input type="text" name="qb3" value="" size="20" maxlength="20" onFocus="javascript:uncheckbuttons(document.myform.qb3)"></td>
</tr><tr>
<td colspan="2" class="howdy" id="qB4">
4. Do you agree with the proposed shift away from the Constellation Project and into a more dependent reliance on the private industry to fulfil our manned space flight needs?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qb4" value="a">Strongly disagree</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qb4" value="b">Disagree</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qb4" value="c">Undecided</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qb4" value="d">Agree</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qb4" value="e">Strongly agree</td> 
</tr><tr>
<td colspan="2" class="howdy" id="qB5">
5. There are 5 major obstacles to commercialized space tourism. Which one do you find to be the largest obstacle?
</td>
<tr>
<td>a.</td>
<td><input type="radio" name="qb5" value="a">Lack of investment due to perceptions of high risk and low returns</td> 
</tr>
<tr>
<td>b.</td>
<td><input type="radio" name="qb5" value="b">Government laws and regulations</td> 
</tr>
<tr>
<td>c.</td>
<td><input type="radio" name="qb5" value="c">Inadequate public awareness or mistaken perceptions of high risk</td> 
</tr>
<tr>
<td>d.</td>
<td><input type="radio" name="qb5" value="d">Lack of collaborative coalitions. International partners should play a role but they're not. Governments should support private ventures more.</td> 
</tr>
<tr>
<td>e.</td>
<td><input type="radio" name="qb5" value="e">Unverified market. Even interested parties are reluctant to pursue it to the fullest.</td> 
</tr>
<tr><td colspan="2" class="howdy" id="qB6">
6. How well would you say you are informed on the current status of the many different private space flight endeavors. (1 - Strongly Informed, 9 - Not Informed)
</td>
</tr><tr><td>
<input type="text" name="qb6" size="1" value="" maxlength="1">
</td></tr>
<tr><td colspan="2" class="howdy" id="qB7">
7. Do you feel that the private space flight community is finding success with their current marketing approaches?  Have they appropriately kept the public enthusiastic?  (1 - Strongly Yes, 9 - Strongly No)
</td>
</tr><tr><td>
<input type="text" name="qb7" size="1" value="" maxlength="1">
</td></tr>



<tr>
<td colspan="2"><input type="submit" value="Submit!"></td>
</tr>

</table>
</form>
	
</body>
     
</html>
