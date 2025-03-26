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
class ShutterReleaseNoCFCard extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:ShutterReleaseNoCFCard';

    protected string $name = 'ShutterReleaseNoCFCard';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 71349
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:ShutterReleaseNoCFCard',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 71900
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:ShutterReleaseNoCFCard',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 78246
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:ShutterReleaseNoCFCard',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
