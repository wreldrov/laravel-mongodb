<?php

namespace App\Contracts\Entities;

interface InfoContract extends HasTimestampContract
{
    public const FIELD_ID              = '_id';
    public const FIELD_TYPE            = 'type';
    public const FIELD_NAME_KZ         = 'name_kz';
    public const FIELD_NAME            = 'name';
    public const FIELD_ADDRESS         = 'address';
    public const FIELD_ADDRESS_KZ      = 'address_kz';
    public const FIELD_RUKOVODITEL_KZ  = 'rukovoditelya_kz';
    public const FIELD_RUKOVODITEL     = 'rukovoditelya';
    public const FIELD_SCHEDULE_KZ     = 'schedule_kz';
    public const FIELD_SCHEDULE        = 'schedule';
    public const FIELD_VIDY_USLUG_KZ   = 'vidy_uslug_kz';
    public const FIELD_VIDY_USLUG      = 'vidy_uslug';
    public const FIELD_GEOPOSITION     = 'geoposition';
    public const FIELD_CONTACT_TELEFON = 'contact_telefon';
    public const FIELD_EMAIL           = 'email';
    public const FIELD_OFFICIAL_SITE   = 'official_site';


    public const FIELD_LIST = [
        self::FIELD_TYPE,
        self::FIELD_NAME_KZ,
        self::FIELD_NAME,
        self::FIELD_ADDRESS,
        self::FIELD_ADDRESS_KZ,
        self::FIELD_RUKOVODITEL_KZ,
        self::FIELD_RUKOVODITEL,
        self::FIELD_SCHEDULE_KZ,
        self::FIELD_SCHEDULE,
        self::FIELD_VIDY_USLUG_KZ,
        self::FIELD_VIDY_USLUG,
        self::FIELD_GEOPOSITION,
        self::FIELD_CONTACT_TELEFON,
        self::FIELD_EMAIL,
        self::FIELD_OFFICIAL_SITE,
    ];

    public const TYPE_LIBRARY = 'library';
}
