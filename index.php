
<?php

for($i=0; $i<=4; $i++){
    echo "Hello World". "<br>";
}

$j = 0;

while($j<=4){
    echo "Hello World". "<br>";
    $j++;
}


$k = 0;

do{
    echo "Hello from do while loop"."<br>";
    $k++;
}

while($k<=4);

$indexArray = [34, 56, 90, 100, 34];

foreach($indexArray as $element){
    echo $element." ";
}


$marks = 90;

if($marks>=80){
    echo "The grade is A+";
}

elseif($marks>=70){
    echo "The grade is A";
}

elseif($marks>=60){
    echo "The grade is A-";
}

elseif($marks>=50){
    echo "The grade is B";
}

elseif($marks>=40){
    echo "The grade is C";
}

elseif($marks>=33){
    echo "The grade is D";
}

else{
    echo "The grade is F";
}


$gradeMarks = [60, 67, 89, 70, 67, 90];

foreach($gradeMarks as $marks){
    if($marks>=80){
        echo "The grade is A+"."<br>";
    }

    
    elseif($marks>=70){
        echo "The grade is A"."<br>";
    }

    elseif($marks>=60){
        echo "The grade is A-"."<br>";
    }

    elseif($marks>=50){
        echo "The grade is B"."<br>";
    }

    elseif($marks>=40){
        echo "The grade is C"."<br>";
    }

    elseif($marks>=33){
        echo "The grade is D"."<br>";
    }

    else{
        echo "The grade is F"."<br>";
    }

}


function showTest(){
    return "Hello world from function!";
}

$result = showTest(); //Hello world from function!

echo $result;
?>