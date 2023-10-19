<?php

namespace BaywaReLusy\OpenApiDocumentation;

use OpenApi\Attributes as OA;
use OpenApi\Attributes\Response;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final class OAResponse422 extends Response
{
    public function __construct()
    {
        parent::__construct(
            response: 422,
            description: 'Unprocessable Content',
            content: new OA\MediaType(mediaType: 'application/problem+json')
        );
    }
}
