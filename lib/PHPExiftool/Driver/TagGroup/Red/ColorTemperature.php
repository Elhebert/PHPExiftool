<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorTemperature extends AbstractTagGroup
{
    protected string $id = 'Red:ColorTemperature';

    protected string $name = 'ColorTemperature';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Color Temperature',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Red::Main
             * line : 233079
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Red::Main.Red:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
    ];

    protected int $count = 0;
}
