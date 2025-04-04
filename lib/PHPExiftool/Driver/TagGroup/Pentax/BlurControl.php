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
class BlurControl extends AbstractTagGroup
{
    protected string $id = 'Pentax:BlurControl';

    protected string $name = 'BlurControl';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Blur Control',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 209491
             * type : int8u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:BlurControl',
            'desc' => [
                'en' => 'Blur Control',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
