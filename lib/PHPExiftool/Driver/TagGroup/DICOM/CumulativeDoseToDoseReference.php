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
class CumulativeDoseToDoseReference extends AbstractTagGroup
{
    protected string $id = 'DICOM:CumulativeDoseToDoseReference';

    protected string $name = 'CumulativeDoseToDoseReference';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Cumulative Dose To Dose Reference',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75843
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:CumulativeDoseToDoseReference',
            'desc' => [
                'en' => 'Cumulative Dose To Dose Reference',
            ],
        ],
    ];

    protected int $count = 0;
}
