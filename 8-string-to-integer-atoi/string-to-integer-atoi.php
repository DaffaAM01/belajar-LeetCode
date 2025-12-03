class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $s = trim($s);
        
        if (empty($s)) {
            return 0;
        }

        $i = 0;
        $sign = 1;
        
        $MAX_LIMIT = 2147483647;
        $MIN_LIMIT = -2147483648;

        if ($s[0] === '-') {
            $sign = -1;
            $i++;
        } elseif ($s[0] === '+') {
            $i++;
        }

        $result = 0;
        $n = strlen($s);

        while ($i < $n) {
            $char = $s[$i];
            
            if ($char < '0' || $char > '9') {
                break;
            }
            
            $digit = (int)$char;

            $limitCheck = intdiv($MAX_LIMIT, 10);

            if ($sign === 1) {
                if ($result > $limitCheck || ($result === $limitCheck && $digit > 7)) {
                    return $MAX_LIMIT;
                }
            } else {
                // Untuk MIN_LIMIT (-2147483648), kita cek jika digit > 8
                if ($result > $limitCheck || ($result === $limitCheck && $digit > 8)) {
                    return $MIN_LIMIT;
                }
            }
            
            $result = $result * 10 + $digit;
            $i++;
        }

        return $result * $sign;
    }
}