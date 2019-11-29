<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class ContactForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema
            ->addField('status', 'boolean')
            ->addField('nome', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('assunto', ['type' => 'string'])
            ->addField('mensagem', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('nome', 'length', [
            'rule' => ['minLength', 7],
            'message' => 'O Nome é obrigatório'
        ])->add('email', 'format', [
            'rule' => 'email',
            'message' => 'Informe umj e-mail válido',
        ]);
    }

    protected function _execute(array $data)
    {
// Send an email.
        return true;
    }
}

?>
