<?php
$myBool = True;
$myInt = 3;
$myStr = "deux";
$myFloat = 1.0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>     
    </header>
        <main>
            <!-- <tbody>
            <tr>
                             
                <th scope="row">gettype($myBool)</th>;
                <td>$myBool</td>
                <td>echo $myBool</td>;
            </tr>
                <th scope="row">gettype($myInt)</th>;
                <td>$myInt</td>;
                <td>echo $myInt</td>;
                <th scope="row">gettype($myStr)</th>;
                <td>$myStr</td>;
                <td>echo $myStr</td>;
                <th scope="row">gettype($myFloat)</th>;
                <td>$myFloat</td>;
                <td>echo $myFloat</td>;
        
            </tr>             
   -->
 <table>
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">type</th>
      <th scope="col">valeur</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">$myBool </th>
      <td><?php echo gettype($myBool)  ?></td>
      <td><?php echo $myBool ?></td>
    </tr>
    <tr>
      <th scope="row">$myInt</th>
      <td><?php echo gettype($myInt) ?></td>
      <td><?php echo ($myInt) ?></td>
    </tr>
    <tr>
      <th scope="row">$myStr</th>
      <td><?php echo gettype($myStr) ?></td>
      <td><?php echo ($myStr) ?></td>
    </tr>
    <tr>
      <th scope="row">$myFloat</th>
      <td><?php gettype($myFloat) ?></td>
      <td><?php echo ($myFloat) ?></td>
    </tr>
  </tbody>
</table>
        </main>
    <footer>
</footer>    
</body>
</html>