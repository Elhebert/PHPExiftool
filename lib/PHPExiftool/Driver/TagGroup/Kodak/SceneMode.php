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
class SceneMode extends AbstractTagGroup
{
    protected string $id = 'Kodak:SceneMode';

    protected string $name = 'SceneMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Scene Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109025
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:SceneMode',
            'desc' => [
                'en' => 'Scene Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
