<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SequenceNumber extends AbstractTagGroup
{
    protected string $id = 'Nikon:SequenceNumber';

    protected string $name = 'SequenceNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sequence Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD800
             * line : 140497
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD800.Nikon:SequenceNumber',
            'desc' => [
                'en' => 'Sequence Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
