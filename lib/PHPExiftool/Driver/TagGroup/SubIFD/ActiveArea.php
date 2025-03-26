<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ActiveArea extends AbstractTagGroup
{
    protected string $id = 'SubIFD:ActiveArea';

    protected string $name = 'ActiveArea';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Active Area',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84384
             * type : int32u
             * writable : true
             * count : 4
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD:ActiveArea',
            'desc' => [
                'en' => 'Active Area',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2064;
}
