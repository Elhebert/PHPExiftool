<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RTF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LastPrinted extends AbstractTagGroup
{
    protected string $id = 'RTF:LastPrinted';

    protected string $name = 'LastPrinted';

    protected ?string $phpType = 'date';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RTF::Main
             * line : 329294
             * type : date
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RTF::Main.RTF:LastPrinted',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
