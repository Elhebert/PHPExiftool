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
class Teleconverter extends AbstractTagGroup
{
    protected string $id = 'Minolta:Teleconverter';

    protected string $name = 'Teleconverter';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Teleconverter',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::Main
             * line : 124593
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:Teleconverter',
            'desc' => [
                'en' => 'Teleconverter',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
