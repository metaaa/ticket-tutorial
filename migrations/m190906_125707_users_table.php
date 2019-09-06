<?php

use yii\db\Migration;

/**
 * Class m190906_125707_users_table
 */
class m190906_125707_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'password' => $this->string()->notNull(),
    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190906_125707_users_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190906_125707_users_table cannot be reverted.\n";

        return false;
    }
    */
}
