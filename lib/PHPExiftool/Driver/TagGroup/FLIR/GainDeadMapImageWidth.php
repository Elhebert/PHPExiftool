<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GainDeadMapImageWidth extends AbstractTagGroup
{
    protected string $id = 'FLIR:GainDeadMapImageWidth';

    protected string $name = 'GainDeadMapImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Gain Dead Map Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::GainDeadData
             * line : 86012
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::GainDeadData.FLIR:GainDeadMapImageWidth',
            'desc' => [
                'en' => 'Gain Dead Map Image Width',
            ],
        ],
    ];

    protected int $count = 0;
}
