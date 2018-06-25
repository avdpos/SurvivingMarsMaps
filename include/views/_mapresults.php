<?php
include 'include/moduls/dbconnection.php';

$terrain        =   mysqli_real_escape_string($conn, $_SESSION["terrain"]);
$metals         =   mysqli_real_escape_string($conn, $_SESSION["metals"]);
$concrete       =   mysqli_real_escape_string($conn, $_SESSION["concrete"]);
$water          =   mysqli_real_escape_string($conn, $_SESSION["water"]);
$dust_devils    =   mysqli_real_escape_string($conn, $_SESSION["dust_devils"]);
$dust_storms    =   mysqli_real_escape_string($conn, $_SESSION["dust_storms"]);
$meteors        =   mysqli_real_escape_string($conn, $_SESSION["meteors"]);
$cold_waves     =   mysqli_real_escape_string($conn, $_SESSION["cold_waves"]);
$resource_min   =   mysqli_real_escape_string($conn, $_SESSION["resource_min"]);
$resource_max   =   mysqli_real_escape_string($conn, $_SESSION["resource_max"]);
$threat_min     =   mysqli_real_escape_string($conn, $_SESSION["threat_min"]);
$threat_max     =   mysqli_real_escape_string($conn, $_SESSION["threat_max"]);

//skapa sql-sats
$sql    =   "SELECT * FROM mapdata WHERE Location NOT LIKE 'earth'";

//if-satser för att se till att enbart saker med input används i sökningen.
// 0 = no input. Was easiest that way to manage with javascript

if ($terrain != "0")
{
    $sql .= " AND Terrain LIKE '$terrain'";
}
if  ($metals != "0")
{
    $sql .= " AND Metals LIKE $metals";
}
if ($concrete != "0")
{
    $sql .= " AND Concrete LIKE $concrete";
}
if  ($water != "0")
{
    $sql .= " AND Water LIKE $water";
}
if ($dust_devils != "0")
{
    $sql .= " AND Dust_Devils LIKE $dust_devils";
}
if ($dust_storms != "0")
{
    $sql .= " AND Dust_Storms LIKE $dust_storms";
}
if ($meteors != "0")
{
    $sql .= " AND Meteors LIKE $meteors";
}
if ($cold_waves != "0")
{
    $sql .= " AND Cold_Waves LIKE $cold_waves";
}
if ($resource_min != "0")
{
    $sql .= " AND Resource_Total >= $resource_min";
}
if ($resource_max != "0")
{
    $sql .= " AND Resource_Total <= $resource_max";
}
if ($threat_min != "0")
{
    $sql .= " AND Threat_Total >= $threat_min";
}
if ($threat_max != "0")
{
    $sql .= " AND Threat_Total <= $threat_max";
}

echo ($sql);
//hämta resultatet från databasen
$result = $conn -> query($sql);
//spotta ut en tabell
echo ("
    <table class='table table-hover table-bordered'>
        <thead>
            <tr>
                <th>Location</th>
                <th>Terrain</th>
                <th>Metals</th>
                <th>Concrete</th>
                <th>Water</th>
                <th>Dust devils</th>
                <th>Dust storms</th>
                <th>Meteors</th>
                <th>Cold waves</th>
        </thead>
        <tbody>");

while ($row = $result -> fetch_assoc())
    {
        echo ("<tr>
                <td>" . $row["Location"]    .   "</td>
                <td>" . $row["Terrain"]     .   "</td>
                <td>" . $row["Metals"]      .   "</td>
                <td>" . $row["Concrete"]    .   "</td>
                <td>" . $row["Water"]       .   "</td>
                <td>" . $row["Dust_Devils"] .   "</td>
                <td>" . $row["Dust_Storms"] .   "</td>
                <td>" . $row["Meteors"]     .   "</td>
                <td>" . $row["Cold_Waves"]  .   "</td>
            </tr>");
    }
echo (" </tbody>
    </table>");
?>
