<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileNumber extends AbstractTagGroup
{
    protected string $id = 'Olympus:FileNumber';

    protected string $name = 'FileNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'File Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::WAV
             * line : 181249
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::WAV.Olympus:FileNumber',
            'desc' => [
                'en' => 'File Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
