<?php
include_once('connection.php');
$query = 'SELECT * FROM voters';
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table Foam</title>
</head>
<body bgcolor="pink">

<table width="900" border="1" align="center" bordercolor="black" width="618"height="80" bgcolor="white">
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Id_Card</th>
					<th>Image</th>
					<th colspan="2">Actions</th>
					<th>Total Votes</th>
				</tr>	


				<?php
$counter = 0;
while ($row = mysqli_fetch_array($result)) {                    //returns array of string

    $name = $row['Name'];
    $address = $row['Address'];
    $id_card = $row['Id_Card'];
    $img = $row['Image'];

    
?>
    </tr>
    <tr bgcolor="yellow">
        <b>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Address']; ?></td>
        <td><?php echo $row['Id_Card']; ?></td>
        <td align="center"><img style="border-radius=30px" align="center" width="100" src="images/<?php echo $img;?>" alt="Image Not found"></td>
        
        <td><input type="button" name="delete" value="Delete" style="width:100px;"></td>
        <td><input type="button" name="edit" value="Edit" style="width:100px;"></td> 
	<td><?php echo "Total Votes"; ?></td>
        
        </b>
    </tr>
    <?php
    $counter++;
    }
    ?>
    

</table>
</body>
</html>