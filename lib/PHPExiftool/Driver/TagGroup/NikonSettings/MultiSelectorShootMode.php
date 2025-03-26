<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MultiSelectorShootMode extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:MultiSelectorShootMode';

    protected string $name = 'MultiSelectorShootMode';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Multi Selector Shoot Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 167362
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:MultiSelectorShootMode',
            'desc' => [
                'en' => 'Multi Selector Shoot Mode',
            ],
        ],
        1 => [
            /**
             * table_name : NikonSettings::Main
             * line : 167379
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:MultiSelectorShootMode',
            'desc' => [
                'en' => 'Multi Selector Shoot Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
