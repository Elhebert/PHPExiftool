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
class SourceIsotopeHalfLife extends AbstractTagGroup
{
    protected string $id = 'DICOM:SourceIsotopeHalfLife';

    protected string $name = 'SourceIsotopeHalfLife';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Source Isotope Half Life',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76653
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SourceIsotopeHalfLife',
            'desc' => [
                'en' => 'Source Isotope Half Life',
            ],
        ],
    ];

    protected int $count = 0;
}
