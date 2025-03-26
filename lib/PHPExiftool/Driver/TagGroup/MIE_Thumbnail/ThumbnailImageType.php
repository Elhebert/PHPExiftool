<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Thumbnail;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImageType extends AbstractTagGroup
{
    protected string $id = 'MIE-Thumbnail:ThumbnailImageType';

    protected string $name = 'ThumbnailImageType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Thumbnail Image Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Thumbnail
             * line : 111640
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::Thumbnail.MIE-Thumbnail:ThumbnailImageType',
            'desc' => [
                'en' => 'Thumbnail Image Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
