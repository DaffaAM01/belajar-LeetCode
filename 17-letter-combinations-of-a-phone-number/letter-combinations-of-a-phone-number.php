class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        if (empty($digits)) {
            return [];
        }

        $mapping = [
            '2' => 'abc', '3' => 'def', '4' => 'ghi',
            '5' => 'jkl', '6' => 'mno', '7' => 'pqrs',
            '8' => 'tuv', '9' => 'wxyz'
        ];

        $result = [];
        $n = strlen($digits);

        $backtrack = function($index, $currentCombination) use (&$backtrack, $mapping, $digits, $n, &$result) {
            if ($index == $n) {
                $result[] = $currentCombination;
                return;
            }

            $letters = $mapping[$digits[$index]];

            for ($i = 0; $i < strlen($letters); $i++) {
                $backtrack($index + 1, $currentCombination . $letters[$i]);
            }
        };

        $backtrack(0, "");

        return $result;
    }
}