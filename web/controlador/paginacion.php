<?php
include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");

$conexion = conectar();

function paginatedQuery($conn, $query, $page_num, $page_size)
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

<?php
$page_num = isset( $_GET[ "page_num" ])
		  ? (int)$_GET[ "page_num" ] : 1;
		  
$page_size = isset( $_GET[ "page_size" ])
		  ? (int)$_GET[ "page_size" ] : 10;
		  
if( $page_num <1) $page_num = 1;
if( $page_size <1) $page_size = 10;		  
		  
?>

<?php
$total = totalQuery($conn, $query);
$total_pages = ( $total / $page_size);


if( $total % $page_size > 0)
	$total_pages++;

if( $page_num > $total_pages )
	$page_num = 1;

?>


<?php
for ($page = 1; $page <= $total_pages; $page++)
{ 
	if( $page == $page_num )
	{
?>
	
	<span class="current"><?=$page?></span>	
<?php	
	}
	else 	{
?>	
	<a href="listaEstudiante.php=<?=$page?>&
	page_size=<?=page?></a>

<?php		
	}	
}
?>
?>