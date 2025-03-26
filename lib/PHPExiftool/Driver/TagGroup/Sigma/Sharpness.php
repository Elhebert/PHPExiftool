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
class Sharpness extends AbstractTagGroup
{
    protected string $id = 'Sigma:Sharpness';

    protected string $name = 'Sharpness';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sharpness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 236078
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
        1 => [
            /**
             * table_name : Sigma::Main
             * line : 236081
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
