<?php declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace OpenApi\PetStoreClient\Schema\Mapper;

use OpenApi\PetStoreClient\Schema\GetInventoryResponseBody;

class GetInventoryResponseBodyMapper implements SchemaMapperInterface
{
    public function toSchema(array $payload): GetInventoryResponseBody
    {
        return new GetInventoryResponseBody();
    }
}
