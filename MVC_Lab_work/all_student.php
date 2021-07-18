<?php 
	include_once 'models/db_config.php';

    include_once 'header.php';
	require_once 'controllers/std_controller.php';
	$student = getstudents();
?>

<html>
    <body>
        <table>
        <thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>ID</th>
			<th>DOB</th>
			<th>Credit</th>
			<th>CGPA</th>
			<th>Dept Name</th>
            <th>Dept ID</th>	
		</thead>
        <tbody>
			<?php
				$i = 1;
				foreach($student as $s){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$s["name"]."</td>";
						echo "<td>".$s["id"]."</p>";
						echo "<td>".$s["dob"]."</p>";
						echo "<td>".$s["credit"]."</p>";
						echo "<td>".$s["cgpa"]."</p>";
                        echo "<td>".$s["dept_name"]."</p>";
                        echo "<td>".$s["dept_id"]."</p>";
						echo '<td><a href="edit_student.php?id='.$s["id"].'"><input type="button" value="Edit"></a></td>';
					echo "</tr>";
					$i++;
						
				}
			?>
			
		</tbody>  
        </table>
    </body>
</html>

