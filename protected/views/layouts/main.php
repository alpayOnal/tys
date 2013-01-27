<?php /* @var $this Controller */ ?>
            $this->widget('zii.widgets.CMenu', array(
              'htmlOptions' => array('class' => "side-nav accordion_mnu collapsible"),
              'activateItems' => true, 'activeCssClass' => "current", 'activateParents' => true,
              'items' => array(
                array('label' => 'Cari', 'url' => array('/customer/index'),
                  'linkOptions' => array('class' => 'shortcut-medias')),
                array('label' => 'Ürünler', 'url' => array('/product/index'),
                  'active' => Yii::app()->controller->id == 'product',
                  'linkOptions' => array('class' => 'shortcut-contacts')),
                array('label' => 'Teklifler', 'url' => array('/offer/index'),
                  'linkOptions' => array('class' => 'shortcut-messages')),
                array('label' => 'Faturalar', 'url' => array('/invoice/index'),
                  'linkOptions' => array('class' => 'shortcut-agenda')),
                array('label' => 'Login', 'url' => array('/site/login'),
                  'linkOptions' => array('class' => 'shortcut-stats'),
                  'visible' => Yii::app()->user->isGuest))
            ?>