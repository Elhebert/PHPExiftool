<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorSpace extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorSpace';

    protected string $name = 'ColorSpace';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Space',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorInfo
             * line : 48094
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorInfo.Canon:ColorSpace',
            'desc' => [
                'en' => 'Color Space',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::Main
             * line : 50080
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:ColorSpace',
            'desc' => [
                'en' => 'Color Space',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
