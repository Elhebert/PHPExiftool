<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorimetryCode extends AbstractTagGroup
{
    protected string $id = 'MXF:ColorimetryCode';

    protected string $name = 'ColorimetryCode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Colorimetry Code',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114356
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ColorimetryCode',
            'desc' => [
                'en' => 'Colorimetry Code',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 115478
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:ColorimetryCode',
            'desc' => [
                'en' => 'Colorimetry Code',
            ],
        ],
    ];

    protected int $count = 0;
}
