class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $map = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ]; 
        
        $total = 0;
        $length = strlen($s);

        for ($i = 0; $i < $length; $i++) {
            $value = $map[$s[$i]];
if ($i + 1 < $length && $value < $map[$s[$i + 1]]) {
                $total -= $value;
            } else {
                $total += $value;
            }
        }

        return $total;
    }
}