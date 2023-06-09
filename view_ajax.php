<?php
include 'database.php';

	
	$sql = "SELECT * FROM quiz1";
	$result = $conn->query($sql);
	
		
		

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	

        <tr><td><?=$row['id'];?> <?=$row['q'];?></td></tr>
        <tr><td><input type='radio' name='selection' id='a1' value='a'> a. <?=$row['a'];?></td></tr>
        <tr> <td><input type='radio' name='selection' id='b1'  value='b'> b. <?=$row['b'];?></td></tr>
        <tr><td> <input type='radio' name='selection' id='c1' value='c' > c. <?=$row['c'];?></td></tr>
        <tr> <td><input type='radio' name='selection' id='d1'  value='d'> d. <?=$row['d'];?></td></tr>
        <tr  style='visibility:collapse'> <td name='selection1'><?=$row['ans'];?></td></tr>
        <tr style='visibility:collapse'> <td  name='selection2'>  <?=$row['ansval'];?></td></tr>
        <tr> <td><input type='button' onclick='checkans1()'  value='submit'></td>
       
		

		
<?php	
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>
