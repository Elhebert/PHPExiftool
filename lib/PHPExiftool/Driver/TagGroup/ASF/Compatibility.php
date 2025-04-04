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
class Compatibility extends AbstractTagGroup
{
    protected string $id = 'ASF:Compatibility';

    protected string $name = 'Compatibility';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Compatibility',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::HeaderExtension
             * line : 934
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::HeaderExtension.ASF:Compatibility',
            'desc' => [
                'en' => 'Compatibility',
            ],
        ],
    ];

    protected int $count = 0;
}
