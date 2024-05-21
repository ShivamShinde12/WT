<?php
    $user=array(
            array(
            "name"=>"Bhupesh",
            "age"=> 19,
            "city"=>"Taloda",
            "email"=>"bhupeshsuryavanshi2@gmail.com"
            ),

            array(
                "name"=>"Nayan",
                "age"=> 18,
                "city"=>"Taloda",
                "email"=>"nayanmagare20@gmail.com"
            ),

                array(
                    "name"=>"Om",
                    "age"=> 20,
                    "city"=>"Akola",
                    "email"=>"om.nikhade777@gmail.com"
                )

        );
        echo"User information : "."<br>"."</p>";
        

        foreach($user as $value)
        {
            echo"Name :".$value["name"]."<br>";
            echo"Age :".$value["age"]."<br>";
            echo"City :".$value["city"]."<br>";
            echo"E-mail :".$value["email"]."<br>";
            echo"------------------"."<br>";
        }
?>