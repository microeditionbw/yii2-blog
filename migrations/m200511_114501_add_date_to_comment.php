<?php

use yii\db\Migration;

/**
 * Class m200511_114501_add_date_to_comment
 */
class m200511_114501_add_date_to_comment extends Migration
{
    public function up()
    {
        $this->addColumn('comment','date', $this->date());
    }

    public function down()
    {
        $this->dropColumn('comment','date');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200511_114501_add_date_to_comment cannot be reverted.\n";

        return false;
    }
    */
}
