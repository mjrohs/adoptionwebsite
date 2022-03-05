<?php
 include 'DbConnect.php';
 $searchErr = " ";
 $rescue_details = " ";

if (isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $query = $con->prepare("select * from Rescues where breed LIKE '%$search' or sex LIKE '%$search' or age LIKE '%$search' or name LIKE '%$search'");
        $query -> execute();
        $rescue_details = $query -> fetchAll(PDO::FETCH_ASSOC);

    }
    else
    {
        $searchErr = "Please provide a search word.";
    }
}
?>
