<html>
<head>
<title>Updated List</title>
</head>
<?php
include 'edit_header.html';
?>

<?php
$first_1 = $_POST['first_1'];
$last_1 = $_POST['last_1'];
$first_2 = $_POST['first_2'];
$last_2 = $_POST['last_2'];
$first_3 = $_POST['first_3'];
$last_3 = $_POST['last_3'];
$first_4 = $_POST['first_4'];
$last_4 = $_POST['last_4'];
$first_5 = $_POST['first_5'];
$last_5 = $_POST['last_5'];
$first_6 = $_POST['first_6'];
$last_6 = $_POST['last_6'];
$first_7 = $_POST['first_7'];
$last_7 = $_POST['last_7'];
$first_8 = $_POST['first_8'];
$last_8 = $_POST['last_8'];
$first_9 = $_POST['first_9'];
$last_9 = $_POST['last_9'];
$first_10 = $_POST['first_10'];
$last_10 = $_POST['last_10'];
$first_11 = $_POST['first_11'];
$last_11 = $_POST['last_11'];
$first_12 = $_POST['first_12'];
$last_12 = $_POST['last_12'];
$first_13 = $_POST['first_13'];
$last_13 = $_POST['last_13'];
$first_14 = $_POST['first_14'];
$last_14 = $_POST['last_14'];
$first_15 = $_POST['first_15'];
$last_15 = $_POST['last_15'];
$first_16 = $_POST['first_16'];
$last_16 = $_POST['last_16'];
$first_17 = $_POST['first_17'];
$last_17 = $_POST['last_17'];



$connection = mysql_connect("localhost","root","sql4root") or die(mysql_error());
$db_name = "tx10isofficials";
$db = @mysql_select_db($db_name,$connection) or die(mysql_error);
$sql = "update test_instructors set first = '" .$first_1. "', last = '" .$last_1. "' where id = 1;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_2. "', last = '" .$last_2. "' where id = 2;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_3. "', last = '" .$last_3. "' where id = 3;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_4. "', last = '" .$last_4. "' where id = 4;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_5. "', last = '" .$last_5. "' where id = 5;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_6. "', last = '" .$last_6. "' where id = 6;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_7. "', last = '" .$last_7. "' where id = 7;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_8. "', last = '" .$last_8. "' where id = 8;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_9. "', last = '" .$last_9. "' where id = 9;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_10. "', last = '" .$last_10. "' where id = 10;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_11. "', last = '" .$last_11. "' where id = 11;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_12. "', last = '" .$last_12. "' where id = 12;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_13. "', last = '" .$last_13. "' where id = 13;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_14. "', last = '" .$last_14. "' where id = 14;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_15. "', last = '" .$last_15. "' where id = 15;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_16. "', last = '" .$last_16. "' where id = 16;";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$sql = "update test_instructors set first = '" .$first_17. "', last = '" .$last_17. "' where id = 17;";
$result = @mysql_query($sql,$connection) or die(mysql_error());

?>

<br><br>
		<table border=1>
			<tr>
				<td align="left">First Name</td>	
				<td align="left">Last Name</td>
			</tr>
		<?php
			echo "<tr><td>";
			echo $first_1;
			echo "</td><td>";
			echo $last_1;
			echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_2;
                        echo "</td><td>";
                        echo $last_2;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_3;
                        echo "</td><td>";
                        echo $last_3;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_4;
                        echo "</td><td>";
                        echo $last_4;
                        echo "</td></tr>";                        
			echo "<tr><td>";
                        echo $first_5;
                        echo "</td><td>";
                        echo $last_5;
                        echo "</td></tr>";                        
			echo "<tr><td>";
                        echo $first_6;
                        echo "</td><td>";
                        echo $last_6;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_7;
                        echo "</td><td>";
                        echo $last_7;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_8;
                        echo "</td><td>";
                        echo $last_8;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_9;
                        echo "</td><td>";
                        echo $last_9;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_10;
                        echo "</td><td>";
                        echo $last_10;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_11;
                        echo "</td><td>";
                        echo $last_11;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_12;
                        echo "</td><td>";
                        echo $last_12;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_13;
                        echo "</td><td>";
                        echo $last_13;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_14;
                        echo "</td><td>";
                        echo $last_14;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_15;
                        echo "</td><td>";
                        echo $last_15;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_16;
                        echo "</td><td>";
                        echo $last_16;
                        echo "</td></tr>";
                        echo "<tr><td>";
                        echo $first_17;
                        echo "</td><td>";
                        echo $last_17;
                        echo "</td></tr>";
?>
		</table>
<br><br>
<a href="http://www.tx10isofficials.com/edit_instructors.php">Return to edit instructors page</a>
</body>
</html>
