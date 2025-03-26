<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LicenseeProjectReference extends AbstractTagGroup
{
    protected string $id = 'XMP-plus:LicenseeProjectReference';

    protected string $name = 'LicenseeProjectReference';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Licensee Project Reference',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PLUS::XMP
             * line : 183631
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'PLUS::XMP.XMP-plus:LicenseeProjectReference',
            'desc' => [
                'en' => 'Licensee Project Reference',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
