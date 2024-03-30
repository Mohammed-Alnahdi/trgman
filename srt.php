<?php
    $host = "localhost";
    $username = "root";
    $password = "Mummy4321";
    $database = "episode_translation_system";

    // Create DB Connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check connection
    #if (!$conn) {
    #    die("Connection failed: " . mysqli_connect_error());
    #}
    #echo "Connected successfully";


if($conn->connect_error){
    die($conn->connect_error);
}

$episode_no = $_POST['episode'];
$language =$_POST['language'];
$inquiry = $conn->query("SELECT $episode_no, `translate_time`, $language as subtitle FROM `episode_translation` WHERE `episode_no` = \"$episode_no\";")->fetch_all(MYSQLI_ASSOC);
$counter = 0;

foreach($inquiry as $line){
    ?>
    <br>
    <br>
   <?php echo ++$counter; ?>
    <br>
    <?php echo $line['translate_time'];?>
    <br>
    &lt;b&gt;<?php echo $line['subtitle'];?></b>&lt;/b&gt;
    <br>
<?php  }
?>
