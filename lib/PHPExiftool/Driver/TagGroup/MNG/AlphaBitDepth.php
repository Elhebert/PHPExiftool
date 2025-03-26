<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AlphaBitDepth extends AbstractTagGroup
{
    protected string $id = 'MNG:AlphaBitDepth';

    protected string $name = 'AlphaBitDepth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Alpha Bit Depth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::JNGHeader
             * line : 112111
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::JNGHeader.MNG:AlphaBitDepth',
            'desc' => [
                'en' => 'Alpha Bit Depth',
            ],
        ],
    ];

    protected int $count = 0;
}
