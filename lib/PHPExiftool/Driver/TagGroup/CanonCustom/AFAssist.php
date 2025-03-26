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
class AFAssist extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AFAssist';

    protected string $name = 'AFAssist';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Assist/Flash Firing',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53259
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist/Flash Firing',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56829
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
