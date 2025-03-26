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
class ColorComponents extends AbstractTagGroup
{
    protected string $id = 'File:ColorComponents';

    protected string $name = 'ColorComponents';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Color Components',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::SOF
             * line : 105187
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::SOF.File:ColorComponents',
            'desc' => [
                'en' => 'Color Components',
            ],
        ],
        1 => [
            /**
             * table_name : PGF::Main
             * line : 182825
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PGF::Main.File:ColorComponents',
            'desc' => [
                'en' => 'Color Components',
            ],
        ],
    ];

    protected int $count = 0;
}
