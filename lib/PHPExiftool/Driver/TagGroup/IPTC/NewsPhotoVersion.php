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
class NewsPhotoVersion extends AbstractTagGroup
{
    protected string $id = 'IPTC:NewsPhotoVersion';

    protected string $name = 'NewsPhotoVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'News Photo Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::NewsPhoto
             * line : 104386
             * type : int16u
             * writable : true
             * count :
             * flags : mandatory
             */
            'id' => 'IPTC::NewsPhoto.IPTC:NewsPhotoVersion',
            'desc' => [
                'en' => 'News Photo Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2176;
}
