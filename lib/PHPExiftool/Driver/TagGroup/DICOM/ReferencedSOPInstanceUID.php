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
class ReferencedSOPInstanceUID extends AbstractTagGroup
{
    protected string $id = 'DICOM:ReferencedSOPInstanceUID';

    protected string $name = 'ReferencedSOPInstanceUID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Referenced SOP Instance UID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 68428
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ReferencedSOPInstanceUID',
            'desc' => [
                'en' => 'Referenced SOP Instance UID',
            ],
        ],
    ];

    protected int $count = 0;
}
