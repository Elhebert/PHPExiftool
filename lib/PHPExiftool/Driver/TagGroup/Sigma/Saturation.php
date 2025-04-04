<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Saturation extends AbstractTagGroup
{
    protected string $id = 'Sigma:Saturation';

    protected string $name = 'Saturation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 236072
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
        1 => [
            /**
             * table_name : Sigma::Main
             * line : 236075
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
