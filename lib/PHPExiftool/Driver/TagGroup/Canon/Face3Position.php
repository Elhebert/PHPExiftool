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
class Face3Position extends AbstractTagGroup
{
    protected string $id = 'Canon:Face3Position';

    protected string $name = 'Face3Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 3 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FaceDetect1
             * line : 48168
             * type : int16s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Canon::FaceDetect1.Canon:Face3Position',
            'desc' => [
                'en' => 'Face 3 Position',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
