<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrintFlagsInfo extends AbstractTagGroup
{
    protected string $id = 'Photoshop:PrintFlagsInfo';

    protected string $name = 'PrintFlagsInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Print Flags Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Main
             * line : 212424
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Photoshop::Main.Photoshop:PrintFlagsInfo',
            'desc' => [
                'en' => 'Print Flags Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
