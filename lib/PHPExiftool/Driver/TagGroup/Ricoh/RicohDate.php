<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RicohDate extends AbstractTagGroup
{
    protected string $id = 'Ricoh:RicohDate';

    protected string $name = 'RicohDate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Ricoh Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::ImageInfo
             * line : 233205
             * type : int8u
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Ricoh::ImageInfo.Ricoh:RicohDate',
            'desc' => [
                'en' => 'Ricoh Date',
            ],
        ],
    ];

    protected int $count = 7;

    protected int $flags = 2052;
}
