<!doctype HTML>
<head>
    <title>BMI Handle form</title>
</head>

<body>
<?php
#Assign's user's height and weight into variables
$height =$_POST["height"];
$weight =$_POST["weight"];

#Output user'sheight, weight and calculated BMI

print nl2br("Your height is: $height\n");
print nl2br("Your weight is: $weight\n");

#Calculate the BMI and then output it
$bmi=round($weight/($height*$height));
print nl2br("Your bmi is: $bmi\n");

#if elseif else statement to output weight classifications based on the calculated BMI
if ($bmi <18) {
    print nl2br("Classification: Underweight\n");
}
elseif ($bmi >=18) and $bmi<=25){
    print nl2br("Classification: Normal weight\n");
}
else {
    print nl2br("Classification: overwiert\n");
}


?>


</body>
</html>