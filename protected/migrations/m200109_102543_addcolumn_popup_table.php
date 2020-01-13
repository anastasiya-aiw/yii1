<?php

class m200109_102543_addcolumn_popup_table extends CDbMigration
{
	public function up() {
    //$this->getDbConnection()->createCommand()->addColumn('{{post}}', 'public', 'tinyint(1) NOT NULL');
		$this->addColumn('tbl_popup', 'views', 'int(11) NOT NULL DEFAULT 0');
		//$this->addColumn('tbl_popup', 'jscode', 'varchar(255) NOT NULL');

    /*foreach (Popup::model()->findAll() as $popup) {
        $popup->save();
    }*/

	}

	public function down()
	{
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
