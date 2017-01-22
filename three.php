<!DOCTYPE html>
<html lang="en">
<?php
	
	include('inc/connect.php');
	include('inc/header.php');
	include('inc/functions.php');
?>
<style type="text/css">
	p{
		text-align: justify;
	}
</style>

<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div class="row">
							<div class="12u">
								<div class="content">

									<!-- Content -->
										<section class="box features">
											<h2 class="major"><span>300 LEVEL</span></h2>
							<p><strong>FIRST SEMESTER<strong></p>
						
						<div class="table-responsive">
							<table border="8">
								<tr>
									<td>N.o.</td>
									<td>COURSES</td>
									<td>TITLE</td>
									<td>CREDIT UNIT</td>
								</tr>
								<?php

									$query_courses_first_semester="SELECT * FROM courses WHERE semester='first' AND level='three' ";
			 		                                $result_first_semester=mysql_query($query_courses_first_semester,$connection);
			 		                                $counter_table_sn=1;
			 		                                $total_sum_credit_unit=0;
			 		                                while($row=mysql_fetch_assoc($result_first_semester)){
			 		                                		echo "<tr ><td>".$counter_table_sn."</td><td>".$row['course_title']."</td><td> ".$row['course_code']."</td><td>".$row['credit_units']."</td></tr>";
			 		                                		$counter_table_sn++;
			 		                                		$total_sum_credit_unit=$total_sum_credit_unit+$row['credit_units'];
			 		                                }

								?>
								
								<tr>
									<td></td>
									<td></td>
									<td>Total</td>
									<td><?php echo $total_sum_credit_unit; ?></td>
								</tr>
							</table>
							
							<p><strong>SECOND SEMESTER<strong></p>
						
						<div class="table-responsive">
							<table border="8">
								<tr>
									<td>N.o.</td>
									<td>COURSES</td>
									<td>TITLE</td>
									<td>CREDIT UNIT</td>
								</tr>
								<?php

									$query_courses_second_semester="SELECT * FROM courses WHERE semester='second' AND level='three' ";
			 		                                $result_second_semester=mysql_query($query_courses_second_semester,$connection);
			 		                                $counter_table_sn=1;
			 		                                $total_sum_credit_unit=0;
			 		                                while($row=mysql_fetch_assoc($result_second_semester)){
			 		                                		echo "<tr ><td>".$counter_table_sn."</td><td>".$row['course_title']."</td><td> ".$row['course_code']."</td><td>".$row['credit_units']."</td></tr>";
			 		                                		$counter_table_sn++;
			 		                                		$total_sum_credit_unit=$total_sum_credit_unit+$row['credit_units'];
			 		                                }

								?>
								<tr>
									<td></td>
									<td></td>
									<td>Total</td>
									<td><?php echo $total_sum_credit_unit; ?></td>
								</tr>
							</table>
							</section>
			</section>
							
						</div>
					</div>
				</div>
						
						<div class="row 200%">
							<div class="12u">
		<!-- Features -->
									
					</div>
				</div>

</body>
<?php
	include('inc/footer2.php');
?>
</html>