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
class AtmosphericTransBeta1 extends AbstractTagGroup
{
    protected string $id = 'FLIR:AtmosphericTransBeta1';

    protected string $name = 'AtmosphericTransBeta1';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Atmospheric Trans Beta 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::CameraInfo
             * line : 85611
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::CameraInfo.FLIR:AtmosphericTransBeta1',
            'desc' => [
                'en' => 'Atmospheric Trans Beta 1',
            ],
        ],
    ];

    protected int $count = 0;
}
