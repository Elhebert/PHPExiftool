<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMoireReductionOn extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:ColorMoireReductionOn';

    protected string $name = 'ColorMoireReductionOn';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Moire Reduction On',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::DR4
             * line : 58979
             * type : ?
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::DR4.CanonVRD:ColorMoireReductionOn',
            'desc' => [
                'en' => 'Color Moire Reduction On',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
