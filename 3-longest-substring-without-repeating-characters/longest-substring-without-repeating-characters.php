class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $n = strlen($s);
        
        if ($n === 0) {
            return 0;
        }

        $left = 0;
        $maxLength = 0;
        $charMap = [];   
        
        for ($right = 0; $right < $n; $right++) {
            $char = $s[$right];

            if (isset($charMap[$char]) && $charMap[$char] >= $left) {
                $left = $charMap[$char] + 1;
            }

            $charMap[$char] = $right;

            $currentLength = $right - $left + 1;
            $maxLength = max($maxLength, $currentLength);
        }
        
        return $maxLength;
    }
}