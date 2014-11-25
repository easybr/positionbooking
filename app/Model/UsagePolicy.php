<?php
    class UsagePolicy extends AppModel {
  /*      public $hasMany = array(
            'Worker' => array(
            'className' => 'Worker',
            'foreignKey' => 'usage_policy_id',
            'order' => 'Worker.created DESC',
            'limit' => '5',
            )
        );
  */      public $validate = array(
            'usage_policy_name' => array(
                'rule' => array('maxLength',30)
            ),
            'qtt_home_offices_per_week' => array(
                'rule' => array('comparison', '<=', 5),
                'message' => 'Must be 5 or less'
            )
        );
    }   
?>
