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
class ImageType extends AbstractTagGroup
{
    protected string $id = 'IPTC:ImageType';

    protected string $name = 'ImageType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 150461
             * type : string
             * writable : true
             * count : 2
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:ImageType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2048;
}
