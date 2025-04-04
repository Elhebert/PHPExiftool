<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageOrientation extends AbstractTagGroup
{
    protected string $id = 'IPTC:ImageOrientation';

    protected string $name = 'ImageOrientation';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 103990
             * type : string
             * writable : true
             * count : 1
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:ImageOrientation',
            'desc' => [
                'en' => 'Image Orientation',
            ],
        ],
    ];

    protected int $count = 1;

    protected int $flags = 2048;
}
