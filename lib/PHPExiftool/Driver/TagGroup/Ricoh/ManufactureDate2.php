<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ManufactureDate2 extends AbstractTagGroup
{
    protected string $id = 'Ricoh:ManufactureDate2';

    protected string $name = 'ManufactureDate2';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::Subdir
             * line : 333738
             * type : string
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Ricoh::Subdir.Ricoh:ManufactureDate2',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 20;

    protected int $flags = 2052;
}
