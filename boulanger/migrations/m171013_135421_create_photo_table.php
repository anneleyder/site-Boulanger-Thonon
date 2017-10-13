<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photo`.
 */
class m171013_135421_create_photo_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('photo', [
            'photo_id' => $this->primaryKey(),
            'photo_desc' => $this->string(),
            'photo_user' => $this->integer()->notNull(),
            'photo_dat_db' => $this->date()->notNull(),
            'photo_dat' => $this->date(),
            'photo_pathname' => $this->string(),
            'photo_remarque' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('photo');
    }
}
