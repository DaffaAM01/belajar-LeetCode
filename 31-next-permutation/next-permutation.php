class Solution {
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function nextPermutation(&$nums) {
        $n = count($nums);
        $i = $n - 2;

        while ($i >= 0 && $nums[$i] >= $nums[$i + 1]) $i--;

        if ($i >= 0) {
            $j = $n - 1;
            while ($nums[$j] <= $nums[$i]) $j--;
            $this->swap($nums, $i, $j);
        }

        $this->reverse($nums, $i + 1, $n - 1);
    }
    
    private function swap(&$nums, $i, $j) {
        $temp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $temp;
    }
    
    private function reverse(&$nums, $start, $end) {
        while ($start < $end) {
            $this->swap($nums, $start, $end);
            $start++;
            $end--;
        }
    }
}