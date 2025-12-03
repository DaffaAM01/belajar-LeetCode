class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        if (empty($nums)) {
            return 0;
        }

        $i = 0;

        for ($j = 1; $j < count($nums); $j++) {
            if ($nums[$j] !== $nums[$i]) {
                $i++;
                $nums[$i] = $nums[$j];
            }
        }

        return $i + 1;
    }
}