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
class SpecifiedChannelTotalTime extends AbstractTagGroup
{
    protected string $id = 'DICOM:SpecifiedChannelTotalTime';

    protected string $name = 'SpecifiedChannelTotalTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Specified Channel Total Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75960
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SpecifiedChannelTotalTime',
            'desc' => [
                'en' => 'Specified Channel Total Time',
            ],
        ],
    ];

    protected int $count = 0;
}
