<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EpsonSoftware extends AbstractTagGroup
{
    protected string $id = 'Olympus:EpsonSoftware';

    protected string $name = 'EpsonSoftware';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Epson Software',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 178337
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:EpsonSoftware',
            'desc' => [
                'en' => 'Epson Software',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
