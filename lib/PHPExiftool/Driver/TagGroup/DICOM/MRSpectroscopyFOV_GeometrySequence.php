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
class MRSpectroscopyFOV_GeometrySequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:MRSpectroscopyFOV-GeometrySequence';

    protected string $name = 'MRSpectroscopyFOV-GeometrySequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 96757
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:MRSpectroscopyFOV-GeometrySequence',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
