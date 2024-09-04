<?php

namespace app\Services;

class CheckAccountCreator {
    private string $message;

    public function __construct() {

    }

    public function checkForm(array $post): string {
        // Verifica se os campos obrigatórios estão preenchidos
        if (empty($post['firstName']) || empty($post['email']) || empty($post['password']) || empty($post['confirmedPassword'])) {
            return "Preencha todos os campos obrigatórios.";
        }

        // Verifica se as senhas são iguais
        if (!$this->checkPassword($post)) {
            return "Senhas não são iguais.";
        }

        // Se todas as validações passarem
        return "Dados corretos";
    }

    // Função que verifica se as senhas são iguais
    public function checkPassword(array $post): bool {
        return $post['password'] === $post['confirmedPassword'];
    }
}
