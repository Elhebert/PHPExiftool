<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PatternCropCols1 extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:PatternCropCols1';

    protected string $name = 'PatternCropCols1';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Pattern Crop Cols 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106748
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:PatternCropCols1',
            'desc' => [
                'en' => 'Pattern Crop Cols 1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
