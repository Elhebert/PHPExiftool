<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ClosedCompleteBodyPartition extends AbstractTagGroup
{
    protected string $id = 'MXF:ClosedCompleteBodyPartition';

    protected string $name = 'ClosedCompleteBodyPartition';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Closed Complete Body Partition',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118657
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:ClosedCompleteBodyPartition',
            'desc' => [
                'en' => 'Closed Complete Body Partition',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
