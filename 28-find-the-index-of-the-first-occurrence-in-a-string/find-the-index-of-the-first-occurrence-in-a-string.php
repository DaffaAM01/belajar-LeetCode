class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        if ($needle === '') return 0;
        
        $h_len = strlen($haystack);
        $n_len = strlen($needle);

        if ($n_len > $h_len) return -1;

        for ($i = 0; $i <= $h_len - $n_len; $i++) {
            if (substr($haystack, $i, $n_len) === $needle) {
                return $i;
            }
        }
        
        return -1;
    }
}