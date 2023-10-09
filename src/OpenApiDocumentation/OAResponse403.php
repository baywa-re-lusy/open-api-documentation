<?php

namespace BaywaReLusy\OpenApiDocumentation;

use OpenApi\Attributes as OA;
use OpenApi\Attributes\Response;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final class OAResponse403 extends Response
{
    public function __construct()
    {
        parent::__construct(
            response: 403,
            description: 'Forbidden',
            content: new OA\MediaType(mediaType: 'application/problem+json')
        );
    }
}
