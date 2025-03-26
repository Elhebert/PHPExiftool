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
class Duration extends AbstractTagGroup
{
    protected string $id = 'ASF:Duration';

    protected string $name = 'Duration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Duration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::ExtendedDescr
             * line : 544
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::ExtendedDescr.ASF:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
        1 => [
            /**
             * table_name : ASF::FileProperties
             * line : 869
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::FileProperties.ASF:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
    ];

    protected int $count = 0;
}
