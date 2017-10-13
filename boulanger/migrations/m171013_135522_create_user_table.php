<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m171013_135522_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'user_id' => $this->primaryKey(),
            'user_nom' => $this->string(50),
            'user_prenom' => $this->string(50),
            'user_email' => $this->string(50),
            'user_type' => $this->char(1),
            'user_datdeb' => $this->date(),
            'user_datderacc' => $this->date(),
            'user_datderupd' => $this->date(),
            'user_lien_pers' => $this->integer(),
            'user_motiv' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
