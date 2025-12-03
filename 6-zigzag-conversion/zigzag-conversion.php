class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        if ($numRows === 1 || strlen($s) <= $numRows) {
            return $s;
        }

        $rows = array_fill(0, $numRows, "");
        $currentRow = 0;
        $goingDown = false;

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            
            $rows[$currentRow] .= $char;

            if ($currentRow === 0 || $currentRow === $numRows - 1) {
                $goingDown = !$goingDown;
            }

            if ($goingDown) {
                $currentRow++;
            } else {
                $currentRow--;
            }
        }

        return implode("", $rows);
    }
}