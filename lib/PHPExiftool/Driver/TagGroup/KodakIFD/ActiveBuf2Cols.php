<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ActiveBuf2Cols extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ActiveBuf2Cols';

    protected string $name = 'ActiveBuf2Cols';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Active Buf 2 Cols',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108383
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ActiveBuf2Cols',
            'desc' => [
                'en' => 'Active Buf 2 Cols',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
