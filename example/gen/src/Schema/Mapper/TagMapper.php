<?php declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace OpenApi\PetStoreClient\Schema\Mapper;

use OpenApi\PetStoreClient\Schema\Tag;

class TagMapper implements SchemaMapperInterface
{
    public function toSchema(array $payload): Tag
    {
        $schema = new Tag();
        if (isset($payload['id'])) {
            $schema->setId($payload['id']);
        }
        if (isset($payload['name'])) {
            $schema->setName($payload['name']);
        }

        return $schema;
    }
}
