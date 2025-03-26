<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SonyIDC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PresetWhiteBalance extends AbstractTagGroup
{
    protected string $id = 'SonyIDC:PresetWhiteBalance';

    protected string $name = 'PresetWhiteBalance';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preset White Balance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SonyIDC::Main
             * line : 279205
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'SonyIDC::Main.SonyIDC:PresetWhiteBalance',
            'desc' => [
                'en' => 'Preset White Balance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
