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
class TransducerOrientationModifierSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:TransducerOrientationModifierSeq';

    protected string $name = 'TransducerOrientationModifierSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Transducer Orientation Modifier Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 68554
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TransducerOrientationModifierSeq',
            'desc' => [
                'en' => 'Transducer Orientation Modifier Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
