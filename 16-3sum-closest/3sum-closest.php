class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        sort($nums);
        $n = count($nums);
        $closestSum = $nums[0] + $nums[1] + $nums[2];

        for ($i = 0; $i < $n - 2; $i++) {
            $left = $i + 1;
            $right = $n - 1;

            while ($left < $right) {
                $currentSum = $nums[$i] + $nums[$left] + $nums[$right];

                if ($currentSum == $target) return $target;

                if (abs($currentSum - $target) < abs($closestSum - $target)) {
                    $closestSum = $currentSum;
                }
                
                ($currentSum < $target) ? $left++ : $right--;
            }
        }

        return $closestSum;
    }
}