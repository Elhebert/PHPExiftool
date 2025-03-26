<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalance extends AbstractTagGroup
{
    protected string $id = 'Ricoh:WhiteBalance';

    protected string $name = 'WhiteBalance';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::ImageInfo
             * line : 233253
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::ImageInfo.Ricoh:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        1 => [
            /**
             * table_name : Ricoh::Main
             * line : 233424
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::Main.Ricoh:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
