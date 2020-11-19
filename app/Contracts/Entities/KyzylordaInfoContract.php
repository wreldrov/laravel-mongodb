<?php

namespace App\Contracts\Entities;

interface KyzylordaInfoContract extends HasTimestampContract
{
    public const FIELD_ID             = '_id';
    public const FIELD_YAZIK          = 'yazik';
    public const FIELD_NAME_KZ        = 'namekz';
    public const FIELD_NAME_RU        = 'nameru';
    public const FIELD_NAMES_RU       = 'namesru';
    public const FIELD_NAMES_KZ       = 'nameskz';
    public const FIELD_ADDRESS_KZ     = 'addresskz';
    public const FIELD_ADDRESS_RU     = 'addressru';
    public const FIELD_PERIOD_KZ      = 'periodkz';
    public const FIELD_PERIOD_RU      = 'periodru';
    public const FIELD_TERRITORIA_KZ  = 'territoriakz';
    public const FIELD_TERRITORIA_RU  = 'territoriaru';
    public const FIELD_FIO_RUK        = 'fioruk';
    public const FIELD_NAPRAVLENIE_KZ = 'napravleniekz';
    public const FIELD_NAPRAVLENIE_RU = 'napravlenieru';


    public const FIELD_LIST = [
        self::FIELD_YAZIK,
        self::FIELD_NAME_KZ,
        self::FIELD_NAME_RU,
        self::FIELD_NAMES_RU,
        self::FIELD_NAMES_KZ,
        self::FIELD_ADDRESS_KZ,
        self::FIELD_ADDRESS_RU,
        self::FIELD_PERIOD_KZ,
        self::FIELD_PERIOD_RU,
        self::FIELD_TERRITORIA_KZ,
        self::FIELD_TERRITORIA_RU,
        self::FIELD_FIO_RUK,
        self::FIELD_NAPRAVLENIE_KZ,
        self::FIELD_NAPRAVLENIE_RU,
    ];
}
