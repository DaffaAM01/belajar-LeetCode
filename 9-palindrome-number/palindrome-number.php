class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }

        $reversedHalf = 0;
        
        while ($x > $reversedHalf) {
            $digit = $x % 10;
            $reversedHalf = $reversedHalf * 10 + $digit;
            $x = intdiv($x, 10);
        }

        return $x == $reversedHalf || $x == intdiv($reversedHalf, 10);
    }
}