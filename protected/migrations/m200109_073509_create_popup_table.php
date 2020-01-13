<?php

class m200109_073509_create_popup_table extends CDbMigration
{
/*
	public function up() {
		$transaction=$this->getDbConnection()->beginTransaction();
		try {
					$this->createTable('tbl_popup', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
						'status' => 'boolean',
        	));
					//mysql_query('ALTER TABLE tbl_post CHANGE name title varchar(255)');
		}
		catch(Exception $e) {
			echo "Exception: ".$e->getMessage()."\n";
      $transaction->rollback();
      return false;
    }
	}

	public function down() {
		$transaction=$this->getDbConnection()->beginTransaction();
		try {
			$this->dropTable('tbl_popup');
		}
		catch(Exception $e) {
			echo "Exception: ".$e->getMessage()."\n";
      $transaction->rollback();
      return false;
    }
	}
*/
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp() {
		$this->createTable('tbl_popup', array(
			'id' => 'pk',
      'title' => 'string NOT NULL',
      'content' => 'text',
			'status' => 'boolean',
    ));
	}

	public function safeDown() {
		$this->dropTable('tbl_popup');
		return true;
	}

}
