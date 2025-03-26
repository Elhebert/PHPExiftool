<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DRM_DRMHeader_LicenseAcqURL extends AbstractTagGroup
{
    protected string $id = 'ASF:DRM_DRMHeader_LicenseAcqURL';

    protected string $name = 'DRM_DRMHeader_LicenseAcqURL';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'DRM DRM Header License Acq URL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::ExtendedDescr
             * line : 505
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::ExtendedDescr.ASF:DRM_DRMHeader_LicenseAcqURL',
            'desc' => [
                'en' => 'DRM DRM Header License Acq URL',
            ],
        ],
    ];

    protected int $count = 0;
}
