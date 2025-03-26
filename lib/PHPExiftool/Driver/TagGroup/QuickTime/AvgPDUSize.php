<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AvgPDUSize extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AvgPDUSize';

    protected string $name = 'AvgPDUSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::HintHeader
             * line : 313715
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::HintHeader.QuickTime:AvgPDUSize',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
