<?php
    class Worker extends AppModel {
  /**/      public $belongsTo = array(
            'UsagePolicy' => array(
                'className' => 'UsagePolicy',
                'foreignKey' => 'usage_policy_id'
            )   
        );

            public $hasMany = 'UsageMap';
   /**/     public $validate = array(
            'card_number' => 'alphaNumeric',
            'name' => array(
                'rule' => 'notEmpty', 
            ),
        );
    }   
?>
