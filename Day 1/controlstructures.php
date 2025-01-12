<html>
    <body>
        <?php
            //Control Structures
            // $name = "Rishika";
            // if($name == "Saba"){
            //     echo $name." Name is Correct";
            // }
            // else{
            //     echo $name." Name is not Correct";
            // }
            
            //Conditional Statement if---elseif---if---else
            $marks = 91;

            if($marks >= 80){
                echo "<br> You got Grade A";
            }
            elseif($marks >= 60){
                echo "<br> You got Grace B";
            }
            elseif($marks >= 40){
                echo "<br> You got Grade C";
            }
            else{
                echo "<br> You got Grade D";
            }
            
            //Conditional Statement Switch
            echo "<br>";

            $day = "Sunday";
            switch($day){
                case "Sunday":
                    echo "Its Sunday !!!";
                    break;
                case "Monday":
                    echo "Its Monday !!!";
                    break;
                case "Tuesday":
                    echo "Its Tuesday !!!";
                    break;
                case "Wednesday":
                    echo "Its Wednesday !!!";
                    break;
                case "Thursday":
                    echo "Its Thursday !!!";
                    break;
                default:
                    echo "No matching day found !!";
            }

            //Iteratic Control Structures while loop
            echo "<br>"; 
            
            $count = 1;
            while($count <= 10){
                echo "<br> Count is ". $count;
                $count++;
            }

            //Iteratic Control Structures do while loop
            echo "<br>";
            $num = 1;
            do{
                echo " <br> Do While Number is". $num;
                $num ++;
            }
            while($num <= 3);

            //Iteratic Control Structures for loop
            echo "<br>";
            for($i=1; $i<=3; $i++){
                echo "<br> for loop number :". $i;
            }

            //Iteratic Control Structures foreach loop
            echo "<br>";
            $array = ["Red", "Green", "Blue", "Yellow", "Pink"];
            foreach($array as $color){
                echo "<br> Color :". $color;
            }
        ?>
    </body>
</html>