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
class DigitalFilter15 extends AbstractTagGroup
{
    protected string $id = 'Pentax:DigitalFilter15';

    protected string $name = 'DigitalFilter15';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital Filter 15',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::FilterInfo
             * line : 199348
             * type : undef
             * writable : true
             * count : 17
             * flags : permanent
             */
            'id' => 'Pentax::FilterInfo.Pentax:DigitalFilter15',
            'desc' => [
                'en' => 'Digital Filter 15',
            ],
        ],
    ];

    protected int $count = 17;

    protected int $flags = 2052;
}
