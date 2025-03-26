<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SceneModeUsed extends AbstractTagGroup
{
    protected string $id = 'Kodak:SceneModeUsed';

    protected string $name = 'SceneModeUsed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Scene Mode Used',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::SubIFD2
             * line : 109161
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD2.Kodak:SceneModeUsed',
            'desc' => [
                'en' => 'Scene Mode Used',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::SubIFD2
             * line : 109235
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD2.Kodak:SceneModeUsed',
            'desc' => [
                'en' => 'Scene Mode Used',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
