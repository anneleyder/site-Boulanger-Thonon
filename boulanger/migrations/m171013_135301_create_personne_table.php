<?php

use yii\db\Migration;

/**
 * Handles the creation of table `personne`.
 */
class m171013_135301_create_personne_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('personne', [
            'pers_id' => $this->primaryKey(),
            'pers_nom' => $this->string(50),
            'pers_prenom' => $this->string(100),
            'pers_surnom' => $this->string(50),
            'pers_sexe' => $this->char(1),
            'pers_datnais' => $this->char(8),
            'pers_datdeces' => $this->char(8),
            'pers_lieunais' => $this->char(8),
            'pers_profession' => $this->string(),
            'pers_remarque' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('personne');
    }
}
