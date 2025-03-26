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
class FilterEffectPortrait extends AbstractTagGroup
{
    protected string $id = 'Canon:FilterEffectPortrait';

    protected string $name = 'FilterEffectPortrait';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Filter Effect Portrait',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PSInfo
             * line : 50977
             * type : int32s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::PSInfo.Canon:FilterEffectPortrait',
            'desc' => [
                'en' => 'Filter Effect Portrait',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51638
             * type : int32s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::PSInfo2.Canon:FilterEffectPortrait',
            'desc' => [
                'en' => 'Filter Effect Portrait',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
