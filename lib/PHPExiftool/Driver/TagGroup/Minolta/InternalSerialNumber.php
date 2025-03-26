<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InternalSerialNumber extends AbstractTagGroup
{
    protected string $id = 'Minolta:InternalSerialNumber';

    protected string $name = 'InternalSerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Internal Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 126868
             * type : string
             * writable : true
             * count : 12
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:InternalSerialNumber',
            'desc' => [
                'en' => 'Internal Serial Number',
            ],
        ],
    ];

    protected int $count = 12;

    protected int $flags = 2052;
}
