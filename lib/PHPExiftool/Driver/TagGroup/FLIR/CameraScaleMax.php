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
class CameraScaleMax extends AbstractTagGroup
{
    protected string $id = 'FLIR:CameraScaleMax';

    protected string $name = 'CameraScaleMax';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Camera Scale Max',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::FPF
             * line : 85877
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:CameraScaleMax',
            'desc' => [
                'en' => 'Camera Scale Max',
            ],
        ],
    ];

    protected int $count = 0;
}
