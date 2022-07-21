<?php 
session_start();
?>




<!DOCTYPE html>
<html>
<head>
	<title>Jehangir Hospital/ Acuity Score</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"
  >
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  
  	<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-lg bg-light">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <img src="jehangir_logo.jpg">
    </li>

   <!--  <li class="nav-item">
      <img src="nabh.jpg">
    </li> -->
  </ul>
</nav>

<div class="container-fluid">
	<p class="heading_acuity_categoery">ACUITY SCORING</p>
</div>

<div class="container-fluid">
	<div id="wrapper">
		<div class="patient_details"> 
			<form class="form-group" name="listForm"action="code.php" method="POST"> <!-- form start here -->
        	  <div  class="row">
        	  	 <div class="col-sm-5">
        	  	 	<label>Patient Name</label>
                      <input type="text" name="name" class="form-control">
        	  	 </div>

        	  	 <div class="col-sm-4">
        	  	 	<label>PRN </label>
                      <input type="text" name="prn" class="form-control">
        	  	 </div>

        	  	 <div class="col-sm-2">
         		<label>Date</label>
         		<div class="row">
         			<div class="col-sm-12">
         				<input type="date" id="date" name="date" class="form-control">
         			</div>
         		</div>
         	</div>
        	  </div>                                                                                                                                             
        

        <div  class="row" style="margin-top: 1%;">
        	  	 <div class="col-sm-5">
        	  	 	<label>Bed No</label>
                      <input type="text" name="bedno" class="form-control">
        	  	 </div>

        	  	 <div class="col-sm-4">
        	  	 	<label>Diagnosis </label>
                      <input type="text" name="diagnosis" class="form-control">
        	  	 </div>
        	  </div>

          <div style="margin-top: 3%">
         		<h4>Score 1</h4>
         	</div>
         <div class="row" style="margin-top:1%;border: 1px solid grey;padding: 1%">
         	<div class="col-sm-2">
         		<label>- Complicated Procedures</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" name="pulseox" value="1" value="pulseox" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Pulse Ox</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Foley's</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Oral Care</label>
         			</div>
         		</div>
         	</div>

           <div class="col-sm-2">
         		<label>- Education</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Standard (i.e DM,HF)</label>
         		</div>
         	</div>
         </div>


         	<div class="col-sm-2">
         		<label>- Psychosocial</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Mental Disabilities</label>
         			</div>
         		</div>
         	</div>

         	<div class="col-sm-2">
         		<label>- Medications</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>1-5 No</label>
         			</div>
         		</div>
         	</div>

         	<div class="col-sm-2">
         		<label>- Complicated IV Drugs & Other Medications</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Use of Glucometer</label>
         			</div>
         		</div>
         	</div>
