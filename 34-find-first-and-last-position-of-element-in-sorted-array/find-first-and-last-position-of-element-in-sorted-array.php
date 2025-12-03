class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $findLeftBound = function($nums, $target) {
            $left = 0;
            $right = count($nums) - 1;
            $index = -1;

            while ($left <= $right) {
                $mid = $left + floor(($right - $left) / 2);
                if ($nums[$mid] >= $target) {
                    $right = $mid - 1;
                } else {
                    $left = $mid + 1;
                }
                
                if ($nums[$mid] == $target) $index = $mid;
            }
            return $index;
        };

        $findRightBound = function($nums, $target) {
            $left = 0;
            $right = count($nums) - 1;
            $index = -1;

            while ($left <= $right) {
                $mid = $left + floor(($right - $left) / 2);
                if ($nums[$mid] <= $target) {
                    $left = $mid + 1;
                } else {
                    $right = $mid - 1;
                }
                
                if ($nums[$mid] == $target) $index = $mid;
            }
            return $index;
        };

        return [$findLeftBound($nums, $target), $findRightBound($nums, $target)];
    }
}