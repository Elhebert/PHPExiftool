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
class ActualScaleMax extends AbstractTagGroup
{
    protected string $id = 'FLIR:ActualScaleMax';

    protected string $name = 'ActualScaleMax';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Actual Scale Max',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::FPF
             * line : 85889
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:ActualScaleMax',
            'desc' => [
                'en' => 'Actual Scale Max',
            ],
        ],
    ];

    protected int $count = 0;
}
