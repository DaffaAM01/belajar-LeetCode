class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
       $result = [];

        $backtrack = function ($openCount, $closeCount, $currentString) use (&$backtrack, $n, &$result) {
            if ($openCount == $n && $closeCount == $n) {
                $result[] = $currentString;
                return;
            }

            if ($openCount < $n) {
                $backtrack($openCount + 1, $closeCount, $currentString . '(');
            }

            if ($closeCount < $openCount) {
                $backtrack($openCount, $closeCount + 1, $currentString . ')');
            }
        };

        $backtrack(0, 0, "");

        return $result; 
    }
}