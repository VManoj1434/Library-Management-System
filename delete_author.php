<?php
   
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection,"keety");
        $query ="DELETE FROM author WHERE author_id ='$_GET[aid]'";
        $query_run=mysqli_query($connection,$query);
        

?>
<script type="text/javascript">
    alert("author Deleted...")
    window.location.href="manage_author.php";
</script>