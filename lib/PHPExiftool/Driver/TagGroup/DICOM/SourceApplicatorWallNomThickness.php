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
class SourceApplicatorWallNomThickness extends AbstractTagGroup
{
    protected string $id = 'DICOM:SourceApplicatorWallNomThickness';

    protected string $name = 'SourceApplicatorWallNomThickness';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Source Applicator Wall Nom Thickness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76758
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SourceApplicatorWallNomThickness',
            'desc' => [
                'en' => 'Source Applicator Wall Nom Thickness',
            ],
        ],
    ];

    protected int $count = 0;
}
