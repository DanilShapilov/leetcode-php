<?php

class Solution
{

  /**
   * @param String $s
   * @param String $t
   * @return Boolean
   */
  function isAnagram($s, $t)
  {
    return (count_chars($s, 1) == count_chars($t, 1));
  }

  /**
   * @param String $s
   * @param String $t
   * @return Boolean
   */
  function isAnagramHashMap($s, $t)
  {
    if (mb_strlen($s) !== mb_strlen($t)) {
      return false;
    }
    
    $sArr = mb_str_split($s);
    $tArr = mb_str_split($t);

    $sMap = [];
    $tMap = [];

    for ($i = 0; $i < count($sArr); $i++) {
      if (isset($sMap[$sArr[$i]])) {
        $sMap[$sArr[$i]]++;
      } else {
        $sMap[$sArr[$i]] = 1;
      }

      if (isset($tMap[$tArr[$i]])) {
        $tMap[$tArr[$i]]++;
      } else {
        $tMap[$tArr[$i]] = 1;
      }
    }

    return $sMap == $tMap;
  }
}
