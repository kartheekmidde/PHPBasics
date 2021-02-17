<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Functions</title>
</head>
<body>
    <?php
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa) {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if ($this->gpa >= 3.5){
                    return "true";
                } 
                return "false";
            }
        }
        
        $student1 = new Student("Jim", "Business", 3.4);
        $student2 = new Student("Pam", "Arts", 3.5);

        echo $student2->hasHonors();
    ?>
</body>
</html>