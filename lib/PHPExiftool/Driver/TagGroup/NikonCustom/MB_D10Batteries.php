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
class MB_D10Batteries extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MB-D10Batteries';

    protected string $name = 'MB-D10Batteries';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'MB-D10 Batteries',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142918
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:MB-D10Batteries',
            'desc' => [
                'en' => 'MB-D10 Batteries',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
