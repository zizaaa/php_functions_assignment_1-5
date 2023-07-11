<?php
//1. Create a function that check if a character is a vowel or consonant. (5pts)

    function charChecker($char){
        $char = strtolower($char);
        $vowels = ['a', 'e', 'i', 'o', 'u'];

        if (in_array($char, $vowels)) {
            return 'vowel';
        } else {
            return 'consonant';
        }
    }

    // echo charChecker('e');

//2. Create a function that convert a digit into its word counterpart. E.g. 721 to Seven Two One. (5pts)

    function numConverter($num) {
        $numsArr = array(
            '0' => 'Zero',
            '1' => 'One',
            '2' => 'Two',
            '3' => 'Three',
            '4' => 'Four',
            '5' => 'Five',
            '6' => 'Six',
            '7' => 'Seven',
            '8' => 'Eight',
            '9' => 'Nine',
        );

        $numSplited = str_split($num);
        
        $result = array_map(function ($data) use ($numsArr) {
            return $numsArr[$data];
        }, $numSplited);
    
        echo implode('', $result);
    }

    // numConverter(190);

//3. Create a function that determine if a given number is divisible by 3. (5pts)

    function checker($num){
        if ($num == 3 || ($num % 3 == 0)) {
            echo $num, " is divisible by three.";
        } else {
            echo $num, " is not divisible by three.";
        }
    }

    // checker(2);

//4. Create a function that delete the recurring elements inside a sorted list of strings. (10pts)
    function removeRecurringElements($sortedList){
        $result = array();
        $prevElement = null;

        foreach ($sortedList as $element) {
            if ($element !== $prevElement) {
                $result[] = $element;
                $prevElement = $element;
            }
        }

        return $result;
    }

    $sortedArr = ['heyy', 'heyy', 'heyy', 'yo', 'hello', 'neg'];

    // print_r(removeRecurringElements($sortedArr));

//5. Create a function that determine if the given number is an Armstrong Number. An Armstrong Number is a number such that the sum of the cubes of its digits is equal to the number itself. (15pts)

    function checkerArmstrong($number) {
        $convertToString = (string) $number;
        $length = strlen($convertToString);
        $sum = 0;

        for ($i = 0; $i < $length; $i++) {
            $digit = (int) $convertToString[$i];
            $sum += pow($digit, $length);
        }

        if ($sum === $number) {
            echo "$number is an Armstrong number";
        } else {
            echo "$number is not an Armstrong number";
        }
    }

    // checkerArmstrong(153);
?>