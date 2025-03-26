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
class ColorToneMonochrome extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorToneMonochrome';

    protected string $name = 'ColorToneMonochrome';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PSInfo
             * line : 67470
             * type : int32s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::PSInfo.Canon:ColorToneMonochrome',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 68568
             * type : int32s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::PSInfo2.Canon:ColorToneMonochrome',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
