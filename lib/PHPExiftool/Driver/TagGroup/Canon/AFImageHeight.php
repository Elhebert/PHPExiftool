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
class AFImageHeight extends AbstractTagGroup
{
    protected string $id = 'Canon:AFImageHeight';

    protected string $name = 'AFImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AF Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AFInfo
             * line : 2559
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFInfo.Canon:AFImageHeight',
            'desc' => [
                'en' => 'AF Image Height',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::AFInfo2
             * line : 2655
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFInfo2.Canon:AFImageHeight',
            'desc' => [
                'en' => 'AF Image Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
