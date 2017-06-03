<html>
<body>
Login Successful

<?php
session_start();
//if(!session_is_registered("myusername")){
header("location:indexadmin.php");
//}
?>

</body>
</html>
