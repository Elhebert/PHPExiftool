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
class Name extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:Name';

    protected string $name = 'Name';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286535
             * type : lang-alt
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crs.XMP-crs:Name',
            'desc' => [
                'en' => 'Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
