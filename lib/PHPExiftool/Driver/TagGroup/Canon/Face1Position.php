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
class Face1Position extends AbstractTagGroup
{
    protected string $id = 'Canon:Face1Position';

    protected string $name = 'Face1Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 1 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FaceDetect1
             * line : 48162
             * type : int16s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Canon::FaceDetect1.Canon:Face1Position',
            'desc' => [
                'en' => 'Face 1 Position',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
