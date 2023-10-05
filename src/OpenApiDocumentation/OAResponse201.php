<?php

namespace BaywaReLusy\OpenApiDocumentation;

use OpenApi\Attributes as OA;
use OpenApi\Attributes\Response;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final class OAResponse201 extends Response
{
    public function __construct(
        string $ref,
        ?string $description = null
    ) {
        $description = $description ?: "Entity created";
        $ref = "#/components/schemas/" . $ref;

        parent::__construct(
            response: 201,
            description: $description,
            content: new OA\MediaType(
                mediaType: "application/hal+json",
                schema: new OA\Schema(ref: $ref)
            )
        );
    }
}
