class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    function fourSum($nums, $target) {
        sort($nums);
        $result = [];
        $n = count($nums);

        if ($n < 4) return $result;

        for ($i = 0; $i < $n - 3; $i++) {
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) continue;

            for ($j = $i + 1; $j < $n - 2; $j++) {
                if ($j > $i + 1 && $nums[$j] == $nums[$j - 1]) continue;

                $l = $j + 1;
                $r = $n - 1;

                while ($l < $r) {
                    $sum = (float)$nums[$i] + $nums[$j] + $nums[$l] + $nums[$r];

                    if ($sum == $target) {
                        $result[] = [$nums[$i], $nums[$j], $nums[$l], $nums[$r]];
                        while ($l < $r && $nums[$l] == $nums[$l + 1]) $l++;
                        while ($l < $r && $nums[$r] == $nums[$r - 1]) $r--;
                        $l++;
                        $r--;
                    } elseif ($sum < $target) {
                        $l++;
                    } else {
                        $r--;
                    }
                }
            }
        }

        return $result;
    }
}