<?php require_once('web/condb.php');

	$query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
	$result_type =mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
		// echo($query_type);
		// exit()

?>

<div class="list-group"> 
	<?php //วนลูบสั้นและง่ายดี
		foreach ($result_type as $row )  { ?> 

		 <a href="index.php?act=showbytype&type_id=<?php echo $row['type_id'];?>" class="list-group-item list-group-item-primary"> 
		 	<?php echo $row["type_name"]; ?></a>

	<?php } ?>                      
</div>