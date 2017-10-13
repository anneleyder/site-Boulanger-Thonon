<?php

use yii\db\Migration;

/**
 * Handles the creation of table `lien`.
 */
class m171013_135326_create_lien_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('lien', [
            'lien_id' => $this->primaryKey(),
            'lien_pers_id1' => $this->integer()->notNull(),
            'lien_pers_id2' => $this->integer()->notNull(),
            'lien_pers_dat' => $this->char(8),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('lien');
    }
}
