<?php 

require_once ('../../connection.php');
///////////////
//load du lieu
$id = $_GET['id'] ;
//load category : load dmuc menu
$query_author = "DELETE FROM `authors` WHERE id =".$id;
// die($query_author);
//vi chi lay dau tien gia tri bang ghi
$status = $connection->query($query_author); 
// true = dele ; false : No dele
// 
if ($status==true){
	//show mess temp vs time = 2
	setcookie('msg' , 'Xóa Thành Công !!!' , time () +2);

}else {
	setcookie('msg' , 'Vui lòng kiểm tra lại, xóa không thành công' , time()+2) ;
}
header('Location: author.php');

 ?>