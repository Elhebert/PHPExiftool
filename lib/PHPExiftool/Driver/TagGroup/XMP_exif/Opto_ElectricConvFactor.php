<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Opto_ElectricConvFactor extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:Opto-ElectricConvFactor';

    protected string $name = 'Opto-ElectricConvFactor';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 407648
             * type : struct
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::exif.XMP-exif:Opto-ElectricConvFactor',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
