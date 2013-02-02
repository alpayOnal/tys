<?php

class TabView extends \CTabView
{



  protected function renderHeader()
  {
    echo "<ul class=\"nav nav-tabs\">\n";
    foreach($this->tabs as $id=>$tab)
    {
      $title=isset($tab['title'])?$tab['title']:'undefined';
      $active=$id===$this->activeTab?' class="active"' : 'class=""';
      $url=isset($tab['url'])?$tab['url']:"#{$id}";
      echo "<li id=\"#{$url}\" {$active}><a data-toggle=\"tab\"  href=\"{$url}\">{$title}</a></li>\n";
    }
    echo "</ul>\n";
  }

  public function renderBody()
  {
    echo '<div class="tab-content">';
    foreach($this->tabs as $id => $tab){
      $inactive = $id !== $this->activeTab ? ' active' : '';
      echo "<div class=\"tab-pane{$inactive}\" id=\"{$id}\">\n";
      if (isset($tab['content']))
        echo $tab['content'];
      else if (isset($tab['view'])) $this->getController()->renderPartial($tab['view'], $tab['viewData']);
      echo "</div><!-- {$id} -->\n";
    }
    echo '</div>';
  }


  public function run()
  {
    foreach($this->tabs as $id=>$tab)
      if(isset($tab['visible']) && $tab['visible']==false)
      unset($this->tabs[$id]);

    if(empty($this->tabs))
      return;

    if($this->activeTab===null || !isset($this->tabs[$this->activeTab]))
    {
      reset($this->tabs);
      list($this->activeTab, )=each($this->tabs);
    }

    $htmlOptions=$this->htmlOptions;
    $htmlOptions['id']=$this->getId();
    if(!isset($htmlOptions['class']))
      $htmlOptions['class']=self::CSS_CLASS;

    $this->registerClientScript();
    echo '<div class="row-fluid"><div class="span12"><div class="box-tab">';
    echo CHtml::openTag('div',$htmlOptions)."\n";
    $this->renderHeader();
    $this->renderBody();
    echo CHtml::closeTag('div');
    echo '</div></div></div>';
  }
}
?>