<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPF0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PitchAngle extends AbstractTagGroup
{
    protected string $id = 'MPF0:PitchAngle';

    protected string $name = 'PitchAngle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MPF::Main
             * line : 166382
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MPF::Main.MPF0:PitchAngle',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
