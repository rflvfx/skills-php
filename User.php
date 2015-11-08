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
- Polish code — iteration 5 (2015)
- Fix typo — iteration 6 (2015)
- Refactor module — iteration 11 (2015)
- Add example — iteration 12 (2015)
- Improve error handling — iteration 20 (2015)
- Fix edge case — iteration 24 (2015)
- Tweak implementation — iteration 25 (2015)
- Add helper — iteration 26 (2015)
- Add feature — iteration 27 (2015)
- Minor cleanup — iteration 30 (2015)
- Add validation — iteration 33 (2015)
- Document usage — iteration 36 (2015)
- Update dependencies — iteration 39 (2015)
- Add validation — iteration 42 (2015)
- Update docs — iteration 44 (2015)
- Fix lint warnings — iteration 46 (2015)
- Extend coverage — iteration 54 (2015)
