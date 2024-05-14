<?php

use yii\db\Migration;

/**
 * Class m240514_142756_UserTable
 */
class m240514_142756_UserTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240514_142756_UserTable cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('rf_user_table', [  
            'id' => $this->primaryKey(),  
            'name' => $this->string()->notNull(),  
            'email' => $this->string()->unique(),  
            // ... 其他字段定义  
        ]);  
        // 插入初始数据  
        $this->insert('rf_user_table', [  
            'name' => '初始用户',  
            'email' => 'initial@example.com',  
            // ... 其他字段值  
        ]);  
    }
 
    public function down()
    {   
        // 删除表  
        $this->dropTable('rf_user_table');  
        echo "m240514_133320_UserTable cannot be reverted.\n";

        return false;
    }
}
