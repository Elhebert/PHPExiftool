<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PanoramicStitchVersion extends AbstractTagGroup
{
    protected string $id = 'Microsoft:PanoramicStitchVersion';

    protected string $name = 'PanoramicStitchVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Panoramic Stitch Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Stitch
             * line : 120011
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Microsoft::Stitch.Microsoft:PanoramicStitchVersion',
            'desc' => [
                'en' => 'Panoramic Stitch Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
