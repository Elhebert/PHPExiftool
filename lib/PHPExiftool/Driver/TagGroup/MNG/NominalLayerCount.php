<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NominalLayerCount extends AbstractTagGroup
{
    protected string $id = 'MNG:NominalLayerCount';

    protected string $name = 'NominalLayerCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Nominal Layer Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::MNGHeader
             * line : 112199
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::MNGHeader.MNG:NominalLayerCount',
            'desc' => [
                'en' => 'Nominal Layer Count',
            ],
        ],
    ];

    protected int $count = 0;
}
