<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VRInfoVersion extends AbstractTagGroup
{
    protected string $id = 'Nikon:VRInfoVersion';

    protected string $name = 'VRInfoVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'VR Info Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::VRInfo
             * line : 141316
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::VRInfo.Nikon:VRInfoVersion',
            'desc' => [
                'en' => 'VR Info Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
