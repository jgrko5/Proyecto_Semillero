<?php

function getPaginatedQuery($conn, $query, $page_num, $page_size)
{
	try
	{
		$first = ($page_num -1)*$page_size + 1;	
		$last =$page_num*$page_size;
		$paged_query = "SELECT...$query...";
		$stmt = $conn->prepare($paged_query);
		$stmt->bindParam(':first, $first');
		$stmt->bindParam(':last, $last');
		$stmt->execute();
		return $stmt; 
	}
	catch(PDOException $e)
	{
		echo "se ha producido un error";
	}
}


function totalQuery($conn, $query)
{
	try
	{
		$total_query = "SELECT COUNT(*) AS TOTAL FROM ($query)";
		$stmt = $conn->query($total_query);
		$result = $stmt->fetch();
		$total = $result['TOTAL'];
		return (int)$total;
	}
	catch(PDOException $e)
	{
		echo "se ha producido un error técnico";
	}
}

?>

