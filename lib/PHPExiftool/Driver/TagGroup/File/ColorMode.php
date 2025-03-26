<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMode extends AbstractTagGroup
{
    protected string $id = 'File:ColorMode';

    protected string $name = 'ColorMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PCX::Main
             * line : 263983
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PCX::Main.File:ColorMode',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : PGF::Main
             * line : 264540
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PGF::Main.File:ColorMode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
