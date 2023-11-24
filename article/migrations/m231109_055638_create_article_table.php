<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m231109_055638_create_article_table extends Migration
{

    public function up(){
        $this->createTable('article',[
            'id' => $this->primaryKey(),
            'title' => $this->string(1024)->notNull(),
            'slug' => $this->string(1024)->notNull(),
            'body' => $this->text()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
        ]);

        $this->addForeignKey(
            'article_user_created_by_fk',
            'article',
            'created_by',
            'user',
            'id'
        );
    }
//    /**
//     * {@inheritdoc}
//     */
//    public function safeUp()
//    {
//        $this->createTable('{{%article}}', [
//            'id' => $this->primaryKey(),
//        ]);
//    }
//
//    /**
//     * {@inheritdoc}
//     */
//    public function safeDown()
//    {
//        $this->dropTable('{{%article}}');
//    }
}
