<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VendorID extends AbstractTagGroup
{
    protected string $id = 'QuickTime:VendorID';

    protected string $name = 'VendorID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Vendor ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ImageDesc
             * line : 219578
             * type : string
             * writable : false
             * count : 4
             * flags :
             */
            'id' => 'QuickTime::ImageDesc.QuickTime:VendorID',
            'desc' => [
                'en' => 'Vendor ID',
            ],
        ],
    ];

    protected int $count = 4;
}
