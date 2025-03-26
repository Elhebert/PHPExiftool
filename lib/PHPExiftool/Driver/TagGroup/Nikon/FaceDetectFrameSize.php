<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FaceDetectFrameSize extends AbstractTagGroup
{
    protected string $id = 'Nikon:FaceDetectFrameSize';

    protected string $name = 'FaceDetectFrameSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FaceDetect
             * line : 192224
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Nikon::FaceDetect.Nikon:FaceDetectFrameSize',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
