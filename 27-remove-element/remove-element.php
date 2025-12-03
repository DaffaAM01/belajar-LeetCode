class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        if (empty($nums)) {
            return 0;
        }

        $i = 0;

        for ($j = 0; $j < count($nums); $j++) {
            if ($nums[$j] !== $val) {
                $nums[$i] = $nums[$j];
                $i++;
            }
        }

        return $i;
    }
}