<?php

use yii\db\Migration;

/**
 * Class m180923_132321_crea_tabla_usuario
 */
class m180923_132321_crea_tabla_usuario extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('usuario', [
            'id' => $this->primaryKey()->unsigned(),
            'usuario' => $this->string(45)->notNull(),
            'password' => $this->string(60)->notNull(),
            'status' => $this->tinyInteger(4),
            'clave' => $this->string(30),
            'nombre' => $this->string(30),
            'apellido_p' => $this->string(30),
            'apellido_m' => $this->string(30),
            'puesto' => $this->string(100),
            'telefono' => $this->string(20),
            'extension' => $this->string(10),
            'celular' => $this->string(20),
            'departamento' => $this->string(100),
            'unidad_acad' => $this->string(100),
            'tipo' => $this->string(50),
            'rol' => $this->integer()->unsigned(),
            'status_reg' => $this->tinyInteger(4),
            'usuario_act' => $this->integer()->unsigned(),
            'modulo_act' => $this->string(50),
            'fechahora_act' => $this->timestamp()
        ]);
    }

    public function down()
    {
        $this->dropTable('usuario');
    }

    /**
     * {@inheritdoc}
     */
    /*
    public function safeUp()
    {

    }
    */
    
    /**
     * {@inheritdoc}
     */
    /*
    public function safeDown()
    {
        echo "m180923_132321_crea_tabla_usuario cannot be reverted.\n";

        return false;
    }
    */
}
