<?php 

require_once ('../../connection.php');
// 

// 
$title = $_POST['Title'] ;
$description = $_POST['Description'] ;
$query = "INSERT INTO categoris(title , description)  VALUES ('".$title."','".$description."');";
// die($query);
//ko phai cau lenh lay du lieu nen ko can fetch-assoc:
$status = $connection->query($query); //true : neu nhan dk kqua ; false : ko nhan dk du lieu
var_dump($status) ;


if($status == true){
	setcookie('msg', 'Thêm mới thành công' , time()+5);
	//dua toi dau
	header('Location: ADMIN.php');

} else {
	setcookie('msg', 'Thêm mới không thành công ' , time()+5);
	//dua toi dau
	header('Location: category_add1.php');

}


?>