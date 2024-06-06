<?php
session_start();
$id =$_SESSION['id'];

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
if(true){

  if($_SERVER['REQUEST_METHOD']=='POST'){
  
    $name = $_FILES['img']['name'];
    $type = $_FILES['img']['type'];
    $tmp_name =$_FILES['img']['tmp_name'];
    $error =$_FILES['img']['error'];
    $size = $_FILES['img']['size'];
    
    $arraypic= explode(".",$name);
    $count =count($arraypic);
    $count--;
    
    $picExti = $arraypic["$count"];
    
    array_pop($arraypic);
    $imgnewname = implode(".",$arraypic) ;
    $imgnewname .= time();
    
    $imgnewname .="."."$picExti";
    
    $theDocumentRoot =$_SERVER['DOCUMENT_ROOT'];
    
    //http://localhost:3000/Controllers/Registration/addpict.php
    move_uploaded_file($tmp_name,$theDocumentRoot."\Controllers\Registration\img\\". $imgnewname);
    include "connect.php";
    $query1 ="UPDATE employee SET imgname = '$imgnewname' WHERE id ='$id'";
    $result1=$conn->query($query1);
    var_dump($result1);
    
  
  }



}

header('location:../../Views/Dashboard/MyProfile.php');




//-------------------------------------------------------
// if($_SERVER['REQUEST_METHOD']=='post'){
// $name = $_FILES['pict']['name']."<br>";
// $type = $_FILES['pict']['type']."<br>";
// $tmp_name = $_FILES['pict']['tmp_name']."<br>";
// $error = $_FILES['pict']['error']."<br>";
// $size = $_FILES['pict']['size']."<br>";
// copy($tmp_name,$name);
// var_dump(end($_FILE['pict']));
 // سيقوم بطباعة "blue" لأنها آخر قيمة في المصفوفة
// }
// $name .=$size;
// move_uploaded_file($tmp_name,'img\\'.$name);

//REQUEST_METHOD
// echo "hi";
// print_r($_FILES);
// print_r($_SERVER);

// print_r($_FILES['pict']);
?>
<?php
// if(isset($_POST['submit'])){
//     $file = $_FILES['file'];
    
//     $fileName = $file['name'];
//     $fileTmpName = $file['tmp_name'];
//     $fileSize = $file['size'];
//     $fileError = $file['error'];
    
//     $fileExt = explode('.', $fileName);
//     $fileActualExt = strtolower(end($fileExt));
    
//     $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
//     if(in_array($fileActualExt, $allowed)){
//         if($fileError === 0){
//             $fileNameNew = uniqid('', true) . "." . $fileActualExt;
//             $fileDestination = 'uploads/' . $fileNameNew;
//             move_uploaded_file($fileTmpName, $fileDestination);
//             echo "File uploaded successfully!";
//         } else {
//             echo "There was an error uploading your file.";
//         }
//     } else {
//         echo "You cannot upload files of this type.";
//     }
// }
?>

