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
class IPTCImageRotation extends AbstractTagGroup
{
    protected string $id = 'IPTC:IPTCImageRotation';

    protected string $name = 'IPTCImageRotation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'IPTC Image Rotation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::NewsPhoto
             * line : 104561
             * type : int8u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'IPTC::NewsPhoto.IPTC:IPTCImageRotation',
            'desc' => [
                'en' => 'IPTC Image Rotation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
