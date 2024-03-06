<?php

namespace BaywaReLusy\OpenApiDocumentation;

use OpenApi\Attributes\Response;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final class OAResponse204 extends Response
{
    public function __construct(
        string $description = 'Deleted'
    ) {
        parent::__construct(
            response: 204,
            description: $description
        );
    }
}
