<?php

use yii\db\Migration;

/**
 * Handles the creation of table `nomenclature`.
 */
class m170616_112955_create_nomenclature_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('nomenclature', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(25)->notNull(),
            'full_name'=>$this->string(100)->notNull(),
            'article'=>$this->string(20)
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('nomenclature');
    }
}
