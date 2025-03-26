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
class AutoFP extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AutoFP';

    protected string $name = 'AutoFP';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto FP',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153826
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:AutoFP',
            'desc' => [
                'en' => 'Auto FP',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158409
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:AutoFP',
            'desc' => [
                'en' => 'Auto FP',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
