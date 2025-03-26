<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ElectronicVR extends AbstractTagGroup
{
    protected string $id = 'Nikon:ElectronicVR';

    protected string $name = 'ElectronicVR';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::NCTG
             * line : 202262
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:ElectronicVR',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
