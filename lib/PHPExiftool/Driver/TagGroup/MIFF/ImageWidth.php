<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{
    protected string $id = 'MIFF:ImageWidth';

    protected string $name = 'ImageWidth';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIFF::Main
             * line : 111709
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MIFF::Main.MIFF:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
    ];

    protected int $count = 0;
}
