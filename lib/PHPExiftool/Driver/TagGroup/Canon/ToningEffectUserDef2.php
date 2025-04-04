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
class ToningEffectUserDef2 extends AbstractTagGroup
{
    protected string $id = 'Canon:ToningEffectUserDef2';

    protected string $name = 'ToningEffectUserDef2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Toning Effect User Def 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51348
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:ToningEffectUserDef2',
            'desc' => [
                'en' => 'Toning Effect User Def 2',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 52087
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:ToningEffectUserDef2',
            'desc' => [
                'en' => 'Toning Effect User Def 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
