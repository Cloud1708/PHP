<?php

include ("connections.php");

if (empty($_GET["search"])){

    echo"walang laman si GET ...";


}else{

    $check = $_GET["search"];

    $terms = explode(" ", $check);
    $q = "SELECT * FROM myinfo WHERE ";
    $i = 0;


    foreach($terms as $each){

        $i++;

        if($i==1){
            $q .="name LIKE '%$each%' ";
        }else{
            $q .="OR name LIKE '%$each%' ";
        }
    }

    $query = mysqli_query($connections, $q);
    $c_q =mysqli_num_rows($query);


    if($c_q > 0 && $check!=""){

        while($row = mysqli_fetch_assoc($query)){

            $name = $row["name"];
            $address = $row["address"];
            $email = $row["email"];
            $section = $row["section"];
            $contact = $row["ContactNum"];

            echo "Name: " . $name . "<br>";
            echo "Address: " . $address . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Section: " . $section . "<br>";
            echo "Contact: " . $contact . "<br>";
            echo "<hr>";

        }

    }else{

        echo "No result.";

    }

}

?>