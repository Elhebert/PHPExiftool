<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Lytro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTimeOriginal extends AbstractTagGroup
{
    protected string $id = 'Lytro:DateTimeOriginal';

    protected string $name = 'DateTimeOriginal';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Date/Time Original',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Lytro::Main
             * line : 110842
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Lytro::Main.Lytro:DateTimeOriginal',
            'desc' => [
                'en' => 'Date/Time Original',
            ],
        ],
    ];

    protected int $count = 0;
}
