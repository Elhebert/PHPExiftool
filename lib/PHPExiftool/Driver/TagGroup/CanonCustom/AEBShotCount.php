<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AEBShotCount extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AEBShotCount';

    protected string $name = 'AEBShotCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AEB Shot Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 53876
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:AEBShotCount',
            'desc' => [
                'en' => 'AEB Shot Count',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 53893
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:AEBShotCount',
            'desc' => [
                'en' => 'AEB Shot Count',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 53910
             * type : int32s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:AEBShotCount',
            'desc' => [
                'en' => 'AEB Shot Count',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
