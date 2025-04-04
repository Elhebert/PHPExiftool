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
class YResolution extends AbstractTagGroup
{
    protected string $id = 'JFIF:YResolution';

    protected string $name = 'YResolution';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Y Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JFIF::Main
             * line : 104831
             * type : int16u
             * writable : true
             * count :
             * flags : mandatory
             */
            'id' => 'JFIF::Main.JFIF:YResolution',
            'desc' => [
                'en' => 'Y Resolution',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2176;
}
