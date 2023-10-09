<?php

namespace BaywaReLusy\OpenApiDocumentation;

use OpenApi\Attributes as OA;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final class OASchemaCollection extends OA\Schema
{
    public function __construct(
        string $property,
        string $ref
    ) {
        $ref = sprintf('#/components/schemas/%s', $ref);

        parent::__construct(
            allOf: [
                new OA\Schema(ref: '#/components/schemas/HalCollectionLinks'),
                new OA\Schema(
                    properties: [
                        new OA\Property(
                            property: '_embedded',
                            properties: [
                                new OA\Property(
                                    property: $property,
                                    type: 'array',
                                    items: new OA\Items($ref)
                                )
                            ],
                            type: 'object'
                        )
                    ]
                )
            ]
        );
    }
}
