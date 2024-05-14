<?php
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
header('location:../../Views/Dashboard/MyProfile.php')
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

