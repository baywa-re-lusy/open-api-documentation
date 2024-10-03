<?php

namespace BaywaReLusy\OpenApiDocumentation;

use OpenApi\Attributes\Attachable;
use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\Parameter;
use OpenApi\Attributes\Schema;
use OpenApi\Attributes\XmlContent;
use OpenApi\Generator;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class OAPageSizeParameter extends Parameter
{
    public function __construct(
        ?int $size = null,
        ?string $parameter = null
    ) {
        if (is_null($parameter)) {
            $parameter = 'page_size';
        }
        if (is_null($size)) {
            $size = 25;
        }

        parent::__construct(
            $parameter,
            $parameter,
            'Number of elements returned per page',
            'query',
            false,
            null,
            null,
            null,
            new Schema(type: "integer"),
            $size
        );
    }
}
