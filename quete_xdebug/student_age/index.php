<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 22/02/16
 * Time: 10:13
 */

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$ages = [42, 51, 45, 48, 19];

$sum = 0;

for ($i=0; $i<=count($ages); $i++)
{
    $sum += $ages[$i%5];
}

$average = $sum/count($ages);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Compute average student age</title>
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <?php
    foreach ($students as $key=>$value)
    {
        echo "<tr>\n<td>";
        echo $key;
        echo "</td>\n<td>";
        echo $value;
        echo "</td>\n</tr>";
    }
    ?>
</table>

<p>Average age : <?php echo $average; ?></p>

</body>
</html>

