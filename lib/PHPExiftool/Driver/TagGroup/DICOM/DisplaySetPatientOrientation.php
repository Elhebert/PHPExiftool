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
class DisplaySetPatientOrientation extends AbstractTagGroup
{
    protected string $id = 'DICOM:DisplaySetPatientOrientation';

    protected string $name = 'DisplaySetPatientOrientation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Display Set Patient Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 74835
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DisplaySetPatientOrientation',
            'desc' => [
                'en' => 'Display Set Patient Orientation',
            ],
        ],
    ];

    protected int $count = 0;
}
