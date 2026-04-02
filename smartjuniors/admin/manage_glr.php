<link rel="stylesheet" href="manage_glr.css">

<?php
include("../includes/db.php");

$query = "SELECT * FROM gallery";
$result = mysqli_query($conn,$query);
?>

<div class="container">

    <h2>🖼️ Manage Gallery</h2>

    <!-- Top Button -->
    <div class="top-bar">
        <a href="../gallery.php" class="gallery-btn">Go to Gallery</a>
    </div>

    <table>

        <tr>
            <th>Image</th>
            <th>Category</th>
            <th>Action</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <td>
                <img src="../uploads/<?php echo $row['image']; ?>">
            </td>

            <td>
                <?php echo $row['category']; ?>
            </td>

            <td>
                <a href="dlt_glr.php?id=<?php echo $row['id']; ?>" 
                   class="delete-btn"
                   onclick="return confirm('Are you sure you want to delete this image?')">
                   Delete
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>
