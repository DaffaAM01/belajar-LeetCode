class Solution {

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor) {
        $MAX_INT = 2147483647;
        $MIN_INT = -2147483648;

        if ($dividend === $MIN_INT && $divisor === -1) {
            return $MAX_INT;
        }
        
        $isNegative = ($dividend < 0) !== ($divisor < 0);
        
        $a = abs((float)$dividend);
        $b = abs((float)$divisor);
        
        $quotient = 0;

        while ($a >= $b) {
            $temp = $b;
            $multiple = 1;
            
            while ($a >= ($temp << 1)) {
                $temp <<= 1;
                $multiple <<= 1;
            }
            
            $a -= $temp;
            $quotient += $multiple;
        }

        $quotient = $isNegative ? -$quotient : $quotient;
        
        if ($quotient > $MAX_INT) return $MAX_INT;
        if ($quotient < $MIN_INT) return $MIN_INT;

        return (int)$quotient;
    }
}