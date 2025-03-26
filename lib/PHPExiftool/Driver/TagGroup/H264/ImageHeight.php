<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageHeight extends AbstractTagGroup
{
    protected string $id = 'H264:ImageHeight';

    protected string $name = 'ImageHeight';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : H264::Main
             * line : 98328
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::Main.H264:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
    ];

    protected int $count = 0;
}
