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
class XRayTubeCurrentInMilliAmps extends AbstractTagGroup
{
    protected string $id = 'DICOM:XRayTubeCurrentInMilliAmps';

    protected string $name = 'XRayTubeCurrentInMilliAmps';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'X Ray Tube Current In Milli Amps',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70429
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:XRayTubeCurrentInMilliAmps',
            'desc' => [
                'en' => 'X Ray Tube Current In Milli Amps',
            ],
        ],
    ];

    protected int $count = 0;
}
