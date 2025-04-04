<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class YCbCrSubSampling extends AbstractTagGroup
{
    protected string $id = 'File:YCbCrSubSampling';

    protected string $name = 'YCbCrSubSampling';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Y Cb Cr Sub Sampling',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::SOF
             * line : 105240
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::SOF.File:YCbCrSubSampling',
            'desc' => [
                'en' => 'Y Cb Cr Sub Sampling',
            ],
        ],
    ];

    protected int $count = 0;
}
