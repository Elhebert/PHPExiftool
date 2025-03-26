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
class FileGUID extends AbstractTagGroup
{
    protected string $id = 'File:FileGUID';

    protected string $name = 'FileGUID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ZISRAW::Main
             * line : 415055
             * type : undef
             * writable : false
             * count : 16
             * flags :
             */
            'id' => 'ZISRAW::Main.File:FileGUID',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 16;
}
