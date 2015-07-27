<?php
declare(strict_types=1);

final class User
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $email,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self($data['id'], $data['name'], $data['email']);
    }
}
- Update dependencies — iteration 1 (2015)
