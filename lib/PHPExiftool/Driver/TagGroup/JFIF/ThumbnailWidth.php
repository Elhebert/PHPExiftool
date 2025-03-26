<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JFIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailWidth extends AbstractTagGroup
{
    protected string $id = 'JFIF:ThumbnailWidth';

    protected string $name = 'ThumbnailWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JFIF::Main
             * line : 152342
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JFIF::Main.JFIF:ThumbnailWidth',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
