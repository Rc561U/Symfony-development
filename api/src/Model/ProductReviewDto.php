<?php

namespace App\Model;
use Symfony\Component\Validator\Constraints as Assert;
class ProductReviewDto
{
    public function __construct(
        #[Assert\NotBlank]
        #[Assert\Length(min: 10, max: 500)]
        public readonly string $comment,

        #[Assert\GreaterThanOrEqual(1)]
        #[Assert\LessThanOrEqual(5)]
        public readonly int $rating,
    ) {
    }
}