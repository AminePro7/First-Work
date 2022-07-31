
<?php 

//We stock the element sin variables
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];



//We declare an errors arrays
$errors = [
    'firstNameError'=>'',
    'lastNameError'=>'',
    'emailError'=>'',
];
//If we click submit,we print them 

if(isset($_POST['submit'])){
//echo $firstName . ' '. $lastName . ' ' . $email;
/*



*/
//firstName Validation
if(empty($firstName)) {
    $errors['firstNameError'] = 'FirstName is Empty';

} 
//lastName Validation
if(empty($lastName)) {
    $errors['lastNameError'] = 'LastName is Empty';
} 
//email Validation
if(empty($email)) {
    $errors['emailError'] = 'Email is Empty';
} 
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'Your mail should be in this form "user@example.com" ';
}


//If we don't have any errors
if(!array_filter($errors)) {
    //If the errors array is empty  +> array_filter($errors)
        //Put all fields as strings


    //To protect our DB , we should let the firstName,lastName and email as strings so ..
 $firstName=mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName=mysqli_real_escape_string($conn, $_POST['lastName']);
$email=mysqli_real_escape_string($conn, $_POST['email']); 


//Then here is the query
    //To collect all infos to the table users
$sql = "INSERT INTO users(firstName,lastName,email) VALUES ('$firstName','$lastName','$email')";

//Then Execute it if true 

if(mysqli_query($conn,$sql)){
   header('Location: ' . $_SERVER['PHP_SELF']);
}
else {    echo 'Error: ' .mysqli_error($conn);
}
}
}
?>