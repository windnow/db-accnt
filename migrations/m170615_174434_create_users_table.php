<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m170615_174434_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(100)->unique(),
            'email'=>$this->string(100)->unique(),
            'pasHash'=>$this->string(255),
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
