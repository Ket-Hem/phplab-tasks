<?php
/**
 * The $minute variable contains a number from 0 to 59 (i.e. 10 or 25 or 60 etc).
 * Determine in which quarter of an hour the number falls.
 * Return one of the values: "first", "second", "third" and "fourth".
 * Throw InvalidArgumentException if $minute is negative of greater then 60.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  int  $minute
 * @return string
 * @throws InvalidArgumentException
 */
function getMinuteQuarter(int $minute=0)
{
    if ($minute >=45 && $minute <= 59 || $minute == 0) {
        $answer = "fourth";
    }elseif ($minute >= 30 && $minute < 45){
        $answer = "third";
    }elseif ($minute >= 15 && $minute < 30){
        $answer = "second";
    }elseif($minute > 0 && $minute < 15){
        $answer = "first";
    }else{
        throw new InvalidArgumentException("The number: {$minute} - is out of minutes limit");
    }
    return("The second <b>$minute</b> belong to <b>$answer</b> quarter.");
}
echo getMinuteQuarter(17);


/**
 * The $year variable contains a year (i.e. 1995 or 2020 etc).
 * Return true if the year is Leap or false otherwise.
 * Throw InvalidArgumentException if $year is lower then 1900.
 * @see https://en.wikipedia.org/wiki/Leap_year
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  int  $year
 * @return boolean
 * @throws InvalidArgumentException
 */
function isLeapYear(int $year)
{
    $feb = cal_days_in_month(CAL_GREGORIAN, 2, $year);

    if ($feb == 29) {
        return TRUE;
    } else {
        throw new InvalidArgumentException("$year - is not leap year");
    }
}

/**
 * The $input variable contains a string of six digits (like '123456' or '385934').
 * Return true if the sum of the first three digits is equal with the sum of last three ones
 * (i.e. in first case 1+2+3 not equal with 4+5+6 - need to return false).
 * Throw InvalidArgumentException if $input contains more then 6 digits.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  string  $input
 * @return boolean
 * @throws InvalidArgumentException
 */
function isSumEqual(string $input)
{
    

}