<?php
include("../includes/db.php");

if(isset($_POST['upload'])){

    $category = $_POST['category'];

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size']; // ✅ ADD THIS

    // detect type automatically
    if(strpos($file_type, 'image') !== false){
        $type = "image";
    } 
    elseif(strpos($file_type, 'video') !== false){
        $type = "video";
    } 
    else {
        echo "<script>
            alert('❌ Invalid file type! Only JPG, PNG, MP4 allowed.');
            window.history.back();
        </script>";
        exit;
    }

    // ✅ ADD VIDEO SIZE CHECK HERE
    $max_video_size = 10 * 1024 * 1024; // 10MB

    if($type == "video" && $file_size > $max_video_size){
        echo "<script>
            alert('❌ Video too large! Max 30 sec / 10MB allowed.');
            window.history.back();
        </script>";
        exit;
    }

    $folder = "../uploads/".$file_name;

    // upload file
    if(move_uploaded_file($file_tmp, $folder)){

        $query = "INSERT INTO gallery (image, category, type) 
                  VALUES ('$file_name', '$category', '$type')";

        mysqli_query($conn, $query);

        header("Location: ../gallery.php");
    } else {
        echo "<script>
            alert('❌ Upload failed!');
            window.history.back();
        </script>";
    }
}
?>
