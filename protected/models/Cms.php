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

  public static function link($name, $url, $class = "color-icons add_co")
  {
    $link = '
<a href="' . Yii::app()->createUrl($url) . '" class="btn">
<i class="'.$class.'"></i>
' . $name . '
</a>
';

    return $link;
  }

  public static function showMessages(){
    $return = "";
    $flashMessages = Yii::app()->user->getFlashes();
    if ($flashMessages) {
      $return .= '';
      foreach($flashMessages as $key => $message) {
        $return .= '<blockquote class="quote_blue">' . $message . "</blockquote>\n";
      }
      $return .= '';
    }
    return $return;
  }

  public static function setMessage($message, $messageType="error"){
    Yii::app()->user->setFlash($messageType, $message);
  }
}
?>