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
class TargetWidth extends AbstractTagGroup
{
    protected string $id = 'MXF:TargetWidth';

    protected string $name = 'TargetWidth';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Target Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114866
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TargetWidth',
            'desc' => [
                'en' => 'Target Width',
            ],
        ],
    ];

    protected int $count = 0;
}
