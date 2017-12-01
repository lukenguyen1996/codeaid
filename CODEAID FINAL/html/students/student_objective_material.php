<!-- 
teambasic
wesley,ryland,luke,dominic
11/25/17
this page is for students to view supplementary material
-->

<?php
	//include several of the main helper function files
	include '../function_files.php';

        session_start();
	$objectiveid =$_SESSION['objectiveid'];
	
	//redirects to login if invalid session
	

	$objectiveName=get("name","objectives","Objective_ID=$objectiveid","")[0][0];	

	//inialization info for page
	title('helpful materials');
	$sheets=array('../CSS_sheets/account_list.css','../CSS_sheets/error_messages.css');
	styles($sheets);

	//convenience items on how much and what to display
	$status=array("Helpful Materials","Inactive Materials","All Materials");
	$bool_stmt=array("active=1","active=0","1=1");
	$active_materials=0;
	$limit=20;
	//get students enrolled in class
	$materials=get("Material_ID,name,info,active","supplementary_material","Objective_ID=".$objectiveid." AND ".$bool_stmt[$active_materials]," limit ".$limit);
	$_SESSION['materials']=$materials;
?>
<body>
<!--top of page buttons-->
<form style="float:left;" action='problem_page_1.php'><input type="hidden" name="quiz_objectives" value=<?php echo $_POST['quiz_objectives']; ?>><input type="submit" value="back"></form>
<form style="float:right;" action="../end_codeaid/logout.php"><input type="submit" value="logout"></form>
<form style="text-align:left;" action="student_welcome_1.php"><input type="submit" value="home"></form>

<h1 style="text-align:center"><?php echo $status[$active_materials] ?></h1>
<h3><?php echo "Objective: $objectiveName"; ?></h3>

<!-- The whole page is essentially a form so that each account can be activated or deactivated -->
<form action='student_objective_material.php' method='post' id='manage_q'>

<!-- This section creates display for student -->
<table>
	<tr><th>Material Name</th><th>Info</th></tr>
	<?php
		echo '<input type="hidden" name="material_status[0]" value="nonactive">';
		echo '<input type="hidden" name="edit" value='.$_POST['edit'].'>';
		echo '<input type="hidden" name="objective_id" value='.$objectiveid.'>';
		for($i=0;$i<count($materials);$i++){
			//if edit mode show text fields
			if(isset($_POST['edit']) && $_POST['edit']){
				echo '<tr><td><input type="text" name="name['.$i.']" value="'.$materials[$i][1].'"></td>';
				echo '<td><textarea rows="4" cols="50" name="info['.$i.']" form="manage_q">'.$materials[$i][2].'</textarea></td><td>';
			}else{
				echo '<tr><td>'.$materials[$i][1].'</td><td>'.$materials[$i][2].'</td>';
			}
			//material active status
			echo '</tr>';
		}
	?>
</table>
</p>
</form>

</body>
</html>
