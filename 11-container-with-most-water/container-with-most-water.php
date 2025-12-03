class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $left = 0;
        $right = count($height) - 1;
        $maxArea = 0;

        while ($left < $right) {
            // tinggi ditentukan oleh yang lebih pendek
            $h = min($height[$left], $height[$right]);

            // lebar = jarak antara dua pointer
            $w = $right - $left;

            // hitung area
            $maxArea = max($maxArea, $h * $w);

            // geser pointer yang lebih pendek
            if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }

        return $maxArea;
    }
}