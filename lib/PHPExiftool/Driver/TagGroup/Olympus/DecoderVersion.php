<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DecoderVersion extends AbstractTagGroup
{
    protected string $id = 'Olympus:DecoderVersion';

    protected string $name = 'DecoderVersion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Decoder Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::MovableInfo
             * line : 178850
             * type : string
             * writable : false
             * count : 16
             * flags : permanent
             */
            'id' => 'Olympus::MovableInfo.Olympus:DecoderVersion',
            'desc' => [
                'en' => 'Decoder Version',
            ],
        ],
    ];

    protected int $count = 16;

    protected int $flags = 4;
}
