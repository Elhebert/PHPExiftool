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
class FaceOrientation extends AbstractTagGroup
{
    protected string $id = 'Casio:FaceOrientation';

    protected string $name = 'FaceOrientation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::FaceInfo2
             * line : 61534
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::FaceInfo2.Casio:FaceOrientation',
            'desc' => [
                'en' => 'Face Orientation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
