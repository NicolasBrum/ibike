<?php

namespace app\Repository;
interface UserRepository {
    public function getUserById($id): array;
    public function getAllUsers(): array;
    public function addUser($user): bool;
    public function updateUserById($id): bool;
    public function deleteById($user): bool;
}
