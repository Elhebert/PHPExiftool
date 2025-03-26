<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Stim;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CropYOffset extends AbstractTagGroup
{
    protected string $id = 'Stim:CropYOffset';

    protected string $name = 'CropYOffset';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Stim::CropY
             * line : 394557
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Stim::CropY.Stim:CropYOffset',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
