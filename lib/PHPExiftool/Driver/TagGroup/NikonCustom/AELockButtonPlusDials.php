<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AELockButtonPlusDials extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AELockButtonPlusDials';

    protected string $name = 'AELockButtonPlusDials';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AE Lock Button Plus Dials',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143432
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AELockButtonPlusDials',
            'desc' => [
                'en' => 'AE Lock Button Plus Dials',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143458
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AELockButtonPlusDials',
            'desc' => [
                'en' => 'AE Lock Button Plus Dials',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152316
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:AELockButtonPlusDials',
            'desc' => [
                'en' => 'AE Lock Button Plus Dials',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155503
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AELockButtonPlusDials',
            'desc' => [
                'en' => 'AE Lock Button Plus Dials',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
