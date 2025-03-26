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
class MaxPacketSize extends AbstractTagGroup
{
    protected string $id = 'QuickTime:MaxPacketSize';

    protected string $name = 'MaxPacketSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::HintSampleDesc
             * line : 313746
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::HintSampleDesc.QuickTime:MaxPacketSize',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
