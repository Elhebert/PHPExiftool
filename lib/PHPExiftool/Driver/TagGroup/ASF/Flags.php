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
class Flags extends AbstractTagGroup
{
    protected string $id = 'ASF:Flags';

    protected string $name = 'Flags';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::FileProperties
             * line : 1758
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::FileProperties.ASF:Flags',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
