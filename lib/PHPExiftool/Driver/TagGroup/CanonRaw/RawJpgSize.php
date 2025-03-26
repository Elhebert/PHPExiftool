<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawJpgSize extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:RawJpgSize';

    protected string $name = 'RawJpgSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Jpg Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::RawJpgInfo
             * line : 58440
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonRaw::RawJpgInfo.CanonRaw:RawJpgSize',
            'desc' => [
                'en' => 'Raw Jpg Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
