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
class ZTrackingMaximumError extends AbstractTagGroup
{
    protected string $id = 'DICOM:ZTrackingMaximumError';

    protected string $name = 'ZTrackingMaximumError';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Z Tracking Maximum Error',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73764
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ZTrackingMaximumError',
            'desc' => [
                'en' => 'Z Tracking Maximum Error',
            ],
        ],
    ];

    protected int $count = 0;
}
