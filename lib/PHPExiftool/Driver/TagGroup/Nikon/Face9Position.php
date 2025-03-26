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
class Face9Position extends AbstractTagGroup
{
    protected string $id = 'Nikon:Face9Position';

    protected string $name = 'Face9Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 9 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FaceDetect
             * line : 130279
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::FaceDetect.Nikon:Face9Position',
            'desc' => [
                'en' => 'Face 9 Position',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
