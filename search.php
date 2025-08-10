<?php

$search = $searchErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["search"])){

        $searchErr = "Required!";

    }else{

        $search = $_POST["search"];

    }

    if($search){

        echo "<script>window.location.href='result.php?search=$search'</script>";

    }


}

?>

<style>
    .error{color:red;}
</style>

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

<input type="text" name="search" value="<?php echo $search; ?>">
<span class="error"><?php echo $searchErr; ?></span>
<br>
<input type="submit" values="search">
   
</form>