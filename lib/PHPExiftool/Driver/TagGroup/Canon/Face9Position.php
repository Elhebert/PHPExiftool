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
class Face9Position extends AbstractTagGroup
{
    protected string $id = 'Canon:Face9Position';

    protected string $name = 'Face9Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 9 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FaceDetect1
             * line : 48186
             * type : int16s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Canon::FaceDetect1.Canon:Face9Position',
            'desc' => [
                'en' => 'Face 9 Position',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
