/*Create a webpage that allows the user to enter a password two times in order to validate it. Web
page content:
• Two password fields
o first to enter the password and a second to verify it
• A button labelled "Validate" that alerts one of the following messages:
o Display informative error message if any of the following occur:
▪ the passwords entered don't match
▪ the passwords are not at least 8 characters long
*/
<?php
echo "<table>";
for ($i = 0; $i <= 100; $i++)
{
  echo "<tr>";
  for ($j = 0; $j <= 100; $j++)
    {
    if ($i == 0){
      if ($j == 0){
          echo "<td></td>";
        }
        else{
           echo "<td>"$j"</td>";
        }
        }else{
            if ($j == 0){
              echo "<td>"$i"</td>";
            }
            else{
              echo "<td>"$i*$j"</td>";
            }
        }
    }
    echo "</tr>";
}
?>
