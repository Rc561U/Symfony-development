<?php

namespace App\Controller;

use App\Model\ProductReviewDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Annotation\Route;

class ProductApiController extends AbstractController
{
    #[Route('/home', methods: ['POST'], format: 'json')]
    public function __invoke(
        #[MapRequestPayload] ProductReviewDto $productReview,
    ) {

        // here, $productReview is a fully typed representation of the request data
        return $this->json($productReview);
    }
}