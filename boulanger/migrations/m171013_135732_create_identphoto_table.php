<?php

use yii\db\Migration;

/**
 * Handles the creation of table `identphoto`.
 */
class m171013_135732_create_identphoto_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('identphoto', [
            'identphoto_id' => $this->primaryKey(),
            'identphoto_pers_id' => $this->integer()->notNull(),
            'identphoto_photo_id' => $this->integer()->notNull(),
            'identphoto_situation' => $this->string(),
            'identphoto_gd' => $this->integer(),
            'identphoto_hb' => $this->integer(),
       ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('identphoto');
    }
}
