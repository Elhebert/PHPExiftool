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
class OriginalSpecializedSOPClassUID extends AbstractTagGroup
{
    protected string $id = 'DICOM:OriginalSpecializedSOPClassUID';

    protected string $name = 'OriginalSpecializedSOPClassUID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Original Specialized SOP Class UID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 68182
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:OriginalSpecializedSOPClassUID',
            'desc' => [
                'en' => 'Original Specialized SOP Class UID',
            ],
        ],
    ];

    protected int $count = 0;
}
