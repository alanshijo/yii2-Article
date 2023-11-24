<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m231109_043653_create_user_table extends Migration
{

    public function up(){
        $this->createTable('{{user}}',
        [
            'id' => $this->primaryKey(),
            'username' => $this->string(100)->notNull(),
            'password'=>$this->string()->notNull(),
            'auth_key' => $this->string()->notNull(),
            'access_token' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{user}}');
    }
//    /**
//     * {@inheritdoc}
//     */
//    public function safeUp()
//    {
//        $this->createTable('{{%user}}', [
//            'id' => $this->primaryKey(),
//        ]);
//    }
//
//    /**
//     * {@inheritdoc}
//     */
//    public function safeDown()
//    {
//        $this->dropTable('{{%user}}');
//    }
}
