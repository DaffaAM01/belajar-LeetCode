class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
         $n = strlen($s);
        if ($n < 2) {
        return $s;
    }
    $start = 0;
    $maxLength = 1;

    $expand = function($left, $right) use ($s, $n) {
            while ($left >= 0 && $right < $n && $s[$left] === $s[$right]) {
                $left--;
                $right++;
            }
            return [$right - $left - 1, $left + 1];
        };
        $expand = function($left, $right) use ($s, $n) {
            while ($left >= 0 && $right < $n && $s[$left] === $s[$right]) {
                $left--;
                $right++;
            }
            return [$right - $left - 1, $left + 1];
        };
for ($i = 0; $i < $n; $i++) {
            list($len1, $start1) = $expand($i, $i);
            list($len2, $start2) = $expand($i, $i + 1);

            if ($len1 > $maxLength) {
                $maxLength = $len1;
                $start = $start1;
            }
            if ($len2 > $maxLength) {
                $maxLength = $len2;
                $start = $start2;
            }
        }

        return substr($s, $start, $maxLength);
    }
}