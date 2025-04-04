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
class RequestedMediaApplicationProfile extends AbstractTagGroup
{
    protected string $id = 'DICOM:RequestedMediaApplicationProfile';

    protected string $name = 'RequestedMediaApplicationProfile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Requested Media Application Profile',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75456
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:RequestedMediaApplicationProfile',
            'desc' => [
                'en' => 'Requested Media Application Profile',
            ],
        ],
    ];

    protected int $count = 0;
}
