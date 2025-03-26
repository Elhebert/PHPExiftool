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
class ControlPointTime extends AbstractTagGroup
{
    protected string $id = 'MXF:ControlPointTime';

    protected string $name = 'ControlPointTime';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Control Point Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116076
             * type : rational64s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ControlPointTime',
            'desc' => [
                'en' => 'Control Point Time',
            ],
        ],
    ];

    protected int $count = 0;
}
