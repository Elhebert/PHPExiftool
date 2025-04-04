<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CMWhiteBalanceComp extends AbstractTagGroup
{
    protected string $id = 'Olympus:CMWhiteBalanceComp';

    protected string $name = 'CMWhiteBalanceComp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'CM White Balance Comp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::RawInfo
             * line : 180314
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::RawInfo.Olympus:CMWhiteBalanceComp',
            'desc' => [
                'en' => 'CM White Balance Comp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
