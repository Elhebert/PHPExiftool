<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileNumber extends AbstractTagGroup
{
    protected string $id = 'Canon:FileNumber';

    protected string $name = 'FileNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'File Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FileInfo
             * line : 48210
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FileInfo.Canon:FileNumber',
            'desc' => [
                'en' => 'File Number',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::FileInfo
             * line : 48213
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FileInfo.Canon:FileNumber',
            'desc' => [
                'en' => 'File Number',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::Main
             * line : 48906
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:FileNumber',
            'desc' => [
                'en' => 'File Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
