<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReferencePixelPhysicalValueY extends AbstractTagGroup
{
    protected string $id = 'DICOM:ReferencePixelPhysicalValueY';

    protected string $name = 'ReferencePixelPhysicalValueY';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Reference Pixel Physical Value Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69697
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ReferencePixelPhysicalValueY',
            'desc' => [
                'en' => 'Reference Pixel Physical Value Y',
            ],
        ],
    ];

    protected int $count = 0;
}
