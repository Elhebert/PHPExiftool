<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareRevision extends AbstractTagGroup
{
    protected string $id = 'Canon:FirmwareRevision';

    protected string $name = 'FirmwareRevision';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Firmware Revision',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26456
             * type : string
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:FirmwareRevision',
            'desc' => [
                'en' => 'Firmware Revision',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::Main
             * line : 50003
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:FirmwareRevision',
            'desc' => [
                'en' => 'Firmware Revision',
            ],
        ],
    ];

    protected int $count = 8;

    protected int $flags = 2052;
}
