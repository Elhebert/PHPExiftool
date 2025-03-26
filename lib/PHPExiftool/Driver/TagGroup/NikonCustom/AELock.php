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
class AELock extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AELock';

    protected string $name = 'AELock';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AE Lock',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145838
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:AELock',
            'desc' => [
                'en' => 'AE Lock',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153677
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:AELock',
            'desc' => [
                'en' => 'AE Lock',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
