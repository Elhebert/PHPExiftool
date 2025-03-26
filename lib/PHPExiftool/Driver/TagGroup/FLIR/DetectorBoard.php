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
class DetectorBoard extends AbstractTagGroup
{
    protected string $id = 'FLIR:DetectorBoard';

    protected string $name = 'DetectorBoard';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Detector Board',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::Parts
             * line : 86418
             * type : undef
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Parts.FLIR:DetectorBoard',
            'desc' => [
                'en' => 'Detector Board',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
