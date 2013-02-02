<?php
Yii::import('CButtonColumn');
class GridButton extends CButtonColumn
{


  protected function renderButton($id,$button,$row,$data)
  {
    if (isset($button['visible']) && !$this->evaluateExpression($button['visible'],array('row'=>$row,'data'=>$data)))
      return;
    $label=isset($button['label']) ? $button['label'] : $id;
    $url=isset($button['url']) ? $this->evaluateExpression($button['url'],array('data'=>$data,'row'=>$row)) : '#';
    $options=isset($button['options']) ? $button['options'] : array();
    if(!isset($options['title']))
      $options['title']=$label;    $linkid = isset($options['id']) ? ' id="'.$options['id'].'" ' : '';

    if(isset($button['imageUrl']) && is_string($button['imageUrl']))
      echo CHtml::link(CHtml::image($button['imageUrl'],$label),$url,$options);
    elseif(isset($button['iclass'])){
      echo '<a '.$linkid.'class="'.$options['class'].'" href="'.$url.'">
          <i class="'.$button['iclass'].'"></i>'.$button['label'].'</a>&nbsp;';
        //echo CHtml::link('<i class="'.$button['iclass'].'">',$url,$options);
      }else
      echo CHtml::link($label,$url,$options);
  }
}
?>