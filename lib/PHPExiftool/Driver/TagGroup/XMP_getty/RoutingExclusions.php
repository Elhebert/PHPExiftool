<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_getty;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RoutingExclusions extends AbstractTagGroup
{
    protected string $id = 'XMP-getty:RoutingExclusions';

    protected string $name = 'RoutingExclusions';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Routing Exclusions',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GettyImages
             * line : 281383
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::GettyImages.XMP-getty:RoutingExclusions',
            'desc' => [
                'en' => 'Routing Exclusions',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
