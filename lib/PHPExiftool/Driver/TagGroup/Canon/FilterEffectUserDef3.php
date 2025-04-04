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
class FilterEffectUserDef3 extends AbstractTagGroup
{
    protected string $id = 'Canon:FilterEffectUserDef3';

    protected string $name = 'FilterEffectUserDef3';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Filter Effect User Def 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51403
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:FilterEffectUserDef3',
            'desc' => [
                'en' => 'Filter Effect User Def 3',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 52142
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:FilterEffectUserDef3',
            'desc' => [
                'en' => 'Filter Effect User Def 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
