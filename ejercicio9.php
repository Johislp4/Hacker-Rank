<?php
/*HackerLand University has the following grading policy:

Every student receives a grade in the inclusive range from 0 to 100 .
Any grade less than 40 is a failing grade.
Sam is a professor at the university and likes to round each student's grade according to these rules:

If the difference between the grade and the next multiple of 5 is less than 3, round grade up to the next multiple of 5.
If the value of grade is less than 38, no rounding occurs as the result will still be a failing grade.
It should return an integer array consisting of rounded grades.
*/


function gradingStudents($grades)
{
    $arrayRound = [];

    for ($i = 0; $i < count($grades); $i++) {

        $d = 5 - ($grades[$i] % 5);
        $nextMultiple = $grades[$i] + $d;

        if ($grades[$i] < 38) {
            $arrayRound[] = $grades[$i];
        } else {
            if (($nextMultiple - $grades[$i]) < 3) {
                $arrayRound[] = $nextMultiple;

            } else {
                $arrayRound[] = $grades[$i];
            }
        }

    }

    return $arrayRound;

}

