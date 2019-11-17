<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["type"])) {
    $query = "SELECT * FROM property_type WHERE type = '" . $_POST["type"] . "' order by type asc";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Select Sub Type</option>
<?php
    foreach ($results as $country) {
        ?>
<option value="<?php echo $country["sub_type"]; ?>"><?php echo $country["sub_type"];  ?></option>
<?php
    }
}
?>