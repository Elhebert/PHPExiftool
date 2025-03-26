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
class Illumination extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:Illumination';

    protected string $name = 'Illumination';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Illumination',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153449
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:Illumination',
            'desc' => [
                'en' => 'Illumination',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
