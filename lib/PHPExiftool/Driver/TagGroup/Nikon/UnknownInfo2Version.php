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
class UnknownInfo2Version extends AbstractTagGroup
{
    protected string $id = 'Nikon:UnknownInfo2Version';

    protected string $name = 'UnknownInfo2Version';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::UnknownInfo2
             * line : 209556
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Nikon::UnknownInfo2.Nikon:UnknownInfo2Version',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2084;
}
