<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m161229_022801_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
	    'Name'=>$this->string()->notNull(),
	    'Pass'=>$this->string()->notNull(),
	    'NickName'=>$this->string()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
