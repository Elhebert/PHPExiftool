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
class FilterEffectNeutral extends AbstractTagGroup
{
    protected string $id = 'Canon:FilterEffectNeutral';

    protected string $name = 'FilterEffectNeutral';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Filter Effect Neutral',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51073
             * type : int32s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::PSInfo.Canon:FilterEffectNeutral',
            'desc' => [
                'en' => 'Filter Effect Neutral',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51734
             * type : int32s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::PSInfo2.Canon:FilterEffectNeutral',
            'desc' => [
                'en' => 'Filter Effect Neutral',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
