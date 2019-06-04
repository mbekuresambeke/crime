	<table class="table-bordered table-striped table-hover">
				<tr>
					<td><?php echo $fname; ?></td>
					<td><?php echo $lname; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $gender; ?></td>
					<td><?php echo $school; ?></td>
					<td><?php echo $village; ?></td>
					<td><?php echo $pocket_money; ?></td>
					<td><?php echo $school_fees ?></td>
					<td><?php echo $transport_fees ?></td>
					<td><?php echo $education_level; ?></td>
					<td><?php echo $start_year; ?></td>
					<td><?php echo $end_year; ?></td>
				</tr>
			</table>

			$_SESSION['lname']=$row['lname'];
								$_SESSION['gender']=$row['gender'];
								/*$_SESSION['school']=$row['school'];
								$_SESSION['village']=$row['village'];
								$_SESSION['pocket_money']=$row['pocket_money'];
								$_SESSION['school_fees']=$row['school_fees'];
								$_SESSION['transport_fees']=$row['transport_fees'];
								$_SESSION['education_level']=$row['$education_level'];
								$_SESSION['start_year']=$row['start_year'];
								$_SESSION['end_year']=$row['end_year'];*/


								$gender=$_SESSION['gender'];
				// $school=$_SESSION['school'];
				// $village=$_SESSION['village'];
				// $pocket_money=$_SESSION['pocket_money'];
				// $school_fees=$_SESSION['school_fees'];
				// $transport_fees=$_SESSION['transport_fees'];
				// $education_level=$_SESSION['education_level'];
				// $start_year=$_SESSION['start_year'];
				// $end_year=$_SESSION['end_year'];

<td><?php echo $gender; ?></td>
					<!-- <td><?php echo $school; ?></td>
					<td><?php echo $village; ?></td>
					<td><?php echo $pocket_money; ?></td>
					<td><?php echo $school_fees ?></td>
					<td><?php echo $transport_fees ?></td>
					<td><?php echo $education_level; ?></td>
					<td><?php echo $start_year; ?></td>
					<td><?php echo $end_year; ?></td> -->