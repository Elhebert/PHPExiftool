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
class Firmware extends AbstractTagGroup
{
    protected string $id = 'Sigma:Firmware';

    protected string $name = 'Firmware';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Firmware',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 236102
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:Firmware',
            'desc' => [
                'en' => 'Firmware',
            ],
        ],
        1 => [
            /**
             * table_name : Sigma::Main
             * line : 237368
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:Firmware',
            'desc' => [
                'en' => 'Firmware',
            ],
        ],
        2 => [
            /**
             * table_name : Sigma::Main
             * line : 237422
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:Firmware',
            'desc' => [
                'en' => 'Firmware',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
