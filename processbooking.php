<?php
    echo "<h1>Rohirrim Tour Booking Confirmation</h1>";
?>

<?php
    function sanitise_input($data){
        $data = trim($data); #get rid of spaces
        $data = stripslashes($data); #get rid of any  slashes
        $data = htmlspecialchars($data); #takes everything as html codes and will not take any other codes
        return $data;
    }

    // SERVER   METHOD = POST
if ($_SERVER["REQUEST_METHOD"] == "POST"){
     $first_name  = sanitise_input($_POST["firstname"]);
     $last_name   = sanitise_input($_POST["lastname"]);
     $age         = sanitise_input($_POST["age"]);
     $species     = sanitise_input($_POST["species"]);
     $bookings    = isset($_POST["accom"]) ? $_POST["accom"] : [];
     $bookings    = isset($_POST["4day"]) ? $_POST["4day"] : [];
     $bookings    = isset($_POST["10day"]) ? $_POST["10day"] : [];
     $menu     = sanitise_input($_POST["food"]);
     $bookday     = sanitise_input($_POST["bookday"]);
     $party_size  = sanitise_input($_POST["partysize"]);


     echo "<p>Welcome $first_name $last_name !</p>";
     echo "<p> you are now booked on $bookings</p>";
     echo "<p> Species: $species</p>";
     echo "<p>Age: $age</p>";
     echo "<p>Meal Preference: $menu</p>";
     echo "<p>Number of travellers: $party_size</p>";
     
     if (empty($first_name)){
        echo "<p>First Name Is Required!</p>";
     }
          if (empty($last_name)){
        echo "<p>Last Name Is Required!</p>";
     }
          if (empty($age)){
        echo "<p>Age Is Required!</p>";
     }
          if (empty($species)){
        echo "<p>select species!</p>";
     }
          if (empty($bookings)){
        echo "<p>Booking Is Required!</p>";
     }
          if (empty($menu)){
        echo "<p>Menu Is Required!</p>";
     }
          if (empty($bookday)){
        echo "<p>Bookday Is Required!</p>";
     }
          if (empty($party_size)){
        echo "<p>Partysize Is Required!</p>";
     }
}
?>