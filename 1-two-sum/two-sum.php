class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];

        foreach ($nums as $i => $num) {
            $selisih = $target - $num;

            if (isset($map[$selisih])) {
                // kembalikan index pasangan
                return [$map[$selisih], $i];
            }

            // simpan nilai dan indexnya
            $map[$num] = $i;
        }
        return [];
    }
}