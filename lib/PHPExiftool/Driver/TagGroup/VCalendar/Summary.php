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
class Summary extends AbstractTagGroup
{
    protected string $id = 'VCalendar:Summary';

    protected string $name = 'Summary';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Summary',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : VCard::VCalendar
             * line : 280062
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'VCard::VCalendar.VCalendar:Summary',
            'desc' => [
                'en' => 'Summary',
            ],
        ],
    ];

    protected int $count = 0;
}
