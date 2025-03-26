<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XPComment extends AbstractTagGroup
{
    protected string $id = 'IFD0:XPComment';

    protected string $name = 'XPComment';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'XP Comment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83343
             * type : int8u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.IFD0:XPComment',
            'desc' => [
                'en' => 'XP Comment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
