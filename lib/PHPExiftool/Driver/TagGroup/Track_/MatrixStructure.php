<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Track_;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MatrixStructure extends AbstractTagGroup
{
    protected string $id = 'Track#:MatrixStructure';

    protected string $name = 'MatrixStructure';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::TrackHeader
             * line : 325082
             * type : fixed32s
             * writable : true
             * count : 9
             * flags : permanent,unsafe
             */
            'id' => 'QuickTime::TrackHeader.Track#:MatrixStructure',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 9;

    protected int $flags = 2068;
}
