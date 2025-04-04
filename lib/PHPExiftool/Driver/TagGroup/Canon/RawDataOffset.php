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
class RawDataOffset extends AbstractTagGroup
{
    protected string $id = 'Canon:RawDataOffset';

    protected string $name = 'RawDataOffset';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Raw Data Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::Main
             * line : 50041
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:RawDataOffset',
            'desc' => [
                'en' => 'Raw Data Offset',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
