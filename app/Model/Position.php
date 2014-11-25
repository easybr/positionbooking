<?php
    class Position extends AppModel {
        public $hasMany ='UsageMap';
        public $validate = array(
            'bay_number' => array(
                'rule' => array('maxLength',4)
            ),
            'floor_number' => array(
                'rule' => array('maxLength',4 )
            )
        );
    }   
?>
