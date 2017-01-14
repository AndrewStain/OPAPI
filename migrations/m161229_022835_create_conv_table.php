<?php

use yii\db\Migration;

/**
 * Handles the creation of table `conv`.
 */
class m161229_022835_create_conv_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('conv', [
            'id' => $this->primaryKey(),
	    'User1'=>$this->integer(),
	    'User2'=>$this->integer(),
	    'LastMessege'=>$this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('conv');
    }
}
