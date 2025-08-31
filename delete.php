<?php
include 'Connection.php';
$id=$_GET['id'];
$query ="DELETE FROM student WHERE ID='$id'";
$data=mysqli_query($con,$query);

if($data) {
?>

<script type="text/javascrit">
    alert("Data Deleted Successfully");
    window.open("http://localhost/CURD1/view.php","_self");
</script>

<?php
}
else{
    ?>
    <script type="text/javascript">
        alert("Please try again");
    </script>
    <?php
}
?>