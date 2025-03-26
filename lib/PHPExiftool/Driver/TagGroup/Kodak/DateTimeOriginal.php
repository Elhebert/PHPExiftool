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
class DateTimeOriginal extends AbstractTagGroup
{
    protected string $id = 'Kodak:DateTimeOriginal';

    protected string $name = 'DateTimeOriginal';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Date/Time Original',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Type9
             * line : 109769
             * type : string
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Kodak::Type9.Kodak:DateTimeOriginal',
            'desc' => [
                'en' => 'Date/Time Original',
            ],
        ],
    ];

    protected int $count = 20;

    protected int $flags = 2052;
}
