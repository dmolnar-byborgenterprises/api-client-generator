<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace OpenApi\PetStoreClient\Schema\Mapper;

use DoclerLabs\ApiClientException\UnexpectedResponseBodyException;
use OpenApi\PetStoreClient\Schema\Category;

class CategoryMapper implements SchemaMapperInterface
{
    /**
     * @throws UnexpectedResponseBodyException
     */
    public function toSchema(array $payload): Category
    {
        $schema = new Category();
        if (isset($payload['id'])) {
            $schema->setId($payload['id']);
        }
        if (isset($payload['name'])) {
            $schema->setName($payload['name']);
        }
        if (empty($schema->toArray())) {
            throw new UnexpectedResponseBodyException();
        }

        return $schema;
    }
}
