<?php

namespace BaywaReLusy\OpenApiDocumentation;

use OpenApi\Attributes as OA;
use OpenApi\Attributes\Response;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final class OAResponse400 extends Response
{
    public function __construct()
    {
        parent::__construct(
            response: 400,
            description: 'Bad Request',
            content: new OA\MediaType(mediaType: 'application/problem+json')
        );
    }
}
