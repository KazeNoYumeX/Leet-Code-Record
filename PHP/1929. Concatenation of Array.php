<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection
 *  @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[]  $nums
     * @return int[]
     */
    public function getConcatenation($nums)
    {
        return array_merge($nums, $nums);
    }
}
