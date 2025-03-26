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
class Calibration extends AbstractTagGroup
{
    protected string $id = 'Sigma:Calibration';

    protected string $name = 'Calibration';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Calibration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 236147
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:Calibration',
            'desc' => [
                'en' => 'Calibration',
            ],
        ],
        1 => [
            /**
             * table_name : Sigma::Main
             * line : 237344
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:Calibration',
            'desc' => [
                'en' => 'Calibration',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
