<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawDevelopmentProcess extends AbstractTagGroup
{
    protected string $id = 'Pentax:RawDevelopmentProcess';

    protected string $name = 'RawDevelopmentProcess';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Development Process',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 208989
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:RawDevelopmentProcess',
            'desc' => [
                'en' => 'Raw Development Process',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
