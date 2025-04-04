<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BannerImage extends AbstractTagGroup
{
    protected string $id = 'ASF:BannerImage';

    protected string $name = 'BannerImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Banner Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::ContentBranding
             * line : 356
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'ASF::ContentBranding.ASF:BannerImage',
            'desc' => [
                'en' => 'Banner Image',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
