<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioBytes extends AbstractTagGroup
{
    protected string $id = 'Real-RA3:AudioBytes';

    protected string $name = 'AudioBytes';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Bytes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::AudioV3
             * line : 232175
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Real::AudioV3.Real-RA3:AudioBytes',
            'desc' => [
                'en' => 'Audio Bytes',
            ],
        ],
    ];

    protected int $count = 0;
}
