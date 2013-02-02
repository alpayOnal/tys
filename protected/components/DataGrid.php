<?php
Yii::import('zii.widgets.grid.CGridView');

/**
 *
 * @author Hasan
 */
class DataGrid extends \CGridView
{
  // TODO - Insert your code here
  /**
   */
  function init()
  {
    parent::init();
    $this->summaryCssClass = "";
    $this->pagerCssClass = "widget-bottom";
    $this->pager = array('class'=>"GridPager", 'htmlOptions' => array('class' => ""),
      'firstPageCssClass' => "first paginate_button", 'lastPageCssClass' => "last paginate_button",
      'nextPageCssClass' => "next paginate_button",'previousPageCssClass' => "prev paginate_button", 'selectedPageCssClass' => "paginate_active",
      'internalPageCssClass' => "paginate_button",'nextPageLabel'=>"Sonraki",'lastPageLabel'=>"Son",'prevPageLabel'=>"Önceki",'firstPageLabel'=>"İlk");
    $this->columns;
  }

  public function renderTableHeader()
  {
    if (!$this->hideHeader){
      echo "<thead class=\"table-header\">\n";
      if ($this->filterPosition === self::FILTER_POS_HEADER) $this->renderFilter();
      echo "<tr role=\"row\">\n";
      foreach($this->columns as $column){
        $column->headerHtmlOptions = array('class'=>"");
        $column->renderHeaderCell();
      }
      echo "</tr>\n";
      if ($this->filterPosition === self::FILTER_POS_BODY) $this->renderFilter();
      echo "</thead>\n";
    }elseif ($this->filter !== null && ($this->filterPosition === self::FILTER_POS_HEADER || $this->filterPosition === self::FILTER_POS_BODY)){
      echo "<thead>\n";
      $this->renderFilter();
      echo "</thead>\n";
    }
  }

  public function renderTableBody()
  {
    $data = $this->dataProvider->getData();
    $n = count($data);
    echo "<tbody>\n";
    if ($n > 0){
      for($row = 0; $row < $n; ++$row)
        $this->renderTableRow($row);
    }else{
      echo '<tr><td colspan="' . count($this->columns) . '" class="empty">';
      $this->renderEmptyText();
      echo "</td></tr>\n";
    }
    echo "</tbody>\n";
  }
}
?>