<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AdvancedSceneType extends AbstractTagGroup
{
    protected string $id = 'Panasonic:AdvancedSceneType';

    protected string $name = 'AdvancedSceneType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Advanced Scene Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Main
             * line : 192713
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:AdvancedSceneType',
            'desc' => [
                'en' => 'Advanced Scene Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
