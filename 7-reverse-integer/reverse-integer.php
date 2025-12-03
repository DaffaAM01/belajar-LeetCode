class Solution {
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $reversed = 0;
        
        // Batas integer 32-bit
        $MAX_LIMIT = 2147483647; 
        $MIN_LIMIT = -2147483648;

        while ($x != 0) {
            $digit = $x % 10;
            $x = intdiv($x, 10); 
            
            // Cek Overflow
            if ($reversed > intdiv($MAX_LIMIT, 10) || 
                ($reversed == intdiv($MAX_LIMIT, 10) && $digit > 7)
            ) {
                return 0;
            }
            
            if ($reversed < intdiv($MIN_LIMIT, 10) || 
                ($reversed == intdiv($MIN_LIMIT, 10) && $digit < -8)
            ) {
                return 0;
            }

            $reversed = $reversed * 10 + $digit;
        }

        return $reversed;
    }
}