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
class DRM_DRMHeader_ContentDistributor extends AbstractTagGroup
{
    protected string $id = 'ASF:DRM_DRMHeader_ContentDistributor';

    protected string $name = 'DRM_DRMHeader_ContentDistributor';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'DRM DRM Header Content Distributor',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::ExtendedDescr
             * line : 493
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::ExtendedDescr.ASF:DRM_DRMHeader_ContentDistributor',
            'desc' => [
                'en' => 'DRM DRM Header Content Distributor',
            ],
        ],
    ];

    protected int $count = 0;
}
