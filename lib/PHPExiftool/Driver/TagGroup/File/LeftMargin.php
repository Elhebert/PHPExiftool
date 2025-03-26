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
class LeftMargin extends AbstractTagGroup
{
    protected string $id = 'File:LeftMargin';

    protected string $name = 'LeftMargin';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PCX::Main
             * line : 263896
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PCX::Main.File:LeftMargin',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
