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
class ImmediateDataBytes extends AbstractTagGroup
{
    protected string $id = 'QuickTime:ImmediateDataBytes';

    protected string $name = 'ImmediateDataBytes';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::HintTrackInfo
             * line : 313764
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::HintTrackInfo.QuickTime:ImmediateDataBytes',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
