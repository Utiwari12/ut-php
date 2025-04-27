<?php



// class Students {

//     // function login(){
//     //     echo "Student Login successful";
//     // }
// }

// class Teachers {
//     // function login(){
//     //     echo "Teacher1 Login successful";
//     // }

//     function logout(){
//         echo "Teacher1 Logout successful";
//     }
// }

// $student1 = new Students();
// //$student1->login();

// echo "<br>";
// $teacher1 = new Teachers();
// //$teacher1->login();
// echo "<br>";
// $teacher1->logout();
?>

<!-- Combining above code in another way -->

<?php
class UserAuth {
    function login($username, $password){
        echo "User Name is $username and his password is $password Login successful";
    }

    function logout($username, $password){
        echo "$username and $password is Logout successful";
    }
}

class Students extends UserAuth {
   function getSkills(){
       echo "Student has HTML and CSS skills";
   }
}

class Teachers extends UserAuth {
    function getSkills(){
        echo "Teacher has Python and PHP skills";
    }
}
    

$student1 = new Students();
$student1->login("Mohan", "admin");

echo "<br>";
$teacher1 = new Teachers();
$teacher1->login("Sohan", "admin");
echo "<br>";
$teacher1->logout("Sohan", "admin");
echo "<br>";
$teacher1->getSkills();
echo "<br>";
$student1->getSkills();
?>
