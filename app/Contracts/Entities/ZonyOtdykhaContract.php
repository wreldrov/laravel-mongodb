<?php

namespace App\Contracts\Entities;

interface ZonyOtdykhaContract extends HasTimestampContract
{
    public const FIELD_ID         = '_id';
    public const FIELD_SEZON      = 'sezon';
    public const FIELD_NAME_KZ    = 'namekz';
    public const FIELD_NAME_RU    = 'nameru';
    public const FIELD_ADDRESS_KZ = 'addresskz';
    public const FIELD_ADDRESS_RU = 'addressru';
    public const FIELD_REJIM_KZ   = 'rejimkz';
    public const FIELD_REJIM_RU   = 'rejimru';
    public const FIELD_USLUGI_KZ  = 'uslugikz';
    public const FIELD_USLUGI_RU  = 'uslugiru';
    public const FIELD_FIO_RUK    = 'fioruk';
    public const FIELD_GOD        = 'god';
    public const FIELD_RAIGOR_KZ  = 'raigorkz';
    public const FIELD_RAIGOR_RU  = 'raigorru';


    public const FIELD_LIST = [
        self::FIELD_SEZON,
        self::FIELD_NAME_KZ,
        self::FIELD_NAME_RU,
        self::FIELD_ADDRESS_KZ,
        self::FIELD_ADDRESS_RU,
        self::FIELD_REJIM_KZ,
        self::FIELD_REJIM_RU,
        self::FIELD_USLUGI_KZ,
        self::FIELD_USLUGI_RU,
        self::FIELD_FIO_RUK,
        self::FIELD_GOD,
        self::FIELD_RAIGOR_KZ,
        self::FIELD_RAIGOR_RU,
    ];
}
