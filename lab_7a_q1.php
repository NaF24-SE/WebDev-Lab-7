<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 7a Q1</title> 
</head> 
<body> 
    <?php  
    $name = "Nurain Fatihah Binti Mohd Irman"; 
    $matric_no = "AI250197";
    $year = "2nd year";
    $course = "Bachelor of Software Engineering";
    $address = "Tanjung Minyak, Melaka";

 ?> 
 <table border="1">
 
 <tr> 
 <td>name</td> 
 <td><?php echo "$name"; ?></td> 
 <tr> 
 <td>Matric No</td> 
 <td><?php echo "$matric_no"; ?></td> 
 <tr> 
 <td>Year</td>
 <td><?php echo "$year"; ?></td>
 <tr> 
 <td>Course</td>
 <td><?php echo "$course"; ?></td>
 <tr> 
 <td>address</td>
 <td><?php echo "$address"; ?></td>

 </tr> 
 </table> 
  
</body> 
</html>