<?php

namespace App\Contracts\Entities;

interface HasTimestampContract
{
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';
}
