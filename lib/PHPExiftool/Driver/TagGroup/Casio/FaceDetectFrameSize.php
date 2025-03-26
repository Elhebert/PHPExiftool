<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FaceDetectFrameSize extends AbstractTagGroup
{
    protected string $id = 'Casio:FaceDetectFrameSize';

    protected string $name = 'FaceDetectFrameSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::FaceInfo1
             * line : 83875
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Casio::FaceInfo1.Casio:FaceDetectFrameSize',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Casio::FaceInfo2
             * line : 83952
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Casio::FaceInfo2.Casio:FaceDetectFrameSize',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
