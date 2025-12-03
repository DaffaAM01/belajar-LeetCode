class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $map = [
            ')' => '(',
            '}' => '{',
            ']' => '[',
        ];
        
        $stack = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            
            if (isset($map[$char])) {
                $topElement = empty($stack) ? '#' : array_pop($stack);
                
                if ($topElement !== $map[$char]) {
                    return false;
                }
            } else {
                array_push($stack, $char);
            }
        }
        
        return empty($stack);
    }
}