<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\VCalendar;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateCreated extends AbstractTagGroup
{
    protected string $id = 'VCalendar:DateCreated';

    protected string $name = 'DateCreated';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Date Created',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : VCard::VCalendar
             * line : 279984
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'VCard::VCalendar.VCalendar:DateCreated',
            'desc' => [
                'en' => 'Date Created',
            ],
        ],
    ];

    protected int $count = 0;
}
