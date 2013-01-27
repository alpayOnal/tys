<?php

/**
 *
 * @author Hasan
 */
class Cms
{
  // TODO - Insert your code here
  /**
   */
  private function __construct()
  {
    // TODO - Insert your code here
  }

  public static function link($name, $url, $type = "")
  {
    switch($type){
      //
    }
    $link = '
<a href="' . Yii::app()->request->baseUrl.$url . '" class="btn">
<i class="color-icons add_co"></i>
' . $name . '
</a>
';

    return $link;
  }
}
?>