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
class WhiteBalanceTable extends AbstractTagGroup
{
    protected string $id = 'Canon:WhiteBalanceTable';

    protected string $name = 'WhiteBalanceTable';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'White Balance Table',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::Main
             * line : 50068
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:WhiteBalanceTable',
            'desc' => [
                'en' => 'White Balance Table',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
