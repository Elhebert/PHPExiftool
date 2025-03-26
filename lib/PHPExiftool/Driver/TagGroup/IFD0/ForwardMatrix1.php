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
class ForwardMatrix1 extends AbstractTagGroup
{
    protected string $id = 'IFD0:ForwardMatrix1';

    protected string $name = 'ForwardMatrix1';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Forward Matrix 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84461
             * type : rational64s
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:ForwardMatrix1',
            'desc' => [
                'en' => 'Forward Matrix 1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
