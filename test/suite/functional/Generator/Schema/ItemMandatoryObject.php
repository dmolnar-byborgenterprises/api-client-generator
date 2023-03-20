<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Test\Schema;

use JsonSerializable;

class ItemMandatoryObject implements SerializableInterface, JsonSerializable
{
    private ?string $string = null;

    private ?ItemMandatoryObjectNullableObject $nullableObject = null;

    private array $optionalPropertyChanged = ['string' => false, 'nullableObject' => false];

    public function setString(string $string): self
    {
        $this->string                            = $string;
        $this->optionalPropertyChanged['string'] = true;

        return $this;
    }

    public function setNullableObject(ItemMandatoryObjectNullableObject $nullableObject): self
    {
        $this->nullableObject                            = $nullableObject;
        $this->optionalPropertyChanged['nullableObject'] = true;

        return $this;
    }

    public function hasString(): bool
    {
        return $this->optionalPropertyChanged['string'];
    }

    public function hasNullableObject(): bool
    {
        return $this->optionalPropertyChanged['nullableObject'];
    }

    public function getString(): ?string
    {
        return $this->string;
    }

    public function getNullableObject(): ?ItemMandatoryObjectNullableObject
    {
        return $this->nullableObject;
    }

    public function toArray(): array
    {
        $fields = [];
        if ($this->hasString()) {
            $fields['string'] = $this->string;
        }
        if ($this->hasNullableObject()) {
            $fields['nullableObject'] = $this->nullableObject->toArray();
        }

        return $fields;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
