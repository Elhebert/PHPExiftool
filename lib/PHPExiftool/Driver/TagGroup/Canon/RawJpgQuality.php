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
class RawJpgQuality extends AbstractTagGroup
{
    protected string $id = 'Canon:RawJpgQuality';

    protected string $name = 'RawJpgQuality';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Jpg Quality',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FileInfo
             * line : 48248
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FileInfo.Canon:RawJpgQuality',
            'desc' => [
                'en' => 'Raw Jpg Quality',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
