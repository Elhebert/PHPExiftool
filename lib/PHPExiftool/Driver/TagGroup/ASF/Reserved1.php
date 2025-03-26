<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Reserved1 extends AbstractTagGroup
{
    protected string $id = 'ASF:Reserved1';

    protected string $name = 'Reserved1';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::HeaderExtension
             * line : 1850
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::HeaderExtension.ASF:Reserved1',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
