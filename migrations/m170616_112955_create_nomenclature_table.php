<?php

use yii\db\Migration;

/**
 * Handles the creation of table `nomenclature`.
 */
class m170616_112955_create_nomenclature_table extends Migration
{
    const NAME='nomenclature';
    public function up()
    {
        $this->createTable(self::NAME, [
            'id' => $this->primaryKey(),
            'name'=>$this->string(25)->notNull(),
            'full_name'=>$this->string(100)->notNull(),
            'article'=>$this->string(20),
            'isGroup'=>$this->boolean(),
            'parent'=>$this->integer(10)
        ]);

        $this->addForeignKey(self::NAME,self::NAME,'parent',self::NAME,'id');


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('nomenclature');
    }
}
