<?php

class ListView extends CWidget {

    public $dataProvider;
    public $itemView;

    public function init() {
        parent::init();
        // add any assets here
    }

    public function run() {
        parent::run();
        if ($this->dataProvider === null)
            throw new CException(Yii::t('ext.mobile', '"dataProvider" field must be set.'));
        if ($this->itemView === null)
            throw new CException(Yii::t('ext.mobile', '"itemView" field must be set.'));
        $this->render('body');
    }

}

?>
