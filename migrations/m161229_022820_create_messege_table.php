<?php

use yii\db\Migration;

/**
 * Handles the creation of table `messege`.
 */
class m161229_022820_create_messege_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('messege', [
            'id' => $this->primaryKey(),
	    'Avtor'=>$this->integer(),
	    'Recip'=>$this->integer(),
	    'Datetime'=>$this->datetime(),
	    'Messege'=>$this->string(),
	    'Conversation_id'=>$this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('messege');
    }
}
