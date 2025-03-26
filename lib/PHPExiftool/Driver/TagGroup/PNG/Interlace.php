<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Interlace extends AbstractTagGroup
{
    protected string $id = 'PNG:Interlace';

    protected string $name = 'Interlace';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PNG::ImageHeader
             * line : 272501
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PNG::ImageHeader.PNG:Interlace',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