<!-- 
         	<div class="col-sm-2">
         		<label>- Date</label>
         		<div class="row">
         			<div class="col-sm-12">
         				<input type="date" id="date" name="pdate" class="form-control">
         			</div>
         		</div>
         	</div> -->

         </div>

       

      <div style="margin-top: 3%">
         		<h4>Score 2</h4>
         	</div>
         <div class="row" style="margin-top:1%;border: 1px solid grey;padding: 1%">
         	<div class="col-sm-2">
         		<label>- Complicated Procedures</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>>4LO2 NC</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>BiPAP/CPAP</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Routine Tracheal care</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>PICC/Central line</label>
         			</div>
         		</div>

         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>NG tube</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Incontinent PCA</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Rectal Tube</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Isolation</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Fall risk</label>
         			</div>
         		</div>
         	</div>

           <div class="col-sm-2">
         		<label>- Education</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>New Meds, side effects</label>
         		</div>
         	</div>
         </div>


         	<div class="col-sm-2">
         		<label>- Psychosocial</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>End of life care</label>
         			</div>
         		</div>
         	</div>

         	<div class="col-sm-2">
         		<label>- Medications</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>6-10 No</label>
         			</div>
         		</div>
         	</div>

         	<div class="col-sm-2">
         		<label>- Complicated IV Drugs & Other Medications</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>2-5 IV meds</label>
         			</div>
         		</div>
         	</div>

         	<!-- <div class="col-sm-2">
         		<label>- Date</label>
         		<div class="row">
         			<div class="col-sm-12">
         				<input type="date" id="date" name="pdate" class="form-control">
         			</div>
         		</div>
         	</div> -->

         </div>




        
      <div style="margin-top: 1%">
         		<h4>Score 3</h4>
         	</div>
      
      <div class="row" style="margin-top:1%;border: 1px solid grey;padding: 1%">
         	<div class="col-sm-2">
         		<label>- Complicated Procedures</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>HighflowO2/Vent</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Continuous  BiPAP/CPAP</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Trachea/Frequent Suctioning</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Wound/skin care</label>
         			</div>
         		</div>

         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Ostomy</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Assist W/ADLS</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Vitals/neuro check q2h</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Continuous bladder irrigation Chest Tube</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Chest Tube</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Peritoneal Dialysis Opioid/Alcoholwithdrawal assessment</label>
         			</div>
         		</div>
         	</div>

           <div class="col-sm-2">
         		<label>- Education</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Discharge Today</label>
         		</div>
         	</div>
         	<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Family Education</label>
         		</div>
         	</div>
         	<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Pre/Post Procedure</label>
         		</div>
         	</div>
         </div>


         	<div class="col-sm-2">
         		<label>- Psychosocial</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Palliative Care</label>
         			</div>
         		</div>
         	</div>

         	<div class="col-sm-2">
         		<label>- Medications</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>11-15</label>
         			</div>
         		</div>
         	</div>

         	<div class="col-sm-2">
         		<label>- Complicated IV Drugs & Other Medications</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>2-5 IV meds</label>
         			</div>
         		</div>
         	</div>

         	<!-- <div class="col-sm-2">
         		<label>- Date</label>
         		<div class="row">
         			<div class="col-sm-12">
         				<input type="date" id="date" name="pdate" class="form-control">
         			</div>
         		</div>
         	</div> -->

         </div>

        <div style="margin-top:1%">
         		<h4>Score 4</h4>
         	</div>
         <div class="row" style="margin-top:1%;border: 1px solid grey;padding: 1%">
         	<div class="col-sm-2">
         		<label>- Complicated Procedures</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Total Care</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Restraints</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Total Feed</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Confused/Restless</label>
         			</div>
         		</div>

         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>High Risk for fall</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>High risk for Pressure Injury</label>
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Post Code/RRS</label>
         			</div>
		         		</div>
		         		<!-- <div class="row">
		         			<div class="col-sm-3">
		         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
		         			</div>
		         			<div class="col-sm-9">
		         				<label>Chest Tube</label>
		         			</div>
		         		</div> -->
         		<!-- <div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Peritoneal Dialysis Opioid/Alcoholwithdrawal assessment</label>
         			</div>
         		</div> -->
         	</div>

           <div class="col-sm-2">
         		<label>- Education</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>New Diagnosis Multiple comorbidities</label>
         		</div>
         	</div>
         </div>


         	<div class="col-sm-2">
         		<label>- Psychosocial</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Personal or family dynamics</label>
         			</div>
         		</div>
         	</div>

         	<div class="col-sm-2">
         		<label>- Medications</label>
	         		<div class="row">
	         			<div class="col-sm-3">
	         				<input type="checkbox" name="choice" value="1" onchange="checkTotal()"/>
	         			</div>
	         			<div class="col-sm-9">
	         				<label>16 or >16</label>
	         			</div>
         		</div>
         	</div>

         	<div class="col-sm-2">

         		<label>- Complicated IV Drugs & Other Medications</label>
         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" name="option[]" value="1" value="Blood_Products" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Blood / blood products</label>
         			</div>
         		</div>

         		<div class="row">
         			<div class="col-sm-3">
         				<input type="checkbox" name="choice" name="option[]" value="1" value="Cardiac_drip" onchange="checkTotal()"/>
         			</div>
         			<div class="col-sm-9">
         				<label>Cardiac Drip(Amioderone, cardizem, dopamine) Insulin Drip</label>
         			</div>
         		</div>
         	</div>

         	<!-- <div class="col-sm-2">
         		<label>- Date</label>
         		<div class="row">
         			<div class="col-sm-12">
         				<input type="date" id="date" name="pdate" class="form-control">
         			</div>
         		</div>
         	</div> -->



         </div>     
 <b>Total Score :</b> <input type="text" size="2" name="total" value="0" style="margin-top: 1%;">

             <center>
             	<input class="btn btn-primary" name="submit" style="margin-top:1%; font-weight:bold;width: 30%" type="submit" value="submit" onclick="myFunction()"
             </center>
        </form>		
		</div>
        
    </div>
</div>





<script type="text/javascript">


	function checkTotal() {
		document.listForm.total.value = '';
		var sum = 0;
		for (i=0;i<document.listForm.choice.length;i++) {
		  if (document.listForm.choice[i].checked) {
		  	sum = sum + parseInt(document.listForm.choice[i].value);
		  }
		}
		document.listForm.total.value = sum;
	}




</script>
</body>
</html>