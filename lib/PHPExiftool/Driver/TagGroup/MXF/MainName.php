<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MainName extends AbstractTagGroup
{
    protected string $id = 'MXF:MainName';

    protected string $name = 'MainName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Main Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114189
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:MainName',
            'desc' => [
                'en' => 'Main Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116394
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:MainName',
            'desc' => [
                'en' => 'Main Name',
            ],
        ],
    ];

    protected int $count = 0;
}
