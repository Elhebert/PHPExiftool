<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DataDump extends AbstractTagGroup
{
    protected string $id = 'Sanyo:DataDump';

    protected string $name = 'DataDump';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::Main
             * line : 336886
             * type : ?
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'Sanyo::Main.Sanyo:DataDump',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2054;
}
