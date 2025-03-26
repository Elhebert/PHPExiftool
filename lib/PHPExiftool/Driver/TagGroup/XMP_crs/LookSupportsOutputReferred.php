<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LookSupportsOutputReferred extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:LookSupportsOutputReferred';

    protected string $name = 'LookSupportsOutputReferred';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Look Supports Output Referred',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286056
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:LookSupportsOutputReferred',
            'desc' => [
                'en' => 'Look Supports Output Referred',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
