<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageHeight extends AbstractTagGroup
{
    protected string $id = 'MPEG:ImageHeight';

    protected string $name = 'ImageHeight';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MPEG::Video
             * line : 112895
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MPEG::Video.MPEG:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
    ];

    protected int $count = 0;
}
