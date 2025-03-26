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
class FilterEffectAuto extends AbstractTagGroup
{
    protected string $id = 'Canon:FilterEffectAuto';

    protected string $name = 'FilterEffectAuto';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Filter Effect Auto',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51908
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:FilterEffectAuto',
            'desc' => [
                'en' => 'Filter Effect Auto',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
