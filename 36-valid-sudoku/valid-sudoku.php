class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        $rows = [];
        $cols = [];
        $boxes = [];
        $N = 9;

        for ($i = 0; $i < $N; $i++) {
            for ($j = 0; $j < $N; $j++) {
                $val = $board[$i][$j];

                if ($val === '.') continue;

                $box_index = (int)floor($i / 3) * 3 + (int)floor($j / 3);

                if (isset($rows[$i][$val]) || isset($cols[$j][$val]) || isset($boxes[$box_index][$val])) {
                    return false;
                }
                
                $rows[$i][$val] = true;
                $cols[$j][$val] = true;
                $boxes[$box_index][$val] = true;
            }
        }

        return true;
    }
}